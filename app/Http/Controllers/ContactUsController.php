<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class ContactUsController extends Controller
{
    public function index(){
        $page = Pages::All();

        $pageSelect = Pages::where('id',1)->first();

        return view('contact-us',['pages' =>$page],['pageSelect' => $pageSelect]); 

    }

    public function sendMessage(Request $request){
        $input = $request->all();
        dd($input);

    }
}
