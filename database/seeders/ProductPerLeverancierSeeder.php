<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class ProductPerLeverancierSeeder extends Seeder
{
    /**
     * Voer de zaadgegevens in.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_per_leveranciers')->insert([
            ['LeverancierId' => 1, 'ProductId' => 1, 'DatumLevering' => '2023-04-09', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => '2023-04-16'],
            ['LeverancierId' => 1, 'ProductId' => 1, 'DatumLevering' => '2023-04-18', 'Aantal' => 21, 'DatumEerstVolgendeLevering' => '2023-04-25'],
            ['LeverancierId' => 1, 'ProductId' => 2, 'DatumLevering' => '2023-04-09', 'Aantal' => 12, 'DatumEerstVolgendeLevering' => '2023-04-16'],
            ['LeverancierId' => 1, 'ProductId' => 3, 'DatumLevering' => '2023-04-10', 'Aantal' => 11, 'DatumEerstVolgendeLevering' => '2023-04-17'],
            ['LeverancierId' => 2, 'ProductId' => 4, 'DatumLevering' => '2023-04-14', 'Aantal' => 16, 'DatumEerstVolgendeLevering' => '2023-04-21'],
            ['LeverancierId' => 2, 'ProductId' => 4, 'DatumLevering' => '2023-04-21', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => '2023-04-28'],
            ['LeverancierId' => 2, 'ProductId' => 5, 'DatumLevering' => '2023-04-14', 'Aantal' => 45, 'DatumEerstVolgendeLevering' => '2023-04-21'],
            ['LeverancierId' => 2, 'ProductId' => 6, 'DatumLevering' => '2023-04-14', 'Aantal' => 30, 'DatumEerstVolgendeLevering' => '2023-04-21'],
            ['LeverancierId' => 3, 'ProductId' => 7, 'DatumLevering' => '2023-04-12', 'Aantal' => 12, 'DatumEerstVolgendeLevering' => '2023-04-19'],
            ['LeverancierId' => 3, 'ProductId' => 7, 'DatumLevering' => '2023-04-19', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => '2023-04-26'],
            ['LeverancierId' => 3, 'ProductId' => 8, 'DatumLevering' => '2023-04-10', 'Aantal' => 12, 'DatumEerstVolgendeLevering' => '2023-04-17'],
            ['LeverancierId' => 3, 'ProductId' => 9, 'DatumLevering' => '2023-04-11', 'Aantal' => 1, 'DatumEerstVolgendeLevering' => '2023-04-18'],
            ['LeverancierId' => 4, 'ProductId' => 10, 'DatumLevering' => '2023-04-16', 'Aantal' => 24, 'DatumEerstVolgendeLevering' => '2023-04-30'],
            ['LeverancierId' => 5, 'ProductId' => 11, 'DatumLevering' => '2023-04-10', 'Aantal' => 47, 'DatumEerstVolgendeLevering' => '2023-04-17'],
            ['LeverancierId' => 5, 'ProductId' => 11, 'DatumLevering' => '2023-04-19', 'Aantal' => 60, 'DatumEerstVolgendeLevering' => '2023-04-26'],
            ['LeverancierId' => 5, 'ProductId' => 12, 'DatumLevering' => '2023-04-11', 'Aantal' => 45, 'DatumEerstVolgendeLevering' => NULL],
            ['LeverancierId' => 5, 'ProductId' => 13, 'DatumLevering' => '2023-04-12', 'Aantal' => 23, 'DatumEerstVolgendeLevering' => NULL],
        ]);
    }
}