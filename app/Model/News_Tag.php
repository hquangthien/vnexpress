<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News_Tag extends Model
{
    protected $table = 'news_tags';
    protected $fillable = ['news_id', 'tags_id'];
    public $timestamps = false;

    public function insertTags($data){
        return DB::table('news_tags')
            ->insert($data);
    }

    public function hotTags()
    {
        return DB::table('news_tags')
            ->join('tags', 'news_tags.tag_id', '=', 'tags.id')
            ->selectRaw('count(tag_id) as tags_number, tags.content, tag_id')
            ->groupBy('tags.content')
            ->groupBy('news_tags.tag_id')
            ->take(10)
            ->get();
    }
}
