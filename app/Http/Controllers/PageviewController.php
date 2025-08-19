<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageviewController extends Controller
{
    public function index_page(){
        return view('index');
    }
    public function about_page(){
        return view('about');
    }
    public function contact_page(){
        return view('contact');
    }
    public function projects_page(){
        return view('projects');
    }
    public function blogs_page(){
        return view('blogs');
    }
}
