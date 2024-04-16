<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    use HasFactory;

    protected $fillable = ['exception', 'error_message', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
