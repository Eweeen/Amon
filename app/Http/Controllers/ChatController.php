<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    function chat(){
        if (Auth::user()){
            $id_conv = Message::select('id_message')
                        ->join('users', 'users.id', '=', 'messages.id_expediteur')
                        ->whereIn('id_message', function($query){
                            $query->select('id_message')
                            ->from(with(new Message)->getTable())
                            ->where('id_expediteur', Auth::user()->id)
                            ->orWhere('id_destinataire', Auth::user()->id)
                            ->orderByRaw('messages.created_at DESC');
                        })
                        ->groupBy('id_message')
                        ->orderByRaw('messages.created_at DESC')
                        ->get();

            $messages = [];
            $users = [];
            foreach($id_conv as $id){
                $message = Message::select('id_message', 'id_expediteur', 'id_destinataire', 'message', 'pseudo')
                ->join('users', 'users.id', '=', 'messages.id_expediteur')
                ->where('id_message', $id->id_message)
                ->orderByRaw('messages.created_at DESC')
                ->first();
                array_push($messages, $message);

                $id_user = ($message->id_expediteur === Auth::user()->id) ? $message->id_destinataire : $message->id_expediteur;
                $user = User::select('id', 'pseudo', 'img_profil')
                ->where('id', $id_user)
                ->first();
                array_push($users, $user);
            }

            return view('chat', ['messages' => $messages,'user' => $users]);
        } else {
            return view('chat');
        }
    }
}
