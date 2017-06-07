<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'preview', 'detail', 'picture', 'views', 'cat_id', 'created_by', 'updated_by', 'pin'];
    public $timestamps = true;

    public function getPinNews()
    {
        return DB::table('news')
            ->where('pin', '=', '1')
            ->orderBy('id', 'DESC')
            ->select('news.*')
            ->take(10)
            ->get();
    }

    public function getRecentNews()
    {
        return DB::table('news')
            ->orderBy('created_at', 'DESC')
            ->select('news.*')
            ->take(3)
            ->get();
    }

    public function getPopularNews()
    {
        return DB::table('news')
            ->orderBy('views', 'DESC')
            ->whereRaw('created_at >= DATE(NOW()) - INTERVAL 3 DAY')
            ->select('news.*')
            ->take(3)
            ->get();
    }

    public function getRecentNewsComment()
    {
        return DB::table('news')
            ->join('comments', 'comments.news_id', '=', 'news.id')
            ->orderBy('comments.created_at', 'DESC')
            ->select('news.id', 'news.title', 'news.preview', 'news.picture')
            ->groupBy('news.id', 'news.title', 'news.preview', 'news.picture')
            ->take(3)
            ->get();
    }

    public function getNewsOfSuperCat($id, $limit)
    {
        return DB::table('news')
            ->whereIn('cat_id', function ($query) use ($id) {
                $query->select('id')->from('categories')
                    ->where('parrent_cat', '=', $id);

            })
            ->orWhere('cat_id', '=', $id)
            ->orderBy('created_at', 'DESC')
            ->take($limit)
            ->get();
    }

    public function paginateNewsOfSuperCat($id, $limit)
    {
        return DB::table('news')
            ->whereIn('cat_id', function ($query) use ($id) {
                $query->select('id')->from('categories')
                    ->where('parrent_cat', '=', $id);

            })
            ->orWhere('cat_id', '=', $id)
            ->orderBy('created_at', 'DESC')
            ->paginate($limit);
    }

    public function getNewsOfCat($id, $limit)
    {
        return DB::table('news')
            ->where('cat_id', '=', $id)
            ->orderBy('created_at', 'DESC')
            ->paginate($limit);
    }

    public function countCommentOfNews($news_id){
        return DB::table('comments')
            ->where('news_id', '=', $news_id)
            ->selectRaw('COUNT(comments.id) as count_cmt')
            ->get();
    }

    public function getNewsById($id)
    {
        return DB::table('news')
            ->join('users', 'users.id', '=', 'news.created_by')
            ->where('news.id', '=', $id)
            ->selectRaw('news.*, users.fullname')
            ->get();
    }

    public function getTagsOfNews($id)
    {
        return DB::table('news_tags')
            ->join('tags', 'tags.id', '=', 'news_tags.tag_id')
            ->where('news_id', '=', $id)
            ->get();
    }

    public function getRelateNews($id, $cat_id)
    {
        return DB::table('news')
            ->where('id', '<>', $id)
            ->where('cat_id', '=', $cat_id)
            ->orderBy('created_at')
            ->take(3)
            ->get();
    }

    public function getCommentsOfNews($id)
    {
        return DB::table('comments')
            ->where('news_id', '=', $id)
            ->where('active_cmt', '=', 1)
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    public function getAllNewsToShow()
    {
        return DB::table('news')
            ->join('categories', 'categories.id', '=', 'news.cat_id')
            ->join('users', 'users.id', '=', 'news.created_by')
            ->orderBy('id', 'DESC')
            ->selectRaw('news.*, categories.name as cat_name, users.username')
            ->paginate(10);
    }

    public function insertGetId($data){
        DB::table('news')
            ->insertGetId($data);
    }

}
