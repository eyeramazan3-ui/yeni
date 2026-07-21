@extends('meridyen-layout')

@section('title', 'Ana Sayfa - Meridyen Danışmanlık')

@section('content')
<!-- ===== HERO ===== -->
<section class="gradient-bg text-white py-20 md:py-28 relative hero-transition">
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            <div>
                <span class="hero-badge inline-block mb-4 scaleIn">
                    <i class="fas fa-star text-yellow-400 mr-1"></i> KURUMSAL DANIŞMANLIK
                </span>
                <h1 class="text-3xl md:text-6xl font-extrabold leading-tight fadeInUp">
                    Büyümenizi <br>
                    <span class="shimmer-text">stratejiye</span> dönüştürüyoruz.
                </h1>
                <p class="text-base md:text-lg text-blue-100/90 mt-4 fadeInUp" style="animation-delay:0.2s;">
                    Meridyen Danışmanlık, kurumların potansiyelini ölçülebilir sonuçlara çeviren tek çatı altında bütünsel bir danışmanlık deneyimi sunar.
                </p>
                <div class="flex flex-wrap gap-4 mt-8 fadeInUp" style="animation-delay:0.4s;">
                    <a href="{{ route('hizmetler') }}" class="lego-btn">Hizmeti Keşfedin <i class="fas fa-arrow-right ml-2"></i></a>
                    <a href="{{ route('hakkimizda') }}" class="lego-btn-outline">Kurum Hakkında</a>
                </div>
                <div class="flex flex-wrap gap-6 mt-8 text-blue-200 text-sm fadeInUp" style="animation-delay:0.6s;">
                    <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-400"></i> Uzman Kadro</span>
                    <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-400"></i> Veri Odaklı</span>
                    <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-400"></i> Sonuç Garantili</span>
                </div>
            </div>
            <div class="relative fadeInRight" style="animation-delay:0.3s;">
                <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-8 glow-pulse">
                    <div class="text-7xl font-bold shimmer-text">%37</div>
                    <p class="text-blue-200 mt-2">ortalama verim artışı</p>
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div class="bg-white/5 hover:bg-white/10 rounded-xl p-4 text-center transition cursor-pointer">
                            <div class="text-2xl font-bold text-white">Büyüme</div>
                        </div>
                        <div class="bg-white/5 hover:bg-white/10 rounded-xl p-4 text-center transition cursor-pointer">
                            <div class="text-2xl font-bold text-white">Verimlilik</div>
                        </div>
                        <div class="bg-white/5 hover:bg-white/10 rounded-xl p-4 text-center transition cursor-pointer">
                            <div class="text-2xl font-bold text-white">İnovasyon</div>
                        </div>
                        <div class="bg-white/5 hover:bg-white/10 rounded-xl p-4 text-center transition cursor-pointer">
                            <div class="text-2xl font-bold text-white">Liderlik</div>
                        </div>
                    </div>
                </div>
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-blue-400 rounded-full opacity-20 float-bob-y"></div>
                <div class="absolute -bottom-6 -left-6 w-20 h-20 bg-blue-300 rounded-full opacity-20 float-bob-y" style="animation-delay:1.5s;"></div>
            </div>
        </div>
    </div>
    
    <!-- ===== DALGA EFEXTİ ===== -->
    <div class="custom-wave-container">
        <svg class="custom-wave" viewBox="0 0 1440 120" preserveAspectRatio="none">
            <defs>
                <linearGradient id="waveGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#f8fafc;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#e2e8f0;stop-opacity:0.9" />
                    <stop offset="100%" style="stop-color:#f8fafc;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="waveGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#f1f5f9;stop-opacity:0.6" />
                    <stop offset="50%" style="stop-color:#e2e8f0;stop-opacity:0.4" />
                    <stop offset="100%" style="stop-color:#f1f5f9;stop-opacity:0.6" />
                </linearGradient>
            </defs>
            <path class="wave-path wave1" d="M0,60 C320,120 480,10 720,60 C960,110 1120,20 1440,60 L1440,120 L0,120 Z" fill="url(#waveGrad1)"/>
            <path class="wave-path wave2" d="M0,80 C400,20 600,110 900,80 C1200,50 1320,110 1440,80 L1440,120 L0,120 Z" fill="url(#waveGrad2)"/>
            <path class="wave-path wave3" d="M0,95 C300,80 500,110 800,95 C1100,80 1300,110 1440,95 L1440,120 L0,120 Z" fill="#f8fafc" opacity="0.3"/>
        </svg>
    </div>
</section>

<!-- ===== HAKKIMIZDA ===== -->
<section class="min-h-screen flex items-center py-16 md:py-20" style="background: linear-gradient(135deg, #f0f4ff 0%, #dbeafe 50%, #bfdbfe 100%);">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white;"><i class="fas fa-building mr-1"></i> KURUM HAKKINDA</span>
            <h2 class="section-title">18 yıldır kurumların yanında, <br><span class="gradient-text">sonuç odaklı danışmanlık.</span></h2>
            <div class="section-divider"></div>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mt-12">
            <div class="stat-card fadeInLeft" onclick="spinIcon(this)" style="animation-delay: 0s;">
                <div class="aurora-bg"></div>
                <div class="aurora-content">
                    <div class="icon-bg"><i class="fas fa-calendar-check"></i></div>
                    <div class="number">18+</div>
                    <div class="label">Yıllık deneyim</div>
                    <div class="stat-desc">Sektörde güvenilir isim</div>
                </div>
            </div>
            <div class="stat-card fadeInRight" style="animation-delay: 0.15s;" onclick="spinIcon(this)">
                <div class="aurora-bg"></div>
                <div class="aurora-content">
                    <div class="icon-bg"><i class="fas fa-project-diagram"></i></div>
                    <div class="number">240+</div>
                    <div class="label">Tamamlanan proje</div>
                    <div class="stat-desc">Başarıyla tamamlandı</div>
                </div>
            </div>
            <div class="stat-card fadeInLeft" style="animation-delay: 0.3s;" onclick="spinIcon(this)">
                <div class="aurora-bg"></div>
                <div class="aurora-content">
                    <div class="icon-bg"><i class="fas fa-smile"></i></div>
                    <div class="number">%94</div>
                    <div class="label">Müşteri memnuniyeti</div>
                    <div class="stat-desc">Referans ile büyüyoruz</div>
                </div>
            </div>
            <div class="stat-card fadeInRight" style="animation-delay: 0.45s;" onclick="spinIcon(this)">
                <div class="aurora-bg"></div>
                <div class="aurora-content">
                    <div class="icon-bg"><i class="fas fa-layer-group"></i></div>
                    <div class="number">32</div>
                    <div class="label">Sektör uzmanlığı</div>
                    <div class="stat-desc">Farklı sektörlerde tecrübe</div>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 mt-12 items-center">
            <div class="about-content-card fadeInLeft">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-white/50 hover:shadow-2xl transition duration-500">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-10 h-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded"></span>
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider">Hakkımızda</span>
                        <span class="w-10 h-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded"></span>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        2007 yılında İstanbul'da kurulan <strong class="text-blue-700">Meridyen Danışmanlık</strong>, KOBİ'lerden büyük ölçekli holdinglere kadar geniş bir yelpazede stratejik dönüşüm projeleri yürütmüştür.
                    </p>
                    <p class="text-gray-600 mt-4 leading-relaxed">
                        Sektör deneyimini analitik yöntemlerle birleştiren ekibimiz, her kuruma özel çözümler tasarlar.
                    </p>

                    <div class="space-y-3 mt-6">
                        <div class="feature-item fadeInLeft" style="border-color: #bfdbfe; background: rgba(255,255,255,0.7); animation-delay: 0.1s;">
                            <div class="check" style="background: #1e3a5f; color: white;"><i class="fas fa-check"></i></div>
                            <span class="feature-text" style="color: #1e293b;">Uzman ve sertifikalı danışman kadrosu</span>
                        </div>
                        <div class="feature-item fadeInRight" style="border-color: #93c5fd; background: rgba(255,255,255,0.7); animation-delay: 0.2s;">
                            <div class="check" style="background: #1e40af; color: white;"><i class="fas fa-check"></i></div>
                            <span class="feature-text" style="color: #1e293b;">Veri odaklı, ölçülebilir metodoloji</span>
                        </div>
                        <div class="feature-item fadeInLeft" style="border-color: #60a5fa; background: rgba(255,255,255,0.7); animation-delay: 0.3s;">
                            <div class="check" style="background: #1e3a8a; color: white;"><i class="fas fa-check"></i></div>
                            <span class="feature-text" style="color: #1e293b;">Uçtan uca proje yönetimi ve saha desteği</span>
                        </div>
                    </div>

                    <a href="{{ route('hakkimizda') }}" class="inline-block mt-6 text-blue-600 font-semibold hover:text-blue-800 transition">
                        Detaylı Bilgi <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <div class="about-image-card fadeInRight" style="animation-delay: 0.3s;">
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-800 via-blue-600 to-blue-400 p-1.5 rounded-2xl shadow-2xl">
                        <img src="https://picsum.photos/seed/meridyen3/600/450" alt="Hakkımızda" class="rounded-2xl w-full hover:scale-105 transition duration-700 ease-in-out">
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-blue-600 rounded-full opacity-10 float-bob-y"></div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-indigo-500 rounded-full opacity-15 float-bob-y" style="animation-delay:1.5s;"></div>
                    <div class="absolute top-1/2 -left-3 w-16 h-16 bg-blue-400 rounded-full opacity-10 float-bob-y" style="animation-delay:0.8s;"></div>
                    <div class="absolute bottom-1/3 -right-3 w-12 h-12 bg-indigo-300 rounded-full opacity-15 float-bob-y" style="animation-delay:2s;"></div>
                    <div class="absolute -bottom-6 -right-6 bg-white/90 backdrop-blur-sm rounded-xl px-5 py-3 shadow-lg border border-blue-100">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white text-sm font-bold">18+</div>
                            <div><p class="text-xs text-gray-500">Yıllık</p><p class="text-sm font-bold text-gray-800">Deneyim</p></div>
                        </div>
                    </div>
                    <div class="absolute -top-3 -left-3 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-2 shadow-lg border border-blue-100">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <span class="text-sm font-bold text-gray-800">%94</span>
                            <span class="text-xs text-gray-500">Memnuniyet</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== KURUMSAL ÇÖZÜMLER ===== -->
<section class="bg-white py-24">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto fadeInUp">
            <span class="tag" style="background: #dbeafe; color: #1e3a5f;"><i class="fas fa-cog mr-1"></i> KURUMSAL ÇÖZÜMLER</span>
            <h2 class="section-title">Kurumunuzu <span class="gradient-text">geleceğe</span> taşıyoruz</h2>
            <p class="text-gray-500 mt-4 text-lg">18 yıllık deneyimle, işletmenize özel stratejik çözümler sunuyoruz.</p>
            <div class="section-divider"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mt-12">
            <!-- 01 - Stratejik Planlama -->
            <div class="aurora-service-card fadeInLeft" style="animation-delay: 0.1s;">
                <div class="aurora-service-bg" style="background: conic-gradient(from 0deg, #1a365d, #2563eb, #3b82f6, #60a5fa, #1a365d);"></div>
                <div class="aurora-service-content">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-chess-queen"></i></div>
                        <span class="service-number">01</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-3">Stratejik Planlama</h3>
                    <p class="text-white/70 text-sm mt-2 leading-relaxed">Kurumunuzun uzun vadeli hedeflerine ulaşması için ölçülebilir, veri odaklı yol haritaları tasarlıyoruz.</p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Pazar Analizi</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Rekabet Stratejisi</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Veri Odaklı</span>
                    </div>
                    <a href="{{ route('hizmet.stratejik-planlama') }}" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>

            <!-- 02 - Finansal Danışmanlık -->
            <div class="aurora-service-card fadeInRight" style="animation-delay: 0.2s;">
                <div class="aurora-service-bg" style="background: conic-gradient(from 90deg, #1e3a5f, #2563eb, #3b82f6, #60a5fa, #1e3a5f);"></div>
                <div class="aurora-service-content">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-coins"></i></div>
                        <span class="service-number">02</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-3">Finansal Danışmanlık</h3>
                    <p class="text-white/70 text-sm mt-2 leading-relaxed">Nakit akışı, bütçeleme ve yatırım kararlarında sürdürülebilir büyümeyi güvence altına alıyoruz.</p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Nakit Akışı</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Bütçeleme</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Yatırım</span>
                    </div>
                    <a href="{{ route('hizmet.finansal-danismanlik') }}" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>

            <!-- 03 - Dijital Dönüşüm -->
            <div class="aurora-service-card fadeInLeft" style="animation-delay: 0.3s;">
                <div class="aurora-service-bg" style="background: conic-gradient(from 180deg, #1a365d, #2563eb, #3b82f6, #60a5fa, #1a365d);"></div>
                <div class="aurora-service-content">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                        <span class="service-number">03</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-3">Dijital Dönüşüm</h3>
                    <p class="text-white/70 text-sm mt-2 leading-relaxed">Süreçlerinizi modern teknolojilerle yeniden kurgulayarak verimliliği ve rekabet gücünü artırıyoruz.</p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Otomasyon</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Veri Analitiği</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Bulut Çözümleri</span>
                    </div>
                    <a href="{{ route('hizmet.dijital-donusum') }}" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>

            <!-- 04 - Risk Yönetimi -->
            <div class="aurora-service-card fadeInRight" style="animation-delay: 0.4s;">
                <div class="aurora-service-bg" style="background: conic-gradient(from 270deg, #1e3a5f, #2563eb, #3b82f6, #60a5fa, #1e3a5f);"></div>
                <div class="aurora-service-content">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
                        <span class="service-number">04</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-3">Risk Yönetimi</h3>
                    <p class="text-white/70 text-sm mt-2 leading-relaxed">Operasyonel ve finansal riskleri önceden öngörür, kurumsal dayanıklılığınızı güçlendiririz.</p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Risk Analizi</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Kriz Yönetimi</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-white/80 text-xs">Dayanıklılık</span>
                    </div>
                    <a href="{{ route('hizmet.risk-yonetimi') }}" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 fadeInUp">
            <p class="text-gray-500 text-sm">20+ sektörde deneyim | 240+ başarılı proje | %94 müşteri memnuniyeti</p>
            <div class="mt-6">
                <a href="{{ route('hizmetler') }}" class="inline-block text-blue-600 font-semibold hover:text-blue-800 transition">
                    Tüm Hizmetleri Gör <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== KURUMSAL STRATEJİ & BÜYÜME DANIŞMANLIĞI (SÜREÇ) ===== -->
<section id="surec" class="bg-gray-50 py-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-64 h-64 bg-blue-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-indigo-500 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 8px 24px;">
                <i class="fas fa-rocket mr-2"></i> KURUMSAL STRATEJİ & BÜYÜME DANIŞMANLIĞI
            </span>
            <h2 class="section-title mt-4" style="font-size: 52px; line-height: 1.2;">
                Kurumunuzu 
                <span class="gradient-text">geleceğe</span> 
                <br>taşıyacak strateji
            </h2>
            <div class="section-divider" style="width: 80px; height: 5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
            <p class="text-gray-500 mt-6 text-lg max-w-2xl mx-auto leading-relaxed">
                Kurumunuzun mevcut durumunu 360° analiz eder, pazar fırsatlarını değerlendirir 
                ve sürdürülebilir büyüme için uçtan uca bir strateji tasarlarız.
            </p>
        </div>

        <div class="process-slider-container mt-16">
            <div class="process-slider-track" id="processSlider">
                <div class="process-card-slide">
                    <div class="process-card-inner" style="background: #E3EFFD; border-color: #C8DFF5;">
                        <div class="process-number">
                            <span>01</span>
                            <div class="process-line"></div>
                        </div>
                        <div class="process-content">
                            <div class="process-icon" style="background: #C8DFF5; color: #1A4A7A;">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">Keşif &amp; Analiz</h3>
                            <p class="text-gray-600 mt-3 leading-relaxed">
                                Mevcut durumunuzu, verilerinizi ve hedeflerinizi 
                                <span class="text-blue-600 font-medium">derinlemesine inceliyoruz</span>. 
                                Güçlü ve zayıf yönlerinizi belirliyoruz.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Pazar Analizi</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Rekabet Stratejisi</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">SWOT Analizi</span>
                            </div>
                            <a href="{{ route('surec.detay') }}?adim=1" class="detail-link">
                                Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="process-card-slide">
                    <div class="process-card-inner" style="background: #E3EFFD; border-color: #C8DFF5;">
                        <div class="process-number">
                            <span>02</span>
                            <div class="process-line"></div>
                        </div>
                        <div class="process-content">
                            <div class="process-icon" style="background: #C8DFF5; color: #1A4A7A;">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">Strateji Tasarımı</h3>
                            <p class="text-gray-600 mt-3 leading-relaxed">
                                Kurumunuza özel, <span class="text-blue-600 font-medium">uygulanabilir bir eylem planı</span> 
                                ve öncelik matrisi oluşturuyoruz. Hedeflerinize giden yolu haritalıyoruz.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Operasyonel Verimlilik</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Performans Takibi</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">KPI Belirleme</span>
                            </div>
                            <a href="{{ route('surec.detay') }}?adim=2" class="detail-link">
                                Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="process-card-slide">
                    <div class="process-card-inner" style="background: #E3EFFD; border-color: #C8DFF5;">
                        <div class="process-number">
                            <span>03</span>
                            <div class="process-line"></div>
                        </div>
                        <div class="process-content">
                            <div class="process-icon" style="background: #C8DFF5; color: #1A4A7A;">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">Uygulama &amp; Takip</h3>
                            <p class="text-gray-600 mt-3 leading-relaxed">
                                Ekiplerinizle birlikte <span class="text-blue-600 font-medium">sahada uyguluyor</span>, 
                                sonuçları düzenli olarak ölçüyor ve raporluyoruz.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Saha Desteği</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Raporlama</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Optimizasyon</span>
                            </div>
                            <a href="{{ route('surec.detay') }}?adim=3" class="detail-link">
                                Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="process-card-slide">
                    <div class="process-card-inner" style="background: #E3EFFD; border-color: #C8DFF5;">
                        <div class="process-number">
                            <span>01</span>
                            <div class="process-line"></div>
                        </div>
                        <div class="process-content">
                            <div class="process-icon" style="background: #C8DFF5; color: #1A4A7A;">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">Keşif &amp; Analiz</h3>
                            <p class="text-gray-600 mt-3 leading-relaxed">
                                Mevcut durumunuzu, verilerinizi ve hedeflerinizi 
                                <span class="text-blue-600 font-medium">derinlemesine inceliyoruz</span>.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Pazar Analizi</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Rekabet Stratejisi</span>
                            </div>
                            <a href="{{ route('surec.detay') }}?adim=1" class="detail-link">
                                Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="process-card-slide">
                    <div class="process-card-inner" style="background: #E3EFFD; border-color: #C8DFF5;">
                        <div class="process-number">
                            <span>02</span>
                            <div class="process-line"></div>
                        </div>
                        <div class="process-content">
                            <div class="process-icon" style="background: #C8DFF5; color: #1A4A7A;">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">Strateji Tasarımı</h3>
                            <p class="text-gray-600 mt-3 leading-relaxed">
                                Kurumunuza özel, <span class="text-blue-600 font-medium">uygulanabilir bir eylem planı</span> 
                                ve öncelik matrisi oluşturuyoruz.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Operasyonel Verimlilik</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Performans Takibi</span>
                            </div>
                            <a href="{{ route('surec.detay') }}?adim=2" class="detail-link">
                                Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="process-card-slide">
                    <div class="process-card-inner" style="background: #E3EFFD; border-color: #C8DFF5;">
                        <div class="process-number">
                            <span>03</span>
                            <div class="process-line"></div>
                        </div>
                        <div class="process-content">
                            <div class="process-icon" style="background: #C8DFF5; color: #1A4A7A;">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">Uygulama &amp; Takip</h3>
                            <p class="text-gray-600 mt-3 leading-relaxed">
                                Ekiplerinizle birlikte <span class="text-blue-600 font-medium">sahada uyguluyor</span>, 
                                sonuçları düzenli olarak ölçüyoruz.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Saha Desteği</span>
                                <span class="px-3 py-1 bg-white/70 text-[#1A4A7A] text-xs font-medium rounded-full">Raporlama</span>
                            </div>
                            <a href="{{ route('surec.detay') }}?adim=3" class="detail-link">
                                Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('surec') }}" class="inline-block text-blue-600 font-semibold hover:text-blue-800 transition">
                Süreci Detaylı İncele <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== KADROMUZ ===== -->
<section class="py-16 md:py-24" style="background: linear-gradient(135deg, #f8faff 0%, #dbeafe 50%, #eff6ff 100%); position: relative; overflow: hidden;">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 8px 24px;">
                <i class="fas fa-users mr-2"></i> KADROMUZ
            </span>
            <h2 class="section-title mt-4" style="font-size: 42px; line-height: 1.2;">
                Uzman <span class="gradient-text">ekibimizle</span> 
                <br>yanınızdayız
            </h2>
            <div class="section-divider" style="width: 80px; height: 5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
            <p class="text-gray-500 mt-6 text-lg max-w-2xl mx-auto leading-relaxed">
                Her biri alanında uzman danışmanlarımız, kurumunuzun büyüme hedeflerine ulaşması için stratejik çözümler üretir.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 mt-12 max-w-5xl mx-auto">
            @php
                $team = [
                    [
                        'name' => 'Ahmet Yılmaz',
                        'title' => 'Strateji Direktörü',
                        'color' => '#3B82F6',
                        'colorLight' => '#DBEAFE',
                        'colorDark' => '#1D4ED8',
                        'desc' => '18 yıllık strateji danışmanlığı deneyimi ile kurumların büyüme yolculuğunda rehberlik eder.',
                        'icon' => 'fa-chess-queen',
                        'initials' => 'AY'
                    ],
                    [
                        'name' => 'Mehmet Demir',
                        'title' => 'Finansal Danışman',
                        'color' => '#10B981',
                        'colorLight' => '#D1FAE5',
                        'colorDark' => '#047857',
                        'desc' => 'Finansal stratejiler ve yatırım kararları konusunda 15 yıllık uzmanlık.',
                        'icon' => 'fa-coins',
                        'initials' => 'MD'
                    ],
                    [
                        'name' => 'Selin Kaya',
                        'title' => 'Dijital Dönüşüm Uzmanı',
                        'color' => '#8B5CF6',
                        'colorLight' => '#EDE9FE',
                        'colorDark' => '#6D28D9',
                        'desc' => 'Dijital strateji ve teknoloji danışmanlığında 12 yıllık deneyim.',
                        'icon' => 'fa-laptop-code',
                        'initials' => 'SK'
                    ],
                    [
                        'name' => 'Ali Can',
                        'title' => 'Risk Yönetimi Uzmanı',
                        'color' => '#F59E0B',
                        'colorLight' => '#FEF3C7',
                        'colorDark' => '#B45309',
                        'desc' => 'Operasyonel ve finansal risk yönetiminde 10 yıllık uzmanlık.',
                        'icon' => 'fa-shield-alt',
                        'initials' => 'AC'
                    ],
                ];
            @endphp

            @foreach($team as $index => $member)
                <div class="team-card" style="animation-delay: {{ $index * 0.15 }}s;">
                    <div class="card" style="--card-color: {{ $member['color'] }}; --card-light: {{ $member['colorLight'] }}; --card-dark: {{ $member['colorDark'] }}; border-color: {{ $member['color'] }}30;">
                        <div class="card-top-line" style="background: {{ $member['color'] }};"></div>
                        <div class="img" style="background: linear-gradient(135deg, {{ $member['color'] }}, {{ $member['colorDark'] }}); box-shadow: 0 8px 30px {{ $member['color'] }}40;">
                            <span style="font-size: 30px; font-weight: 700; color: white; text-shadow: 0 2px 15px rgba(0,0,0,0.2);">
                                {{ $member['initials'] }}
                            </span>
                            <div class="img-icon" style="color: rgba(255,255,255,0.3);">
                                <i class="fas {{ $member['icon'] }}"></i>
                            </div>
                        </div>
                        <h2>
                            {{ $member['name'] }}<br>
                            <span>{{ $member['title'] }}</span>
                        </h2>
                        <p>
                            <i class="fas fa-quote-left" style="color: {{ $member['color'] }}; opacity: 0.3; margin-right: 6px; font-size: 10px;"></i>
                            {{ $member['desc'] }}
                        </p>
                        <div class="card-hover-overlay" style="background: linear-gradient(135deg, {{ $member['color'] }}, {{ $member['colorDark'] }});"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .team-card {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        display: flex;
        justify-content: center;
    }
    .card {
        width: 100%;
        max-width: 250px;
        height: 320px;
        background: white;
        border-radius: 20px;
        text-align: center;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        position: relative;
        overflow: hidden;
        border: 2px solid #eef2f7;
        padding: 24px 20px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        cursor: pointer;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    }
    .card-top-line {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        border-radius: 20px 20px 0 0;
        opacity: 0.7;
        transition: all 0.5s ease;
    }
    .card-hover-overlay {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: all 0.6s ease;
        z-index: 0;
        border-radius: 20px;
    }
    .card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 30px 60px rgba(0,0,0,0.08), 0 0 80px var(--card-color)15;
        border-color: var(--card-color)40;
    }
    .card:hover .card-hover-overlay { opacity: 0.08; }
    .card:hover .card-top-line { height: 6px; opacity: 1; box-shadow: 0 0 30px var(--card-color)50; }
    .card * { position: relative; z-index: 1; transition: all 0.3s ease; }
    .card .img {
        display: flex;
        margin: 0 auto 16px auto;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        flex-shrink: 0;
        position: relative;
    }
    .card .img .img-icon {
        position: absolute;
        bottom: -4px;
        right: -4px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        border: 2px solid white;
        transition: all 0.4s ease;
        color: var(--card-color);
    }
    .card:hover .img { transform: scale(1.08); box-shadow: 0 12px 40px var(--card-color)40 !important; }
    .card:hover .img .img-icon { transform: scale(1.1) rotate(10deg); background: var(--card-color); color: white; }
    .card h2 { font-size: 18px; font-weight: 700; color: #0B1F3A; transition: all 0.3s ease; line-height: 1.3; margin: 0; width: 100%; }
    .card h2 span { font-size: 13px; font-weight: 400; color: #94a3b8; display: block; margin-top: 2px; transition: all 0.3s ease; }
    .card:hover h2 { color: var(--card-color); }
    .card:hover h2 span { color: var(--card-color); }
    .card > p {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease;
        padding: 0 5px;
        font-size: 13px;
        color: #475569;
        line-height: 1.7;
        margin: 12px 0 0 0;
        position: relative;
        z-index: 1;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .card:hover > p { opacity: 1; transform: translateY(0); transition: all 0.5s ease 0.15s; }
    @media (max-width: 1024px) {
        .card { max-width: 100%; height: 290px; padding: 20px 16px 16px; }
        .card .img { width: 80px; height: 80px; margin: 0 auto 12px auto; }
        .card .img .img-icon { width: 28px; height: 28px; font-size: 12px; }
        .card h2 { font-size: 16px; }
        .card h2 span { font-size: 12px; }
    }
    @media (max-width: 768px) {
        .card { max-width: 100%; height: 260px; padding: 16px 14px 14px; border-radius: 16px; }
        .card .img { width: 70px; height: 70px; margin: 0 auto 10px auto; }
        .card .img span { font-size: 24px !important; }
        .card .img .img-icon { width: 24px; height: 24px; font-size: 10px; bottom: -2px; right: -2px; }
        .card h2 { font-size: 15px; }
        .card h2 span { font-size: 11px; }
        .card > p { font-size: 12px; margin-top: 8px; }
        .card-top-line { height: 3px; }
    }
    @media (max-width: 480px) {
        .card { height: 230px; padding: 12px 10px 10px; border-radius: 14px; }
        .card .img { width: 60px; height: 60px; margin: 0 auto 8px auto; }
        .card .img span { font-size: 20px !important; }
        .card .img .img-icon { width: 20px; height: 20px; font-size: 8px; bottom: -2px; right: -2px; }
        .card h2 { font-size: 13px; }
        .card h2 span { font-size: 10px; }
        .card > p { font-size: 10px; margin-top: 6px; line-height: 1.5; }
        .card-top-line { height: 2px; }
        .card:hover { transform: translateY(-6px) scale(1.02); }
    }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes pulse { 0%, 100% { opacity: 0.2; } 50% { opacity: 0.4; } }
    .animate-pulse { animation: pulse 3s ease-in-out infinite; }
</style>

<!-- ===== BLOGLARIMIZ ===== -->
<section class="py-16 md:py-24" style="background: linear-gradient(135deg, #f8faff 0%, #eff6ff 50%, #dbeafe 100%); position: relative; overflow: hidden;">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-10 w-72 h-72 bg-pink-400 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-300 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute top-10 right-1/4 w-40 h-40 bg-cyan-300 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.3s;"></div>
        <div class="absolute bottom-20 left-1/3 w-56 h-56 bg-indigo-300 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.7s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 8px 24px;">
                <i class="fas fa-blog mr-2"></i> BLOGLARIMIZ
            </span>
            <h2 class="section-title mt-4" style="font-size: 42px; line-height: 1.2;">
                <span class="gradient-text">Güncel</span> yazılarımız
            </h2>
            <div class="section-divider" style="width: 80px; height: 5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
            <p class="text-gray-500 mt-6 text-lg max-w-2xl mx-auto leading-relaxed">
                Sektörel gelişmeler, stratejik yaklaşımlar ve danışmanlık alanındaki en güncel içerikler.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 md:gap-8 mt-12 max-w-6xl mx-auto">
            @php
                $blogs = [
                    [
                        'title' => 'Dijital Dönüşümde Başarılı Olmanın 5 Altın Kuralı',
                        'category' => 'Dijital Dönüşüm',
                        'color' => '#6366F1',
                        'colorDark' => '#4F46E5',
                        'desc' => 'Dijital dönüşüm sürecinde başarılı olmak için izlenmesi gereken stratejik adımlar ve dikkat edilmesi gereken noktalar.',
                        'date' => '15 Temmuz 2025',
                        'icon' => 'fa-laptop-code',
                        'delay' => '0s',
                        'readTime' => '5 dk okuma',
                        'author' => 'Ahmet Yılmaz'
                    ],
                    [
                        'title' => '2025\'te Finansal Yönetim: Trendler ve Stratejiler',
                        'category' => 'Finans',
                        'color' => '#10B981',
                        'colorDark' => '#059669',
                        'desc' => 'Yeni yılda finansal yönetimde öne çıkan trendler, sürdürülebilir büyüme için stratejik yaklaşımlar.',
                        'date' => '10 Temmuz 2025',
                        'icon' => 'fa-coins',
                        'delay' => '0.5s',
                        'readTime' => '7 dk okuma',
                        'author' => 'Mehmet Demir'
                    ],
                    [
                        'title' => 'Kurumsal Stratejide Veri Odaklı Karar Alma',
                        'category' => 'Strateji',
                        'color' => '#F59E0B',
                        'colorDark' => '#D97706',
                        'desc' => 'Veri analitiğinin kurumsal stratejilere entegrasyonu ve karar alma süreçlerinde verinin rolü.',
                        'date' => '5 Temmuz 2025',
                        'icon' => 'fa-chart-line',
                        'delay' => '1s',
                        'readTime' => '6 dk okuma',
                        'author' => 'Selin Kaya'
                    ],
                ];
            @endphp

            @foreach($blogs as $index => $blog)
                <div class="blog-card" style="animation-delay: {{ $index * 0.15 }}s;">
                    <a href="{{ route('blog') }}" class="card6" style="--blog-color: {{ $blog['color'] }}; --blog-dark: {{ $blog['colorDark'] }}; --float-delay: {{ $blog['delay'] }}; border-color: {{ $blog['color'] }}20;">
                        <div class="blog-glow" style="background: radial-gradient(circle at 30% 30%, {{ $blog['color'] }}, transparent 70%);"></div>
                        <div class="blog-top" style="background: linear-gradient(135deg, {{ $blog['color'] }}, {{ $blog['colorDark'] }});">
                            <span class="blog-category">{{ $blog['category'] }}</span>
                            <div class="blog-icon"><i class="fas {{ $blog['icon'] }}"></i></div>
                            <span class="blog-date-top"><i class="far fa-calendar-alt"></i> {{ $blog['date'] }}</span>
                        </div>
                        <div class="blog-body">
                            <h3 class="blog-title">{{ $blog['title'] }}</h3>
                            <p class="blog-desc">{{ $blog['desc'] }}</p>
                            <div class="blog-footer">
                                <span class="blog-author"><i class="fas fa-user"></i> {{ $blog['author'] }}</span>
                                <span class="blog-readtime"><i class="far fa-clock"></i> {{ $blog['readTime'] }}</span>
                            </div>
                        </div>
                        <div class="blog-border" style="background: linear-gradient(90deg, {{ $blog['color'] }}, {{ $blog['color'] }}dd, transparent);"></div>
                        <div class="blog-shine"></div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-blue-500 text-white px-8 py-3.5 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-indigo-500/30 hover:scale-105 transition-all duration-300 group">
                Tüm Blogları Gör
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .blog-card {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        display: flex;
        justify-content: center;
        perspective: 1000px;
    }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
    .card6 {
        display: block;
        width: 100%;
        max-width: 380px;
        background: white;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid #eef2f7;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        text-decoration: none;
        position: relative;
        transform-style: preserve-3d;
        cursor: pointer;
        box-shadow: 0 8px 30px rgba(0,0,0,0.04);
        animation: floatCard 4s ease-in-out infinite;
        animation-delay: var(--float-delay);
    }
    @keyframes floatCard { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-12px); } }
    .card6:hover {
        transform: translateY(-20px) rotateX(3deg) scale(1.03);
        animation-play-state: paused;
        box-shadow: 0 40px 80px rgba(0,0,0,0.08), 0 0 100px var(--blog-color)20;
        border-color: var(--blog-color)50;
    }
    .blog-glow {
        position: absolute;
        top: -60%;
        left: -60%;
        width: 200%;
        height: 200%;
        opacity: 0;
        transition: all 0.8s ease;
        filter: blur(80px);
        pointer-events: none;
    }
    .card6:hover .blog-glow { opacity: 0.15; transform: scale(1.3); }
    .blog-top {
        padding: 30px 28px 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 160px;
        position: relative;
        transition: all 0.5s ease;
    }
    .card6:hover .blog-top { min-height: 180px; }
    .blog-category {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.9);
        background: rgba(255,255,255,0.15);
        padding: 5px 18px;
        border-radius: 30px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.1);
        transition: all 0.3s ease;
        margin-bottom: 12px;
    }
    .card6:hover .blog-category { background: rgba(255,255,255,0.25); transform: scale(1.05); box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
    .blog-icon {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: white;
        margin-bottom: 12px;
        transition: all 0.5s ease;
        border: 1px solid rgba(255,255,255,0.15);
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }
    .card6:hover .blog-icon { transform: scale(1.15) rotate(10deg); background: rgba(255,255,255,0.3); box-shadow: 0 8px 40px rgba(0,0,0,0.15); }
    .blog-date-top { font-size: 12px; color: rgba(255,255,255,0.7); display: flex; align-items: center; gap: 6px; font-weight: 500; margin-top: 4px; }
    .blog-date-top i { font-size: 12px; }
    .blog-body { padding: 24px 28px 28px; display: flex; flex-direction: column; gap: 12px; background: white; flex: 1; }
    .blog-title { font-size: 20px; font-weight: 800; color: #0B1F3A; line-height: 1.4; transition: all 0.3s ease; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .card6:hover .blog-title { color: var(--blog-color); }
    .blog-desc { font-size: 14px; color: #64748b; line-height: 1.8; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; transition: all 0.3s ease; flex: 1; }
    .card6:hover .blog-desc { color: #334155; }
    .blog-footer { display: flex; justify-content: space-between; align-items: center; padding-top: 14px; border-top: 1px solid #f1f5f9; margin-top: 4px; flex-wrap: wrap; gap: 8px; }
    .blog-author { font-size: 13px; color: #64748b; display: flex; align-items: center; gap: 6px; font-weight: 500; transition: all 0.3s ease; }
    .card6:hover .blog-author { color: var(--blog-color); }
    .blog-author i { font-size: 13px; color: var(--blog-color); }
    .blog-readtime { font-size: 12px; color: #94a3b8; display: flex; align-items: center; gap: 5px; background: #f8fafc; padding: 4px 14px; border-radius: 20px; transition: all 0.3s ease; }
    .card6:hover .blog-readtime { background: var(--blog-color); color: white; }
    .blog-readtime i { font-size: 11px; }
    .blog-border { position: absolute; bottom: 0; left: 0; width: 0; height: 4px; transition: all 0.8s ease; border-radius: 0 0 24px 24px; }
    .card6:hover .blog-border { width: 100%; }
    .blog-shine { position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transform: skewX(-25deg); transition: all 0.8s ease; pointer-events: none; }
    .card6:hover .blog-shine { left: 200%; }
    @media (max-width: 1024px) {
        .card6 { max-width: 100%; }
        .blog-top { min-height: 140px; padding: 24px 20px 20px; }
        .blog-body { padding: 20px 22px 24px; }
        .blog-title { font-size: 18px; }
        .blog-icon { width: 56px; height: 56px; font-size: 24px; }
        @keyframes floatCard { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-8px); } }
    }
    @media (max-width: 768px) {
        .card6 { border-radius: 18px; }
        .blog-top { min-height: 120px; padding: 20px 16px 16px; }
        .blog-body { padding: 16px 18px 20px; }
        .blog-title { font-size: 16px; }
        .blog-desc { font-size: 13px; -webkit-line-clamp: 2; }
        .blog-icon { width: 48px; height: 48px; font-size: 20px; }
        .blog-category { font-size: 10px; padding: 4px 14px; }
        .blog-date-top { font-size: 11px; }
        .blog-footer { flex-direction: column; align-items: flex-start; gap: 6px; }
        .blog-author { font-size: 12px; }
        .blog-readtime { font-size: 11px; padding: 3px 12px; }
        .card6:hover { transform: translateY(-14px) scale(1.02); }
        @keyframes floatCard { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-6px); } }
        .blog-shine { display: none; }
    }
    @media (max-width: 480px) {
        .card6 { border-radius: 16px; }
        .blog-top { min-height: 100px; padding: 16px 14px 14px; }
        .blog-body { padding: 14px 16px 16px; }
        .blog-title { font-size: 15px; }
        .blog-desc { font-size: 12px; -webkit-line-clamp: 2; }
        .blog-icon { width: 40px; height: 40px; font-size: 17px; margin-bottom: 8px; }
        .blog-category { font-size: 9px; padding: 3px 12px; margin-bottom: 8px; }
        .blog-date-top { font-size: 10px; }
        .blog-author { font-size: 11px; }
        .blog-readtime { font-size: 10px; padding: 2px 10px; }
        .blog-border { height: 3px; }
        .card6:hover { transform: translateY(-10px) scale(1.02); }
        @keyframes floatCard { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-4px); } }
    }
</style>

<!-- ===== REFERANSLAR ===== -->
<section class="py-16" style="background: linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="tag" style="background: rgba(255,107,107,0.15); color: #FF6B6B; border: 1px solid rgba(255,107,107,0.15);"><i class="fas fa-handshake mr-1"></i> REFERANSLAR</span>
            <h2 class="section-title" style="color: #FFFFFF;">
                <span class="gradient-text">Çalıştığımız</span> Firmalar
            </h2>
            <div class="section-divider" style="background: linear-gradient(90deg, #FF6B6B, #FECA57);"></div>
        </div>

        <div class="client-slider-container">
            <div class="client-slider-track">
                @for($i = 0; $i < 2; $i++)
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-building"></i></div>
                            <div class="client-logo">Logo1<span>Teknoloji</span></div>
                        </div>
                    </div>
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow" style="animation-delay: 0.2s;">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-chart-line"></i></div>
                            <div class="client-logo">Logo2<span>Finans</span></div>
                        </div>
                    </div>
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow" style="animation-delay: 0.4s;">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-heartbeat"></i></div>
                            <div class="client-logo">Logo3<span>Sağlık</span></div>
                        </div>
                    </div>
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow" style="animation-delay: 0.6s;">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-bolt"></i></div>
                            <div class="client-logo">Logo4<span>Enerji</span></div>
                        </div>
                    </div>
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow" style="animation-delay: 0.8s;">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-shopping-cart"></i></div>
                            <div class="client-logo">Logo5<span>E-Ticaret</span></div>
                        </div>
                    </div>
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow" style="animation-delay: 0.1s;">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-truck"></i></div>
                            <div class="client-logo">Logo6<span>Lojistik</span></div>
                        </div>
                    </div>
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow" style="animation-delay: 0.3s;">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-store"></i></div>
                            <div class="client-logo">Logo7<span>Perakende</span></div>
                        </div>
                    </div>
                    <div class="client-slider-card">
                        <div class="client-inner pulse-glow" style="animation-delay: 0.5s;">
                            <div class="glow-dot"></div>
                            <div class="client-icon"><i class="fas fa-handshake"></i></div>
                            <div class="client-logo">Logo8<span>Danışmanlık</span></div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('referanslar') }}" class="inline-block text-blue-300 font-semibold hover:text-white transition">
                Tüm Referanslar <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== PROJELER ===== -->
<section class="bg-white py-24">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <span class="tag"><i class="fas fa-code mr-1"></i> PROJELER</span>
            <h2 class="section-title">
                <span class="gradient-text">Projelerimiz</span>
            </h2>
            <div class="section-divider"></div>
        </div>

        <div class="project-grid">
            <div class="project-card float-animation" style="animation-delay: 0s;">
                <div class="project-icon"><i class="fas fa-industry"></i></div>
                <h3 class="project-title">MRP</h3>
                <p class="project-desc">MRP, üretim odaklı işletmelerin hammaddeden yan mamule, üretim planlamasından stok yönetimine kadar olan tüm kaynak ihtiyaçlarını planlar.</p>
                <span class="project-tag">Üretim</span>
                <a href="{{ route('projeler') }}" class="project-arrow">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="project-card float-animation" style="animation-delay: 0.3s;">
                <div class="project-icon"><i class="fas fa-rocket"></i></div>
                <h3 class="project-title">Hızlı Satış</h3>
                <p class="project-desc">Satış süreçlerini hızlandıran, müşteri yönetimini kolaylaştıran ve satış performansını artıran entegre çözüm.</p>
                <span class="project-tag">Satış</span>
                <a href="{{ route('projeler') }}" class="project-arrow">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="project-card float-animation" style="animation-delay: 0.6s;">
                <div class="project-icon"><i class="fas fa-users"></i></div>
                <h3 class="project-title">İnsan Kaynakları</h3>
                <p class="project-desc">Personel yönetiminden bordro işlemlerine, performans değerlendirmeden işe alım süreçlerine kadar tüm İK süreçlerini tek platformda toplar.</p>
                <span class="project-tag">İK</span>
                <a href="{{ route('projeler') }}" class="project-arrow">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="project-card float-animation" style="animation-delay: 0.9s;">
                <div class="project-icon"><i class="fas fa-globe"></i></div>
                <h3 class="project-title">Kurumsal Web Sitesi</h3>
                <p class="project-desc">Modern, mobil uyumlu ve SEO dostu kurumsal web siteleri ile dijital dünyada güçlü bir marka imajı oluşturun.</p>
                <span class="project-tag">Dijital</span>
                <a href="{{ route('projeler') }}" class="project-arrow">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projeler') }}" class="inline-block text-blue-600 font-semibold hover:text-blue-800 transition">
                Tüm Projeler <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== BİZİMLE ÇALIŞMAK İSTER MİSİNİZ? ===== -->
<section class="py-20" style="background: linear-gradient(135deg, #0B1F3A 0%, #1A365D 50%, #2563EB 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top: -50%; right: -20%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(255,255,255,0.05), transparent 70%); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -40%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255,255,255,0.03), transparent 70%); border-radius: 50%;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-block bg-white/10 backdrop-blur-sm text-white/90 px-6 py-2 rounded-full text-sm font-medium border border-white/10 mb-4">
                <i class="fas fa-handshake mr-2"></i> BİZİMLE ÇALIŞIN
            </span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                Birlikte <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-blue-100">başarıya</span> ulaşalım
            </h2>
            <p class="text-blue-200/80 text-lg mt-4 max-w-2xl mx-auto leading-relaxed">
                Kurumunuzu geleceğe taşımak için doğru adımı atın. Size özel çözümlerle büyümenizi hızlandıralım.
            </p>
            <div class="mt-8">
                <a href="{{ route('basvuru') }}" class="inline-flex items-center gap-3 bg-white text-blue-700 px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 hover:bg-blue-50 hover:shadow-2xl hover:shadow-blue-500/30 hover:scale-105 group">
                    <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                    Danışmanlık Başvurusu Yapın
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
            <div class="flex flex-wrap justify-center gap-8 mt-8 text-blue-200/70 text-sm">
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-300"></i> Ücretsiz Ön Görüşme</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-300"></i> 18 Yıl Deneyim</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-300"></i> %94 Memnuniyet</span>
            </div>
        </div>
    </div>
</section>

<script>
    function spinIcon(card) {
        const icon = card.querySelector('.icon-bg i');
        if (icon) {
            icon.classList.remove('icon-spin', 'icon-spin-back');
            icon.classList.add('icon-spin');
            setTimeout(function() {
                icon.classList.remove('icon-spin');
                icon.classList.add('icon-spin-back');
                setTimeout(function() {
                    icon.classList.remove('icon-spin-back');
                }, 600);
            }, 600);
        }
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                if (el.classList.contains('fadeInLeft')) {
                    el.style.animation = 'none';
                    setTimeout(() => {
                        el.style.animation = 'fadeInLeft 0.9s cubic-bezier(0.22, 1, 0.36, 1) forwards';
                    }, 10);
                }
                if (el.classList.contains('fadeInRight')) {
                    el.style.animation = 'none';
                    setTimeout(() => {
                        el.style.animation = 'fadeInRight 0.9s cubic-bezier(0.22, 1, 0.36, 1) forwards';
                    }, 10);
                }
                if (el.classList.contains('fadeInUp')) {
                    el.style.animation = 'none';
                    setTimeout(() => {
                        el.style.animation = 'fadeInUp 0.9s cubic-bezier(0.22, 1, 0.36, 1) forwards';
                    }, 10);
                }
                observer.unobserve(el);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });

    document.querySelectorAll('.fadeInLeft, .fadeInRight, .fadeInUp').forEach(el => {
        observer.observe(el);
    });
</script>

<style>
    .icon-spin { animation: iconSpin 0.6s ease forwards; }
    .icon-spin-back { animation: iconSpinBack 0.6s ease forwards; }
    @keyframes iconSpin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    @keyframes iconSpinBack { from { transform: rotate(360deg); } to { transform: rotate(0deg); } }
    
    .stat-card {
        text-align: center;
        cursor: pointer;
        position: relative;
        min-height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: rgba(255,255,255,0.82);
        backdrop-filter: blur(15px);
        border-radius: 22px;
        border: 1px solid rgba(255,255,255,0.4);
        box-shadow: 0 20px 50px rgba(15,23,42,0.08);
        transition: 0.45s;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px rgba(37,99,235,0.15);
        border-color: #2563EB;
    }
    .stat-card .aurora-bg {
        position: absolute;
        inset: 0;
        background: conic-gradient(from 0deg, #1a365d, #2563eb, #3b82f6, #60a5fa, #1a365d);
        animation: auroraSpin 6s linear infinite;
        opacity: 0.85;
        transition: opacity 0.4s ease;
    }
    .stat-card:hover .aurora-bg { opacity: 1; }
    .stat-card .aurora-content {
        position: relative;
        z-index: 2;
        background: rgba(15,23,42,0.5);
        backdrop-filter: blur(8px);
        border-radius: 14px;
        padding: 16px 14px;
        width: 100%;
        transition: all 0.4s ease;
        border: 1px solid rgba(255,255,255,0.08);
    }
    .stat-card:hover .aurora-content {
        background: rgba(15,23,42,0.65);
        backdrop-filter: blur(12px);
        border-color: rgba(255,255,255,0.15);
    }
    .stat-card .icon-bg {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 8px;
        font-size: 22px;
        background: rgba(255,255,255,0.12);
        color: #93bbfc;
        transition: 0.4s;
    }
    .stat-card:hover .icon-bg { background: rgba(255,255,255,0.2); color: white; transform: scale(1.1); }
    .stat-card .number { font-size: 36px; font-weight: 900; color: white; display: inline-block; transition: 0.3s; }
    .stat-card:hover .number { transform: scale(1.06); }
    .stat-card .label { font-size: 13px; color: rgba(255,255,255,0.8); margin-top: 2px; font-weight: 500; }
    .stat-card .stat-desc { font-size: 11px; color: rgba(255,255,255,0.5); margin-top: 2px; font-weight: 400; }
    
    .feature-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 14px 18px;
        background: white;
        border-radius: 14px;
        border: 2px solid #f0f0f0;
        transition: all 0.4s ease;
        cursor: pointer;
    }
    .feature-item:hover { border-color: #2563eb; box-shadow: 0 10px 30px rgba(37,99,235,0.08); transform: translateX(8px); }
    .feature-item .check { width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; flex-shrink: 0; transition: 0.3s; }
    
    .aurora-service-card {
        position: relative;
        overflow: hidden;
        border-radius: 24px;
        min-height: 320px;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        cursor: pointer;
    }
    .aurora-service-card .aurora-service-bg {
        position: absolute;
        inset: 0;
        animation: auroraSpin 8s linear infinite;
        opacity: 0.85;
        transition: opacity 0.5s ease;
    }
    .aurora-service-card:hover .aurora-service-bg { opacity: 1; transform: scale(1.02); }
    .aurora-service-card .aurora-service-content {
        position: relative;
        z-index: 2;
        padding: 32px 28px;
        background: rgba(15,23,42,0.55);
        backdrop-filter: blur(12px);
        border-radius: 24px;
        height: 100%;
        min-height: 320px;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(255,255,255,0.06);
        transition: all 0.5s ease;
    }
    .aurora-service-card:hover .aurora-service-content {
        background: rgba(15,23,42,0.7);
        backdrop-filter: blur(16px);
        border-color: rgba(255,255,255,0.12);
    }
    .aurora-service-card .service-icon-wrapper { display: flex; align-items: center; justify-content: space-between; }
    .aurora-service-card .service-icon {
        width: 56px;
        height: 56px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transition: all 0.5s ease;
        background: rgba(255,255,255,0.15);
        color: #93bbfc;
    }
    .aurora-service-card:hover .service-icon { transform: scale(1.1) rotate(5deg); background: rgba(255,255,255,0.25) !important; }
    .aurora-service-card .service-number { font-size: 48px; font-weight: 900; color: rgba(255,255,255,0.06); line-height: 1; transition: 0.5s; }
    .aurora-service-card:hover .service-number { color: rgba(255,255,255,0.12); transform: scale(1.05); }
    .aurora-service-card .service-link {
        margin-top: auto;
        padding-top: 12px;
        border-top: 1px solid rgba(255,255,255,0.06);
        color: rgba(255,255,255,0.7);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
    }
    .aurora-service-card:hover .service-link { border-color: rgba(255,255,255,0.15); color: white; gap: 14px; }
    .aurora-service-card .service-link i { transition: 0.3s; }
    .aurora-service-card:hover .service-link i { transform: translateX(4px); }

    .process-slider-container { overflow: hidden; position: relative; width: 100%; padding: 10px 0; }
    .process-slider-track { display: flex; gap: 30px; animation: slideLoop 18s linear infinite; width: fit-content; }
    .process-slider-track:hover { animation-play-state: paused; }
    @keyframes slideLoop { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    .process-card-slide { flex: 0 0 320px; min-height: 380px; transition: all 0.5s ease; }
    .process-card-slide .process-card-inner {
        background: white;
        border-radius: 24px;
        padding: 32px 28px;
        height: 100%;
        border: 1px solid #f0f0f0;
        box-shadow: 0 4px 20px rgba(0,0,0,0.02);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }
    .process-card-slide .process-card-inner::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #0B1F3A, #1A365D, #2563EB);
        opacity: 0;
        transition: all 0.6s ease;
        z-index: 0;
    }
    .process-card-slide .process-card-inner * { position: relative; z-index: 1; transition: all 0.4s ease; }
    .process-card-slide:hover .process-card-inner { border-color: transparent !important; box-shadow: 0 25px 50px rgba(11, 31, 58, 0.25); transform: translateY(-10px); }
    .process-card-slide:hover .process-card-inner::before { opacity: 1; }
    .process-card-slide:hover .process-content h3,
    .process-card-slide:hover .process-content p,
    .process-card-slide:hover .process-content .text-gray-600,
    .process-card-slide:hover .process-content .text-gray-500,
    .process-card-slide:hover .process-content .text-blue-600 { color: #FFFFFF !important; }
    .process-card-slide:hover .process-number span {
        background: linear-gradient(135deg, #FFFFFF, #93bbfc) !important;
        -webkit-background-clip: text !important;
        -webkit-text-fill-color: transparent !important;
        background-clip: text !important;
        opacity: 0.6 !important;
    }
    .process-card-slide:hover .process-line { background: linear-gradient(90deg, #FFFFFF, #93bbfc) !important; opacity: 0.3 !important; }
    .process-card-slide:hover .process-icon { background: rgba(255, 255, 255, 0.2) !important; color: white !important; animation: iconBounce 0.6s ease forwards; border: 1px solid rgba(255, 255, 255, 0.2); }
    .process-card-slide:hover .process-icon i { animation: iconSpin 0.6s ease forwards; }
    .process-card-slide:hover .process-content .bg-white\/70 { background: rgba(255, 255, 255, 0.2) !important; color: white !important; border: 1px solid rgba(255, 255, 255, 0.15); }
    .process-card-slide:hover .detail-link { opacity: 1 !important; transform: translateY(0) !important; }
    .process-card-slide .process-number { display: flex; align-items: center; gap: 16px; margin-bottom: 16px; }
    .process-card-slide .process-number span {
        font-size: 48px;
        font-weight: 900;
        background: linear-gradient(135deg, #2563eb, #60a5fa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1;
        opacity: 0.15;
        transition: 0.5s;
    }
    .process-card-slide .process-line { flex: 1; height: 2px; background: linear-gradient(90deg, #2563eb, #60a5fa); opacity: 0.15; transition: 0.5s; }
    .process-card-slide .process-icon { width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; background: #eff6ff; color: #2563eb; font-size: 24px; transition: all 0.5s ease; }
    .process-card-slide .process-content h3 { font-size: 22px; font-weight: 700; color: #0f172a; margin-top: 16px; transition: 0.3s; }
    .process-card-slide .process-content p { color: #64748b; line-height: 1.7; margin-top: 12px; font-size: 15px; transition: 0.3s; }
    .detail-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 16px;
        color: #2563eb;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.4s ease;
        cursor: pointer;
        padding: 6px 0;
        border-bottom: 2px solid transparent;
    }
    .detail-link:hover { border-bottom-color: currentColor; }
    .detail-link i { transition: 0.3s; font-size: 12px; }
    .detail-link:hover i { transform: translateX(6px); }
    .process-card-slide:hover .detail-link { color: #FFFFFF !important; }

    .client-slider-container { overflow: hidden; position: relative; width: 100%; padding: 20px 0; }
    .client-slider-track { display: flex; gap: 30px; animation: clientSlide 25s linear infinite; width: fit-content; }
    .client-slider-track:hover { animation-play-state: paused; }
    @keyframes clientSlide { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    .client-slider-card { flex: 0 0 200px; min-height: 120px; transition: all 0.5s ease; }
    .client-slider-card .client-inner {
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 25px 20px;
        height: 100%;
        border: 2px solid rgba(37,99,235,0.1);
        box-shadow: 0 4px 20px rgba(0,0,0,0.02);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    .client-slider-card .client-inner::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #0B1F3A, #1A365D, #2563EB);
        opacity: 0;
        transition: all 0.6s ease;
        z-index: 0;
    }
    .client-slider-card .client-inner * { position: relative; z-index: 1; transition: all 0.4s ease; }
    .client-slider-card:hover .client-inner { transform: translateY(-8px) scale(1.03); box-shadow: 0 20px 40px rgba(11,31,58,0.15); border-color: transparent; }
    .client-slider-card:hover .client-inner::before { opacity: 1; }
    .client-slider-card:hover .client-logo { color: #FFFFFF !important; }
    .client-slider-card:hover .client-logo span { color: rgba(255,255,255,0.7) !important; }
    .client-slider-card .client-logo { font-size: 18px; font-weight: 700; color: #0B1F3A; text-align: center; letter-spacing: -0.5px; transition: 0.3s; line-height: 1.3; }
    .client-slider-card .client-logo span { display: block; font-size: 11px; font-weight: 400; color: #94a3b8; margin-top: 4px; letter-spacing: 0.5px; transition: 0.3s; }
    .client-slider-card .client-icon { font-size: 28px; color: #2563EB; margin-bottom: 8px; transition: 0.3s; opacity: 0.6; }
    .client-slider-card:hover .client-icon { color: #FFFFFF !important; opacity: 1 !important; animation: iconBounce 0.6s ease forwards; }
    .client-slider-card .client-inner .glow-dot {
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #2563EB;
        top: 12px;
        right: 12px;
        opacity: 0.3;
        transition: 0.3s;
    }
    .client-slider-card:hover .client-inner .glow-dot { background: #FFFFFF; opacity: 0.8; box-shadow: 0 0 20px rgba(255,255,255,0.3); }
    @keyframes iconBounce { 0%, 100% { transform: scale(1) rotate(0deg); } 50% { transform: scale(1.3) rotate(15deg); } }

    .project-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; }
    @media (max-width: 1024px) { .project-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 640px) { .project-grid { grid-template-columns: 1fr; } }
    .project-card {
        background: #F8FAFF;
        border-radius: 24px;
        padding: 32px 24px;
        border: 1px solid #E8F0FE;
        box-shadow: 0 4px 20px rgba(0,0,0,0.02);
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: pointer;
        position: relative;
        overflow: hidden;
        text-align: center;
    }
    .project-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #0B1F3A, #1A365D, #2563EB);
        opacity: 0;
        transition: all 0.6s ease;
        z-index: 0;
    }
    .project-card * { position: relative; z-index: 1; transition: all 0.4s ease; }
    .project-card:hover { transform: translateY(-12px) scale(1.02); box-shadow: 0 30px 60px rgba(37,99,235,0.15); border-color: transparent; }
    .project-card:hover::before { opacity: 1; }
    .project-card:hover .project-icon { background: rgba(255,255,255,0.2) !important; color: #FFFFFF !important; transform: scale(1.1) rotate(5deg); box-shadow: 0 0 40px rgba(255,255,255,0.1); }
    .project-card:hover .project-icon i { animation: iconSpin 0.8s ease forwards; }
    .project-card:hover .project-title { color: #FFFFFF !important; }
    .project-card:hover .project-desc { color: rgba(255,255,255,0.85) !important; }
    .project-card:hover .project-tag { background: rgba(255,255,255,0.15) !important; color: #FFFFFF !important; border-color: rgba(255,255,255,0.2); }
    .project-card:hover .project-arrow { opacity: 1 !important; transform: translateX(0) !important; color: #FFFFFF !important; }
    .project-card .project-icon {
        width: 72px;
        height: 72px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #E3EFFD;
        color: #2563EB;
        font-size: 30px;
        margin: 0 auto 16px auto;
        transition: all 0.5s ease;
        border: 1px solid #D9E6FF;
    }
    .project-card .project-title { font-size: 22px; font-weight: 700; color: #0B1F3A; transition: 0.3s; margin-bottom: 4px; }
    .project-card .project-desc { color: #64748b; font-size: 14px; line-height: 1.7; margin-top: 8px; transition: 0.3s; }
    .project-card .project-tag {
        display: inline-block;
        padding: 4px 18px;
        background: #E3EFFD;
        color: #2563EB;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        margin-top: 14px;
        transition: 0.3s;
        border: 1px solid #D9E6FF;
        letter-spacing: 0.5px;
    }
    .project-card .project-arrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 14px;
        color: #2563EB;
        font-size: 13px;
        font-weight: 500;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.4s ease;
        text-decoration: none;
    }
    .project-card .project-arrow i { font-size: 12px; transition: 0.3s; }
    .project-card:hover .project-arrow i { transform: translateX(4px); }
    
    @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
    .float-animation { animation: float 4s ease-in-out infinite; }
    .pulse-glow { animation: pulseGlow 3s ease-in-out infinite; }
    @keyframes pulseGlow { 0%, 100% { box-shadow: 0 0 20px rgba(37,99,235,0.05); } 50% { box-shadow: 0 0 50px rgba(37,99,235,0.15); } }
</style>
@endsection