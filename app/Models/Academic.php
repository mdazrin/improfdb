<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Academic extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [

        'course',
        'intake',
        'grade_year',
        'academic_level',

    ];

    public $sortable = [

        'course',
        'intake',
        'grade_year',
        'academic_level',
    ];

    public function scopeFilter($query)
    {
        if(request('check-user'))
        {
            $query
                ->where('mailing_address','like','%' . request('check-user') . '%');
        }
    }

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
