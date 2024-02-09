<?php

namespace App\Models;

use App\Models\Live;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function lives(){
        return $this->belongsToMany(Live::class, 'type_lives')->withTimeStamps();
    }
}
