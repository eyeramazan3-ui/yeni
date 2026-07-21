@extends('meridyen-layout')

@section('title', 'Kurumsal Çözümler - Meridyen Danışmanlık')

@section('content')
<section class="bg-white py-16 md:py-24">
    <div class="container mx-auto px-4">
        <!-- Başlık -->
        <div class="text-center max-w-3xl mx-auto fadeInUp">
            <span class="tag" style="background: #dbeafe; color: #1e3a5f;"><i class="fas fa-cog mr-1"></i> KURUMSAL ÇÖZÜMLER</span>
            <h2 class="section-title text-3xl md:text-5xl">Kurumunuzu <span class="gradient-text">geleceğe</span> taşıyoruz</h2>
            <p class="text-gray-500 mt-4 text-base md:text-lg">18 yıllık deneyimle, işletmenize özel stratejik çözümler sunuyoruz.</p>
            <div class="section-divider"></div>
            <p class="text-gray-500 mt-6 text-sm md:text-base max-w-2xl mx-auto">
                Kurumunuzun büyüme hedeflerine ulaşması için ihtiyaç duyduğu tüm stratejik çözümleri 
                tek bir çatı altında sunuyoruz. Uzman ekibimizle, size özel danışmanlık hizmetleri geliştiriyoruz.
            </p>
        </div>

        <!-- ===== 1. STRATEJİK PLANLAMA - CANLI MAVİ ===== -->
        <div class="service-detail-card mt-16" style="animation-delay: 0.1s;">
            <div class="flex flex-col md:flex-row bg-white rounded-3xl shadow-xl overflow-hidden border border-blue-200 hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-500 group hover:-translate-y-2">
                <div class="md:w-2/5 bg-gradient-to-br from-blue-600 via-blue-500 to-cyan-400 p-8 md:p-12 text-white flex flex-col justify-center relative overflow-hidden min-h-[280px] md:min-h-[400px]">
                    <div class="absolute inset-0">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 animate-pulse"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full -ml-32 -mb-32 animate-pulse" style="animation-delay: 1s;"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full animate-spin-slow"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-6xl md:text-7xl font-bold text-white/10 group-hover:scale-110 transition-all duration-500">01</span>
                            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-medium backdrop-blur-sm group-hover:bg-white/30 transition-all duration-300">STRATEJİ</span>
                        </div>
                        <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center text-3xl backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <i class="fas fa-chess-queen"></i>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold mt-4 group-hover:translate-x-2 transition-all duration-300">Stratejik Planlama</h3>
                        <p class="text-blue-100/90 text-sm md:text-base mt-2 group-hover:translate-x-1 transition-all duration-300">Kurumunuzu geleceğe hazırlayan stratejik yol haritası</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Pazar Analizi</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Rekabet Stratejisi</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Veri Odaklı</span>
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-white/5 rounded-full group-hover:scale-150 group-hover:bg-white/15 transition-all duration-700"></div>
                    </div>
                </div>
                <div class="md:w-3/5 p-6 md:p-10 relative">
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-ping"></span>
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-ping" style="animation-delay: 0.3s;"></span>
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-ping" style="animation-delay: 0.6s;"></span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3 flex items-center gap-2">
                        <span class="w-1 h-6 bg-gradient-to-b from-blue-600 to-cyan-400 rounded-full group-hover:h-8 transition-all duration-300"></span>
                        Hizmet Hakkında
                    </h4>
                    <p class="text-gray-600 text-base leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                        Stratejik planlama, kurumunuzun vizyonunu gerçeğe dönüştürmek için kritik bir süreçtir. 
                        18 yıllık deneyimimizle, pazar analizinden rekabet stratejisine kadar her adımda yanınızdayız. 
                        Veri odaklı yaklaşımımızla, kararlarınızı somut verilere dayandırarak riskleri en aza indiriyor, 
                        fırsatları en üst düzeye çıkarıyoruz.
                    </p>
                    <div class="grid md:grid-cols-2 gap-3 mt-5">
                        <div class="flex items-center gap-3 bg-blue-50 rounded-xl px-4 py-3 border border-blue-200 hover:bg-blue-100 transition-all duration-300 group-hover:translate-x-1">
                            <i class="fas fa-check-circle text-blue-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Pazar Analizi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-blue-50 rounded-xl px-4 py-3 border border-blue-200 hover:bg-blue-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.05s;">
                            <i class="fas fa-check-circle text-blue-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Rekabet Stratejisi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-blue-50 rounded-xl px-4 py-3 border border-blue-200 hover:bg-blue-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.1s;">
                            <i class="fas fa-check-circle text-blue-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Veri Odaklı Karar Verme</span>
                        </div>
                        <div class="flex items-center gap-3 bg-blue-50 rounded-xl px-4 py-3 border border-blue-200 hover:bg-blue-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.15s;">
                            <i class="fas fa-check-circle text-blue-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Uzun Vadeli Vizyon</span>
                        </div>
                    </div>
                    <div class="mt-5 flex items-center gap-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-blue-600 transition-colors duration-300">
                            <i class="fas fa-clock text-blue-600 group-hover:rotate-12 transition-all duration-300"></i>
                            <span>2-4 Hafta</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-blue-600 transition-colors duration-300">
                            <i class="fas fa-users text-blue-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span>Uzman Ekip</span>
                        </div>
                    </div>
                    <div class="mt-4 p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl border border-blue-200 group-hover:border-blue-300 group-hover:bg-gradient-to-r group-hover:from-blue-100 group-hover:to-cyan-100 transition-all duration-300">
                        <p class="text-sm text-gray-600"><i class="fas fa-gem text-blue-600 mr-2 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 inline-block"></i> <span class="font-semibold">Kazanımlar:</span> Sürdürülebilir Büyüme, Rekabet Avantajı, Kaynak Optimizasyonu, Risk Yönetimi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== 2. FİNANSAL DANIŞMANLIK - CANLI YEŞİL ===== -->
        <div class="service-detail-card mt-10" style="animation-delay: 0.2s;">
            <div class="flex flex-col md:flex-row bg-white rounded-3xl shadow-xl overflow-hidden border border-emerald-200 hover:shadow-2xl hover:shadow-emerald-500/20 transition-all duration-500 group hover:-translate-y-2">
                <div class="md:w-2/5 bg-gradient-to-br from-emerald-600 via-emerald-500 to-green-400 p-8 md:p-12 text-white flex flex-col justify-center relative overflow-hidden min-h-[280px] md:min-h-[400px]">
                    <div class="absolute inset-0">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 animate-pulse"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full -ml-32 -mb-32 animate-pulse" style="animation-delay: 1s;"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full animate-spin-slow"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-6xl md:text-7xl font-bold text-white/10 group-hover:scale-110 transition-all duration-500">02</span>
                            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-medium backdrop-blur-sm group-hover:bg-white/30 transition-all duration-300">FİNANS</span>
                        </div>
                        <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center text-3xl backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold mt-4 group-hover:translate-x-2 transition-all duration-300">Finansal Danışmanlık</h3>
                        <p class="text-emerald-100/90 text-sm md:text-base mt-2 group-hover:translate-x-1 transition-all duration-300">Sürdürülebilir büyüme için finansal stratejiler</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Nakit Akışı</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Bütçeleme</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Yatırım</span>
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-white/5 rounded-full group-hover:scale-150 group-hover:bg-white/15 transition-all duration-700"></div>
                    </div>
                </div>
                <div class="md:w-3/5 p-6 md:p-10 relative">
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping" style="animation-delay: 0.3s;"></span>
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping" style="animation-delay: 0.6s;"></span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3 flex items-center gap-2">
                        <span class="w-1 h-6 bg-gradient-to-b from-emerald-600 to-green-400 rounded-full group-hover:h-8 transition-all duration-300"></span>
                        Hizmet Hakkında
                    </h4>
                    <p class="text-gray-600 text-base leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                        Finansal danışmanlık hizmetimiz, kurumunuzun mali sağlığını güvence altına almak için 
                        tasarlanmıştır. Nakit akışı yönetimi, bütçeleme, yatırım kararları ve finansal raporlama 
                        konularında uzman ekibimizle yanınızdayız. Sürdürülebilir büyüme için doğru finansal 
                        stratejiler geliştiriyoruz.
                    </p>
                    <div class="grid md:grid-cols-2 gap-3 mt-5">
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-4 py-3 border border-emerald-200 hover:bg-emerald-100 transition-all duration-300 group-hover:translate-x-1">
                            <i class="fas fa-check-circle text-emerald-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Nakit Akışı Yönetimi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-4 py-3 border border-emerald-200 hover:bg-emerald-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.05s;">
                            <i class="fas fa-check-circle text-emerald-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Bütçeleme</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-4 py-3 border border-emerald-200 hover:bg-emerald-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.1s;">
                            <i class="fas fa-check-circle text-emerald-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Yatırım Danışmanlığı</span>
                        </div>
                        <div class="flex items-center gap-3 bg-emerald-50 rounded-xl px-4 py-3 border border-emerald-200 hover:bg-emerald-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.15s;">
                            <i class="fas fa-check-circle text-emerald-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Finansal Raporlama</span>
                        </div>
                    </div>
                    <div class="mt-5 flex items-center gap-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-emerald-600 transition-colors duration-300">
                            <i class="fas fa-clock text-emerald-600 group-hover:rotate-12 transition-all duration-300"></i>
                            <span>2-4 Hafta</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-emerald-600 transition-colors duration-300">
                            <i class="fas fa-users text-emerald-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span>Uzman Ekip</span>
                        </div>
                    </div>
                    <div class="mt-4 p-4 bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl border border-emerald-200 group-hover:border-emerald-300 group-hover:bg-gradient-to-r group-hover:from-emerald-100 group-hover:to-green-100 transition-all duration-300">
                        <p class="text-sm text-gray-600"><i class="fas fa-gem text-emerald-600 mr-2 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 inline-block"></i> <span class="font-semibold">Kazanımlar:</span> Sürdürülebilir Büyüme, Mali Güvence, Vergi Optimizasyonu, Finansal Risk Azaltma</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== 3. DİJİTAL DÖNÜŞÜM - CANLI MOR ===== -->
        <div class="service-detail-card mt-10" style="animation-delay: 0.3s;">
            <div class="flex flex-col md:flex-row bg-white rounded-3xl shadow-xl overflow-hidden border border-purple-200 hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-500 group hover:-translate-y-2">
                <div class="md:w-2/5 bg-gradient-to-br from-purple-600 via-purple-500 to-pink-400 p-8 md:p-12 text-white flex flex-col justify-center relative overflow-hidden min-h-[280px] md:min-h-[400px]">
                    <div class="absolute inset-0">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 animate-pulse"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full -ml-32 -mb-32 animate-pulse" style="animation-delay: 1s;"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full animate-spin-slow"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-6xl md:text-7xl font-bold text-white/10 group-hover:scale-110 transition-all duration-500">03</span>
                            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-medium backdrop-blur-sm group-hover:bg-white/30 transition-all duration-300">DİJİTAL</span>
                        </div>
                        <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center text-3xl backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold mt-4 group-hover:translate-x-2 transition-all duration-300">Dijital Dönüşüm</h3>
                        <p class="text-purple-100/90 text-sm md:text-base mt-2 group-hover:translate-x-1 transition-all duration-300">Teknoloji ile geleceğe hazırlanın</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Otomasyon</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Veri Analitiği</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Bulut</span>
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-white/5 rounded-full group-hover:scale-150 group-hover:bg-white/15 transition-all duration-700"></div>
                    </div>
                </div>
                <div class="md:w-3/5 p-6 md:p-10 relative">
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="w-2 h-2 rounded-full bg-purple-400 animate-ping"></span>
                        <span class="w-2 h-2 rounded-full bg-purple-400 animate-ping" style="animation-delay: 0.3s;"></span>
                        <span class="w-2 h-2 rounded-full bg-purple-400 animate-ping" style="animation-delay: 0.6s;"></span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3 flex items-center gap-2">
                        <span class="w-1 h-6 bg-gradient-to-b from-purple-600 to-pink-400 rounded-full group-hover:h-8 transition-all duration-300"></span>
                        Hizmet Hakkında
                    </h4>
                    <p class="text-gray-600 text-base leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                        Dijital dönüşüm, günümüz iş dünyasında rekabet avantajı elde etmenin anahtarıdır. 
                        İş süreçlerinizi otomasyon, veri analitiği ve bulut çözümleriyle yeniden kurguluyoruz. 
                        Dijital dönüşüm yolculuğunuzda stratejik danışmanlık sağlayarak, teknoloji yatırımlarınızdan 
                        maksimum verim almanızı sağlıyoruz.
                    </p>
                    <div class="grid md:grid-cols-2 gap-3 mt-5">
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-4 py-3 border border-purple-200 hover:bg-purple-100 transition-all duration-300 group-hover:translate-x-1">
                            <i class="fas fa-check-circle text-purple-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">İş Süreçleri Otomasyonu</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-4 py-3 border border-purple-200 hover:bg-purple-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.05s;">
                            <i class="fas fa-check-circle text-purple-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Veri Analitiği</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-4 py-3 border border-purple-200 hover:bg-purple-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.1s;">
                            <i class="fas fa-check-circle text-purple-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Bulut Çözümleri</span>
                        </div>
                        <div class="flex items-center gap-3 bg-purple-50 rounded-xl px-4 py-3 border border-purple-200 hover:bg-purple-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.15s;">
                            <i class="fas fa-check-circle text-purple-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Dijital Strateji</span>
                        </div>
                    </div>
                    <div class="mt-5 flex items-center gap-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-purple-600 transition-colors duration-300">
                            <i class="fas fa-clock text-purple-600 group-hover:rotate-12 transition-all duration-300"></i>
                            <span>3-6 Hafta</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-purple-600 transition-colors duration-300">
                            <i class="fas fa-users text-purple-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span>Uzman Ekip</span>
                        </div>
                    </div>
                    <div class="mt-4 p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-200 group-hover:border-purple-300 group-hover:bg-gradient-to-r group-hover:from-purple-100 group-hover:to-pink-100 transition-all duration-300">
                        <p class="text-sm text-gray-600"><i class="fas fa-gem text-purple-600 mr-2 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 inline-block"></i> <span class="font-semibold">Kazanımlar:</span> Verimlilik Artışı, Rekabet Avantajı, Maliyet Azaltma, Müşteri Memnuniyeti</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== 4. RİSK YÖNETİMİ - CANLI TURUNCU/KIRMIZI ===== -->
        <div class="service-detail-card mt-10" style="animation-delay: 0.4s;">
            <div class="flex flex-col md:flex-row bg-white rounded-3xl shadow-xl overflow-hidden border border-orange-200 hover:shadow-2xl hover:shadow-orange-500/20 transition-all duration-500 group hover:-translate-y-2">
                <div class="md:w-2/5 bg-gradient-to-br from-orange-600 via-orange-500 to-red-400 p-8 md:p-12 text-white flex flex-col justify-center relative overflow-hidden min-h-[280px] md:min-h-[400px]">
                    <div class="absolute inset-0">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32 animate-pulse"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full -ml-32 -mb-32 animate-pulse" style="animation-delay: 1s;"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-white/5 rounded-full animate-spin-slow"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-6xl md:text-7xl font-bold text-white/10 group-hover:scale-110 transition-all duration-500">04</span>
                            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-medium backdrop-blur-sm group-hover:bg-white/30 transition-all duration-300">GÜVENLİK</span>
                        </div>
                        <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center text-3xl backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold mt-4 group-hover:translate-x-2 transition-all duration-300">Risk Yönetimi</h3>
                        <p class="text-orange-100/90 text-sm md:text-base mt-2 group-hover:translate-x-1 transition-all duration-300">Kurumunuzu geleceğe güvenle taşıyın</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Risk Analizi</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Kriz Yönetimi</span>
                            <span class="px-3 py-1 bg-white/15 rounded-full text-white/90 text-xs backdrop-blur-sm border border-white/20 hover:bg-white/25 transition-all duration-300">Dayanıklılık</span>
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-white/5 rounded-full group-hover:scale-150 group-hover:bg-white/15 transition-all duration-700"></div>
                    </div>
                </div>
                <div class="md:w-3/5 p-6 md:p-10 relative">
                    <div class="absolute top-4 right-4 flex gap-2">
                        <span class="w-2 h-2 rounded-full bg-orange-400 animate-ping"></span>
                        <span class="w-2 h-2 rounded-full bg-orange-400 animate-ping" style="animation-delay: 0.3s;"></span>
                        <span class="w-2 h-2 rounded-full bg-orange-400 animate-ping" style="animation-delay: 0.6s;"></span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-3 flex items-center gap-2">
                        <span class="w-1 h-6 bg-gradient-to-b from-orange-600 to-red-400 rounded-full group-hover:h-8 transition-all duration-300"></span>
                        Hizmet Hakkında
                    </h4>
                    <p class="text-gray-600 text-base leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                        Risk yönetimi, kurumunuzun sürdürülebilirliği için kritik bir öneme sahiptir. 
                        Operasyonel ve finansal riskleri önceden tespit ediyor, kriz durumlarına hazırlıklı 
                        olmanızı sağlıyoruz. Proaktif risk yönetimi yaklaşımımızla, kurumunuzun dayanıklılığını 
                        artırıyor ve belirsizlikleri fırsata dönüştürüyorsunuz.
                    </p>
                    <div class="grid md:grid-cols-2 gap-3 mt-5">
                        <div class="flex items-center gap-3 bg-orange-50 rounded-xl px-4 py-3 border border-orange-200 hover:bg-orange-100 transition-all duration-300 group-hover:translate-x-1">
                            <i class="fas fa-check-circle text-orange-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Risk Analizi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-orange-50 rounded-xl px-4 py-3 border border-orange-200 hover:bg-orange-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.05s;">
                            <i class="fas fa-check-circle text-orange-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Kriz Yönetimi</span>
                        </div>
                        <div class="flex items-center gap-3 bg-orange-50 rounded-xl px-4 py-3 border border-orange-200 hover:bg-orange-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.1s;">
                            <i class="fas fa-check-circle text-orange-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Kurumsal Dayanıklılık</span>
                        </div>
                        <div class="flex items-center gap-3 bg-orange-50 rounded-xl px-4 py-3 border border-orange-200 hover:bg-orange-100 transition-all duration-300 group-hover:translate-x-1" style="transition-delay: 0.15s;">
                            <i class="fas fa-check-circle text-orange-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span class="text-gray-700 text-sm font-medium">Proaktif Çözüm</span>
                        </div>
                    </div>
                    <div class="mt-5 flex items-center gap-4">
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-orange-600 transition-colors duration-300">
                            <i class="fas fa-clock text-orange-600 group-hover:rotate-12 transition-all duration-300"></i>
                            <span>2-4 Hafta</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 group-hover:text-orange-600 transition-colors duration-300">
                            <i class="fas fa-users text-orange-600 group-hover:scale-110 transition-all duration-300"></i>
                            <span>Uzman Ekip</span>
                        </div>
                    </div>
                    <div class="mt-4 p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-xl border border-orange-200 group-hover:border-orange-300 group-hover:bg-gradient-to-r group-hover:from-orange-100 group-hover:to-red-100 transition-all duration-300">
                        <p class="text-sm text-gray-600"><i class="fas fa-gem text-orange-600 mr-2 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 inline-block"></i> <span class="font-semibold">Kazanımlar:</span> Kurumsal Güvence, Krizlere Hazırlık, Sürdürülebilirlik, İtibar Yönetimi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== ALT BİLGİ VE BAŞVURU ===== -->
        <div class="text-center mt-16 fadeInUp">
            <p class="text-gray-500 text-sm">20+ sektörde deneyim | 240+ başarılı proje | %94 müşteri memnuniyeti</p>
            <div class="mt-6">
                <a href="/basvuru" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-400 text-white px-8 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-blue-500/30 hover:scale-105 transition-all duration-300 text-lg group">
                    <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                    Danışmanlık Başvurusu Yapın
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(40px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes spin-slow {
        from { transform: translate(-50%, -50%) rotate(0deg); }
        to { transform: translate(-50%, -50%) rotate(360deg); }
    }
    @keyframes pulse {
        0%, 100% { opacity: 0.15; }
        50% { opacity: 0.35; }
    }
    @keyframes ping {
        0% { transform: scale(0.8); opacity: 0.8; }
        70% { transform: scale(1.2); opacity: 0.2; }
        100% { transform: scale(0.8); opacity: 0.8; }
    }
    
    .fadeInLeft { animation: fadeInLeft 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
    .fadeInRight { animation: fadeInRight 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
    .fadeInUp { animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
    .animate-spin-slow { animation: spin-slow 20s linear infinite; }
    .animate-pulse { animation: pulse 2s ease-in-out infinite; }
    .animate-ping { animation: ping 1.5s ease-in-out infinite; }
    
    .service-detail-card {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    
    .service-detail-card .group-hover\:translate-x-2 {
        transition: transform 0.3s ease;
    }
    .service-detail-card .group-hover\:rotate-6 {
        transition: transform 0.5s ease;
    }
    .service-detail-card .group-hover\:scale-110 {
        transition: transform 0.3s ease;
    }
    .service-detail-card .group-hover\:h-8 {
        transition: height 0.3s ease;
    }
    .service-detail-card .group-hover\:rotate-12 {
        transition: transform 0.3s ease;
    }
    .service-detail-card .group-hover\:scale-150 {
        transition: transform 0.7s ease;
    }
    .service-detail-card .group-hover\:bg-white\/15 {
        transition: background-color 0.7s ease;
    }
    .service-detail-card .group-hover\:bg-gradient-to-r {
        transition: background-image 0.3s ease;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .service-detail-card .md\:w-2\/5 {
            min-height: 200px;
        }
        .service-detail-card .text-6xl {
            font-size: 3rem;
        }
        .service-detail-card .text-3xl {
            font-size: 1.5rem;
        }
        .animate-ping {
            display: none;
        }
    }
</style>
@endsection