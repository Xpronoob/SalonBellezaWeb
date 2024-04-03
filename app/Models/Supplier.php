<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'number', 'email', 'address'];
    protected $guarded = [];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class, 'id_supplier');
    }
}
