<?php

namespace App\Models\Models;


use App\Models\Models\Photo;
use App\Models\Models\City;
use App\Models\Models\Category;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }

}
