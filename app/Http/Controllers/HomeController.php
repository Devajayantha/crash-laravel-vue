<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class HomeController extends Controller
{
    public function index(){
        
        $page = Pages::All();

        $pageSelect = Pages::where('id',1)->first();

        return view('home',['pages' =>$page],['pageSelect' => $pageSelect]);
    }

    public function page($pageId){
        $page = Pages::All();

        $pageSelect = Pages::where('id',$pageId)->first();

        return view('home',['pages' =>$page],['pageSelect' => $pageSelect]); 
    }

}
