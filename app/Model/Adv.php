<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Adv extends Model
{
    protected $table = 'advertisements';
    protected $fillable = ['name', 'link', 'position', 'active_adv'];

    public function changeActive($position)
    {
        return DB::table('advertisements')
            ->where('position', '=', $position)
            ->update(['active_adv' => 0]);
    }

    public function getTopAdv()
    {
        return DB::table('advertisements')
            ->where('position', '=', '1')
            ->where('active_adv', '=', '1')
            ->orderBy('updated_at', 'DESC')
            ->take(1)
            ->get();
    }

    public function getRightBarAdv()
    {
        return DB::table('advertisements')
            ->where('position', '=', '2')
            ->where('active_adv', '=', '1')
            ->orderBy('updated_at', 'DESC')
            ->take(1)
            ->get();
    }
}
