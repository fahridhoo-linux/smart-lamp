<?php

namespace App\Http\Controllers;

use App\Models\EnergyUsage;

class EnergyUsageController extends Controller
{
    public function index()
    {
        $energy = EnergyUsage::all();

        return view('energy.index', compact('energy'));
    }
}
