<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Membre;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $slider = Slider::all();

        return view('admin.index', ['slider' => $slider]);
    }

    public function add_slide(Request $request)
    {
        $request->validate([
            'img_new_slide' => ['required', 'mimes:jpg,png,jpeg,gif', 'max:5048'],
        ]);

        $filename = time().'.'.$request->img_new_slide->extension();
        $request->img_new_slide->move(public_path('slider'), $filename);

        $slide = Slider::create([
            'path' => $filename
        ]);

        return redirect()->route('admin');
    }

    public function delete_slide($id)
    {
        $slide = Slider::findOrFail($id);
        $slide->delete();
    }

    /* 
     * ==============================================================================
     *                                  Actualités
     * ==============================================================================
    */

    public function admin_actus()
    {
        $articles = Article::all();

        return view('admin.actus', ['articles' => $articles]);
    }

    public function add_actus(Request $request)
    {
        $request->validate([
            'new_img_actus' => ['required', 'mimes:jpg,png,jpeg,gif', 'max:5048'],
            'new_titre_actus' => ['required', 'string', 'max:255'],
            'new_contenu_actus' => ['required', 'string'],
        ]);

        $filename = time().'.'.$request->new_img_actus->extension();
        $request->new_img_actus->move(public_path('img_articles'), $filename);

        $article = Article::create([
            'titre' => $request->new_titre_actus,
            'contenu' => $request->new_contenu_actus,
            'path' => $filename,
        ]);

        return redirect('/admin/actus');
    }

    public function delete_actus($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
    }

    /* 
     * ==============================================================================
     *                                    Team
     * ==============================================================================
    */

    public function admin_membres()
    {
        $membres = Membre::all();

        return view('admin.team', ['membres' => $membres]);
    }

    public function add_membres(Request $request)
    {
        $request->validate([
            'img_membre' => ['nullable', 'mimes:jpg,png,jpeg,gif', 'max:5048'],
            'poste' => ['required', 'string', 'max:255'],
            'pseudo' => ['required', 'string', 'max:255'],
            'place' => ['required', 'string', 'max:255'],
            'twitter' => ['nullable', 'string', 'max:255'],
            'instagram' => ['nullable', 'string', 'max:255'],
            'twitch' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->img_membre){
            $filename = $request->pseudo.time().'.'.$request->img_membre->extension();
            $request->img_membre->move(public_path('img_team'), $filename);

            $membre = Membre::create([
                'pseudo' => $request->pseudo,
                'poste' => $request->poste,
                'place' => $request->place,
                'img_membre' => $filename,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'twitch' => $request->twitch,
            ]);
        } else {
            $membre = Membre::create([
                'pseudo' => $request->pseudo,
                'poste' => $request->poste,
                'place' => $request->place,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'twitch' => $request->twitch,
            ]);
        }

        return redirect('/admin/team');
    }

    public function delete_membres($id)
    {
        $membre = Membre::findOrFail($id);
        $membre->delete();
    }
    
}
