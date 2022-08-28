<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peta extends Model
{
    use HasFactory;

    protected $table = 'tokos';
    protected $guarded = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'pemilik',
        'image',
        'token',
        'x',
        'y',
        'jam_buka',
        'jam_tutup'
    ];
}
