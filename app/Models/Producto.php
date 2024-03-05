<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = ['product_name', 'product_description', 'stock_quantity', 'purchase_price', 'selling_price', 'categoria', 'proveedor'];
    public $timestamps = false;
}
