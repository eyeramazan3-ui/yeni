@extends('meridyen-layout')

@section('title', 'Kurumsal Çözümler - Meridyen Danışmanlık')

@section('content')
<!-- ===== KURUMSAL ÇÖZÜMLER ===== -->
<section class="bg-white py-24">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto fadeInUp">
            <span class="tag" style="background: #dbeafe; color: #1e3a5f;"><i class="fas fa-cog mr-1"></i> KURUMSAL ÇÖZÜMLER</span>
            <h2 class="section-title">Kurumunuzu <span class="gradient-text">geleceğe</span> taşıyoruz</h2>
            <p class="text-gray-500 mt-4 text-lg">18 yıllık deneyimle, işletmenize özel stratejik çözümler sunuyoruz.</p>
            <div class="section-divider"></div>
            <p class="text-gray-500 mt-6 max-w-2xl mx-auto">
                Kurumunuzun büyüme hedeflerine ulaşması için ihtiyaç duyduğu tüm stratejik çözümleri 
                tek bir çatı altında sunuyoruz. Uzman ekibimizle, size özel danışmanlık hizmetleri geliştiriyoruz.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mt-12">
            <!-- Stratejik Planlama -->
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
                    <a href="/hizmet/stratejik-planlama" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>

            <!-- Finansal Danışmanlık -->
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
                    <a href="/hizmet/finansal-danismanlik" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>

            <!-- Dijital Dönüşüm -->
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
                    <a href="/hizmet/dijital-donusum" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>

            <!-- Risk Yönetimi -->
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
                    <a href="/hizmet/risk-yonetimi" class="service-link">Detaylı Bilgi <i class="fas fa-arrow-right text-sm"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12 fadeInUp">
            <p class="text-gray-500 text-sm">20+ sektörde deneyim | 240+ başarılı proje | %94 müşteri memnuniyeti</p>
            <div class="mt-8">
                <a href="/basvuru" class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-blue-400 text-white px-10 py-4 rounded-2xl font-semibold hover:shadow-2xl hover:scale-105 transition-all duration-300 text-lg group">
                    <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                    Danışmanlık Başvurusu Yapın
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection