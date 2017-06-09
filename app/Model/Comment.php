<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['news_id', 'comment_id', 'content', 'active_cmt', 'name_cmt', 'user_id'];

    public function getCommentToShow()
    {
        return DB::table('comments')
            ->join('news', 'news.id', '=', 'comments.news_id')
            ->orderBy('created_at', 'DESC')
            ->orderBy('comments.id', 'DESC')
            ->selectRaw('comments.*, news.title')
            ->paginate(10);
    }
}
