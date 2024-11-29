<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    protected $table = 'leveranciers';

    protected $fillable = [
        'Naam',
        'ContactPersoon',
        'LeverancierNummer',
        'Mobiel',
    ];
    public $timestamps = false;

    public function producten()
    {
        return $this->belongsToMany(Product::class, 'product_per_leveranciers', 'LeverancierId', 'ProductId');
    }
    
    
}
