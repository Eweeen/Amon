<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory, Uuid;

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [
        'id',
        'path',
    ];
}
