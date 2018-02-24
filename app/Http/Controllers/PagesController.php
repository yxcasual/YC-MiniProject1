<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('pages.index');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }
    function logout(){
        return view('pages.logout');
    }
    function signin(){
        return view('pages.signin');
    }
    function signup(){
        return view('pages.signup');
    }
    function viewmessages(){
        return view('pages.viewmessages');
    }
    function store(Request $request){
        $name = $request->name;
        return redirect()->route('thanks',['name'=> $name ]);
    }
    function thanks($name ,Request $request ){

        dd($name);
        return view('pages.thankyou')->with(compact('name'));


    }
}
