<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = ['marque','modele','annee','prix','localisation','numero','userId','imageId'];

    public function Image(){
        return $this->hasMany('App\Models\Image');
    }

    public function User(){
        return $this->belongsTo('App\Models\User');
    }
}
