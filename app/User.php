<?php

namespace App;

use App\Models\Transaction;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','matric_no','phone','car_name','role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setMatricNoAttribute($value)
    {
        $this->attributes['matric_no'] = strtoupper($value);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class)->with('location','car','user','owner');
    }

    public function services()
    {
        return $this->hasMany(Transaction::class,'owner_id')->with('location','car','user','owner');
    }
}
