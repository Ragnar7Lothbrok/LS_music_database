<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'songs'; // Nombre de la tabla
    public $timestamps = false; // Deshabilita timestamps si no existen en la tabla

    // Campos permitidos para asignación masiva
    protected $fillable = ['title', 'group', 'style', 'release_date', 'rating'];
}
