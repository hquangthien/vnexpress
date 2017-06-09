<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsEditRequest;
use App\Http\Requests\NewsRequest;
use App\Model\Cat;
use App\Model\News;
use App\Http\Controllers\Controller;
use App\Model\News_Tag;
use App\Model\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * @var News
     */
    private $newsModel;

    public function __construct(News $newsModel)
    {
        $this->newsModel = $newsModel;
    }

    public function index()
    {
        $objNews = $this->newsModel->getAllNewsToShow();
        return view('admin.news.index', ['objNews' => $objNews]);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsRequest $request)
    {
        try {
            if ($request->cat_id == '') {
                $cat_id = $request->cat_parrent;
            } else {
                $cat_id = $request->cat_id;
            }
            $picture = $request->file('picture')->store('/files');
            $picture = last(explode('/', $picture));
            //Insert News
            $objNews = new $this->newsModel();
            $objNews->title = $request->title;
            $objNews->preview = $request->preview;
            $objNews->detail = $request->detail;
            $objNews->cat_id = $cat_id;
            $objNews->picture = $picture;
            $objNews->created_by = Auth::user()->id;

            $objNews->save();
            $id = $objNews->id;
            // Insert Tags
            $tagsModel = new Tag();
            $newsTagsModel = new News_Tag();

            $dataNewsTags = [];
            if ($request->tags != '') {
                $arTags = explode(',', $request->tags);
                foreach ($arTags as $tagItem) {
                    $objTags = $tagsModel->checkTag(trim($tagItem));
                    if (sizeof($objTags) == 0) {
                        $lastId = $tagsModel->insertGetId(trim($tagItem));
                        $tmp = ['news_id' => $id, 'tag_id' => $lastId];
                        array_push($dataNewsTags, $tmp);
                    } else {
                        $tmp = ['news_id' => $id, 'tag_id' => $objTags[0]->id];
                        array_push($dataNewsTags, $tmp);
                    }
                }
            }
            $newsTagsModel->insertTags($dataNewsTags);
            return redirect()->route('news.index')->with('msg', 'Thêm thành công');
        } catch (\Exception $exception){
            return redirect()->route('news.index')->with('msg', 'Có lỗi xảy ra khi thêm tin');
        }
    }

    public function edit($id)
    {
        $objNews = $this->newsModel->find($id);

        $objTags = $this->newsModel->getTagsOfNews($id);
        return view('admin.news.edit', ['objNews' => $objNews, 'objTags' => $objTags]);
    }

    public function update(NewsEditRequest $request, $id)
    {
        try {
            //Update News
            $objNews = $this->newsModel->find($id);
            if ($request->hasFile('picture'))
            {
                Storage::delete('files/'.$objNews->picture);
                $picture = $request->file('picture')->store('/files');
                $picture = last(explode('/', $picture));
                $objNews->picture = $picture;
            }

            $objNews->cat_id = $request->cat_id;
            $objNews->title = $request->title;
            $objNews->preview = $request->preview;
            $objNews->detail = $request->detail;
            $objNews->updated_by = Auth::user()->id;

            $objNews->save();

            $this->newsModel->deleteAllTagsOfNews($id);

            // Insert Tags
            $tagsModel = new Tag();
            $newsTagsModel = new News_Tag();

            $dataNewsTags = [];
            if ($request->tags != '') {
                $arTags = explode(',', $request->tags);
                foreach ($arTags as $tagItem) {
                    $objTags = $tagsModel->checkTag(trim($tagItem));
                    if (sizeof($objTags) == 0) {
                        $lastId = $tagsModel->insertGetId(trim($tagItem));
                        $tmp = ['news_id' => $id, 'tag_id' => $lastId];
                        array_push($dataNewsTags, $tmp);
                    } else {
                        $tmp = ['news_id' => $id, 'tag_id' => $objTags[0]->id];
                        array_push($dataNewsTags, $tmp);
                    }
                }
            }
            $newsTagsModel->insertTags($dataNewsTags);
            return redirect()->route('news.index')->with('msg', 'Cập nhật thành công');
        } catch (\Exception $exception){
            return redirect()->route('news.index')->with('msg', 'Có lỗi xảy ra khi cập nhật tin tức');
        }
    }

    public function destroy($id)
    {
        $objAdv = $this->newsModel->find($id);
        Storage::delete('files/'.$objAdv->picture);
        if ($objAdv->delete()){
            return redirect()->route('news.index')->with('msg', 'Xóa thành công');
        } else{
            return redirect()->route('news.index')->with('msg', 'Xóa thất bại');
        }
    }

    public function updateActive($id)
    {
        $objNews = $this->newsModel->find($id);
        if ($objNews->pin == 0){
            $objNews->pin = 1;
            $active = 1;
        } else{
            $objNews->pin = 0;
            $active = 0;
        }
        $objNews->save();
        return response()->json([
            'message'=>'Update thành công !',
            'active' => $active
        ]);
    }

    public function getSubCat($id)
    {
        $catModel = new Cat();
        $objSubCat =$catModel->getSubCat($id)->toJson();
        return response()->json($objSubCat);
    }
}
