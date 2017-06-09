<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

class Statistic
{
    public function getCountNumberPerCat()
    {
        return DB::table('news')
            ->join('categories', 'categories.id', '=', 'news.cat_id')
            ->selectRaw('count(news.id) as sum_count_number , parrent_cat')
            ->groupBy('parrent_cat')
            ->get();
    }

    public function getSumNewsPerUser()
    {
        return DB::table('news')
            ->join('users', 'news.created_by', '=', 'users.id')
            ->groupBy('users.username')
            ->select('users.username', DB::raw("COUNT(news.title) as sum_news_per_user"))
            ->get();
    }

    public function getSumNews()
    {
        return DB::table('news')
            ->select(DB::raw('COUNT(news.title) as sum_news'))
            ->get();
    }

    public function getSumMessages()
    {
        return DB::table('contacts')
            ->select(DB::raw('COUNT(contacts.name) as sum_messages'))
            ->get();
    }

    public function getSumViews()
    {
        return DB::table('news')
            ->select(DB::raw('SUM(news.views) as sum_views'))
            ->get();
    }

    public function getSumComment()
    {
        return DB::table('comments')
            ->select(DB::raw('COUNT(comments.name_cmt) as sum_comments'))
            ->get();
    }
}
