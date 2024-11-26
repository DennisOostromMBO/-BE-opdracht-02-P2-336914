<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class ProductSeeder extends Seeder
{
    /**
     * Voer de zaadgegevens in.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['Naam' => 'Mintnootjes', 'Barcode' => '8719587321278'],
            ['Naam' => 'Schoolkrijt', 'Barcode' => '8719587326713'],
            ['Naam' => 'Honigdrop', 'Barcode' => '8719587327836'],
            ['Naam' => 'Zure Beren', 'Barcode' => '8719587321441'],
            ['Naam' => 'Cola Flesjes', 'Barcode' => '8719587321237'],
            ['Naam' => 'Turtles', 'Barcode' => '8719587322245'],
            ['Naam' => 'Witte Muizen', 'Barcode' => '8719587328256'],
            ['Naam' => 'Reuzen Slangen', 'Barcode' => '8719587325641'],
            ['Naam' => 'Zoute Rijen', 'Barcode' => '8719587322739'],
            ['Naam' => 'Winegums', 'Barcode' => '8719587327527'],
            ['Naam' => 'Drop Munten', 'Barcode' => '8719587323245'],
            ['Naam' => 'Kruis Drop', 'Barcode' => '8719587322265'],
            ['Naam' => 'Zoute Ruitjes', 'Barcode' => '8719587323256'],
        ]);
    }
}