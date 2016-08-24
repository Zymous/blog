<?php

namespace App\Http\Controllers;

use App\Http\Model\Article;
use App\Http\Model\Navs;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        //8篇最新发布文章
        $new = Article::orderBy('art_time','desc')->take(8)->get();
        $hotArt = Article::orderBy('art_view','desc')->take(5)->get();
        $navs = Navs::all();
        View::share('navs', $navs);
        View::share('hotArt', $hotArt);
        View::share('new', $new);
    }
}
