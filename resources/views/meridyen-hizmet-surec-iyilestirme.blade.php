@extends('meridyen-layout')

@section('title', 'Süreç İyileştirme - Meridyen Danışmanlık')

@section('content')
<!-- ===== HERO ===== -->
<section class="relative overflow-hidden" style="background: linear-gradient(135deg, #4c1d95, #8b5cf6, #a78bfa);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-white rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 py-20 md:py-28 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <span class="inline-block bg-white/10 backdrop-blur-sm text-white/90 px-6 py-2 rounded-full text-sm font-medium border border-white/10 mb-4">
                <i class="fas fa-project-diagram mr-2"></i> SÜREÇ İYİLEŞTİRME
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-200 to-pink-200">Süreç İyileştirme</span>
            </h1>
            <p class="text-purple-100/90 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
                Operasyonel verimliliği artırma ve süreç optimizasyonu çözümleri
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="#detay" class="inline-flex items-center gap-2 bg-white text-purple-700 px-8 py-3 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-purple-500/30 hover:scale-105 transition-all duration-300">
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
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-purple-200">
            <div class="bg-gradient-to-r from-purple-600 via-purple-500 to-pink-400 p-8 md:p-12 text-white">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-4xl backdrop-blur-sm">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold">Süreç İyileştirme</h2>
                        <p class="text-purple-100/90">Operasyonel verimliliği artırma çözümleri</p>
                    </div>
                </div>
            </div>

            <div class="p-8 md:p-12">
                <div class="prose max-w-none">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Hizmet Hakkında</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Süreç iyileştirme, kurumunuzun operasyonel verimliliğini artırmak için kritik bir alandır. 
                        Süreç optimizasyonu, verimlilik artırma, operasyonel mükemmellik ve dijital dönüşüm 
                        konularında uzman ekibimizle yanınızdayız. İş süreçlerinizi analiz ediyor ve iyileştiriyoruz.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mt-8">
                        <div class="bg-purple-50 rounded-2xl p-6 border border-purple-200">
                            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Süreç Optimizasyonu</h4>
                            <p class="text-gray-600 text-sm mt-2">Mevcut süreçleri analiz ederek verimsizlikleri gideriyoruz.</p>
                        </div>
                        <div class="bg-purple-50 rounded-2xl p-6 border border-purple-200">
                            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Verimlilik Arttırma</h4>
                            <p class="text-gray-600 text-sm mt-2">Operasyonel verimliliği artıracak stratejiler geliştiriyoruz.</p>
                        </div>
                        <div class="bg-purple-50 rounded-2xl p-6 border border-purple-200">
                            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-medal"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Operasyonel Mükemmellik</h4>
                            <p class="text-gray-600 text-sm mt-2">En iyi uygulamaları kurumunuza entegre ediyoruz.</p>
                        </div>
                        <div class="bg-purple-50 rounded-2xl p-6 border border-purple-200">
                            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Dijital Dönüşüm</h4>
                            <p class="text-gray-600 text-sm mt-2">Dijital teknolojilerle süreçleri modernize ediyoruz.</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">Hizmet İçeriği</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-5 py-4 border border-purple-200">
                            <i class="fas fa-check-circle text-purple-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Süreç Optimizasyonu</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-5 py-4 border border-purple-200">
                            <i class="fas fa-check-circle text-purple-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Verimlilik Arttırma</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-5 py-4 border border-purple-200">
                            <i class="fas fa-check-circle text-purple-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Operasyonel Mükemmellik</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-5 py-4 border border-purple-200">
                            <i class="fas fa-check-circle text-purple-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Dijital Dönüşüm</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-5 py-4 border border-purple-200">
                            <i class="fas fa-check-circle text-purple-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Performans Yönetimi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-5 py-4 border border-purple-200">
                            <i class="fas fa-check-circle text-purple-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Değişim Yönetimi</span>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">Kazanımlar</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-5 border border-purple-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-rocket text-purple-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Verimlilik Artışı</h4>
                            <p class="text-gray-600 text-sm">Operasyonel verimlilikte ölçülebilir iyileşme</p>
                        </div>
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-5 border border-purple-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-money-bill-wave text-purple-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Maliyet Azaltma</h4>
                            <p class="text-gray-600 text-sm">Gereksiz maliyetleri ortadan kaldırma</p>
                        </div>
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-5 border border-purple-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-smile text-purple-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Müşteri Memnuniyeti</h4>
                            <p class="text-gray-600 text-sm">Daha hızlı ve kaliteli hizmet sunumu</p>
                        </div>
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-5 border border-purple-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-trophy text-purple-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Rekabet Avantajı</h4>
                            <p class="text-gray-600 text-sm">Rakiplerinize karşı üstünlük sağlama</p>
                        </div>
                    </div>

                    <div class="mt-10 p-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl border border-purple-200">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <p class="text-gray-700"><i class="fas fa-clock text-purple-600 mr-2"></i> <span class="font-semibold">Süre:</span> 3-8 Hafta</p>
                                <p class="text-gray-700"><i class="fas fa-users text-purple-600 mr-2"></i> <span class="font-semibold">Ekip:</span> Uzman Danışmanlar</p>
                                <p class="text-gray-700"><i class="fas fa-check-circle text-purple-600 mr-2"></i> <span class="font-semibold">Garanti:</span> %100 Memnuniyet</p>
                            </div>
                            <a href="{{ route('basvuru') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-pink-400 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-2xl hover:shadow-purple-500/30 hover:scale-105 transition-all duration-300">
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
            <a href="{{ route('hizmetler') }}" class="inline-flex items-center gap-2 text-purple-600 font-semibold hover:text-purple-800 transition group">
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
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-purple-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Süreç iyileştirme çalışması ne kadar sürer?</h4>
                <p class="text-gray-600 mt-2">Genellikle 3-8 hafta arasında sürer. Kurumun büyüklüğüne ve süreç karmaşıklığına göre süre değişebilir.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-purple-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Süreç iyileştirme hangi alanları kapsar?</h4>
                <p class="text-gray-600 mt-2">Üretim, hizmet, satış, pazarlama, insan kaynakları ve finans gibi tüm operasyonel alanları kapsar.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-purple-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Dijital dönüşüm süreç iyileştirmenin bir parçası mı?</h4>
                <p class="text-gray-600 mt-2">Evet, dijital dönüşüm süreç iyileştirmenin önemli bir bileşenidir. Modern teknolojilerle süreçleri otomatize ediyoruz.</p>
            </div>
        </div>
    </div>
</section>
@endsection