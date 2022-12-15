<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $fillable = [
        'name'
    ];

    public function event() {
        return $this->belongsTo(Event::class, 'categories_id');
    }
}
