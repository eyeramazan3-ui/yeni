@extends('meridyen-layout')

@section('title', 'Projeler - Meridyen Danışmanlık')

@section('content')
<section class="py-16 md:py-24" style="background: linear-gradient(135deg, #f8faff 0%, #e8f0fe 50%, #dbeafe 100%); position: relative; overflow: hidden;">
    <!-- Arka Plan Dekorasyon -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-blue-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Başlık -->
        <div class="text-center mb-12 md:mb-16 fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                <i class="fas fa-code mr-2"></i> PROJELER
            </span>
            <h2 class="section-title text-3xl md:text-5xl mt-4">
                <span class="gradient-text">Projelerimiz</span>
            </h2>
            <div class="section-divider" style="width: 60px md:w-80px; height: 4px md:h-5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
            <p class="text-gray-500 mt-4 text-sm md:text-lg max-w-2xl mx-auto">
                Sürdürülebilir büyüme için geliştirdiğimiz çözümlerle fark yaratıyoruz.
            </p>
        </div>

        <!-- ===== 3'LÜ BÜYÜK PROJE KARTLARI ===== -->
        <div class="grid md:grid-cols-3 gap-6 md:gap-8 max-w-6xl mx-auto">
            @php
                $projects = [
                    [
                        'icon' => 'fa-industry',
                        'title' => 'MRP',
                        'color' => '#3B82F6',
                        'colorLight' => '#DBEAFE',
                        'colorDark' => '#1D4ED8',
                        'bg' => 'from-blue-600 to-blue-400',
                        'desc' => 'Üretim odaklı işletmelerin hammaddeden yan mamule, üretim planlamasından stok yönetimine kadar olan tüm kaynak ihtiyaçlarını planlar.',
                        'tag' => 'Üretim Yönetimi',
                        'features' => ['Stok Yönetimi', 'Üretim Planlama', 'Malzeme İhtiyaç Planlaması'],
                        'users' => '45+ Kullanıcı',
                        'date' => '2024'
                    ],
                    [
                        'icon' => 'fa-rocket',
                        'title' => 'Hızlı Satış',
                        'color' => '#F59E0B',
                        'colorLight' => '#FEF3C7',
                        'colorDark' => '#B45309',
                        'bg' => 'from-amber-600 to-yellow-400',
                        'desc' => 'Satış süreçlerini hızlandıran, müşteri yönetimini kolaylaştıran ve satış performansını artıran entegre çözüm.',
                        'tag' => 'Satış & CRM',
                        'features' => ['Müşteri Yönetimi', 'Satış Takibi', 'Raporlama'],
                        'users' => '120+ Kullanıcı',
                        'date' => '2024'
                    ],
                    [
                        'icon' => 'fa-users',
                        'title' => 'İnsan Kaynakları',
                        'color' => '#8B5CF6',
                        'colorLight' => '#EDE9FE',
                        'colorDark' => '#6D28D9',
                        'bg' => 'from-purple-600 to-violet-400',
                        'desc' => 'Personel yönetiminden bordro işlemlerine, performans değerlendirmeden işe alım süreçlerine kadar tüm İK süreçlerini tek platformda toplar.',
                        'tag' => 'İK Yönetimi',
                        'features' => ['Bordro Yönetimi', 'Performans Takibi', 'İşe Alım'],
                        'users' => '80+ Kullanıcı',
                        'date' => '2023'
                    ],
                    [
                        'icon' => 'fa-globe',
                        'title' => 'Kurumsal Web Sitesi',
                        'color' => '#10B981',
                        'colorLight' => '#D1FAE5',
                        'colorDark' => '#047857',
                        'bg' => 'from-emerald-600 to-green-400',
                        'desc' => 'Modern, mobil uyumlu ve SEO dostu kurumsal web siteleri ile dijital dünyada güçlü bir marka imajı oluşturun.',
                        'tag' => 'Dijital Dönüşüm',
                        'features' => ['SEO Optimizasyonu', 'Mobil Uyum', 'Güvenli Altyapı'],
                        'users' => '200+ Ziyaretçi',
                        'date' => '2024'
                    ],
                    [
                        'icon' => 'fa-robot',
                        'title' => 'Otomasyon Sistemi',
                        'color' => '#EC4899',
                        'colorLight' => '#FCE7F3',
                        'colorDark' => '#BE185D',
                        'bg' => 'from-pink-600 to-rose-400',
                        'desc' => 'İş süreçlerinizi otomatikleştiren, tekrarlayan görevleri ortadan kaldıran ve verimliliği artıran akıllı otomasyon çözümü.',
                        'tag' => 'Otomasyon',
                        'features' => ['İş Akışı Otomasyonu', 'Entegrasyon', 'Raporlama'],
                        'users' => '60+ Kullanıcı',
                        'date' => '2024'
                    ],
                    [
                        'icon' => 'fa-cloud',
                        'title' => 'Bulut Altyapı',
                        'color' => '#06B6D4',
                        'colorLight' => '#CFFAFE',
                        'colorDark' => '#0E7490',
                        'bg' => 'from-cyan-600 to-sky-400',
                        'desc' => 'Güvenli, ölçeklenebilir ve yüksek performanslı bulut altyapı çözümleri ile işletmenizi dijital dönüşüme hazırlıyoruz.',
                        'tag' => 'Bulut Çözümleri',
                        'features' => ['Veri Güvenliği', 'Ölçeklenebilirlik', 'Performans'],
                        'users' => '35+ Kullanıcı',
                        'date' => '2023'
                    ],
                ];
            @endphp

            @foreach($projects as $index => $project)
                <div class="project-card" style="animation-delay: {{ $index * 0.12 }}s;">
                    <div class="project-inner" style="border-color: {{ $project['color'] }}20; --hover-color: {{ $project['color'] }}; --hover-light: {{ $project['colorLight'] }}; --hover-dark: {{ $project['colorDark'] }};">
                        <!-- Arka Plan Glow -->
                        <div class="project-bg-glow" style="background: radial-gradient(circle at 30% 20%, {{ $project['color'] }}15, transparent 70%);"></div>
                        
                        <!-- Kart Üstü Renkli Çizgi -->
                        <div class="card-top-line" style="background: linear-gradient(90deg, {{ $project['color'] }}, {{ $project['color'] }}dd, {{ $project['color'] }}55);"></div>
                        
                        <!-- Tarih Rozeti -->
                        <div class="project-date-badge" style="background: {{ $project['color'] }};">
                            <i class="far fa-calendar-alt"></i> {{ $project['date'] }}
                        </div>
                        
                        <!-- İkon -->
                        <div class="project-icon" style="color: {{ $project['color'] }}; background: {{ $project['color'] }}10;">
                            <i class="fas {{ $project['icon'] }}"></i>
                        </div>
                        
                        <!-- Bilgiler -->
                        <div class="project-info">
                            <h3 class="project-title">{{ $project['title'] }}</h3>
                            <span class="project-tag" style="color: {{ $project['color'] }};">
                                {{ $project['tag'] }}
                            </span>
                            <p class="project-desc">{{ $project['desc'] }}</p>
                        </div>
                        
                        <!-- Özellikler -->
                        <div class="project-features">
                            @foreach($project['features'] as $feature)
                                <span class="project-feature" style="border-color: {{ $project['color'] }}25; color: {{ $project['color'] }};">
                                    <i class="fas fa-check-circle" style="color: {{ $project['color'] }};"></i>
                                    {{ $feature }}
                                </span>
                            @endforeach
                        </div>
                        
                        <!-- Footer - Kullanıcı Bilgisi -->
                        <div class="project-footer">
                            <span class="project-users" style="color: {{ $project['color'] }};">
                                <i class="fas fa-users"></i> {{ $project['users'] }}
                            </span>
                            <span class="project-arrow" style="background: {{ $project['color'] }}10; color: {{ $project['color'] }};">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                        
                        <!-- Hover BG -->
                        <div class="project-hover-bg" style="background: {{ $project['color'] }};"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- ===== İSTATİSTİK BÖLÜMÜ ===== -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mt-16 max-w-5xl mx-auto">
            <div class="stat-box group">
                <div class="stat-icon" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                    <i class="fas fa-code"></i>
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

        <!-- ===== ALT BİLGİ VE BAŞVURU BUTONU ===== -->
        <div class="text-center mt-16 fadeInUp">
            <p class="text-gray-500 text-sm">20+ sektörde deneyim | 240+ başarılı proje | %94 müşteri memnuniyeti</p>
            <div class="mt-6">
                <a href="/basvuru" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-400 text-white px-8 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-blue-500/30 hover:scale-105 transition-all duration-300 text-lg group">
                    <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                    Proje Teklifi Alın
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
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes pulse {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 0.4; }
    }
    @keyframes shine {
        0% { background-position: -200% center; }
        100% { background-position: 200% center; }
    }
    @keyframes iconFloat {
        0%, 100% { transform: translateY(0) scale(1); }
        50% { transform: translateY(-5px) scale(1.05); }
    }
    
    .animate-pulse { animation: pulse 3s ease-in-out infinite; }
    .fadeInUp { animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }

    /* ===== PROJECT CARDS ===== */
    .project-card {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    
    .project-inner {
        position: relative;
        background: white;
        border-radius: 20px;
        padding: 32px 28px 24px;
        border: 1px solid #eef2f7;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: pointer;
        overflow: hidden;
        min-height: 400px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    }
    
    /* ===== HOVER EFEKTLERİ - KENDİ RENGİYLE ===== */
    .project-inner:hover {
        transform: translateY(-14px) scale(1.02);
        box-shadow: 0 30px 60px rgba(0,0,0,0.10), 0 0 80px var(--hover-color)15;
        border-color: var(--hover-color)40;
    }
    
    .project-bg-glow {
        position: absolute;
        inset: 0;
        opacity: 0.5;
        transition: all 0.6s ease;
        pointer-events: none;
    }
    .project-inner:hover .project-bg-glow {
        opacity: 1;
        transform: scale(1.3);
    }
    
    .card-top-line {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        border-radius: 20px 20px 0 0;
        opacity: 0.6;
        transition: all 0.5s ease;
    }
    .project-inner:hover .card-top-line {
        opacity: 1;
        height: 6px;
        background: var(--hover-color) !important;
        box-shadow: 0 0 30px var(--hover-color)50;
    }
    
    .project-hover-bg {
        position: absolute;
        inset: 0;
        opacity: 0;
        transition: all 0.6s ease;
        z-index: 0;
        border-radius: 20px;
    }
    .project-inner:hover .project-hover-bg {
        opacity: 0.06;
    }
    .project-inner * {
        position: relative;
        z-index: 1;
        transition: all 0.3s ease;
    }
    
    .project-date-badge {
        position: absolute;
        top: 14px;
        right: 14px;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        color: white;
        display: flex;
        align-items: center;
        gap: 4px;
        opacity: 0.8;
        transition: all 0.4s ease;
    }
    .project-inner:hover .project-date-badge {
        transform: scale(1.08) rotate(-3deg);
        opacity: 1;
        background: var(--hover-color) !important;
        box-shadow: 0 8px 30px var(--hover-color)40;
    }
    
    .project-icon {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 14px;
        transition: all 0.5s ease;
        flex-shrink: 0;
        border: 1px solid transparent;
    }
    .project-inner:hover .project-icon {
        transform: scale(1.15) rotate(8deg) translateY(-4px);
        box-shadow: 0 12px 40px var(--hover-color)25;
        background: var(--hover-color) !important;
        color: white !important;
        border-color: var(--hover-color);
        animation: iconFloat 1.5s ease-in-out infinite;
    }
    
    .project-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        text-align: center;
    }
    
    .project-title {
        font-size: 22px;
        font-weight: 800;
        color: #0B1F3A;
        margin-bottom: 4px;
        transition: all 0.3s ease;
    }
    .project-inner:hover .project-title {
        color: var(--hover-color);
        transform: scale(1.03);
        text-shadow: 0 0 30px var(--hover-color)20;
    }
    
    .project-tag {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        display: inline-block;
        margin-bottom: 6px;
        transition: all 0.3s ease;
    }
    .project-inner:hover .project-tag {
        transform: scale(1.05);
        color: var(--hover-color) !important;
    }
    
    .project-desc {
        font-size: 14px;
        color: #64748b;
        margin-top: 4px;
        transition: all 0.3s ease;
        line-height: 1.6;
    }
    .project-inner:hover .project-desc {
        color: #1e293b;
    }
    
    .project-features {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 8px;
        margin-top: 14px;
        width: 100%;
    }
    
    .project-feature {
        font-size: 12px;
        padding: 4px 14px;
        border-radius: 20px;
        border: 1px solid #eef2f7;
        display: flex;
        align-items: center;
        gap: 4px;
        font-weight: 500;
        transition: all 0.4s ease;
        background: #f8fafc;
    }
    .project-inner:hover .project-feature {
        transform: translateY(-3px) scale(1.03);
        box-shadow: 0 6px 20px var(--hover-color)15;
        background: var(--hover-light) !important;
        border-color: var(--hover-color) !important;
        color: var(--hover-dark) !important;
    }
    .project-feature i {
        font-size: 10px;
        transition: all 0.3s ease;
    }
    .project-inner:hover .project-feature i {
        transform: scale(1.2);
        color: var(--hover-color) !important;
    }
    
    .project-footer {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 16px;
        padding-top: 16px;
        border-top: 1px solid #f1f5f9;
        transition: all 0.3s ease;
    }
    .project-inner:hover .project-footer {
        border-top-color: var(--hover-color)30;
    }
    
    .project-users {
        font-size: 13px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
        transition: all 0.3s ease;
    }
    .project-inner:hover .project-users {
        transform: scale(1.05);
        color: var(--hover-color) !important;
    }
    .project-users i {
        font-size: 14px;
        transition: all 0.3s ease;
    }
    .project-inner:hover .project-users i {
        transform: scale(1.2);
        color: var(--hover-color) !important;
    }
    
    .project-arrow {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        opacity: 0.4;
        transition: all 0.4s ease;
    }
    .project-inner:hover .project-arrow {
        transform: translateX(8px) scale(1.05);
        opacity: 1;
        background: var(--hover-color) !important;
        color: white !important;
        box-shadow: 0 8px 30px var(--hover-color)35;
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

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1024px) {
        .project-inner {
            min-height: 360px;
            padding: 24px 20px 20px;
        }
        .project-icon {
            width: 54px;
            height: 54px;
            font-size: 22px;
        }
        .project-title {
            font-size: 19px;
        }
        .project-features {
            gap: 6px;
        }
        .project-feature {
            font-size: 11px;
            padding: 3px 12px;
        }
    }

    @media (max-width: 768px) {
        .project-inner {
            min-height: 320px;
            padding: 20px 16px 16px;
            border-radius: 16px;
        }
        .project-icon {
            width: 48px;
            height: 48px;
            font-size: 20px;
        }
        .project-title {
            font-size: 17px;
        }
        .project-desc {
            font-size: 13px;
        }
        .project-feature {
            font-size: 10px;
            padding: 3px 10px;
        }
        .project-date-badge {
            font-size: 10px;
            padding: 3px 10px;
            top: 10px;
            right: 10px;
        }
        .project-arrow {
            width: 34px;
            height: 34px;
            font-size: 12px;
        }
        .project-users {
            font-size: 12px;
        }
        .stat-number2 {
            font-size: 22px;
        }
        .stat-icon {
            width: 38px;
            height: 38px;
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .project-inner {
            min-height: 280px;
            padding: 16px 12px 12px;
            border-radius: 14px;
        }
        .project-icon {
            width: 40px;
            height: 40px;
            font-size: 16px;
            border-radius: 12px;
        }
        .project-title {
            font-size: 15px;
        }
        .project-desc {
            font-size: 12px;
        }
        .project-tag {
            font-size: 9px;
        }
        .project-feature {
            font-size: 9px;
            padding: 2px 8px;
        }
        .project-feature i {
            font-size: 8px;
        }
        .project-date-badge {
            font-size: 8px;
            padding: 2px 8px;
            top: 8px;
            right: 8px;
        }
        .project-arrow {
            width: 28px;
            height: 28px;
            font-size: 10px;
        }
        .project-users {
            font-size: 11px;
        }
        .stat-box {
            padding: 16px 12px;
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
    }
</style>
@endsection