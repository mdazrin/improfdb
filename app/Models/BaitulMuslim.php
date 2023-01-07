<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class BaitulMuslim extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [

        'marriage_status',
        'spouse_name',

    ];

    public $sortable = [

        'marriage_status',
        'spouse_name',

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
                ->where('marriage_status','like','%' . request('check-user') . '%')
                ->orWhere('spouse_name','like','%' . request('check-user') . '%');

        }
    }

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
