<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Categorie::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
    
    public function commandes(){
        return $this->belongsTo(Commande::class);
    }
}
