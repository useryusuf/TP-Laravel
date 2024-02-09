<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $primaryKey = 'Num_liv';

    protected $fillable = [
        'Code_four',
        'Date_liv',
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'Code_four', 'Code_four');
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'ligne_livraisons', 'Num_liv', 'Code_art')
            ->withPivot('Qte_liv');
    }
}
