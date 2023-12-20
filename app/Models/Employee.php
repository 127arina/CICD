<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Add this import

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['updated_at']; // Corrected property name
    protected $table ='employees';
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'servis',
        'keterangan',
        'kg',
        'biaya',
        'status',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
