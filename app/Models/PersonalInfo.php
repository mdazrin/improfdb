<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PersonalInfo extends Model
{
    use HasFactory, Sortable;

    public $sortable = [

        'ic',
        'mailing_address',
        'date_of_birth',
        'tel_no',
        'bank_account',
        'bank_name',
        'sex',
        'birthday_month',
        'facebook',
        'twitter',
        'instagram'
    ];

    public function scopeFilter($query)
    {
        if(request('check-user'))
        {
            $query
                ->where('mailing_address','like','%' . request('check-user') . '%');
        }
    }
}
