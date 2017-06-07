<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cat extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public $timestamps = false;

    public function getSuperCat($id = null)
    {
        if ($id == null){
            return DB::table('categories')
                ->where('parrent_cat', '=', null)
                ->select('categories.*')
                ->get();
        } else{
            return DB::table('categories')
                ->where('parrent_cat', '=', null)
                ->where('id', '=', $id)
                ->select('categories.*')
                ->get();
        }
    }

    public function getSubCat($superCatId)
    {
        return DB::table('categories')
            ->where('parrent_cat', '=', $superCatId)
            ->select('categories.*')
            ->get();
    }

    public function getPopularParrentCat()
    {
        return DB::table('categories')
            ->join('news', 'news.cat_id', '=', 'categories.id')
            ->groupBy('categories.parrent_cat')
            ->selectRaw('categories.parrent_cat, SUM(news.views) as count_views')
            ->orderBy('count_views', 'DESC')
            ->take(3)
            ->get();
    }

    public function getNameCat($id)
    {
        return DB::table('categories')
            ->where('id', '=', $id)
            ->select('name')
            ->get();
    }

    public function countNewsOfSuperCat($id){
        return DB::table('news')
            ->whereIn('cat_id', function ($query) use ($id) {
                $query->select('id')->from('categories')
                    ->where('parrent_cat', '=', $id);

            })
            ->orWhere('cat_id', '=', $id)
            ->selectRaw('count(news.id) as number_news')
            ->get();
    }

    public function countNewsOfSubCat($id){
        return DB::table('news')
            ->where('cat_id', '=', $id)
            ->selectRaw('count(news.id) as number_news')
            ->get();
    }

    public function deleteSubCat($parrent_id){
        return DB::table('categories')
            ->where('parrent_cat', '=', $parrent_id)
            ->delete();
    }

}
