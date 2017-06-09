<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['name', 'subject', 'mail', 'content', 'readed'];

    public function getAllContact()
    {
        return DB::table('contacts')
            ->orderBy('readed', 'ASC')
            ->orderBy('created_at', 'DESC')
            ->selectRaw('contacts.*')
            ->paginate(10);
    }
}
