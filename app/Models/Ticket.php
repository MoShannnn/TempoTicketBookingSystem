<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'live_id',
        'quantity',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'tickets');
    }

    public function lives()
    {
        return $this->belongsTo(Live::class, 'tickets');
    }
}
