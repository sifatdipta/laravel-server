<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landscapes extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'img',
        'featured',
        'user_id',
        'date'
    ];
}