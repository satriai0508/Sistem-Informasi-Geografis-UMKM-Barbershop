<?php

namespace App\Models;

use App\Models\Toko;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';
    protected $guarded = 'id';

    protected $fillable = [
        'nama_toko',
        'nama',
        'harga'
    ];

    /**
     * Get the toko that owns the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toko(): BelongsTo
    {
        return $this->belongsTo(Toko::class,'id');
    }
}
