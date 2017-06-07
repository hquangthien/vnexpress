<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['content'];
    public $timestamps = false;

    public function checkTag($content){
        return DB::table('tags')
            ->where('content', '=', $content)
            ->get();
    }

    public function insertGetId($content){
        return DB::table('tags')
            ->insertGetId([
                'content' => $content
            ]);
    }
}
