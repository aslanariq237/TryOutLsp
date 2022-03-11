<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;
    protected $table = "artikel";
    protected $fillable = ["kategori_id", "judul_kategori", "isi_artikel", "gambar_artikel"];
}
