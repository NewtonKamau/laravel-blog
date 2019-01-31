<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my post site';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About the bloger';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services Offered',
            'services' => ['Mobile Application Development','Website Development and Management', 'Laravel Project Developer', 'Yoga Instructor']

    );
        return view('pages.services')->with($data);
    }



}
