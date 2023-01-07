<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ImprofChildren extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [

        'first_name',
        'last_name',
        'date_of_birth',

    ];

    public $sortable = [

        'first_name',
        'last_name',
        'date_of_birth',

    ];

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

    public function scopeFilter($query)
    {
        if(request('check-user'))
        {
            $query
                ->where('first_name','like','%' . request('check-user') . '%')
                ->orWhere('last_name','like','%' . request('check-user') . '%')
                ->orWhere('date_of_birth','like','%' . request('check-user') . '%');

        }
    }

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
