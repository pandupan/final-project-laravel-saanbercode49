<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';

    protected $fillable = [ 'content', 'pertanyaan_id', 'user_id'];

    public function pertanyaan(){
        return $this->belongsTo(pertanyaan::class, 'pertanyaan_id');
    }

    public function user(){
        return $this->belongsTo(user::class, 'user_id');
    }
}
