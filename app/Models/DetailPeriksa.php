<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeriksa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_periksa',
        'id_obat'
    ];
    
    public function periksa()
    {
        return $this->belongsTo(Periksa::class);
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
