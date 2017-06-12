<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cat_User extends Model
{
    protected $table = 'cat_user';
    public $timestamps = false;
    protected $fillable = ['cat_id', 'user_id'];

    public function removeRelation($user_id)
    {
        return DB::table('cat_user')
            ->where('user_id', '=', $user_id)
            ->delete();
    }

    public function getRelationByIdUser($id)
    {
        return DB::table('cat_user')
            ->where('user_id', '=', $id)
            ->select('cat_id')
            ->get();
    }
}
