<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Special;

class HomeController extends Controller
{
    public function index(){
        
        $page = Pages::All();

        $sp = Special::All();

        $pageSelect = Pages::where('id',1)->first();

        return view('website.home',['pages' =>$page, 'pageSelect' => $pageSelect, 'special' => $sp]);
    }

    public function page($pageId){
        $page = Pages::All();
        $sps = Special::All();


        $pageSelect = Pages::where('id',$pageId)->first();

        return view('website.home',['pages' =>$page,'pageSelect' => $pageSelect, 'special' => $sps]); 
    }

    public function specialEntry($id){
        // 
        $sps = Special::where('id', $id)->first();
        return view('website.special-entry',['special'=> $sps]);
    }

}
