<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $user;
    private $message;
    private $receiver;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, string $message, string $receiver)
    {
        $this->user = $user;
        $this->message = $message;
        $this->receiver = $receiver;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat.'.$this->receiver);
    }

    public function broadcastAs(){
        return 'chat-message';
    }

    public function broadcastWith(){
        return [
            'id' => $this->user->id,
            'pseudo' => $this->user->pseudo,
            'img_profil' => $this->user->img_profil,
            'message' => $this->message
        ];
    }
}
