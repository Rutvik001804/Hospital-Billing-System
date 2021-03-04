<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class stafflogin extends Controller
{
    public function submit(Request $req)
    {
        $name = $req->input('uname');
        $pass = $req->input('pass');

        if($name == 'admin' && $pass == 'admin')
        {
            $req -> session() -> put('data', $req->input());
            
            $minutes = 30;
            $response = new Response('Admin Login');
            $response -> withCookie(cookie('AdminLogin','Admin Login Successfully',$minutes));
            
            return redirect('/');
        }
        else
        {
            return redirect('signin');
        }
    }
}
