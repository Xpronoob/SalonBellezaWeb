<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    protected $fillable = ['location', 'appointment_date', 'stylist', 'description', 'cost','id_user'];
    protected $guarded = [];
    public $timestamps = false;

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
  

}
