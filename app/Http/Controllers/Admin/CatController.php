<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CatRequest;
use App\Model\Cat;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    private $catModel;

    public function __construct(Cat $catModel)
    {
        $this->catModel = $catModel;
    }

    public function index()
    {
        return view('admin.cat.index');
    }


    public function create()
    {
        return view('admin.cat.create');
    }

    public function store(CatRequest $request)
    {
        $this->catModel->parrent_cat = $request->parrent_cat;
        $this->catModel->name = $request->name;
        if ($this->catModel->save()){
            return redirect()->route('cat.index')->with('msg', 'Thêm danh mục tin thành công');
        } else{
            return redirect()->route('cat.index')->with('msg', 'Thêm danh mục tin thất bại');
        }
    }

    public function edit($id)
    {
        $objCat = $this->catModel->find($id);
        return view('admin.cat.edit', ['objCat' => $objCat]);
    }

    public function update(CatRequest $request, $id)
    {
        $objCat = $this->catModel->find($id);
        $objCat->name = $request->name;
        if ($request->parrent_cat != null){
            if ($objCat->parrent_cat == null){
                return redirect()->route('cat.edit', ['id' => $id])->with('msg', 'Bạn không thể đặt danh mục cha vào trong một danh mục khác');
            } else{
                $objCat->parrent_cat = $request->parrent_cat;
            }
        }
        if ($objCat->save()){
            return redirect()->route('cat.index')->with('msg', 'Cập nhật danh mục tin thành công');
        } else{
            return redirect()->route('cat.index')->with('msg', 'Cập nhật danh mục tin thất bại');
        }
    }

    public function destroy($id)
    {
        $objCat = $this->catModel->find($id);
        if ($objCat->parrent_cat == null)
        {
            try{
                $this->catModel->deleteSubCat($id);
                $this->catModel->destroy($id);
                return redirect()->route('cat.index')->with('msg', 'Xóa danh mục tin thành công');
            } catch (\Exception $exception)
            {
                return redirect()->route('cat.index')->with('msg', 'Có lỗi khi xóa danh mục tin');
            }

        } else{
            if ($this->catModel->destroy($id)){
                return redirect()->route('cat.index')->with('msg', 'Xóa danh mục tin thành công');
            } else{
                return redirect()->route('cat.index')->with('msg', 'Xóa danh mục tin thất bại');
            }
        }
    }
}
