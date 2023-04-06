<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function home() {

        $title = 'Welcome to PMP';
        $paragraph = 'Lorem ipsum';
        return view('home', ['title' => $title, 'paragraph' => $paragraph]);
    }

    public function about() {

        $title = 'About us';
        $paragraph = 'Lorem ipsum';
        return view('about', ['title' => $title, 'paragraph' => $paragraph]);
    }

    public function services() {


       
    }

    public function contact() {

        $title = 'Contact Us';
        $paragraph = 'Lorem ipsum';

        return view('contact', ['title' => $title, 'paragraph' => $paragraph]);
    }


   
}
