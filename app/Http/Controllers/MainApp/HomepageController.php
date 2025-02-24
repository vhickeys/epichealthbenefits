<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('MainApp.index');
    }
    public function about() {
        return view('MainApp.about');
    }
}
