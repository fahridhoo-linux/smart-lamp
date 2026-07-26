<?php


namespace App\Http\Controllers;

use App\Models\Lamp;
use App\Models\EnergyUsage;

class DashboardController extends Controller
{
    public function index()
    {
        $totalLamp = Lamp::count();

        $lampNyala = Lamp::where('status_lampu','nyala')
                        ->count();

        $lampMati = Lamp::where('status_lampu','mati')
                       ->count();


        $energy = EnergyUsage::orderBy('tanggal')
                    ->get();


        return view('dashboard', compact(
            'totalLamp',
            'lampNyala',
            'lampMati',
            'energy'
        ));
    }
}
