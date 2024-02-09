<?php

namespace App\Models;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Live extends Model
{
    use HasFactory;

    protected $fillable = [
        'liveImg',
        'name',
        'venue',
        'date',
        'time',
        'totalticket',
        'price',
    ];

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'tickets')->withPivot('quantity')->withTimestamps();
    // }

    public function types(){
        return $this->belongsToMany(Type::class, 'type_lives')->withTimeStamps();
    }

    public function artists(){
        return $this->belongsToMany(Artist::class, 'artist_lives')->withTimeStamps();
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
