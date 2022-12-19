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
                ->where('mailing_address','like','%' . request('check-user') . '%');
        }
    }

    public function user()

    {
        return $this->belongsTo(User::class);
    }
}
