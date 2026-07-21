@extends('meridyen-layout')

@section('title', $hizmet['baslik'] . ' - Meridyen Danışmanlık')

@section('content')
<section class="py-16 md:py-24" style="background: linear-gradient(135deg, #f0f4ff 0%, #dbeafe 50%, #bfdbfe 100%);">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="mb-6 md:mb-8">
            <a href="/hizmetler" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium transition text-sm md:text-base group">
                <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i> Tüm Çözümler
            </a>
        </div>

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-blue-100">
            <div class="bg-gradient-to-r from-blue-600 to-blue-400 px-6 md:px-8 py-8 md:py-10 text-white">
                <div class="flex items-center gap-3 md:gap-4">
                    <div class="w-12 h-12 md:w-16 md:h-16 rounded-2xl bg-white/20 flex items-center justify-center text-2xl md:text-3xl text-white">
                        <i class="fas {{ $hizmet['icon'] }}"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl md:text-4xl font-bold">{{ $hizmet['baslik'] }}</h1>
                        <p class="text-blue-100/80 text-sm md:text-lg mt-1">{{ $hizmet['aciklama'] }}</p>
                    </div>
                </div>
            </div>

            <div class="p-6 md:p-10">
                <div class="prose max-w-none">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-3 md:mb-4">Hizmet Hakkında</h2>
                    <p class="text-gray-600 text-sm md:text-lg leading-relaxed">{{ $hizmet['detay'] }}</p>
                </div>

                <div class="mt-8 md:mt-10">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-3 md:mb-4">Hizmet Kapsamı</h3>
                    <div class="grid md:grid-cols-2 gap-3">
                        @foreach($hizmet['ozellikler'] as $ozellik)
                            <div class="flex items-center gap-2 md:gap-3 bg-blue-50 rounded-xl px-3 md:px-4 py-2 md:py-3 border border-blue-100 hover:bg-blue-100 transition-all duration-300">
                                <i class="fas fa-check-circle text-blue-600 text-xs md:text-sm"></i>
                                <span class="text-gray-700 font-medium text-xs md:text-sm">{{ $ozellik }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-6 md:mt-8">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-3 md:mb-4">Kurumunuza Sağladığı Faydalar</h3>
                    <div class="grid md:grid-cols-2 gap-3">
                        @foreach($hizmet['faydalar'] as $fayda)
                            <div class="flex items-center gap-2 md:gap-3 bg-green-50 rounded-xl px-3 md:px-4 py-2 md:py-3 border border-green-100 hover:bg-green-100 transition-all duration-300">
                                <i class="fas fa-star text-green-600 text-xs md:text-sm"></i>
                                <span class="text-gray-700 font-medium text-xs md:text-sm">{{ $fayda }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-8 md:mt-10 pt-6 md:pt-8 border-t border-gray-200">
                    <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm md:text-base">Bu hizmetle ilgili detaylı bilgi almak ister misiniz?</p>
                        </div>
                        <a href="/basvuru" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-400 text-white px-6 md:px-8 py-2.5 md:py-3 rounded-xl font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300 text-sm md:text-base group">
                            <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                            Danışmanlık Başvurusu Yapın
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-10 md:mt-12">
            <h3 class="text-xl md:text-2xl font-bold text-gray-800 text-center mb-4 md:mb-6">Diğer Hizmetlerimiz</h3>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
                @php
                    $digers = [
                        ['slug' => 'stratejik-planlama', 'baslik' => 'Stratejik Planlama', 'icon' => 'fa-chess-queen'],
                        ['slug' => 'finansal-danismanlik', 'baslik' => 'Finansal Danışmanlık', 'icon' => 'fa-coins'],
                        ['slug' => 'dijital-donusum', 'baslik' => 'Dijital Dönüşüm', 'icon' => 'fa-laptop-code'],
                        ['slug' => 'risk-yonetimi', 'baslik' => 'Risk Yönetimi', 'icon' => 'fa-shield-alt']
                    ];
                @endphp
                @foreach($digers as $diger)
                    @if($diger['slug'] != $slug)
                        <a href="/hizmet/{{ $diger['slug'] }}" class="group block bg-white rounded-xl p-3 md:p-4 border border-blue-100 hover:shadow-lg hover:border-blue-300 transition-all duration-300">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-8 h-8 md:w-10 md:h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all text-sm md:text-base">
                                    <i class="fas {{ $diger['icon'] }}"></i>
                                </div>
                                <span class="font-medium text-gray-700 group-hover:text-blue-600 transition text-xs md:text-sm">{{ $diger['baslik'] }}</span>
                                <i class="fas fa-arrow-right text-blue-400 opacity-0 group-hover:opacity-100 ml-auto transition-all text-xs md:text-sm"></i>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection