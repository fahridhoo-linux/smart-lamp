<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lamp extends Model
{
    protected $fillable = [
        'user_id',
        'nama_lampu',
        'lokasi',
        'daya',
        'status_lampu'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function sensorData()
    {
        return $this->hasMany(SensorData::class);
    }


    public function energyUsages()
    {
        return $this->hasMany(EnergyUsage::class);
    }
}