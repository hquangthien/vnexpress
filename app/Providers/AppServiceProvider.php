<?php

namespace App\Providers;

use App\Model\Cat;
use App\Model\News;
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

        View::share('objRecentNews', $objRecentNews);
        View::share('objRecentNewsComment', $objRecentNewsComment);
        View::share('objPopularNews', $objPopularNews);
        View::share('objSuperCat', $objSuperCat);
        View::share('objSubCat', $objSubCat);
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
