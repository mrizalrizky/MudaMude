<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'organizer_name',
        'description',
        'categories_id',
        'date',
        'location'
    ];

    protected $casts = [
        'date' => 'datetime'
    ];

    public function category() {
        return $this->hasOne(EventCategory::class, 'id');
    }
}
