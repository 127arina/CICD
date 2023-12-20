<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import BelongsTo

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'Provinsi',
        'Kota',
        'Desa',
        'Jalan',
        'RT_RW',
        'jumlah',
        'harga',
        'tanggal_pesan',
        'keterangan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
