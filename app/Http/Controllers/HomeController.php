<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nourishment;
use App\Models\Post;
use App\Enums\PostStatusChoices;

use App\Enums\NourishmentCategory;
use Mauricius\LaravelHtmx\Http\{HtmxRequest, HtmxResponse, HtmxResponseClientRedirect};


class HomeController extends Controller
{
    public function home_page(){
        $posts = Post::where('status', PostStatusChoices::Public)->orderByDesc('created_at')->get();
        return view('home.home_page', compact('posts'));
    }
    public function about_us_page(){
        return view('home.about_us_page');
    }
    public function menu_page(){
        $nourishments = Nourishment::all();
        return view('home.menu_page', compact('nourishments'));
    }
    public function news_page(){
        $posts = Post::where('status', PostStatusChoices::Public)->orderByDesc('created_at')->get();
        return view('home.news_page', compact('posts'));
    }
    public function news_post(Post $post, HtmxRequest $request) {
        return view('home.news_post', compact('post'));
    }
    public function mobile_app_page(){

    }

}
