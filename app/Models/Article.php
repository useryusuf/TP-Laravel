<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey = 'Code_art';

    protected $fillable = [
        'Nom_art',
        'Prix_art',
        'Qte_stock',
    ];

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'contenu_commandes', 'Code_art', 'Num_cmd')
            ->withPivot('Qte_cmd');
    }

    public function livraisons()
    {
        return $this->belongsToMany(Livraison::class, 'ligne_livraisons', 'Code_art', 'Num_liv')
            ->withPivot('Qte_liv');
    }
}
