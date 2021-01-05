<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    // relasi ke table user
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function pertanyaan(){
        return $this->hasMany(Pertanyaan::class);
    }

}
