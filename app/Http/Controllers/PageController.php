<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('meridyen-home');
    }

    public function hakkimizda()
    {
        return view('meridyen-hakkimizda');
    }

    public function hizmetler()
    {
        return view('meridyen-hizmetler');
    }

    public function surec()
    {
        return view('meridyen-surec');
    }

    public function surecDetay()
    {
        return view('meridyen-surec-detay');
    }

    public function referanslar()
    {
        return view('meridyen-referanslar');
    }

    public function projeler()
    {
        return view('meridyen-projeler');
    }

    public function basvuru()
    {
        return view('meridyen-basvuru');
    }

    public function blog()
    {
        return view('meridyen-blog');
    }

    // ===== 4 ANA HİZMET DETAY SAYFALARI =====
    public function stratejikPlanlama()
    {
        return view('meridyen-hizmet-stratejik-planlama');
    }

    public function pazaraGiris()
    {
        return view('meridyen-hizmet-pazara-giris');
    }

    public function surecIyilestirme()
    {
        return view('meridyen-hizmet-surec-iyilestirme');
    }

    public function veriAnalitigi()
    {
        return view('meridyen-hizmet-veri-analitigi');
    }

    // ===== ANA SAYFADAKİ 4 HİZMET KARTI İÇİN METODLAR =====
    public function finansalDanismanlik()
    {
        return view('meridyen-hizmet-finansal-danismanlik');
    }

    public function dijitalDonusum()
    {
        return view('meridyen-hizmet-dijital-donusum');
    }

    public function riskYonetimi()
    {
        return view('meridyen-hizmet-risk-yonetimi');
    }
}