<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
   // public  $table="employee";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['last_login'];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    protected $fillable= [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password','rememver_token',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
