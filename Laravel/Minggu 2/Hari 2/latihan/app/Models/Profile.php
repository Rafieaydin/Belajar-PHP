<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = ['nama_lengkap','user_id','foto','id'];
    // relasi ke table user
    public function user()
    {
        return $this->hasOne(User::class ,'user_id','id');
    }
    public function pertanyaan(){
        return $this->hasMany(Pertanyaan::class);
    }
    public function getAvatar()
    {
        if (!$this->foto) {
            return asset('images/default.jpg');
        }
        return asset('images/' . $this->foto);
    }
    public function jawaban(){
                                    // foreign key , owner
        return $this->hasMany(Jawaban::class,'profile_id','id');
    }
}
