<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Message;
use App\Events\ChatMessageEvent;
use App\Events\ChatGeneralEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        if (Auth::user()){
            $id_conv = Message::select('id_message')
                        ->where('id_expediteur', Auth::user()->id)
                        ->orWhere('id_destinataire', Auth::user()->id)
                        ->groupBy('id_message')
                        ->orderByRaw('messages.created_at DESC')
                        ->get();

            $conversations = [];
            $users = [];

            foreach($id_conv as $id){
                $conv = Message::select('id_message', 'id_expediteur', 'id_destinataire', 'message', 'pseudo')
                ->join('users', 'users.id', '=', 'messages.id_expediteur')
                ->where('id_message', $id->id_message)
                ->orderByRaw('messages.created_at DESC')
                ->first();
                array_push($conversations, $conv);

                $id_user = ($conv->id_expediteur === Auth::user()->id) ? $conv->id_destinataire : $conv->id_expediteur;
                $user = User::select('id', 'pseudo', 'img_profil')
                ->where('id', $id_user)
                ->first();
                array_push($users, $user);
            }

            // Return

            return view('chat', [
                'conversations' => $conversations,
                'users' => $users,
                'messages' => [],
                'id_conv' => null,
                'url' => null
            ]);
        }

        return view('chat', [
            'chat' => [],
            'users' => [],
            'messages' => [],
            'id_conv' => null,
            'url' => null
        ]);
    }

    public function store(Request $request)
    {
        if ($request->receiver && $request->id_conv){

            $newMessage = Message::create([
                'id_message' => $request->id_conv,
                'id_expediteur' => Auth::user()->id,
                'id_destinataire' => $request->receiver,
                'message' => $request->message
            ]);

            $id_message = $newMessage->id;

            broadcast(new ChatMessageEvent(Auth::user(), $request->message, $request->receiver));

            return response()->json([
                'message' => $request->message,
                'id_message' => $id_message
            ]);
        } else {
            broadcast(new ChatGeneralEvent(Auth::user(), $request->message))->toOthers();
        }

        return response()->json([
            'message' => $request->message
        ]);
    }

    public function show($id)
    {
        $url = $id;

        // Toutes les conversations avec le dernier message envoyé
        if (Auth::user() && User::find($id)){
            $id_conv = Message::select('id_message')
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

            $conversations = [];
            $users = [];

            foreach($id_conv as $id){
                $conv = Message::select('id_message', 'id_expediteur', 'id_destinataire', 'message', 'pseudo')
                    ->join('users', 'users.id', '=', 'messages.id_expediteur')
                    ->where('id_message', $id->id_message)
                    ->orderByRaw('messages.created_at DESC')
                    ->first();
                array_push($conversations, $conv);

                $id_user = ($conv->id_expediteur === Auth::user()->id) ? $conv->id_destinataire : $conv->id_expediteur;
                $user = User::select('id', 'pseudo', 'img_profil')
                    ->where('id', $id_user)
                    ->first();
                array_push($users, $user);
            }

            // Les messages avec la personne qui correspond à l'url/id

            $messages = Message::select('messages.id', 'messages.id_expediteur', 'messages.id_destinataire', 'messages.message', 'messages.created_at', 'users.pseudo', 'users.img_profil')
                        ->join('users', 'users.id', '=', 'messages.id_expediteur')
                        ->where('id_expediteur', Auth::user()->id)->where('id_destinataire', $url)
                        ->orWhere('id_expediteur', $url)->where('id_destinataire', Auth::user()->id)
                        ->orderBy('messages.created_at')
                        // ->limit(5)
                        ->get();

            $id_conversation = Message::select('id_message')
                        ->where('id_expediteur', Auth::user()->id)->where('id_destinataire', $url)
                        ->orWhere('id_expediteur', $url)->where('id_destinataire', Auth::user()->id)
                        ->first();

            if ($id_conversation == null){
                $idDeLaConv = Str::uuid();
            } else {
                $idDeLaConv = $id_conversation->id_message;
            }

            // Return
            return view('chat', [
                'id' => $id_conv,
                'conversations' => $conversations, 
                'users' => $users, 
                'messages' => $messages, 
                'id_conv' => $idDeLaConv,
                'url' => $url
            ]);
        } else {
            return abort(404);
        }
    }

    public function destroy($id)
    {
        if (Message::where('id', $id)->where('id_expediteur', Auth::user()->id)->first()){
            $response = Message::where('id', $id)->where('id_expediteur', Auth::user()->id)->delete();
        } else {
            $response = "Erreur lors de la suppression.";
        }
    }

}
