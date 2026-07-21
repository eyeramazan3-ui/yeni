@extends('meridyen-layout')

@section('title', 'Süreç Detay - Meridyen Danışmanlık')

@section('content')
<section class="py-16 md:py-24" style="background: linear-gradient(135deg, #f0f4ff 0%, #dbeafe 50%, #bfdbfe 100%);">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="mb-6 md:mb-8">
            <a href="/surec" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-medium transition text-sm md:text-base group">
                <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i> Tüm Süreç
            </a>
        </div>

        <div class="text-center mb-8 md:mb-12 fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                <i class="fas fa-rocket mr-2"></i> SÜREÇ DETAYI
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-800 mt-4">
                Kurumunuzu <span class="gradient-text">geleceğe</span> taşıyan süreç
            </h1>
            <div class="section-divider" style="width: 60px md:w-80px; height: 4px md:h-5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
            <p class="text-gray-500 mt-4 text-sm md:text-lg max-w-2xl mx-auto">
                Kurumunuzun mevcut durumunu 360° analiz eder, pazar fırsatlarını değerlendirir 
                ve sürdürülebilir büyüme için uçtan uca bir strateji tasarlarız.
            </p>
        </div>

        <!-- Adım 1 -->
        <div id="adim1" class="bg-white rounded-3xl shadow-xl overflow-hidden border border-blue-100 mb-6 md:mb-8 hover:shadow-2xl transition-all duration-500 scroll-mt-20">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-gradient-to-br from-blue-700 to-blue-500 p-6 md:p-8 text-white flex flex-col items-center justify-center relative overflow-hidden">
                    <span class="text-6xl md:text-8xl font-bold text-white/10 relative z-10">01</span>
                    <div class="w-16 h-16 md:w-24 md:h-24 rounded-2xl bg-white/20 flex items-center justify-center text-2xl md:text-4xl relative z-10">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="text-xl md:text-3xl font-bold mt-3 md:mt-4 text-center relative z-10">Keşif &amp; Analiz</h3>
                    <p class="text-blue-100/80 text-xs md:text-sm text-center mt-1 md:mt-2 relative z-10">1-2 Hafta</p>
                </div>
                <div class="md:w-2/3 p-6 md:p-10">
                    <h4 class="text-lg md:text-xl font-bold text-gray-800 mb-3">📋 Bu Aşamada Neler Yapıyoruz?</h4>
                    <p class="text-gray-600 text-sm md:text-lg leading-relaxed">
                        Mevcut durumunuzu, verilerinizi ve hedeflerinizi <span class="font-semibold text-blue-600">derinlemesine inceliyoruz</span>. 
                        Güçlü ve zayıf yönlerinizi belirliyor, pazar fırsatlarını ve tehditleri analiz ediyoruz.
                    </p>

                    <div class="mt-4 md:mt-6 grid md:grid-cols-2 gap-3 md:gap-4">
                        <div class="bg-blue-50 rounded-xl p-3 md:p-4 border border-blue-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">1</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Pazar Analizi</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Sektörünüzdeki güncel trendleri, müşteri ihtiyaçlarını ve pazar dinamiklerini analiz ediyoruz.</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-3 md:p-4 border border-blue-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">2</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Rekabet Stratejisi</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Rakiplerinizi analiz ediyor, rekabet avantajı sağlayacak stratejiler geliştiriyoruz.</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-3 md:p-4 border border-blue-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">3</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">SWOT Analizi</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Kurumunuzun güçlü, zayıf yönlerini, fırsatlarını ve tehditlerini belirliyoruz.</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-3 md:p-4 border border-blue-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">4</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Paydaş Görüşmeleri</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Kilit paydaşlarla birebir görüşmeler yaparak beklentileri ve ihtiyaçları tespit ediyoruz.</p>
                        </div>
                    </div>

                    <div class="mt-4 md:mt-6 p-3 md:p-4 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl border border-blue-200">
                        <div class="flex items-center gap-2 md:gap-3">
                            <i class="fas fa-check-circle text-blue-600 text-sm md:text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-800 text-xs md:text-sm">Bu Aşamanın Sonucu</p>
                                <p class="text-gray-600 text-[10px] md:text-sm">Detaylı durum analizi raporu, SWOT matrisi ve ön değerlendirme sonuçları</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Adım 2 -->
        <div id="adim2" class="bg-white rounded-3xl shadow-xl overflow-hidden border border-emerald-100 mb-6 md:mb-8 hover:shadow-2xl transition-all duration-500 scroll-mt-20">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-gradient-to-br from-emerald-700 to-emerald-500 p-6 md:p-8 text-white flex flex-col items-center justify-center relative overflow-hidden">
                    <span class="text-6xl md:text-8xl font-bold text-white/10 relative z-10">02</span>
                    <div class="w-16 h-16 md:w-24 md:h-24 rounded-2xl bg-white/20 flex items-center justify-center text-2xl md:text-4xl relative z-10">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h3 class="text-xl md:text-3xl font-bold mt-3 md:mt-4 text-center relative z-10">Strateji Tasarımı</h3>
                    <p class="text-emerald-100/80 text-xs md:text-sm text-center mt-1 md:mt-2 relative z-10">1-2 Hafta</p>
                </div>
                <div class="md:w-2/3 p-6 md:p-10">
                    <h4 class="text-lg md:text-xl font-bold text-gray-800 mb-3">📐 Bu Aşamada Neler Yapıyoruz?</h4>
                    <p class="text-gray-600 text-sm md:text-lg leading-relaxed">
                        Kurumunuza özel, <span class="font-semibold text-emerald-600">uygulanabilir bir eylem planı</span> 
                        ve öncelik matrisi oluşturuyoruz. Hedeflerinize giden yolu haritalıyor, kaynakları optimize ediyoruz.
                    </p>

                    <div class="mt-4 md:mt-6 grid md:grid-cols-2 gap-3 md:gap-4">
                        <div class="bg-emerald-50 rounded-xl p-3 md:p-4 border border-emerald-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-emerald-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">1</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Operasyonel Verimlilik</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">İş süreçlerinizi analiz ederek verimliliği artıracak operasyonel iyileştirmeler planlıyoruz.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-xl p-3 md:p-4 border border-emerald-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-emerald-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">2</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Performans Takibi</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Başarıyı ölçmek için performans göstergeleri (KPI) belirliyoruz.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-xl p-3 md:p-4 border border-emerald-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-emerald-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">3</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">KPI Belirleme</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Hedeflerinize ulaşmak için kritik başarı faktörlerini ve ölçüm metriklerini tanımlıyoruz.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-xl p-3 md:p-4 border border-emerald-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-emerald-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">4</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Kaynak Planlama</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">İnsan, finans ve teknoloji kaynaklarınızı en verimli şekilde planlıyoruz.</p>
                        </div>
                    </div>

                    <div class="mt-4 md:mt-6 p-3 md:p-4 bg-gradient-to-r from-emerald-50 to-emerald-100/50 rounded-xl border border-emerald-200">
                        <div class="flex items-center gap-2 md:gap-3">
                            <i class="fas fa-check-circle text-emerald-600 text-sm md:text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-800 text-xs md:text-sm">Bu Aşamanın Sonucu</p>
                                <p class="text-gray-600 text-[10px] md:text-sm">Stratejik eylem planı, KPI matrisi, kaynak planlaması ve yol haritası</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Adım 3 -->
        <div id="adim3" class="bg-white rounded-3xl shadow-xl overflow-hidden border border-purple-100 mb-6 md:mb-8 hover:shadow-2xl transition-all duration-500 scroll-mt-20">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-gradient-to-br from-purple-700 to-purple-500 p-6 md:p-8 text-white flex flex-col items-center justify-center relative overflow-hidden">
                    <span class="text-6xl md:text-8xl font-bold text-white/10 relative z-10">03</span>
                    <div class="w-16 h-16 md:w-24 md:h-24 rounded-2xl bg-white/20 flex items-center justify-center text-2xl md:text-4xl relative z-10">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl md:text-3xl font-bold mt-3 md:mt-4 text-center relative z-10">Uygulama &amp; Takip</h3>
                    <p class="text-purple-100/80 text-xs md:text-sm text-center mt-1 md:mt-2 relative z-10">2-4 Hafta</p>
                </div>
                <div class="md:w-2/3 p-6 md:p-10">
                    <h4 class="text-lg md:text-xl font-bold text-gray-800 mb-3">🚀 Bu Aşamada Neler Yapıyoruz?</h4>
                    <p class="text-gray-600 text-sm md:text-lg leading-relaxed">
                        Ekiplerinizle birlikte <span class="font-semibold text-purple-600">sahada uyguluyor</span>, 
                        sonuçları düzenli olarak ölçüyor ve raporluyoruz. Gerektiğinde stratejiyi optimize ediyoruz.
                    </p>

                    <div class="mt-4 md:mt-6 grid md:grid-cols-2 gap-3 md:gap-4">
                        <div class="bg-purple-50 rounded-xl p-3 md:p-4 border border-purple-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-purple-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">1</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Saha Desteği</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Uzman danışman ekibimiz sahada size eşlik eder, uygulama sürecinde rehberlik sağlar.</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-3 md:p-4 border border-purple-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-purple-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">2</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Raporlama</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Düzenli ilerleme raporları ile sürecin her aşamasını şeffaf bir şekilde paylaşıyoruz.</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-3 md:p-4 border border-purple-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-purple-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">3</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Optimizasyon</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Gerçek zamanlı verilere göre stratejileri optimize ederek en iyi sonuçları alıyoruz.</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-3 md:p-4 border border-purple-100">
                            <div class="flex items-center gap-2 md:gap-3">
                                <div class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-purple-600 flex items-center justify-center text-white text-xs md:text-sm font-bold">4</div>
                                <span class="font-semibold text-gray-700 text-xs md:text-sm">Geri Bildirim</span>
                            </div>
                            <p class="text-gray-500 text-[10px] md:text-sm mt-1 md:mt-2 ml-8 md:ml-11">Sürekli geri bildirim döngüsü ile iyileştirme alanlarını hızlıca belirliyoruz.</p>
                        </div>
                    </div>

                    <div class="mt-4 md:mt-6 p-3 md:p-4 bg-gradient-to-r from-purple-50 to-purple-100/50 rounded-xl border border-purple-200">
                        <div class="flex items-center gap-2 md:gap-3">
                            <i class="fas fa-check-circle text-purple-600 text-sm md:text-xl"></i>
                            <div>
                                <p class="font-semibold text-gray-800 text-xs md:text-sm">Bu Aşamanın Sonucu</p>
                                <p class="text-gray-600 text-[10px] md:text-sm">Uygulama raporları, performans analizleri, optimize edilmiş strateji dokümanı</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Başvuru Butonu -->
        <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-3xl p-6 md:p-12 text-white text-center relative overflow-hidden">
            <div class="relative z-10">
                <h3 class="text-xl md:text-4xl font-bold">Bu süreçten faydalanmak ister misiniz?</h3>
                <p class="text-blue-200/80 text-sm md:text-lg mt-2 md:mt-3 max-w-2xl mx-auto">
                    Kurumunuzu geleceğe taşımak için hemen adım atın. Size özel çözümlerle büyümenizi hızlandıralım.
                </p>
                <div class="mt-4 md:mt-6 flex flex-wrap justify-center gap-3 md:gap-4">
                    <a href="/basvuru" class="inline-flex items-center gap-2 md:gap-3 bg-white text-blue-700 px-6 md:px-10 py-3 md:py-4 rounded-2xl font-bold text-sm md:text-lg hover:shadow-2xl hover:scale-105 transition-all duration-300 group">
                        <i class="fas fa-paper-plane group-hover:animate-bounce"></i>
                        Hemen Başvur
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                    <a href="/hizmetler" class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white px-6 md:px-8 py-3 md:py-4 rounded-2xl font-semibold text-sm md:text-lg border border-white/20 hover:bg-white/30 transition-all duration-300">
                        Hizmetleri Keşfet
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection