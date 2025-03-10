<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'section_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
    ];

    public function section(){
        return $this->belongsto(section::class);
    }

    public function sales(){
        return $this->hasMany(sale::class);
    }
}   
