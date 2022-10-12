<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;

class HomeController extends Controller
{
    function index()
    {
        return view('pages.home');
    }
    function about()
    {
        return view('pages.about');
    }
    function contact()
    {
        return view('pages.contact');
    }
    function registration()
    {
        return view('pages.registration');
    }
    function teams()
    {
        return view('pages.teams');
    }
    function login()
    {
        return view('pages.login');
    }
    
    function loginsubmit(Request $req)
    {
        $req->validate([
            'uname'=>'required|min:5|max:20',
            'password'=>'required'
        ]);
        

        return "form submitted with $req->uname and $req->password";
    }

    function registrationsubmit(Request $req)
    {
        $req->validate([
            'uname'=>'required|min:5|max:20',
            'password'=>'required',
            'number'=>'required',
            'dob'=>'required'
        ]);
        
        $st = new people();
        $st->uname = $req->uname;
        $st->password = $req->password;
        $st->number = $req->number;
        $st->dob = $req->dob;
        $st->save();

        return "form submitted with $req->uname,$req->password,$req->number,$req->dob ";
    }
   

   
}
