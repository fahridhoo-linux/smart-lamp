<?php

namespace App\Http\Controllers;

use App\Models\SensorData;

class SensorDataController extends Controller
{
    public function index()
    {
        $sensor = SensorData::all();

        return view('sensor.index', compact('sensor'));
    }
} 