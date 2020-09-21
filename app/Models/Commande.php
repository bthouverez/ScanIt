<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client()
    {
    	return $this->belongsTo(Client::class);
    }

    public function fournisseur()
    {
    	return $this->belongsTo(Fournisseur::class);
    }

    public function livres()
    {
    	return $this->hasManyThrough(Livre::class, LotCommande::class, 'commande_id', 'id', 'id', 'livre_id');
    }
}
