<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded = [];
    /*protected $fillable = [
        'name',
        'description',
        'small_price',
        'medium_price',
        'large_price',
        'category',
        'image'
    ];*/
    
}
