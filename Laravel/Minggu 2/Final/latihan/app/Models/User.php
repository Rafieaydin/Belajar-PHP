<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'role',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // relasi ke table profile
    public function profile(){
        return $this->hasOne(Profile::class,'user_id','id');
    }
    public function pertanyaan(){
        return $this->hasMany(Pertanyaan::class,'user_id','id');
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class,'user_id','id');
    }
    public function follower()
    {
        return $this->hasMany(Follower::class, 'user_id', 'id');
    }
    // public function komentar_pertanyaan()
    // {
    //     return $this->hasMany(komentar_pertanyaan::class, 'user_id', 'id');
    // }
    // public function komentar_jawaban()
    // {
    //     return $this->hasMany(komentar_jawaban::class, 'user_id', 'id');
    // }
}
