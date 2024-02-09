<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'Code_cli';

    protected $fillable = [
        'Nom_cli',
        'Pre_cli',
        'Age_cli',
        'Adr_cli',
        'Vil_cli',
        'Tel_cli',
    ];

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'Code_cli', 'Code_cli');
    }
}
