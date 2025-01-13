<?php

namespace App\Models\Models;

use App\Models\Models\Advert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function advert(){
        return $this->belongsTo(Advert::class);
    }
}
