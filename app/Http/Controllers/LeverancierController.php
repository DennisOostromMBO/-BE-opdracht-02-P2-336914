<?php

namespace App\Http\Controllers;


use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    public function index()
    {
        $leveranciers = Leverancier::all();
        return view('leveranciers.index', compact('leveranciers'));
    }
}
