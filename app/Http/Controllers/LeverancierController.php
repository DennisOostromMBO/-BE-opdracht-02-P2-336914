<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Repositories\GeleverdeProducten;
use App\Models\Leverancier;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
    
        // Geef de gegevens door aan de view als er producten zijn
        return view('leveranciers.producten', compact('leverancier', 'products'));
    } 

    public function edit($id)
{
    // Haal de leverancier op via het ID
    $leverancier = Leverancier::findOrFail($id);
    Log::info('Leverancier gevonden:', ['leverancier' => $leverancier]);

    // Haal een voorbeeld product (of de juiste productId, afhankelijk van je logica)
    $product = DB::table('product_per_leveranciers')
        ->where('LeverancierId', $id)
        ->first();
    Log::info('Product opgehaald:', ['product' => $product]);

    // Haal het magazijn op dat gekoppeld is aan dit product
    $magazijn = null;
    if ($product) {
        $magazijn = DB::table('magazijnen')
            ->where('ProductId', $product->ProductId)
            ->first();
        Log::info('Magazijn opgehaald:', ['magazijn' => $magazijn]);
    } else {
        Log::warning('Geen product gevonden voor leverancier ID:', ['LeverancierId' => $id]);
    }

    // Stuur alle data naar de view
    return view('leveranciers.edit', compact('leverancier', 'product', 'magazijn'));
}
    

public function updateProduct(Request $request, $leverancierId, $productId)
{
    $leverancier = Leverancier::findOrFail($leverancierId);
    
    // Haal het product op uit de database
    $product = DB::table('product_per_leveranciers')
        ->where('LeverancierId', $leverancierId)
        ->where('ProductId', $productId)
        ->first();
    
    // Als het product niet gevonden is, abort met een 404
    if (!$product) {
        abort(404, 'Product niet gevonden');
    }

    // Haal het magazijn op voor het product
    $magazijn = DB::table('magazijnen')
        ->where('ProductId', $productId)
        ->first();

    // Als het magazijn niet gevonden is, abort met een 404
    if (!$magazijn) {
        abort(404, 'Magazijn niet gevonden');
    }

    // Haal de datum van het product op (DatumLevering)
    $datumLevering = $product->DatumLevering;

    // Validatie van de DatumLevering
    $request->validate([
        'DatumLevering' => [
            'required',
            'date',
            function ($attribute, $value, $fail) use ($datumLevering) {
                // Vergelijk de invoerdatum met de bestaande DatumLevering
                if (strtotime($value) < strtotime($datumLevering)) {
                    $fail('Deze datum ligt in het verleden, graag een nieuwe datum invoeren.');
                }
            },
        ],
    ]);

    // Als de validatie is geslaagd, update het product
    DB::table('product_per_leveranciers')
        ->where('LeverancierId', $leverancierId)
        ->where('ProductId', $productId)
        ->update([
            'DatumLevering' => $request->input('DatumLevering'),
        ]);

    // Update magazijn (indien van toepassing)
    DB::table('magazijnen')
        ->where('ProductId', $productId)
        ->update([
            'AantalAanwezig' => $request->input('AantalAanwezig'),
        ]);

    return redirect()->route('leverancier.producten', $leverancierId)
        ->with('success', 'Product en magazijn succesvol bijgewerkt.');
}



    
}
