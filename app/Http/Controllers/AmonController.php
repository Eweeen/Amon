<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Membre;
use App\Models\User;

class AmonController extends Controller
{

    public function index(){
        $slider = Slider::all();
        $articles = Article::orderByDesc('created_at')->limit(4)->get();
        
        return view('amon', ['slider' => $slider, 'articles' => $articles]);
    }

    public function team(){
        $membres = Membre::all();

        return view('team', ['membres' => $membres]);
    }

    public function competition(){
        return view('competition');
    }

    public function profil($pseudo){
        if (User::firstWhere('pseudo', $pseudo)){
            $user = User::select('users.id','pseudo', 'img_profil', 'admin', 'description', 'twitch', 'twitter', 'instagram')
            ->join('links', 'users.id', '=', 'links.user_id')
            ->where('users.pseudo', $pseudo)
            ->first();

            return view('profil', ['user' => $user]);
        } else {
            return abort(404);
        }
    }

    public function articles(){
        $articles = Article::all();

        return view('articles', ['articles' => $articles]);
    }

    public function article($id){
        $article = Article::findOrFail($id);

        $articles = Article::whereNotIn('id', [$id])->orderByDesc('created_at')->limit(3)->get();

        return view('article', ['article' => $article, 'articles' => $articles]);
    }

}
