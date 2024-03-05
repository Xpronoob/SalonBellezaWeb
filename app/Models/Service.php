<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = [
        'title', 'description', 'image_url',
    ];
}
