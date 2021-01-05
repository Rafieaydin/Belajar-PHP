<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id','judul','isi','jawaban_tepat_id','profile_id'];
    use HasFactory;
    // relasi ke profile
    public function user(){
      return  $this->belongsTo(Profile::class);
    }
    public function profile()
    {
        return  $this->belongsTo(Profile::class);
    }
}
