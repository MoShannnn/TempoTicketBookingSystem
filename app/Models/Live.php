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
        'name',
        'venue',
        'date',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'tickets')->withTimestamps();
    }

    public function types(){
        return $this->belongsToMany(Type::class, 'type_lives')->withTimeStamps();
    }
}
