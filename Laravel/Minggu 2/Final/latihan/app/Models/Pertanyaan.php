<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id','judul','isi','jawaban_tepat_id','user_id'];
    use HasFactory;
    // relasi ke profile
    public function profile(){
    return  $this->belongsTo(Profile::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function jawaban(){
        return $this->hasMany(Jawaban::class, 'pertanyaan_id');
    }
    public function komentar_pertanyaan()
    {
        return $this->hasMany(komentar_pertanyaan::class, 'pertanyaan_id');
    }
    public function tepat(){
                                        // foreign key , owner
        return $this->hasOne(Jawaban::class,'id', 'jawaban_tepat_id');
    }
    // tags many to many
    public function tags(){
        // mencari pertanyaan_id              // nama table  dan foreign key dan foreign key dari post
        return $this->belongsToMany(tag::class,'pertanyaan_tag','pertanyaan_id','tag_id');
    }

}
