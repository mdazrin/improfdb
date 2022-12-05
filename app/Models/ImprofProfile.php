<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\MediaLibrary\InteractsWithMedia;
//use Spatie\MediaLibrary\HasMedia;

class ImprofProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'ppi',
        'batch',


    ];

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
