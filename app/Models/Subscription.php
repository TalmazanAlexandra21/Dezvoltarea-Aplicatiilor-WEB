<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    // Câmpurile pe care avem voie să le completăm
    protected $fillable = ['nume_abonament', 'pret', 'durata_zile', 'categorie'];
}