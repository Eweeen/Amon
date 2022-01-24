<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function profil($id){
        if (User::find($id)){
            $user = User::select('users.id','pseudo', 'img_profil', 'admin', 'description', 'twitch', 'twitter', 'instagram')
            ->join('links', 'users.id', '=', 'links.user_id')
            ->where('users.id', $id)
            ->first();

            return view('profil', ['user' => $user]);
        } else {
            dd('utilisateur introuvable !');
            return view('profilNotFound');
        }
    }

    public function profilNotFound(){
        dd('utilisateur introuvable !');
        return view('profilNotFound');
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

    public function admin(){
        return view('adminview');
    }

    public function articles(){
        return view('articles');
    }

    public function article(){
        return view('article');
    }

}
