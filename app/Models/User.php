<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstname',
        'lastname',
        'ppi',
        'batch',
    ];

    public $sortable = [

        'firstname',
        'lastname',
        'ppi',
        'batch',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function password(): Attribute
    {
        return Attribute::make(
            set: fn ($password) => bcrypt($password)
        );
    }

    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

    /**
     * Scope a query to only include users of a given type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $filters
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query)
    {
        if(request('check-user'))
        {
            $query
                ->where('firstname','like','%' . request('check-user') . '%')
                ->orWhere('lastname','like','%' . request('check-user') . '%')
                ->orWhere('ppi','like','%' . request('check-user') . '%')
                ->orWhere('batch','like','%' . request('check-user') . '%');
        }
    }

    public function personal()
    {
        return $this->hasOne(PersonalInfo::class);
    }

    public function pas()
    {
        return $this->hasOne(Pas::class);
    }

    public function profession()
    {
        return $this->hasOne(Profession::class);
    }

    public function academic()
    {
        return $this->hasOne(Academic::class);
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function baitulmuslim()
    {
        return $this->hasMany(BaitulMuslim::class);
    }

    public function improfchildren()
    {
        return $this->hasMany(ImprofChildren::class);
    }
}



