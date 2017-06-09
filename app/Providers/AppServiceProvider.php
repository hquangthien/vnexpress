<?php

namespace App\Providers;

use App\Model\Adv;
use App\Model\Cat;
use App\Model\News;
use App\Model\News_Tag;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cat = new Cat();
        $news = new News();
        $adv = new Adv();
        $tags = new News_Tag();
        /*** nav-bar ***/
        $objSuperCat = $cat->getSuperCat();
        $objSubCat = [];
        foreach ($objSuperCat as $superCat)
        {
            $tmp = $cat->getSubCat($superCat->id);
            if (sizeof($tmp) > 0){
                $objSubCat[$superCat->id] = $tmp;
            }
        }
        /*** end nav-bar ***/

        /*** recent-news, recent-news-commented ***/
        $objRecentNews = $news->getRecentNews();
        $objRecentNewsComment = $news->getRecentNewsComment();
        $objPopularNews = $news->getPopularNews();
        //dd($objPopularNews);
        /*** end recent-news, recent-news-commented ***/

        /*** get top adv ***/
        $advTop = $adv->getTopAdv();
        $advRightBar = $adv->getRightBarAdv();
        /*** end get top adv ***/

        $hotTags = $tags->hotTags();


        View::share('objRecentNews', $objRecentNews);
        View::share('objRecentNewsComment', $objRecentNewsComment);
        View::share('objPopularNews', $objPopularNews);
        View::share('objSuperCat', $objSuperCat);
        View::share('objSubCat', $objSubCat);
        View::share('advTop', $advTop);
        View::share('advRightBar', $advRightBar);
        View::share('hotTags', $hotTags);
        View::share('publicUrl', getenv('PUBLIC_URL'));
        View::share('adminUrl', getenv('ADMIN_URL'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
