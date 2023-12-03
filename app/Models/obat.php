<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transaksi()
    {
        return $this->hasMany(obat::class, 'id_obat', 'id');
    }
}
