<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Location extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
        'current_address',
        'zon',
        'state',
        'district',
    ];

    public $sortable = [

        'current_address',
        'zon',
        'state',
        'district',
    ];

    public function scopeFilter($query)
    {
        if(request('check-user'))
        {
            $query
                ->where('current_address','like','%' . request('check-user') . '%')
                ->orWhere('zon','like','%' . request('check-user') . '%')
                ->orWhere('state','like','%' . request('check-user') . '%')
                ->orWhere('district','like','%' . request('check-user') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
