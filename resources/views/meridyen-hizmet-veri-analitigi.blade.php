@extends('meridyen-layout')

@section('title', 'Veri Analitiği - Meridyen Danışmanlık')

@section('content')
<!-- ===== HERO ===== -->
<section class="relative overflow-hidden" style="background: linear-gradient(135deg, #9a3412, #f59e0b, #fbbf24);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-white rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 py-20 md:py-28 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <span class="inline-block bg-white/10 backdrop-blur-sm text-white/90 px-6 py-2 rounded-full text-sm font-medium border border-white/10 mb-4">
                <i class="fas fa-chart-pie mr-2"></i> VERİ ANALİTİĞİ
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-yellow-100">Veri Analitiği</span>
            </h1>
            <p class="text-amber-100/90 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
                Veri odaklı karar alma ve stratejik analiz çözümleri
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="#detay" class="inline-flex items-center gap-2 bg-white text-amber-700 px-8 py-3 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-amber-500/30 hover:scale-105 transition-all duration-300">
                    Detaylı Bilgi
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="{{ route('basvuru') }}" class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 text-white px-8 py-3 rounded-2xl font-semibold hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-paper-plane"></i>
                    Başvuru Yap
                </a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 60 C320 120 480 10 720 60 C960 110 1120 20 1440 60 L1440 120 L0 120 Z" fill="#f8fafc"/>
            <path d="M0 80 C400 20 600 110 900 80 C1200 50 1320 110 1440 80 L1440 120 L0 120 Z" fill="#f8fafc" opacity="0.5"/>
        </svg>
    </div>
</section>

<!-- ===== DETAY ===== -->
<section id="detay" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-amber-200">
            <div class="bg-gradient-to-r from-amber-600 via-orange-500 to-amber-400 p-8 md:p-12 text-white">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-4xl backdrop-blur-sm">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold">Veri Analitiği</h2>
                        <p class="text-amber-100/90">Veri odaklı karar alma çözümleri</p>
                    </div>
                </div>
            </div>

            <div class="p-8 md:p-12">
                <div class="prose max-w-none">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Hizmet Hakkında</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Veri analitiği, günümüz iş dünyasında rekabet avantajı elde etmenin anahtarıdır. 
                        Veri stratejisi, Business Intelligence, veri görünümleme ve yapay zeka çözümleri 
                        konularında uzman ekibimizle yanınızdayız. Verilerinizi anlamlandırıyor ve stratejik 
                        kararlarınıza yön veriyoruz.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mt-8">
                        <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200">
                            <div class="w-12 h-12 bg-amber-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-database"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Veri Stratejisi</h4>
                            <p class="text-gray-600 text-sm mt-2">Kurumunuz için veri stratejisi geliştiriyor ve uyguluyoruz.</p>
                        </div>
                        <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200">
                            <div class="w-12 h-12 bg-amber-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Business Intelligence</h4>
                            <p class="text-gray-600 text-sm mt-2">İş zekası çözümleriyle verileri anlamlandırıyoruz.</p>
                        </div>
                        <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200">
                            <div class="w-12 h-12 bg-amber-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Veri Görünümleme</h4>
                            <p class="text-gray-600 text-sm mt-2">Karmaşık verileri görsel ve anlaşılır hale getiriyoruz.</p>
                        </div>
                        <div class="bg-amber-50 rounded-2xl p-6 border border-amber-200">
                            <div class="w-12 h-12 bg-amber-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Yapay Zeka Çözümleri</h4>
                            <p class="text-gray-600 text-sm mt-2">Yapay zeka ile öngörü analizleri ve otomasyon çözümleri.</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">Hizmet İçeriği</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-amber-50 rounded-xl px-5 py-4 border border-amber-200">
                            <i class="fas fa-check-circle text-amber-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Veri Stratejisi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-amber-50 rounded-xl px-5 py-4 border border-amber-200">
                            <i class="fas fa-check-circle text-amber-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Business Intelligence</span>
                        </div>
                        <div class="flex items-center gap-3 bg-amber-50 rounded-xl px-5 py-4 border border-amber-200">
                            <i class="fas fa-check-circle text-amber-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Veri Görünümleme</span>
                        </div>
                        <div class="flex items-center gap-3 bg-amber-50 rounded-xl px-5 py-4 border border-amber-200">
                            <i class="fas fa-check-circle text-amber-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Yapay Zeka Çözümleri</span>
                        </div>
                        <div class="flex items-center gap-3 bg-amber-50 rounded-xl px-5 py-4 border border-amber-200">
                            <i class="fas fa-check-circle text-amber-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Öngörü Analizi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-amber-50 rounded-xl px-5 py-4 border border-amber-200">
                            <i class="fas fa-check-circle text-amber-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Veri Güvenliği</span>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">Kazanımlar</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 border border-amber-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-lightbulb text-amber-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Veri Odaklı Kararlar</h4>
                            <p class="text-gray-600 text-sm">Verilere dayanan stratejik kararlar</p>
                        </div>
                        <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 border border-amber-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-eye text-amber-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">İş Zekası</h4>
                            <p class="text-gray-600 text-sm">İş süreçlerinde derinlemesine görünürlük</p>
                        </div>
                        <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 border border-amber-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-robot text-amber-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Otomasyon</h4>
                            <p class="text-gray-600 text-sm">Tekrarlayan işlerin otomatikleştirilmesi</p>
                        </div>
                        <div class="bg-gradient-to-r from-amber-50 to-yellow-50 rounded-xl p-5 border border-amber-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-chart-pie text-amber-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Rekabet Avantajı</h4>
                            <p class="text-gray-600 text-sm">Rakiplerden bir adım önde olma</p>
                        </div>
                    </div>

                    <div class="mt-10 p-6 bg-gradient-to-r from-amber-50 to-yellow-50 rounded-2xl border border-amber-200">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <p class="text-gray-700"><i class="fas fa-clock text-amber-600 mr-2"></i> <span class="font-semibold">Süre:</span> 4-8 Hafta</p>
                                <p class="text-gray-700"><i class="fas fa-users text-amber-600 mr-2"></i> <span class="font-semibold">Ekip:</span> Uzman Danışmanlar</p>
                                <p class="text-gray-700"><i class="fas fa-check-circle text-amber-600 mr-2"></i> <span class="font-semibold">Garanti:</span> %100 Memnuniyet</p>
                            </div>
                            <a href="{{ route('basvuru') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-600 to-yellow-400 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-2xl hover:shadow-amber-500/30 hover:scale-105 transition-all duration-300">
                                <i class="fas fa-paper-plane"></i>
                                Danışmanlık Başvurusu Yapın
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('hizmetler') }}" class="inline-flex items-center gap-2 text-amber-600 font-semibold hover:text-amber-800 transition group">
                <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                Tüm Hizmetlere Dön
            </a>
        </div>
    </div>
</section>

<!-- ===== SIK SORULAN SORULAR ===== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Sık Sorulan <span class="gradient-text">Sorular</span></h2>
            <div class="section-divider"></div>
        </div>
        <div class="space-y-4">
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-amber-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Veri analitiği çalışması ne kadar sürer?</h4>
                <p class="text-gray-600 mt-2">Genellikle 4-8 hafta arasında sürer. Veri hacmine ve karmaşıklığına göre süre değişebilir.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-amber-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Yapay zeka çözümleri nelerdir?</h4>
                <p class="text-gray-600 mt-2">Öngörü analizi, doğal dil işleme, makine öğrenmesi ve otomasyon çözümleri sunuyoruz.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-amber-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Veri güvenliği nasıl sağlanıyor?</h4>
                <p class="text-gray-600 mt-2">Veri güvenliği en öncelikli konumuz. Gizlilik, bütünlük ve erişilebilirlik ilkeleriyle hareket ediyoruz.</p>
            </div>
        </div>
    </div>
</section>
@endsection