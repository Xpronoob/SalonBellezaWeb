<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'stock', 'purchase_price', 'selling_price', 'category', 'supplier'];
    protected $guarded = [];
    public $timestamps = false;
}
