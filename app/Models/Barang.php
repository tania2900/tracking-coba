<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','sku','foto','deskripsi','status_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function tracking()
    {
        return $this->hasMany(Tracking::class);
    }
}
