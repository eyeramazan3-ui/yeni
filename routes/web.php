<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BasvuruController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');
Route::get('/hizmetler', [PageController::class, 'hizmetler'])->name('hizmetler');
Route::get('/surec', [PageController::class, 'surec'])->name('surec');
Route::get('/surec-detay', [PageController::class, 'surecDetay'])->name('surec.detay');
Route::get('/referanslar', [PageController::class, 'referanslar'])->name('referanslar');
Route::get('/projeler', [PageController::class, 'projeler'])->name('projeler');
Route::get('/basvuru', [PageController::class, 'basvuru'])->name('basvuru');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

// Başvuru Gönder
Route::post('/basvuru/gonder', [BasvuruController::class, 'gonder'])->name('basvuru.gonder');

// ===== 4 ANA HİZMET DETAY SAYFALARI =====
Route::get('/hizmet/stratejik-planlama', [PageController::class, 'stratejikPlanlama'])->name('hizmet.stratejik-planlama');
Route::get('/hizmet/pazara-giris', [PageController::class, 'pazaraGiris'])->name('hizmet.pazara-giris');
Route::get('/hizmet/surec-iyilestirme', [PageController::class, 'surecIyilestirme'])->name('hizmet.surec-iyilestirme');
Route::get('/hizmet/veri-analitigi', [PageController::class, 'veriAnalitigi'])->name('hizmet.veri-analitigi');

// ===== ANA SAYFADAKİ 4 HİZMET KARTI İÇİN ROUTELAR =====
Route::get('/hizmet/finansal-danismanlik', [PageController::class, 'finansalDanismanlik'])->name('hizmet.finansal-danismanlik');
Route::get('/hizmet/dijital-donusum', [PageController::class, 'dijitalDonusum'])->name('hizmet.dijital-donusum');
Route::get('/hizmet/risk-yonetimi', [PageController::class, 'riskYonetimi'])->name('hizmet.risk-yonetimi');