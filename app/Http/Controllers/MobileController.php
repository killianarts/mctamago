<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nourishment;

class MobileController extends Controller
{
    public function index() {
        return view('mobile.index');
    }
    public function home_screen() {
        $nourishments = Nourishment::all();
        return view('mobile.home_screen', compact('nourishments'));
    }
    public function menu_item_screen(Nourishment $nourishment) {
        return view('mobile.menu_item_screen', compact('nourishment'));
    }
}
