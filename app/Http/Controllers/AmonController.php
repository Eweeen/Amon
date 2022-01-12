<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmonController extends Controller
{

    public function index(){
        return view('amon');
    }

    public function team(){
        return view('team');
    }

    public function competition(){
        return view('competition');
    }

    public function chat(){
        return view('chat');
    }

    public function profil(){
        return view('profil');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function compte(){
        return view('compte');
    }

}
