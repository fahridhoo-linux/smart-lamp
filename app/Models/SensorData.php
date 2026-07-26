<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{

    protected $fillable = [
        'lamp_id',
        'intensitas_cahaya',
        'status_gerakan',
        'penggunaan_listrik',
        'waktu_pencatatan'
    ];


    public function lamp()
    {
        return $this->belongsTo(Lamp::class);
    }

}