<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;
    protected $table = 'accounting';
    protected $primaryKey = 'id';
    protected $fillable = ['movement_description','amount','movement_date','movement_type','transaction_type','pending_balance'];
    protected $guarded = [];
    public $timestamps = false;
   
}
