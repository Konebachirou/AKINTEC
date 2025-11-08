<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function home()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'accueil';
       
        return view('accueil', ['ongletActif' => $ongletActif]);
    }

    public function rejoindre()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'rejoindre';
       
        return view('rejoindre', ['ongletActif' => $ongletActif]);
    }

}
