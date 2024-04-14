<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    protected $fillable = ['location', 'appointment_date', 'stylist', 'description', 'cost'];
    protected $guarded = [];
    public $timestamps = false;

  

}
