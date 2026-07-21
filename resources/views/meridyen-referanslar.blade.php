@extends('meridyen-layout')

@section('title', 'Referanslar - Meridyen Danışmanlık')

@section('content')
<section class="py-16 md:py-24" style="background: linear-gradient(135deg, #f0f4ff 0%, #dbeafe 50%, #bfdbfe 100%); position: relative; overflow: hidden;">
    <!-- Arka Plan Dekorasyon -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="absolute top-10 right-1/4 w-40 h-40 bg-pink-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.3s;"></div>
        <div class="absolute bottom-20 left-1/3 w-56 h-56 bg-indigo-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.7s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Başlık -->
        <div class="text-center mb-10 md:mb-16 fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                <i class="fas fa-handshake mr-2"></i> REFERANSLAR
            </span>
            <h2 class="section-title text-3xl md:text-5xl mt-4">
                <span class="gradient-text">Çalıştığımız</span> Firmalar
            </h2>
            <div class="section-divider" style="width: 60px md:w-80px; height: 4px md:h-5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
            <p class="text-gray-500 mt-4 text-sm md:text-lg max-w-2xl mx-auto">
                Sektörün lider firmalarıyla birlikte büyüyor, başarıyı birlikte inşa ediyoruz.
            </p>
        </div>

        <!-- ===== REFERANS KARTLARI - 4'LÜ ===== -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 md:gap-6 max-w-6xl mx-auto">
            @php
                $clients = [
                    [
                        'icon' => 'fa-building',
                        'name' => 'TeknoSoft',
                        'category' => 'Teknoloji',
                        'color' => '#3B82F6',
                        'colorLight' => '#DBEAFE',
                        'colorDark' => '#1D4ED8',
                        'desc' => 'Yazılım ve teknoloji çözümleri ile sektörde lider konumda.',
                        'projects' => '12+ Proje',
                        'rating' => '4.9',
                        'employees' => '150+',
                        'bg' => 'from-blue-600 to-blue-400'
                    ],
                    [
                        'icon' => 'fa-chart-line',
                        'name' => 'FinansBank',
                        'category' => 'Finans',
                        'color' => '#10B981',
                        'colorLight' => '#D1FAE5',
                        'colorDark' => '#047857',
                        'desc' => 'Bankacılık ve finans hizmetlerinde yenilikçi çözümler.',
                        'projects' => '8+ Proje',
                        'rating' => '4.8',
                        'employees' => '200+',
                        'bg' => 'from-emerald-600 to-green-400'
                    ],
                    [
                        'icon' => 'fa-heartbeat',
                        'name' => 'MediLife',
                        'category' => 'Sağlık',
                        'color' => '#EF4444',
                        'colorLight' => '#FEE2E2',
                        'colorDark' => '#B91C1C',
                        'desc' => 'Sağlık teknolojileri ve hizmetlerinde öncü kuruluş.',
                        'projects' => '15+ Proje',
                        'rating' => '4.9',
                        'employees' => '300+',
                        'bg' => 'from-red-600 to-rose-400'
                    ],
                    [
                        'icon' => 'fa-bolt',
                        'name' => 'EnerjiPro',
                        'category' => 'Enerji',
                        'color' => '#F59E0B',
                        'colorLight' => '#FEF3C7',
                        'colorDark' => '#B45309',
                        'desc' => 'Enerji yönetimi ve danışmanlık alanında uzman.',
                        'projects' => '6+ Proje',
                        'rating' => '4.7',
                        'employees' => '80+',
                        'bg' => 'from-amber-600 to-yellow-400'
                    ],
                    [
                        'icon' => 'fa-shopping-cart',
                        'name' => 'ShopFast',
                        'category' => 'E-Ticaret',
                        'color' => '#EC4899',
                        'colorLight' => '#FCE7F3',
                        'colorDark' => '#BE185D',
                        'desc' => 'Online perakende ve e-ticaret platformu.',
                        'projects' => '20+ Proje',
                        'rating' => '4.9',
                        'employees' => '120+',
                        'bg' => 'from-pink-600 to-rose-400'
                    ],
                    [
                        'icon' => 'fa-truck',
                        'name' => 'LogiTrans',
                        'category' => 'Lojistik',
                        'color' => '#06B6D4',
                        'colorLight' => '#CFFAFE',
                        'colorDark' => '#0E7490',
                        'desc' => 'Lojistik ve tedarik zinciri çözümleri.',
                        'projects' => '10+ Proje',
                        'rating' => '4.6',
                        'employees' => '250+',
                        'bg' => 'from-cyan-600 to-sky-400'
                    ],
                    [
                        'icon' => 'fa-store',
                        'name' => 'RetailPlus',
                        'category' => 'Perakende',
                        'color' => '#8B5CF6',
                        'colorLight' => '#EDE9FE',
                        'colorDark' => '#6D28D9',
                        'desc' => 'Perakende mağaza yönetimi ve danışmanlık.',
                        'projects' => '14+ Proje',
                        'rating' => '4.8',
                        'employees' => '180+',
                        'bg' => 'from-purple-600 to-violet-400'
                    ],
                    [
                        'icon' => 'fa-handshake',
                        'name' => 'Danışmanlık Grubu',
                        'category' => 'Danışmanlık',
                        'color' => '#F97316',
                        'colorLight' => '#FFEDD5',
                        'colorDark' => '#C2410C',
                        'desc' => 'Kurumsal danışmanlık hizmetleri ve stratejik çözümler.',
                        'projects' => '25+ Proje',
                        'rating' => '4.9',
                        'employees' => '100+',
                        'bg' => 'from-orange-600 to-amber-400'
                    ],
                ];
            @endphp

            @foreach($clients as $index => $client)
                <div class="client-card" style="animation-delay: {{ $index * 0.08 }}s;">
                    <div class="client-inner" style="border-color: {{ $client['color'] }}20; --client-color: {{ $client['color'] }}; --client-dark: {{ $client['colorDark'] }};">
                        <!-- Kart Üstü Renkli Çizgi -->
                        <div class="card-top-line" style="background: linear-gradient(90deg, {{ $client['color'] }}, {{ $client['colorDark'] }});"></div>
                        
                        <!-- Arka Plan Glow -->
                        <div class="client-glow" style="background: radial-gradient(circle at 50% 30%, {{ $client['color'] }}15, transparent 70%);"></div>
                        
                        <!-- İkon -->
                        <div class="client-icon" style="color: {{ $client['color'] }}; background: {{ $client['colorLight'] }};">
                            <i class="fas {{ $client['icon'] }}"></i>
                        </div>
                        
                        <!-- Bilgiler -->
                        <div class="client-info">
                            <h3 class="client-name">{{ $client['name'] }}</h3>
                            <span class="client-category" style="background: {{ $client['colorLight'] }}; color: {{ $client['color'] }};">
                                {{ $client['category'] }}
                            </span>
                            <p class="client-desc">{{ $client['desc'] }}</p>
                        </div>
                        
                        <!-- İstatistikler -->
                        <div class="client-stats">
                            <div class="client-stat">
                                <span class="stat-number" style="color: {{ $client['color'] }};">{{ $client['projects'] }}</span>
                                <span class="stat-label">Proje</span>
                            </div>
                            <div class="client-stat-divider" style="background: {{ $client['color'] }}20;"></div>
                            <div class="client-stat">
                                <span class="stat-number" style="color: {{ $client['color'] }};">{{ $client['rating'] }}</span>
                                <span class="stat-label">⭐ Puan</span>
                            </div>
                            <div class="client-stat-divider" style="background: {{ $client['color'] }}20;"></div>
                            <div class="client-stat">
                                <span class="stat-number" style="color: {{ $client['color'] }};">{{ $client['employees'] }}</span>
                                <span class="stat-label">Çalışan</span>
                            </div>
                        </div>
                        
                        <!-- Footer -->
                        <div class="client-footer">
                            <span class="client-arrow" style="background: {{ $client['colorLight'] }}; color: {{ $client['color'] }};">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                        
                        <!-- Hover BG -->
                        <div class="client-hover-bg" style="background: {{ $client['color'] }};"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- ===== İSTATİSTİK BÖLÜMÜ ===== -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mt-16 max-w-5xl mx-auto">
            <div class="stat-box group">
                <div class="stat-icon" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="stat-number2 text-blue-600 group-hover:scale-110 transition-all duration-300">240+</div>
                <p class="stat-label2">Tamamlanan Proje</p>
                <div class="stat-line" style="background: linear-gradient(90deg, #3B82F6, #60A5FA);"></div>
            </div>
            <div class="stat-box group">
                <div class="stat-icon" style="background: linear-gradient(135deg, #10B981, #34D399);">
                    <i class="fas fa-smile"></i>
                </div>
                <div class="stat-number2 text-emerald-600 group-hover:scale-110 transition-all duration-300">%94</div>
                <p class="stat-label2">Müşteri Memnuniyeti</p>
                <div class="stat-line" style="background: linear-gradient(90deg, #10B981, #34D399);"></div>
            </div>
            <div class="stat-box group">
                <div class="stat-icon" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA);">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <div class="stat-number2 text-purple-600 group-hover:scale-110 transition-all duration-300">18+</div>
                <p class="stat-label2">Yıllık Deneyim</p>
                <div class="stat-line" style="background: linear-gradient(90deg, #8B5CF6, #A78BFA);"></div>
            </div>
            <div class="stat-box group">
                <div class="stat-icon" style="background: linear-gradient(135deg, #F97316, #FB923C);">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="stat-number2 text-orange-600 group-hover:scale-110 transition-all duration-300">32</div>
                <p class="stat-label2">Sektör Uzmanlığı</p>
                <div class="stat-line" style="background: linear-gradient(90deg, #F97316, #FB923C);"></div>
            </div>
        </div>

        <!-- ===== MÜŞTERİ YORUMLARI ===== -->
        <div class="mt-16">
            <div class="text-center mb-10">
                <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                    <i class="fas fa-quote-left mr-2"></i> MÜŞTERİ YORUMLARI
                </span>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-4">Referanslarımız Ne Diyor?</h3>
                <div class="section-divider" style="width: 50px md:w-60px; height: 3px md:h-4px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 12px auto 0;"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <div class="testimonial-card">
                    <div class="testimonial-quote" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Meridyen Danışmanlık ile çalışmak işimizi tamamen değiştirdi. Stratejik yaklaşımları sayesinde pazar payımızı %30 artırdık."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                            <span>AY</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-sm">Ahmet Yılmaz</p>
                            <p class="text-gray-400 text-xs">TeknoSoft CEO</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" style="animation-delay: 0.15s;">
                    <div class="testimonial-quote" style="background: linear-gradient(135deg, #10B981, #34D399);">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Finansal danışmanlık hizmetleriyle nakit akışımızı optimize ettik. Yatırım kararlarımız artık çok daha sağlıklı."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: linear-gradient(135deg, #10B981, #34D399);">
                            <span>MD</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-sm">Mehmet Demir</p>
                            <p class="text-gray-400 text-xs">FinansBank CFO</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" style="animation-delay: 0.3s;">
                    <div class="testimonial-quote" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA);">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Dijital dönüşüm sürecimizde bize rehberlik ettiler. Verimliliğimiz %40 arttı ve müşteri memnuniyetimiz zirveye çıktı."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA);">
                            <span>SK</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-sm">Selin Kaya</p>
                            <p class="text-gray-400 text-xs">ShopFast CMO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== BAŞARI HİKAYELERİ ===== -->
        <div class="mt-16">
            <div class="text-center mb-10">
                <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                    <i class="fas fa-trophy mr-2"></i> BAŞARI HİKAYELERİ
                </span>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-4">Birlikte Başardıklarımız</h3>
                <div class="section-divider" style="width: 50px md:w-60px; height: 3px md:h-4px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 12px auto 0;"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                <div class="success-card group">
                    <div class="success-number" style="color: #3B82F6;">01</div>
                    <h4 class="success-title">TeknoSoft ile Büyüme Başarısı</h4>
                    <p class="success-desc">TeknoSoft'un pazar payını %30 artırmak için geliştirdiğimiz stratejik planlama ve dijital dönüşüm çalışmaları ile şirketin büyüme hedeflerine ulaşmasını sağladık.</p>
                    <div class="success-meta">
                        <span class="success-tag" style="background: #3B82F6;">Strateji</span>
                        <span class="success-tag" style="background: #10B981;">Dijital Dönüşüm</span>
                    </div>
                </div>
                <div class="success-card group" style="animation-delay: 0.15s;">
                    <div class="success-number" style="color: #10B981;">02</div>
                    <h4 class="success-title">FinansBank'ta Finansal Optimizasyon</h4>
                    <p class="success-desc">FinansBank'ın nakit akışını optimize ederek, yatırım kararlarını daha sağlıklı hale getiren finansal danışmanlık ve raporlama sistemleri kurduk.</p>
                    <div class="success-meta">
                        <span class="success-tag" style="background: #10B981;">Finans</span>
                        <span class="success-tag" style="background: #8B5CF6;">Danışmanlık</span>
                    </div>
                </div>
                <div class="success-card group" style="animation-delay: 0.3s;">
                    <div class="success-number" style="color: #8B5CF6;">03</div>
                    <h4 class="success-title">ShopFast'in Dijital Dönüşüm Yolculuğu</h4>
                    <p class="success-desc">ShopFast'in e-ticaret platformunu modernize ederek, müşteri deneyimini iyileştiren ve verimliliği %40 artıran dijital dönüşüm projesi.</p>
                    <div class="success-meta">
                        <span class="success-tag" style="background: #8B5CF6;">Dijital</span>
                        <span class="success-tag" style="background: #EC4899;">E-Ticaret</span>
                    </div>
                </div>
                <div class="success-card group" style="animation-delay: 0.45s;">
                    <div class="success-number" style="color: #F59E0B;">04</div>
                    <h4 class="success-title">EnerjiPro'da Risk Yönetimi</h4>
                    <p class="success-desc">EnerjiPro'nun operasyonel ve finansal risklerini yönetmek için geliştirdiğimiz proaktif risk yönetimi stratejileri ile kurumsal dayanıklılığı artırdık.</p>
                    <div class="success-meta">
                        <span class="success-tag" style="background: #F59E0B;">Risk Yönetimi</span>
                        <span class="success-tag" style="background: #EF4444;">Enerji</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== LOGO BULUTU ===== -->
        <div class="mt-16">
            <div class="text-center mb-10">
                <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                    <i class="fas fa-cloud mr-2"></i> İŞ BİRLİKLERİ
                </span>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mt-4">Güvendiğimiz Markalar</h3>
                <div class="section-divider" style="width: 50px md:w-60px; height: 3px md:h-4px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 12px auto 0;"></div>
            </div>
            <div class="flex flex-wrap justify-center gap-6 md:gap-10 max-w-4xl mx-auto">
                <div class="logo-cloud-item">
                    <div class="logo-cloud-box" style="border-color: #3B82F6;">
                        <i class="fas fa-building text-3xl text-blue-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">TeknoSoft</span>
                    </div>
                </div>
                <div class="logo-cloud-item" style="animation-delay: 0.1s;">
                    <div class="logo-cloud-box" style="border-color: #10B981;">
                        <i class="fas fa-chart-line text-3xl text-emerald-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">FinansBank</span>
                    </div>
                </div>
                <div class="logo-cloud-item" style="animation-delay: 0.2s;">
                    <div class="logo-cloud-box" style="border-color: #EF4444;">
                        <i class="fas fa-heartbeat text-3xl text-red-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">MediLife</span>
                    </div>
                </div>
                <div class="logo-cloud-item" style="animation-delay: 0.3s;">
                    <div class="logo-cloud-box" style="border-color: #F59E0B;">
                        <i class="fas fa-bolt text-3xl text-amber-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">EnerjiPro</span>
                    </div>
                </div>
                <div class="logo-cloud-item" style="animation-delay: 0.4s;">
                    <div class="logo-cloud-box" style="border-color: #EC4899;">
                        <i class="fas fa-shopping-cart text-3xl text-pink-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">ShopFast</span>
                    </div>
                </div>
                <div class="logo-cloud-item" style="animation-delay: 0.5s;">
                    <div class="logo-cloud-box" style="border-color: #06B6D4;">
                        <i class="fas fa-truck text-3xl text-cyan-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">LogiTrans</span>
                    </div>
                </div>
                <div class="logo-cloud-item" style="animation-delay: 0.6s;">
                    <div class="logo-cloud-box" style="border-color: #8B5CF6;">
                        <i class="fas fa-store text-3xl text-purple-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">RetailPlus</span>
                    </div>
                </div>
                <div class="logo-cloud-item" style="animation-delay: 0.7s;">
                    <div class="logo-cloud-box" style="border-color: #F97316;">
                        <i class="fas fa-handshake text-3xl text-orange-600"></i>
                        <span class="text-xs font-semibold text-gray-600 mt-2">Danışmanlık Grubu</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== ALT BİLGİ VE BAŞVURU BUTONU ===== -->
        <div class="text-center mt-16 fadeInUp">
            <p class="text-gray-500 text-sm">20+ sektörde deneyim | 240+ başarılı proje | %94 müşteri memnuniyeti</p>
            <div class="mt-6">
                <a href="/basvuru" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-400 text-white px-8 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-blue-500/30 hover:scale-105 transition-all duration-300 text-lg group">
                    <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                    Danışmanlık Başvurusu Yapın
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
            <div class="flex flex-wrap justify-center gap-6 md:gap-8 mt-6 text-gray-500 text-xs md:text-sm">
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> Ücretsiz Ön Görüşme</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> 18 Yıl Deneyim</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> %94 Memnuniyet</span>
            </div>
        </div>
    </div>
</section>

<style>
    /* ===== CLIENT CARDS ===== */
    .client-card {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .client-inner {
        position: relative;
        background: white;
        border-radius: 20px;
        padding: 28px 20px 20px;
        text-align: center;
        border: 2px solid #eef2f7;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: pointer;
        overflow: hidden;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        animation: floatCard 4s ease-in-out infinite;
        animation-delay: var(--float-delay, 0s);
    }

    @keyframes floatCard {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-6px); }
    }

    .client-inner:hover {
        transform: translateY(-12px) scale(1.02);
        animation-play-state: paused;
        box-shadow: 0 30px 60px rgba(0,0,0,0.08), 0 0 80px var(--client-color)20;
        border-color: var(--client-color)40;
    }

    .client-glow {
        position: absolute;
        inset: 0;
        opacity: 0.5;
        transition: all 0.6s ease;
        pointer-events: none;
    }
    .client-inner:hover .client-glow {
        opacity: 1;
        transform: scale(1.1);
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
    .client-inner:hover .card-top-line {
        height: 5px;
        opacity: 1;
        box-shadow: 0 0 30px var(--client-color)50;
    }

    .client-hover-bg {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: all 0.6s ease;
        z-index: 0;
        border-radius: 20px;
    }
    .client-inner:hover .client-hover-bg {
        opacity: 0.05;
    }
    .client-inner * {
        position: relative;
        z-index: 1;
        transition: all 0.3s ease;
    }

    .client-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin-bottom: 12px;
        transition: all 0.5s ease;
        flex-shrink: 0;
    }
    .client-inner:hover .client-icon {
        transform: scale(1.12) rotate(6deg);
        box-shadow: 0 12px 40px rgba(0,0,0,0.08);
        background: var(--client-color) !important;
        color: white !important;
    }

    .client-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        text-align: center;
    }

    .client-name {
        font-size: 18px;
        font-weight: 700;
        color: #0B1F3A;
        margin-bottom: 4px;
        transition: all 0.3s ease;
    }
    .client-inner:hover .client-name {
        color: var(--client-color);
    }

    .client-category {
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        padding: 2px 14px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 6px;
        transition: all 0.3s ease;
    }
    .client-inner:hover .client-category {
        background: var(--client-color) !important;
        color: white !important;
        transform: scale(1.05);
    }

    .client-desc {
        font-size: 13px;
        color: #94a3b8;
        margin-top: 2px;
        transition: all 0.3s ease;
        line-height: 1.5;
    }
    .client-inner:hover .client-desc {
        color: #1e293b;
    }

    .client-stats {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        margin-top: 12px;
        padding: 10px 16px;
        background: #f8fafc;
        border-radius: 12px;
        width: 100%;
        transition: all 0.4s ease;
    }
    .client-inner:hover .client-stats {
        background: var(--client-colorLight);
        border: 1px solid var(--client-color)20;
    }

    .client-stat {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .stat-number {
        font-size: 16px;
        font-weight: 700;
        transition: all 0.3s ease;
    }
    .client-inner:hover .stat-number {
        transform: scale(1.1);
    }
    .stat-label {
        font-size: 10px;
        color: #94a3b8;
        font-weight: 500;
        margin-top: 1px;
    }
    .client-stat-divider {
        width: 1px;
        height: 28px;
        background: #e2e8f0;
        transition: all 0.3s ease;
    }
    .client-inner:hover .client-stat-divider {
        background: var(--client-color)30;
    }

    .client-footer {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 14px;
        padding-top: 14px;
        border-top: 1px solid #f1f5f9;
        transition: all 0.3s ease;
    }
    .client-inner:hover .client-footer {
        border-top-color: var(--client-color)30;
    }

    .client-arrow {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        opacity: 0.5;
        transition: all 0.4s ease;
    }
    .client-inner:hover .client-arrow {
        transform: translateX(6px);
        opacity: 1;
        background: var(--client-color) !important;
        color: white !important;
        box-shadow: 0 8px 30px var(--client-color)30;
    }

    /* ===== STAT BOX ===== */
    .stat-box {
        background: white;
        border-radius: 16px;
        padding: 24px 20px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
        border: 1px solid #f1f5f9;
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: default;
        position: relative;
        overflow: hidden;
    }
    .stat-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.06);
        border-color: transparent;
    }
    .stat-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        margin: 0 auto 10px;
        transition: all 0.4s ease;
    }
    .stat-box:hover .stat-icon {
        transform: scale(1.1) rotate(6deg);
    }
    .stat-number2 {
        font-size: 28px;
        font-weight: 800;
        transition: all 0.3s ease;
    }
    .stat-label2 {
        font-size: 13px;
        color: #94a3b8;
        font-weight: 500;
        margin-top: 2px;
    }
    .stat-line {
        width: 30px;
        height: 3px;
        border-radius: 4px;
        margin: 10px auto 0;
        transition: all 0.4s ease;
    }
    .stat-box:hover .stat-line {
        width: 60px;
    }

    /* ===== TESTIMONIAL CARDS ===== */
    .testimonial-card {
        background: white;
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
        border: 1px solid #f1f5f9;
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        position: relative;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    .testimonial-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.06);
        border-color: transparent;
    }
    .testimonial-quote {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 14px;
        margin-bottom: 12px;
        transition: all 0.4s ease;
    }
    .testimonial-card:hover .testimonial-quote {
        transform: scale(1.1);
    }
    .testimonial-text {
        color: #4B5563;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 16px;
    }
    .testimonial-author {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-top: 12px;
        border-top: 1px solid #f1f5f9;
    }
    .testimonial-avatar {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 13px;
        flex-shrink: 0;
        transition: all 0.4s ease;
    }
    .testimonial-card:hover .testimonial-avatar {
        transform: scale(1.08);
    }

    /* ===== SUCCESS CARDS ===== */
    .success-card {
        background: white;
        border-radius: 16px;
        padding: 24px 28px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
        border: 1px solid #f1f5f9;
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        position: relative;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    .success-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.06);
        border-color: transparent;
    }
    .success-number {
        font-size: 32px;
        font-weight: 900;
        opacity: 0.1;
        margin-bottom: 6px;
        transition: all 0.3s ease;
    }
    .success-card:hover .success-number {
        opacity: 0.3;
        transform: scale(1.1);
    }
    .success-title {
        font-size: 18px;
        font-weight: 700;
        color: #0B1F3A;
        margin-bottom: 8px;
        transition: all 0.3s ease;
    }
    .success-card:hover .success-title {
        color: var(--client-color, #2563EB);
    }
    .success-desc {
        font-size: 14px;
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 12px;
    }
    .success-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
    }
    .success-tag {
        padding: 3px 12px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
    }
    .success-card:hover .success-tag {
        transform: scale(1.05);
    }

    /* ===== LOGO CLOUD ===== */
    .logo-cloud-item {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    .logo-cloud-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 16px 20px;
        border-radius: 16px;
        border: 2px solid #eef2f7;
        background: white;
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: default;
        min-width: 100px;
    }
    .logo-cloud-box:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        border-color: var(--client-color, #2563EB);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .client-inner {
            min-height: 250px;
            padding: 22px 16px 16px;
        }
        .client-icon {
            width: 52px;
            height: 52px;
            font-size: 22px;
        }
        .client-name {
            font-size: 16px;
        }
        .client-stats {
            padding: 8px 12px;
            gap: 10px;
        }
        .stat-number {
            font-size: 14px;
        }
        .client-desc {
            font-size: 12px;
        }
        .success-card {
            padding: 20px 22px;
        }
        .success-title {
            font-size: 16px;
        }
        .success-desc {
            font-size: 13px;
        }
    }

    @media (max-width: 768px) {
        .client-inner {
            min-height: 220px;
            padding: 18px 14px 14px;
            border-radius: 16px;
        }
        .client-icon {
            width: 46px;
            height: 46px;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .client-name {
            font-size: 15px;
        }
        .client-desc {
            font-size: 12px;
        }
        .client-stats {
            padding: 6px 10px;
            gap: 8px;
        }
        .stat-number {
            font-size: 13px;
        }
        .stat-label {
            font-size: 9px;
        }
        .client-stat-divider {
            height: 22px;
        }
        .client-arrow {
            width: 32px;
            height: 32px;
            font-size: 12px;
        }
        .card-top-line {
            height: 3px;
        }
        .client-inner:hover {
            transform: translateY(-8px) scale(1.02);
        }
        @keyframes floatCard {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-4px); }
        }
        .stat-box {
            padding: 18px 14px;
        }
        .stat-number2 {
            font-size: 22px;
        }
        .stat-icon {
            width: 38px;
            height: 38px;
            font-size: 15px;
        }
        .testimonial-card {
            padding: 18px;
        }
        .testimonial-text {
            font-size: 13px;
        }
        .success-card {
            padding: 16px 18px;
        }
        .success-title {
            font-size: 15px;
        }
        .success-desc {
            font-size: 12px;
        }
        .logo-cloud-box {
            padding: 12px 14px;
            min-width: 80px;
        }
        .logo-cloud-box i {
            font-size: 24px !important;
        }
    }

    @media (max-width: 480px) {
        .client-inner {
            min-height: 200px;
            padding: 14px 10px 10px;
            border-radius: 14px;
        }
        .client-icon {
            width: 40px;
            height: 40px;
            font-size: 16px;
            margin-bottom: 8px;
            border-radius: 12px;
        }
        .client-name {
            font-size: 14px;
        }
        .client-desc {
            font-size: 11px;
        }
        .client-category {
            font-size: 9px;
            padding: 2px 10px;
        }
        .client-stats {
            padding: 4px 8px;
            gap: 6px;
            flex-wrap: wrap;
        }
        .stat-number {
            font-size: 12px;
        }
        .stat-label {
            font-size: 8px;
        }
        .client-stat-divider {
            height: 18px;
        }
        .client-arrow {
            width: 28px;
            height: 28px;
            font-size: 10px;
        }
        .card-top-line {
            height: 2px;
        }
        .client-inner:hover {
            transform: translateY(-6px) scale(1.02);
        }
        @keyframes floatCard {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }
        .stat-box {
            padding: 14px 10px;
        }
        .stat-number2 {
            font-size: 18px;
        }
        .stat-icon {
            width: 32px;
            height: 32px;
            font-size: 13px;
        }
        .stat-label2 {
            font-size: 11px;
        }
        .testimonial-card {
            padding: 14px;
        }
        .testimonial-text {
            font-size: 12px;
        }
        .testimonial-avatar {
            width: 36px;
            height: 36px;
            font-size: 11px;
        }
        .success-card {
            padding: 14px 14px;
        }
        .success-number {
            font-size: 24px;
        }
        .success-title {
            font-size: 14px;
        }
        .success-desc {
            font-size: 11px;
        }
        .logo-cloud-box {
            padding: 10px 10px;
            min-width: 60px;
        }
        .logo-cloud-box i {
            font-size: 18px !important;
        }
        .logo-cloud-box span {
            font-size: 10px !important;
        }
    }
</style>
@endsection