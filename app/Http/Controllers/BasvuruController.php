<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class BasvuruController extends Controller
{
    public function gonder(Request $request)
    {
        $request->validate([
            'ad_soyad' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefon' => 'required|string|max:20',
            'firma' => 'required|string|max:255',
            'konu' => 'required|string|max:255',
            'mesaj' => 'required|string',
        ]);

        Application::create([
            'ad_soyad' => $request->ad_soyad,
            'email' => $request->email,
            'telefon' => $request->telefon,
            'firma' => $request->firma,
            'konu' => $request->konu,
            'mesaj' => $request->mesaj,
            'durum' => 'beklemede'
        ]);

        return redirect()->route('basvuru')->with('success', 'Başvurunuz başarıyla gönderildi. En kısa sürede size dönüş yapacağız.');
    }
}