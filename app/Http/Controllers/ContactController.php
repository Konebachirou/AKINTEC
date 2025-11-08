<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'contact';
       
        return view('contact', ['ongletActif' => $ongletActif]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        try {
            $data = [
                'nom' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'sujet' => $request->subject,
                'msg' => $request->message,
            ];

            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to(env('MAIL_FROM_ADDRESS')) 
                ->subject('📩 Nouveau message du site AKINTEC : ' . $data['sujet']);
            });

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l’envoi du mail : ' . $e->getMessage(),
            ], 500);
        }
    }
    
}
