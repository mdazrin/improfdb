<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pas extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [

        'pas_no',
        'involvement',
        'cawangan',
        'kawasan',
        'negeri',
        'interest_one',
        'interest_two',
        'interest_three',

    ];

    public $sortable = [

        'pas_no',
        'involvement',
        'cawangan',
        'kawasan',
        'negeri',
        'interest_one',
        'interest_two',
        'interest_three',
    ];

    public function scopeFilter($query)
    {
        if(request('check-user'))
        {
            $query
                ->where('pas_no','like','%' . request('check-user') . '%')
                ->orwhere('involvement','like','%' . request('check-user') . '%')
                ->orwhere('cawangan','like','%' . request('check-user') . '%')
                ->orwhere('kawasan','like','%' . request('check-user') . '%')
                ->orwhere('negeri','like','%' . request('check-user') . '%')
                ->orwhere('interest_one','like','%' . request('check-user') . '%')
                ->orwhere('interest_two','like','%' . request('check-user') . '%')
                ->orwhere('interest_three','like','%' . request('check-user') . '%');
        }
    }

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
