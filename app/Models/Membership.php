<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    public $table = 'memberships';

    protected $fillable = [
        'name',
        'price',
        'description'
    ];

    public function user() {
        return $this->hasOne(User::class, 'id');
    }

}
