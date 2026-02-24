<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Trebuie să ai 'tip_abonament' aici în listă!
    protected $fillable = [
        'nume_complet', 
        'email', 
        'telefon', 
        'data_nasterii', 
        'tip_abonament'
    ];
}