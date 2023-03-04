<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul', 'pengarang', 'gambar', 'penerbit', 'thn_terbit', 'jml_halaman'];
}
