<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'date',
        // 'Hour',
        'duration',
        'max_participants',
        'min_participants',
        'price',
        'description',
        'included'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
