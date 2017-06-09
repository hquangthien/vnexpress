<?php

namespace App\Http\Controllers\Admin;

use App\Model\Cat;
use App\Model\Statistic;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function index()
    {
        $stat = new Statistic();
        $catModel = new Cat();
        $superCat = $catModel->getSuperCat();
        $countNumberPerCat = $stat->getCountNumberPerCat();
        foreach ($countNumberPerCat as $item){
            foreach ($superCat as $itemSuperCat){
                if ($item->parrent_cat == $itemSuperCat->id){
                    $item->parrent_cat = $itemSuperCat->name;
                }
            }
        }
        //get sumNewsPerUser
        $sumNewsPerUser = $stat->getSumNewsPerUser();
        //get Sum news
        $sumNews = $stat->getSumNews();
        $sumMessages = $stat->getSumMessages();
        $sumViews = $stat->getSumViews();
        $sumComment = $stat->getSumComment();
        $objUsers = User::where('role', '<>', 3)->take(4)->get();
        return view('admin.index.index',[
            'objSumNewsPerUser' => $sumNewsPerUser,
            'objCountNumber' => $countNumberPerCat,
            'objSumNews' => $sumNews,
            'objSumMessages' => $sumMessages,
            'objSumViews' => $sumViews,
            'objSumComments' => $sumComment,
            'objUsers' => $objUsers,
        ]);
    }

    public function returnError()
    {
        return view('admin.index.no_roles');
    }
}
