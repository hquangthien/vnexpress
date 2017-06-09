<?php

namespace App\Http\Controllers\VnExpress;

use App\Model\Cat;
use App\Model\News;
use App\Model\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    private $newsModel;
    private $catModel;
    private $arSuperCat;

    public function __construct(News $newsModel, Cat $catModel)
    {
        $this->newsModel = $newsModel;
        $this->catModel = $catModel;
        $this->arSuperCat = $this->catModel->getSuperCat();
    }

    public function category($slug, $id)
    {
        try{
            $objCheckCat = $this->catModel->find($id);
            if ($slug != str_slug($objCheckCat->name)){
                return redirect()->route('vnexpress.page.category', ['slug' => str_slug($objCheckCat->name), 'id' => $id]);
            }
        } catch (\Exception $e){
            return redirect()->route('vnexpress.page.error', ['status' => '505']);
        }

        foreach ($this->arSuperCat as $catItem){
            if($catItem->id == $id){
                $objNews = $this->newsModel->paginateNewsOfSuperCat($id, getenv('ROW_COUNT'));
                return view('vnexpress.news.category', ['superCat' => $catItem, 'objNews' => $objNews]);
            }
        }
        $subCat = $this->catModel->find($id);
        $superCat = $this->catModel->find($subCat->parrent_cat);
        $objNews = $this->newsModel->getNewsOfCat($id, getenv('ROW_COUNT'));
        return view('vnexpress.news.category', ['superCat' => $superCat, 'subCat' => $subCat, 'objNews' => $objNews]);
    }

    public function detail($slug, $id)
    {
        try{
            $objCheckNews = $this->newsModel->find($id);
            if ($slug != str_slug($objCheckNews->title)){
                return redirect()->route('vnexpress.page.detail', ['slug' => str_slug($objCheckNews->title), 'id' => $id]);
            }
        } catch (\Exception $e){
            return redirect()->route('vnexpress.page.error', ['status' => '505']);
        }
        //get news detail
        $objNews = $this->newsModel->getNewsById($id)[0];
        //dd($objNews);

        //get tags of news
        $objTags = $this->newsModel->getTagsOfNews($id);

        //get related news
        $objRelateNews = $this->newsModel->getRelateNews($id, $objNews->cat_id);

        //get subCat and superCat
        $objSuperCatItem = $this->catModel->getSuperCat($objNews->cat_id);
        $objSubCatItem = [];
        if (sizeof($objSuperCatItem) == 0)
        {
            $objSubCatItem = $this->catModel->find($objNews->cat_id);
            $objSuperCatItem = $this->catModel->find($objSubCatItem->parrent_cat);
        } else{
            $objSuperCatItem = $objSuperCatItem[0];
        }

        //get comments of news
        $objComments = $this->newsModel->getCommentsOfNews($id);

        return view('vnexpress.news.detail', [
            'objNews' => $objNews,
            'objTags' => $objTags,
            'objRelateNews' => $objRelateNews,
            'objSubCatItem' => $objSubCatItem,
            'objSuperCatItem' => $objSuperCatItem,
            'objComments' => $objComments,
            ]
        );
    }

    public function search(Request $request)
    {
        $objNews = $this->newsModel->searchByTitle($request->key);
        return view('vnexpress.news.search', ['objNews' => $objNews, 'key' => $request->key]);
    }

    public function tags($slug, $id)
    {
        $objTags = Tag::find($id);
        $objNews = $this->newsModel->getNewsOfTag($id);
        return view('vnexpress.news.tags', ['objNews' => $objNews, 'objTags' => $objTags]);
    }
}
