<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function show($service)
    {
        $ongletActif = 'service';

        $path = public_path("assets/json/{$service}.json");
        if (!File::exists($path)) {
            abort(404, "Service non trouvé");
        }
        $json = File::get($path);
        $data = json_decode($json, true);
        return view('service', ['service' => $data, 'ongletActif' => $ongletActif, 'onglet2' => $service]);
    }
}
