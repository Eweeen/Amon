<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    function data(){
        return view('compte', [
            "links" => Link::where('user_id', Auth::user()->id)->first()
        ]);
    }

    function updateLinks(Request $request){
        $user = User::find(Auth::user()->id);

        if ($request->user_pseudo === $user->pseudo){
            $request->validate([
                'user_img_profil' => ['mimes:jpg,png,jpeg,gif', 'max:5048'],
                'user_twitch' => ['nullable', 'string', 'max:255'],
                'user_twitter' => ['nullable', 'string', 'max:255'],
                'user_instagram' => ['nullable', 'string', 'max:255'],
                'user_description' => ['nullable', 'string'],
                'user_lastname' => ['required', 'string', 'max:255'],
                'user_firstname' => ['required', 'string', 'max:255'],
            ]);
        } else {
            $request->validate([
                'user_img_profil' => ['mimes:jpg,png,jpeg,gif', 'max:5048'],
                'user_twitch' => ['nullable', 'string', 'max:255'],
                'user_twitter' => ['nullable', 'string', 'max:255'],
                'user_instagram' => ['nullable', 'string', 'max:255'],
                'user_description' => ['nullable', 'string'],
                'user_lastname' => ['required', 'string', 'max:255'],
                'user_firstname' => ['required', 'string', 'max:255'],
                'user_pseudo' => ['required', 'string', 'unique:users', 'max:255'],
            ]);
        }

        if ($request->user_img_profil){
            $filename = time().Auth::user()->id.'.'.$request->user_img_profil->extension();
            $request->user_img_profil->move(public_path('img'), $filename);

            $user->img_profil = $filename;
        }

        $user->pseudo = $request->user_pseudo;
        $user->firstname = $request->user_firstname;
        $user->lastname = $request->user_lastname;
        $user->save();

        $links = Link::where("user_id", Auth::user()->id)->first();
        $links->description = ($request->user_description) ? $request->user_description : "";
        $links->twitch = ($request->user_twitch) ? $request->user_twitch : "";
        $links->twitter = ($request->user_twitter) ? $request->user_twitter : "";
        $links->instagram = ($request->user_instagram) ? $request->user_instagram : "";
        $links->save();

        return redirect()->route('compte');
    }

    function updatePassword(Request $request){
        $request->validate([
            'user_old_pass' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::find(Auth::user()->id);

        if (!Hash::check($request->password, $user->userpass)){
            if (Hash::check($request->user_old_pass, $user->userpass)){
                $user->userpass = Hash::make($request->password);
                $user->save();
            }
        }

        return redirect()->route('compte');
    }
}
