@extends('meridyen-layout')

@section('title', 'Pazara Giriş - Meridyen Danışmanlık')

@section('content')
<!-- ===== HERO ===== -->
<section class="relative overflow-hidden" style="background: linear-gradient(135deg, #064e3b, #10b981, #34d399);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-white rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 py-20 md:py-28 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <span class="inline-block bg-white/10 backdrop-blur-sm text-white/90 px-6 py-2 rounded-full text-sm font-medium border border-white/10 mb-4">
                <i class="fas fa-rocket mr-2"></i> PAZARA GİRİŞ
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-200 to-green-100">Pazara Giriş</span> Stratejileri
            </h1>
            <p class="text-emerald-100/90 text-lg md:text-xl mt-4 max-w-2xl mx-auto">
                Yeni pazarlara açılma stratejileri ve uluslararası büyüme çözümleri
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="#detay" class="inline-flex items-center gap-2 bg-white text-emerald-700 px-8 py-3 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-emerald-500/30 hover:scale-105 transition-all duration-300">
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
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-emerald-200">
            <div class="bg-gradient-to-r from-emerald-600 via-emerald-500 to-green-400 p-8 md:p-12 text-white">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center text-4xl backdrop-blur-sm">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold">Pazara Giriş</h2>
                        <p class="text-emerald-100/90">Yeni pazarlara açılma stratejileri</p>
                    </div>
                </div>
            </div>

            <div class="p-8 md:p-12">
                <div class="prose max-w-none">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Hizmet Hakkında</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Yeni pazarlara açılmak, işletmenizin büyümesi için kritik bir adımdır. 
                        Pazar araştırması, giriş stratejileri, ihracat danışmanlığı ve ortaklık geliştirme 
                        konularında uzman ekibimizle yanınızdayız. Size özel pazar giriş stratejileri geliştiriyoruz.
                    </p>

                    <div class="grid md:grid-cols-2 gap-6 mt-8">
                        <div class="bg-emerald-50 rounded-2xl p-6 border border-emerald-200">
                            <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-search"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Pazar Araştırması</h4>
                            <p class="text-gray-600 text-sm mt-2">Hedef pazarı, müşteri profilini ve rekabet durumunu analiz ediyoruz.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-6 border border-emerald-200">
                            <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-map-signs"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Giriş Stratejileri</h4>
                            <p class="text-gray-600 text-sm mt-2">Pazara en uygun giriş stratejisini belirliyor ve uyguluyoruz.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-6 border border-emerald-200">
                            <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">İhracat Danışmanlığı</h4>
                            <p class="text-gray-600 text-sm mt-2">Uluslararası ticaret süreçlerinde rehberlik ve destek sağlıyoruz.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-6 border border-emerald-200">
                            <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center text-white text-xl mb-4">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 text-lg">Ortaklık Geliştirme</h4>
                            <p class="text-gray-600 text-sm mt-2">Yerel ve uluslararası iş ortaklıkları kurmanıza yardımcı oluyoruz.</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">Hizmet İçeriği</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-5 py-4 border border-emerald-200">
                            <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Pazar Araştırması</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-5 py-4 border border-emerald-200">
                            <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Giriş Stratejileri</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-5 py-4 border border-emerald-200">
                            <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">İhracat Danışmanlığı</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-5 py-4 border border-emerald-200">
                            <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Ortaklık Geliştirme</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-5 py-4 border border-emerald-200">
                            <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Kültürel Uyum</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-5 py-4 border border-emerald-200">
                            <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                            <span class="text-gray-700 font-medium">Yasal Uyum</span>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-4">Kazanımlar</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl p-5 border border-emerald-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-expand text-emerald-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Yeni Pazarlara Erişim</h4>
                            <p class="text-gray-600 text-sm">Ulusal ve uluslararası pazarlara açılma fırsatı</p>
                        </div>
                        <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl p-5 border border-emerald-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-chart-line text-emerald-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Büyüme Potansiyeli</h4>
                            <p class="text-gray-600 text-sm">Yeni müşteri segmentlerine ulaşma imkanı</p>
                        </div>
                        <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl p-5 border border-emerald-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-shield-alt text-emerald-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Risk Azaltma</h4>
                            <p class="text-gray-600 text-sm">Pazara giriş risklerini minimize etme</p>
                        </div>
                        <div class="bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl p-5 border border-emerald-200 hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-handshake text-emerald-600 text-2xl mb-2"></i>
                            <h4 class="font-bold text-gray-800">Stratejik Ortaklıklar</h4>
                            <p class="text-gray-600 text-sm">Güçlü iş ortaklıkları kurma</p>
                        </div>
                    </div>

                    <div class="mt-10 p-6 bg-gradient-to-r from-emerald-50 to-green-50 rounded-2xl border border-emerald-200">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <p class="text-gray-700"><i class="fas fa-clock text-emerald-600 mr-2"></i> <span class="font-semibold">Süre:</span> 3-6 Hafta</p>
                                <p class="text-gray-700"><i class="fas fa-users text-emerald-600 mr-2"></i> <span class="font-semibold">Ekip:</span> Uzman Danışmanlar</p>
                                <p class="text-gray-700"><i class="fas fa-check-circle text-emerald-600 mr-2"></i> <span class="font-semibold">Garanti:</span> %100 Memnuniyet</p>
                            </div>
                            <a href="{{ route('basvuru') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-green-400 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-2xl hover:shadow-emerald-500/30 hover:scale-105 transition-all duration-300">
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
            <a href="{{ route('hizmetler') }}" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-800 transition group">
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
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-emerald-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Pazara giriş stratejisi ne kadar sürer?</h4>
                <p class="text-gray-600 mt-2">Genellikle 3-6 hafta arasında sürer. Pazarın büyüklüğüne ve karmaşıklığına göre süre değişebilir.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-emerald-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Hangi ülkelerde deneyiminiz var?</h4>
                <p class="text-gray-600 mt-2">Avrupa, Orta Doğu, Asya ve Amerika pazarlarında deneyimimiz bulunmaktadır.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-emerald-200 transition-all duration-300">
                <h4 class="font-bold text-gray-800 text-lg">Pazara giriş danışmanlığı nasıl başlar?</h4>
                <p class="text-gray-600 mt-2">Ücretsiz ön görüşme ile başlıyoruz. Hedef pazarınızı analiz ediyor, size özel bir strateji sunuyoruz.</p>
            </div>
        </div>
    </div>
</section>
@endsection