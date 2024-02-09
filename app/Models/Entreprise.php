<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $primaryKey = 'Nom_entr';
    public $incrementing = false;

    protected $fillable = [
        'tel_entr',
        'Fax_entr',
        'Code_four',
    ];

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'Code_four', 'Code_four');
    }
}
