<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $tabla='categories';
    protected $primaryKey = 'id_category';
    protected $fillable=['category_name'];
    protected $guarded=[];
    public $timestamps=false;

}
