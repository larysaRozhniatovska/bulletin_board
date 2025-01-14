<?php

namespace App\Models\Models;

use App\Models\Models\Advert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];
    public function adverts(){
        return $this->hasMany(Advert::class);
    }
}
