<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnergyUsage extends Model
{

    protected $fillable = [
        'lamp_id',
        'tanggal',
        'jumlah_kwh',
        'biaya_listrik'
    ];


    public function lamp()
    {
        return $this->belongsTo(Lamp::class);
    }

}