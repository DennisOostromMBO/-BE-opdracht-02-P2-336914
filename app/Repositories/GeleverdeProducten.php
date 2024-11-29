<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class GeleverdeProducten
{
    // Haal de producten voor een specifieke leverancier op
    public function getProductsByLeverancier($leverancierId)
    {
        // Voer de opgeslagen procedure uit voor de gegeven leverancier
        return DB::select('CALL spGetAllGeleverdeProducten(?)', [$leverancierId]);
    }
}
