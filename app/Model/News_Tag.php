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
}
