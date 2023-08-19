<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balada extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomebalada',
        'localbalada'
    ];
}
