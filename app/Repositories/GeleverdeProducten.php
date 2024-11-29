<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class GeleverdeProducten
{
    /**
     * Haal alle producten voor een specifieke leverancier op.
     *
     * @param int $leverancierId
     * @return \Illuminate\Support\Collection
     */
    public function getProductsByLeverancier($leverancierId)
    {
        // Roep de stored procedure aan om de producten voor de leverancier op te halen
        $products = DB::select('CALL spGetAllGeleverdeProducten()');



        return collect($products); // Zorg ervoor dat we een collectie teruggeven
    }
}
