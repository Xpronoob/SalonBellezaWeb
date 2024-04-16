<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'image', 'stock', 'purchase_price', 'selling_price', 'id_category', 'id_supplier'];
    protected $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
}
