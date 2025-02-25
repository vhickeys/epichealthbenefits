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
    public function services() {
        return view('MainApp.services');
    }
    public function events() {
        return view('MainApp.events');
    }
    public function blog() {
        return view('MainApp.blog');
    }
    public function contact() {
        return view('MainApp.contact');
    }
}
