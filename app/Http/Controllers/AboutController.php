<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'about';
       
        return view('about', ['ongletActif' => $ongletActif]);
    }
    
}
