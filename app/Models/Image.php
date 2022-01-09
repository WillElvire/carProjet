<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image','carId'];

    public function Cars(){
        return $this->belongsTo('App\Models\Cars');
    }

}
