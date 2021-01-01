<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['id','isi','pertanyaan_id','user_id'];

    public function pertanyaan(){
                                            // foreign key, owner
        return $this->belongsTo(Pertanyaan::class);
    }
    public function user(){
                                            // foreign key, owner
        return $this->belongsTo(User::class);
    }
    public function tepat(){
        return $this->hasOne(Pertanyaan::class, 'jawaban_tepat_id');
    }
    public function komentar_jawaban()
    {
        return $this->hasMany(komentar_jawaban::class, 'jawaban_id');
    }

}
