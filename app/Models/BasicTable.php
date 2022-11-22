<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class BasicTable extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    public function User()
    {
        return $this->hasOne('App\Models\User');
    }
}