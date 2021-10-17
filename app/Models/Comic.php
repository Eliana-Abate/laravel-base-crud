<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'series', 'description', 'thumb', 'price', 'sale_date', 'type'];

    public function getCreatedAt() {
        return Carbon::create($this->created_at)->format('d-m-Y H:i:s');
    }

    public function getUpdatedAt() {
        return Carbon::create($this->updated_at)->format('d-m-Y H:i:s');
    }
}
