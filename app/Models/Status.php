<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','tipe_status','keterangan'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function tracking()
    {
        return $this->hasMany(Tracking::class);
    }
}
