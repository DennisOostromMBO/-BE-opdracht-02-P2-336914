<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    use HasFactory;
    
    protected $table = 'productPerLeveranciers';

    protected $fillable = [
        'LeverancierId', 
        'ProductId', 
        'DatumLevering', 
        'Aantal', 
        'DatumEerstVolgendeLevering',
    ];

    public $timestamps = false;
}
