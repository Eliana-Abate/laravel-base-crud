<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'series', 'description', 'thumb', 'price', 'sale_date', 'type'];
}
