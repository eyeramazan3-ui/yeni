@extends('meridyen-layout')

@section('title', 'Hakkımızda - Meridyen Danışmanlık')

@section('content')
<section class="min-h-screen py-16 md:py-24" style="background: linear-gradient(135deg, #f0f4ff 0%, #dbeafe 50%, #bfdbfe 100%);">
    <div class="container mx-auto px-4 max-w-6xl">
        <!-- Başlık -->
        <div class="text-center fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                <i class="fas fa-building mr-2"></i> HAKKIMIZDA
            </span>
            <h2 class="section-title text-3xl md:text-5xl mt-4">
                18 yıldır kurumların yanında, <br><span class="gradient-text">sonuç odaklı danışmanlık.</span>
            </h2>
            <div class="section-divider" style="width: 60px md:w-80px; height: 4px md:h-5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
        </div>

        <!-- İçerik -->
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 mt-8 md:mt-12 items-center">
            <!-- Sol - Yazı -->
            <div class="about-content-card fadeInLeft">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-xl border border-white/50 hover:shadow-2xl transition duration-500">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-10 h-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded"></span>
                        <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider">Hakkımızda</span>
                        <span class="w-10 h-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded"></span>
                    </div>
                    
                    <p class="text-gray-700 text-sm md:text-lg leading-relaxed">
                        2007 yılında İstanbul'da kurulan <strong class="text-blue-700">Meridyen Danışmanlık</strong>, KOBİ'lerden büyük ölçekli holdinglere kadar geniş bir yelpazede stratejik dönüşüm projeleri yürütmüştür.
                    </p>
                    <p class="text-gray-600 mt-3 md:mt-4 text-sm md:text-base leading-relaxed">
                        Sektör deneyimini analitik yöntemlerle birleştiren ekibimiz, her kuruma özel çözümler tasarlar.
                    </p>

                    <!-- Özellikler -->
                    <div class="space-y-3 mt-6">
                        <div class="flex items-center gap-3 p-3 md:p-4 bg-blue-50/80 rounded-xl border border-blue-100 hover:border-blue-300 transition-all duration-300">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-blue-600 flex items-center justify-center text-white text-xs md:text-sm flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-sm md:text-base font-medium text-gray-700">Uzman ve sertifikalı danışman kadrosu</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 md:p-4 bg-emerald-50/80 rounded-xl border border-emerald-100 hover:border-emerald-300 transition-all duration-300">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-emerald-600 flex items-center justify-center text-white text-xs md:text-sm flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-sm md:text-base font-medium text-gray-700">Veri odaklı, ölçülebilir metodoloji</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 md:p-4 bg-purple-50/80 rounded-xl border border-purple-100 hover:border-purple-300 transition-all duration-300">
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-purple-600 flex items-center justify-center text-white text-xs md:text-sm flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="text-sm md:text-base font-medium text-gray-700">Uçtan uca proje yönetimi ve saha desteği</span>
                        </div>
                    </div>

                    <a href="/basvuru" class="inline-flex items-center gap-2 mt-6 md:mt-8 bg-gradient-to-r from-blue-600 to-blue-400 text-white px-6 md:px-8 py-3 md:py-4 rounded-xl font-semibold hover:shadow-2xl hover:scale-105 transition-all duration-300 text-sm md:text-base group w-full md:w-auto justify-center">
                        <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                        Danışmanlık Başlat
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Sağ - Görsel ve İstatistikler -->
            <div class="about-image-card fadeInRight mt-6 md:mt-0">
                <div class="relative">
                    <!-- Ana Görsel -->
                    <div class="bg-gradient-to-br from-blue-800 via-blue-600 to-blue-400 p-1.5 rounded-2xl shadow-2xl">
                        <img src="https://picsum.photos/seed/meridyen3/600/450" alt="Hakkımızda" class="rounded-2xl w-full hover:scale-105 transition duration-700 ease-in-out">
                    </div>
                    
                    <!-- İstatistik Kartları -->
                    <div class="absolute -bottom-4 -left-4 bg-white/95 backdrop-blur-sm rounded-xl px-4 py-3 md:px-5 md:py-4 shadow-lg border border-blue-100">
                        <div class="flex items-center gap-2 md:gap-3">
                            <div class="w-10 h-10 md:w-14 md:h-14 rounded-full bg-gradient-to-br from-blue-600 to-blue-400 flex items-center justify-center text-white text-sm md:text-xl font-bold shadow-lg shadow-blue-500/25">18+</div>
                            <div>
                                <p class="text-[10px] md:text-xs text-gray-500">Yıllık</p>
                                <p class="text-sm md:text-base font-bold text-gray-800">Deneyim</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -top-3 -right-3 bg-white/95 backdrop-blur-sm rounded-xl px-3 py-2 md:px-4 md:py-3 shadow-lg border border-emerald-100">
                        <div class="flex items-center gap-1 md:gap-2">
                            <div class="w-8 h-8 md:w-12 md:h-12 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-400 flex items-center justify-center text-white text-xs md:text-lg font-bold shadow-lg shadow-emerald-500/25">%94</div>
                            <div>
                                <p class="text-[10px] md:text-xs text-gray-500">Müşteri</p>
                                <p class="text-sm md:text-base font-bold text-gray-800">Memnuniyet</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -right-4 bg-white/95 backdrop-blur-sm rounded-xl px-3 py-2 md:px-4 md:py-3 shadow-lg border border-purple-100">
                        <div class="flex items-center gap-1 md:gap-2">
                            <div class="w-8 h-8 md:w-12 md:h-12 rounded-full bg-gradient-to-br from-purple-500 to-purple-400 flex items-center justify-center text-white text-xs md:text-lg font-bold shadow-lg shadow-purple-500/25">240+</div>
                            <div>
                                <p class="text-[10px] md:text-xs text-gray-500">Tamamlanan</p>
                                <p class="text-sm md:text-base font-bold text-gray-800">Proje</p>
                            </div>
                        </div>
                    </div>

                    <!-- Dekoratif Küreler -->
                    <div class="absolute -bottom-8 -left-8 w-24 h-24 md:w-40 md:h-40 bg-blue-600 rounded-full opacity-10 float-bob-y"></div>
                    <div class="absolute -top-8 -right-8 w-20 h-20 md:w-32 md:h-32 bg-indigo-500 rounded-full opacity-10 float-bob-y" style="animation-delay:1.5s;"></div>
                </div>
            </div>
        </div>

        <!-- Alt İstatistikler -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mt-10 md:mt-16">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-5 md:p-6 text-center border border-white/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="text-3xl md:text-4xl font-extrabold text-blue-600">18+</div>
                <p class="text-gray-500 text-xs md:text-sm mt-1">Yıllık Deneyim</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-5 md:p-6 text-center border border-white/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="text-3xl md:text-4xl font-extrabold text-emerald-600">240+</div>
                <p class="text-gray-500 text-xs md:text-sm mt-1">Tamamlanan Proje</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-5 md:p-6 text-center border border-white/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="text-3xl md:text-4xl font-extrabold text-purple-600">%94</div>
                <p class="text-gray-500 text-xs md:text-sm mt-1">Müşteri Memnuniyeti</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-5 md:p-6 text-center border border-white/50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="text-3xl md:text-4xl font-extrabold text-orange-600">32</div>
                <p class="text-gray-500 text-xs md:text-sm mt-1">Sektör Uzmanlığı</p>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes floatBob {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    .float-bob-y { animation: floatBob 3s ease-in-out infinite; }
    
    @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-40px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(40px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .fadeInLeft { animation: fadeInLeft 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
    .fadeInRight { animation: fadeInRight 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .fadeInUp { animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
</style>
@endsection