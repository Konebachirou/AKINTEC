<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function actualites()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'actualite';
       
        return view('actualite.home', ['ongletActif' => $ongletActif]);
    }
    
}
