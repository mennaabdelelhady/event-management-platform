<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location',
        'start_date',
        'end_date',
        'image',
        'status',
    ];

    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
