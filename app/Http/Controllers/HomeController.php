<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nourishment;
use App\Models\Post;


class HomeController extends Controller
{
    public function home_page(){
        return view('home.home_page');
    }
    public function about_us_page(){
        return view('home.about_us_page');
    }
    public function menu_page(){
        $nourishments = Nourishment::all();
        return view('home.menu_page', compact('nourishments'));
    }
    public function news_page(){

    }
    public function mobile_app_page(){

    }

}
