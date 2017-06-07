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
}
