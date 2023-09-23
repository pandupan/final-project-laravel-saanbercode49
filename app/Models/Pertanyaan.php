<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan';

    protected $fillable = ['title', 'content', 'gambar', 'tanggal', 'kategori_id', 'user_id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function komentar(){
        return $this->hasMany(komentar::class, 'pertanyaan_id');
    }
}
