<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'description', 'series', 'thumb', 'price', 'sale_date', 'type'];
    protected $attributes = [
        'artists' => 'unknown',
        'writers' => 'unknown',
    ];
    use HasFactory;
}
