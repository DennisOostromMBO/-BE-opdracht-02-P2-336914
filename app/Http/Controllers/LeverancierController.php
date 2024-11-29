<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Repositories\GeleverdeProducten;
use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    protected $productRepo;

    // Pas de constructor aan om de juiste repository in te voegen
    public function __construct(GeleverdeProducten $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    // Haal de leveranciers op met productinformatie en de unieke product count
    public function index()
    {
        // Verkrijg de leveranciers met het aantal unieke producten geleverd door deze leverancier
        $leveranciers = Leverancier::select('leveranciers.*')
            ->leftJoin('product_per_leveranciers', 'leveranciers.Id', '=', 'product_per_leveranciers.LeverancierId')
            ->groupBy('leveranciers.Id')
            ->addSelect(DB::raw('COUNT(DISTINCT product_per_leveranciers.ProductId) as unieke_producten_count'))
            ->get();

        return view('leveranciers.index', compact('leveranciers'));
    }

    // Haal de producten per leverancier op via de opgeslagen stored procedure
    public function showProducten($id)
    {
        // Haal de leverancier op via het ID
        $leverancier = Leverancier::findOrFail($id);

        // Haal de producten voor deze leverancier op via de repository
        $products = $this->productRepo->getProductsByLeverancier($id);

        // Geef de gegevens door aan de view
        return view('leveranciers.producten', compact('leverancier', 'products'));

    }
}


