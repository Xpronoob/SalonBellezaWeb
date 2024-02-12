<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $tabla='suppliers';
    protected $primaryKey = 'id_supplier';
    protected $fillable=['provider_name','contact_number','email','address'];
    protected $guarded=[];
    public $timestamps=false;

}
