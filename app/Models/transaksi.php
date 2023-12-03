<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function obat()
    {
        return $this->belongsTo(obat::class, 'id_obat', 'id');
    }
}
