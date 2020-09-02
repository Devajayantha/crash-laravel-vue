<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use Illuminate\Support\Facades\Mail;
// use Mail;
class ContactUsController extends Controller
{
    public function index(){
        $pages = Pages::All();

        $pageSelect = Pages::where('id',1)->first();

        return view('contact-us',['pages' =>$pages],['pageSelect' => $pageSelect]); 

    }

    public function sendMessage(Request $request){
        $input = $request->all();
        $pages = Pages::All();

        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Mail::send('mails.contactmail', ['nameInput' => $input['name'], 'messageInput' => $input['message']], function($m){
        //     $m->from('no-reply@pixel.com','Pixel Website');

        //     $m->to('gerrit@pixell.com');
        // });

        Mail::send('mails.contactmail', ['nameInput' => $input['name'], 'messageInput' => $input['message']], function ($message) {
            $message->from('john@johndoe.com', 'John Doe');
            $message->to('john@johndoe.com');

        });

        return view('contact-us',['pages' =>$pages])->with('successMessage','Thank you, ur message has been sent'); 
        // dd($input);

    }
}
