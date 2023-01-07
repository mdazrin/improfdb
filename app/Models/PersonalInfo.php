<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PersonalInfo extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [

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
                ->where('ic','like','%' . request('check-user') . '%')
                ->orWhere('mailing_address','like','%' . request('check-user') . '%')
                ->orWhere('date_of_birth','like','%' . request('check-user') . '%')
                ->orWhere('tel_no','like','%' . request('check-user') . '%')
                ->orWhere('bank_account','like','%' . request('check-user') . '%')
                ->orWhere('bank_name','like','%' . request('check-user') . '%')
                ->orWhere('sex','like','%' . request('check-user') . '%')
                ->orWhere('birthday_month','like','%' . request('check-user') . '%')
                ->orWhere('facebook','like','%' . request('check-user') . '%')
                ->orWhere('twitter','like','%' . request('check-user') . '%')
                ->orWhere('instagram','like','%' . request('check-user') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
