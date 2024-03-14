<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services'; 
    protected $primaryKey = 'id_service'; 
    protected $fillable = ['service_title', 'description', 'image_url']; 
    protected $guarded=[];
    public $timestamps = false; 
}
