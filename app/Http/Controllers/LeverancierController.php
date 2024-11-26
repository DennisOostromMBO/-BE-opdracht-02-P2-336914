<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    public function index()
    {
        $leveranciers = Leverancier::withCount('producten')->get(); 
        return view('leveranciers.index', compact('leveranciers'));
    }

    public function showProducten($id)
    {
        $leverancier = Leverancier::with('producten')->findOrFail($id);
        return view('leveranciers.producten', compact('leverancier'));
    }
}



