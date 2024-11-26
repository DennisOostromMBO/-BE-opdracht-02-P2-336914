<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leveranciers')->insert([
            [
                'naam' => 'Venco',
                'contactpersoon' => 'Bert van Linge',
                'leveranciernummer' => 'L1029384719',
                'mobiel' => '06-28493827',
            ],
            [
                'naam' => 'Astra Sweets',
                'contactpersoon' => 'Jasper del Monte',
                'leveranciernummer' => 'L1029284315',
                'mobiel' => '06-39398734',
            ],
            [
                'naam' => 'Haribo',
                'contactpersoon' => 'Sven Stalman',
                'leveranciernummer' => 'L1029324748',
                'mobiel' => '06-24383291',
            ],
            [
                'naam' => 'Basset',
                'contactpersoon' => 'Joyce Stelterberg',
                'leveranciernummer' => 'L1023845773',
                'mobiel' => '06-48293823',
            ],
            [
                'naam' => 'De Bron',
                'contactpersoon' => 'Remco Veenstra',
                'leveranciernummer' => 'L1023857736',
                'mobiel' => '06-34291234',
            ],
            [
                'naam' => 'Quality Street',
                'contactpersoon' => 'Johan Nooij',
                'leveranciernummer' => 'L1029234586',
                'mobiel' => '06-23458456',
            ],
        ]);
    }
}
