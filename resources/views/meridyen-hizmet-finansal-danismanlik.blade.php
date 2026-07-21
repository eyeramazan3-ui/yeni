@extends('meridyen-layout')

@section('title', 'Finansal Danışmanlık - Meridyen Danışmanlık')

@section('content')
<section class="py-20 bg-gradient-to-br from-emerald-50 via-white to-green-50">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="text-center mb-12">
            <span class="tag" style="background: #1e3a5f; color: white;"><i class="fas fa-coins mr-1"></i> FİNANSAL DANIŞMANLIK</span>
            <h1 class="section-title text-4xl md:text-5xl mt-4"><span class="gradient-text">Finansal</span> Danışmanlık</h1>
            <div class="section-divider"></div>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-emerald-200">
            <div class="bg-gradient-to-r from-emerald-600 to-green-400 p-8 md:p-12 text-white">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-4xl backdrop-blur-sm">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold">Finansal Danışmanlık</h2>
                        <p class="text-emerald-100/90">Sürdürülebilir büyüme için finansal stratejiler</p>
                    </div>
                </div>
            </div>

            <div class="p-8 md:p-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Hizmet Hakkında</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Finansal danışmanlık hizmetimiz, kurumunuzun mali sağlığını güvence altına almak için 
                    tasarlanmıştır. Nakit akışı yönetimi, bütçeleme, yatırım kararları ve finansal raporlama 
                    konularında uzman ekibimizle yanınızdayız. Sürdürülebilir büyüme için doğru finansal 
                    stratejiler geliştiriyoruz.
                </p>

                <div class="mt-8 p-6 bg-emerald-50 rounded-2xl border border-emerald-200">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div>
                            <p class="text-gray-700"><i class="fas fa-clock text-emerald-600 mr-2"></i> <span class="font-semibold">Süre:</span> 2-4 Hafta</p>
                            <p class="text-gray-700"><i class="fas fa-users text-emerald-600 mr-2"></i> <span class="font-semibold">Ekip:</span> Uzman Danışmanlar</p>
                        </div>
                        <a href="{{ route('basvuru') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-green-400 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-2xl hover:shadow-emerald-500/30 hover:scale-105 transition-all duration-300">
                            <i class="fas fa-paper-plane"></i>
                            Danışmanlık Başvurusu Yapın
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-10">
                    <a href="{{ route('hizmetler') }}" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-800 transition group">
                        <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                        Tüm Hizmetlere Dön
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection