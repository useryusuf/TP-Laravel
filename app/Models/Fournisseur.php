<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $primaryKey = 'Code_four';
    protected $fillable = [
        'Nom_four',
        'Adr_four',
        'Tel_four',
    ];

    public function entreprises()
    {
        return $this->hasMany(Entreprise::class, 'Code_four', 'Code_four');
    }

    public function livraisons()
    {
        return $this->hasMany(Livraison::class, 'Code_four', 'Code_four');
    }
}
