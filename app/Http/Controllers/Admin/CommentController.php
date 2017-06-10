<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentRequest;
use App\Model\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    private $commentModel;

    public function __construct(Comment $commentModel)
    {
        $this->commentModel = $commentModel;
    }

    public function index()
    {
        $objComment = $this->commentModel->getCommentToShow();
        /*dd($objComment);*/
        return view('admin.comment.index', ['objComment' => $objComment]);
    }

    public function store(CommentRequest $request)
    {
        if ($this->commentModel->create($request->toArray()))
        {
            return redirect()->back();
        } else{
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        if ($this->commentModel->destroy($id))
        {
            return redirect()->route('comment.index')->with('msg', 'Xóa bình luận thành công');
        } else{
            return redirect()->route('comment.index')->with('msg', 'Có lỗi khi xóa bình luận');
        }
    }

    public function updateActive($id)
    {
        $objCmt = $this->commentModel->find($id);
        if ($objCmt->active_cmt == 0){
            $objCmt->active_cmt = 1;
            $active = 1;
        } else{
            $objCmt->active_cmt = 0;
            $active = 0;
        }
        $objCmt->save();
        return response()->json([
            'message'=>'Update thành công !',
            'active' => $active
        ]);
    }
}
