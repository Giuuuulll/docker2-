<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Campos que se pueden llenar mediante asignación masiva
    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
