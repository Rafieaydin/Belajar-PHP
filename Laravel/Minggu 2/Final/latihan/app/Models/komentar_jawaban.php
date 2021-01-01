<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar_jawaban extends Model
{
    protected $guard = [];
    protected $table = 'komentar_jawaban';
    public function jawaban()
    {
        // foreign key, owner
        return $this->belongsTo(Jawaban::class);
    }
    public function user()
    {
        // foreign key, owner
        return $this->belongsTo(User::class);
    }

}
