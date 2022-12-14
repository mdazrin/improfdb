<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Profession extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [

        'employer',
        'field_of_work',
        'occupation',

    ];

    public $sortable = [

        'employer',
        'field_of_work',
        'occupation',
    ];

    public function scopeFilter($query)
    {
        if(request('check-user'))
        {
            $query
                ->where('employer','like','%' . request('check-user') . '%')
                ->orWhere('field_of_work','like','%' . request('check-user') . '%')
                ->orWhere('occupation','like','%' . request('check-user') . '%');
        }
    }

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
