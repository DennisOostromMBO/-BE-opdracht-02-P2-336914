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
    
        // Als er geen producten zijn, geef een melding door en stuur na 3 seconden door
        if ($products instanceof \Illuminate\Support\Collection && $products->isEmpty()) {
            // Als er geen producten zijn, toon je de boodschap maar ga je naar de pagina zonder te wachten
            return view('leveranciers.producten', compact('leverancier', 'products'))->with('message', 'Dit bedrijf heeft tot nu toe geen producten geleverd aan Jamin.');
        }
    
        // Geef de gegevens door aan de view als er producten zijn
        return view('leveranciers.producten', compact('leverancier', 'products'));
    }
    
}
