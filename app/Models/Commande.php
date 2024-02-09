<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $primaryKey = 'Num_cmd';

    protected $fillable = [
        'Date_cmd',
        'Code_cli',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'Code_cli', 'Code_cli');
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'contenu_commandes', 'Num_cmd', 'Code_art')
            ->withPivot('Qte_cmd');
    }
}
