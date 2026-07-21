@extends('meridyen-layout')

@section('title', 'Blog - Meridyen Danışmanlık')

@section('content')
<section class="py-16 md:py-24" style="background: linear-gradient(135deg, #f8faff 0%, #eff6ff 50%, #dbeafe 100%); position: relative; overflow: hidden;">
    <!-- Arka Plan Dekorasyon -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Başlık -->
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

        <!-- Kategori Filtreleri -->
        <div class="flex flex-wrap justify-center gap-3 mt-8">
            <button class="px-4 py-2 rounded-full text-sm font-medium bg-blue-600 text-white hover:bg-blue-700 transition-all duration-300">Tümü</button>
            <button class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-blue-100 hover:text-blue-700 transition-all duration-300">Dijital Dönüşüm</button>
            <button class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-emerald-100 hover:text-emerald-700 transition-all duration-300">Finans</button>
            <button class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-amber-100 hover:text-amber-700 transition-all duration-300">Strateji</button>
            <button class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-purple-100 hover:text-purple-700 transition-all duration-300">İK Yönetimi</button>
            <button class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700 hover:bg-rose-100 hover:text-rose-700 transition-all duration-300">Risk Yönetimi</button>
        </div>

        <!-- ===== BLOG KARTLARI ===== -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mt-10">
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
                        'readTime' => '5 dk okuma',
                        'author' => 'Ahmet Yılmaz',
                        'image' => 'https://picsum.photos/seed/blog1/600/400'
                    ],
                    [
                        'title' => '2025\'te Finansal Yönetim: Trendler ve Stratejiler',
                        'category' => 'Finans',
                        'color' => '#10B981',
                        'colorDark' => '#059669',
                        'desc' => 'Yeni yılda finansal yönetimde öne çıkan trendler, sürdürülebilir büyüme için stratejik yaklaşımlar.',
                        'date' => '10 Temmuz 2025',
                        'icon' => 'fa-coins',
                        'readTime' => '7 dk okuma',
                        'author' => 'Mehmet Demir',
                        'image' => 'https://picsum.photos/seed/blog2/600/400'
                    ],
                    [
                        'title' => 'Kurumsal Stratejide Veri Odaklı Karar Alma',
                        'category' => 'Strateji',
                        'color' => '#F59E0B',
                        'colorDark' => '#D97706',
                        'desc' => 'Veri analitiğinin kurumsal stratejilere entegrasyonu ve karar alma süreçlerinde verinin rolü.',
                        'date' => '5 Temmuz 2025',
                        'icon' => 'fa-chart-line',
                        'readTime' => '6 dk okuma',
                        'author' => 'Selin Kaya',
                        'image' => 'https://picsum.photos/seed/blog3/600/400'
                    ],
                    [
                        'title' => 'İnsan Kaynaklarında Dijital Dönüşüm',
                        'category' => 'İK Yönetimi',
                        'color' => '#8B5CF6',
                        'colorDark' => '#7C3AED',
                        'desc' => 'İK süreçlerinde dijital dönüşümün önemi, çalışan deneyimini iyileştiren teknolojik çözümler.',
                        'date' => '28 Haziran 2025',
                        'icon' => 'fa-users',
                        'readTime' => '8 dk okuma',
                        'author' => 'Zeynep Ak',
                        'image' => 'https://picsum.photos/seed/blog4/600/400'
                    ],
                    [
                        'title' => 'Risk Yönetiminde Yeni Yaklaşımlar',
                        'category' => 'Risk Yönetimi',
                        'color' => '#EF4444',
                        'colorDark' => '#DC2626',
                        'desc' => 'Günümüz iş dünyasında risk yönetimine yeni perspektifler ve proaktif stratejiler.',
                        'date' => '20 Haziran 2025',
                        'icon' => 'fa-shield-alt',
                        'readTime' => '6 dk okuma',
                        'author' => 'Ali Can',
                        'image' => 'https://picsum.photos/seed/blog5/600/400'
                    ],
                    [
                        'title' => 'Sürdürülebilir Büyüme için Stratejik Planlama',
                        'category' => 'Strateji',
                        'color' => '#F97316',
                        'colorDark' => '#EA580C',
                        'desc' => 'Uzun vadeli sürdürülebilir büyüme için stratejik planlama yaklaşımları ve uygulama örnekleri.',
                        'date' => '15 Haziran 2025',
                        'icon' => 'fa-chess-queen',
                        'readTime' => '7 dk okuma',
                        'author' => 'Ahmet Yılmaz',
                        'image' => 'https://picsum.photos/seed/blog6/600/400'
                    ],
                ];
            @endphp

            @foreach($blogs as $index => $blog)
                <div class="blog-card" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="card6" style="--blog-color: {{ $blog['color'] }}; --blog-dark: {{ $blog['colorDark'] }}; border-color: {{ $blog['color'] }}20;">
                        <!-- Görsel -->
                        <div class="blog-image" style="background-image: url('{{ $blog['image'] }}');">
                            <div class="blog-image-overlay" style="background: linear-gradient(135deg, {{ $blog['color'] }}, {{ $blog['colorDark'] }});"></div>
                            <span class="blog-category-badge" style="background: {{ $blog['color'] }};">
                                {{ $blog['category'] }}
                            </span>
                        </div>
                        
                        <!-- İçerik -->
                        <div class="blog-body">
                            <div class="blog-meta-top">
                                <span class="blog-date">
                                    <i class="far fa-calendar-alt"></i> {{ $blog['date'] }}
                                </span>
                                <span class="blog-readtime">
                                    <i class="far fa-clock"></i> {{ $blog['readTime'] }}
                                </span>
                            </div>
                            <h3 class="blog-title">{{ $blog['title'] }}</h3>
                            <p class="blog-desc">{{ $blog['desc'] }}</p>
                            <div class="blog-footer">
                                <span class="blog-author">
                                    <i class="fas fa-user"></i> {{ $blog['author'] }}
                                </span>
                            </div>
                        </div>
                        
                        <!-- Hover Border -->
                        <div class="blog-border" style="background: linear-gradient(90deg, {{ $blog['color'] }}, {{ $blog['colorDark'] }});"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Başvuru Butonu -->
        <div class="text-center mt-16">
            <a href="/basvuru" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-cyan-400 text-white px-8 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-blue-500/30 hover:scale-105 transition-all duration-300 text-lg group">
                <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                Danışmanlık Başvurusu Yapın
                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
            <div class="flex flex-wrap justify-center gap-6 md:gap-8 mt-4 text-gray-500 text-xs md:text-sm">
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> Ücretsiz Ön Görüşme</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> 18 Yıl Deneyim</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> %94 Memnuniyet</span>
            </div>
        </div>
    </div>
</section>

<style>
    /* ===== BLOG CARDS ===== */
    .blog-card {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        display: flex;
        justify-content: center;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .card6 {
        display: block;
        width: 100%;
        max-width: 380px;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #eef2f7;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        text-decoration: none;
        position: relative;
        cursor: pointer;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        animation: floatCard 4s ease-in-out infinite;
        animation-delay: var(--float-delay, 0s);
    }

    @keyframes floatCard {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-8px); }
    }

    .card6:hover {
        transform: translateY(-16px) scale(1.02);
        animation-play-state: paused;
        box-shadow: 0 30px 60px rgba(0,0,0,0.08), 0 0 80px var(--blog-color)15;
        border-color: var(--blog-color)40;
    }

    /* Blog Görsel */
    .blog-image {
        width: 100%;
        height: 220px;
        background-size: cover;
        background-position: center;
        position: relative;
        overflow: hidden;
    }

    .blog-image-overlay {
        position: absolute;
        inset: 0;
        opacity: 0.6;
        transition: all 0.5s ease;
    }
    .card6:hover .blog-image-overlay {
        opacity: 0.8;
    }

    .blog-category-badge {
        position: absolute;
        top: 16px;
        right: 16px;
        padding: 4px 16px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        color: white;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
    }
    .card6:hover .blog-category-badge {
        transform: scale(1.05);
        box-shadow: 0 8px 30px rgba(0,0,0,0.3);
    }

    /* İçerik */
    .blog-body {
        padding: 20px 24px 24px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        background: white;
        flex: 1;
    }

    .blog-meta-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 12px;
        color: #94a3b8;
    }
    .blog-meta-top span {
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .blog-meta-top i {
        font-size: 12px;
    }

    .blog-title {
        font-size: 18px;
        font-weight: 700;
        color: #0B1F3A;
        line-height: 1.4;
        transition: all 0.3s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .card6:hover .blog-title {
        color: var(--blog-color);
    }

    .blog-desc {
        font-size: 13px;
        color: #64748b;
        line-height: 1.7;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: all 0.3s ease;
        flex: 1;
    }
    .card6:hover .blog-desc {
        color: #334155;
    }

    .blog-footer {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding-top: 14px;
        border-top: 1px solid #f1f5f9;
        margin-top: 4px;
    }

    .blog-author {
        font-size: 13px;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 6px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .card6:hover .blog-author {
        color: var(--blog-color);
    }
    .blog-author i {
        font-size: 13px;
        color: var(--blog-color);
    }

    /* Border Efekti */
    .blog-border {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 4px;
        transition: all 0.6s ease;
        border-radius: 0 0 20px 20px;
    }
    .card6:hover .blog-border {
        width: 100%;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .card6 {
            max-width: 100%;
        }
        .blog-image {
            height: 200px;
        }
        .blog-title {
            font-size: 17px;
        }
        @keyframes floatCard {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
        }
    }

    @media (max-width: 768px) {
        .card6 {
            border-radius: 16px;
        }
        .blog-image {
            height: 180px;
        }
        .blog-body {
            padding: 16px 18px 20px;
        }
        .blog-title {
            font-size: 16px;
        }
        .blog-desc {
            font-size: 12px;
        }
        .blog-meta-top {
            font-size: 11px;
        }
        .blog-author {
            font-size: 12px;
        }
        .card6:hover {
            transform: translateY(-12px) scale(1.02);
        }
        @keyframes floatCard {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-4px); }
        }
    }

    @media (max-width: 480px) {
        .card6 {
            border-radius: 14px;
        }
        .blog-image {
            height: 160px;
        }
        .blog-body {
            padding: 14px 16px 16px;
        }
        .blog-title {
            font-size: 15px;
        }
        .blog-desc {
            font-size: 12px;
            -webkit-line-clamp: 2;
        }
        .blog-meta-top {
            font-size: 10px;
        }
        .blog-author {
            font-size: 11px;
        }
        .blog-category-badge {
            font-size: 10px;
            padding: 3px 12px;
            top: 12px;
            right: 12px;
        }
        .blog-border {
            height: 3px;
        }
        .card6:hover {
            transform: translateY(-8px) scale(1.02);
        }
        @keyframes floatCard {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }
    }
</style>
@endsection