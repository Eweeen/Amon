<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory, Uuid;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [
        'id',
        'pseudo',
        'poste',
        'place',
        'img_membre',
        'twitter',
        'instagram',
        'twitch',
    ];

}
