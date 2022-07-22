<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public function produits(){
        return $this->hasMany(Produit::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
