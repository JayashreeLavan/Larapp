<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel!";
        // return view('pages.index',compact('title'));
    return view('pages.index')->with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }

      public function services(){
                $data = array(
                    'title'=>'services',
                    'services'=> ['Web design','Programming','SEO']
                );
    return view('pages.services')->with($data);
    }
}
