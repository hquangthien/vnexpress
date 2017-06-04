<?php

namespace App\Http\Controllers\VnExpress;

use App\Model\Cat;
use App\Model\News;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    private $news;
    private $cat;

    public function __construct(Cat $cat, News $news)
    {
        $this->cat = $cat;
        $this->news = $news;
    }

    public function home()
    {
        //get news in three categories which have the most views
        $objPopularParrentCat = $this->cat->getPopularParrentCat();
        $objNewsPopular = [];
        $arIdPopularCat = [];
        foreach ($objPopularParrentCat as $popularParrentCat){
            $id_cat = $popularParrentCat->parrent_cat;
            array_push($arIdPopularCat, $id_cat);
            $name_cat = $this->cat->getNameCat($id_cat)[0]->name;
            $objNewsPopular[$id_cat.'-'.$name_cat] = $this->news->getNewsOfSuperCat($id_cat, 4);
        }

        //get news in the remaining categories
        $arNewsInRemainCat = [];
        $arRemainCat = $this->cat->getSuperCat();
        foreach ($arRemainCat as $key => $remainCat){
            if (in_array($remainCat->id, $arIdPopularCat)){
                unset($arRemainCat[$key]);
            } else{
                $arNewsInRemainCat[$remainCat->id.'-'.$remainCat->name] = $this->news->getNewsOfSuperCat($remainCat->id, 4);
            }
        }
        //dd($objNewsPopular);
        //get 10 news are pinned
        $objPinNews = $this->news->getPinNews();


        return view('vnexpress.index.home', [
                'objPinNews' => $objPinNews,
                'objNewsPopular' => $objNewsPopular,
                'arNewsInRemainCat' => $arNewsInRemainCat,
            ]
        );
    }

}
