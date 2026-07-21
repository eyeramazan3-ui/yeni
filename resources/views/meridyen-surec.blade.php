@extends('meridyen-layout')

@section('title', 'Süreç - Meridyen Danışmanlık')

@section('content')
<section class="bg-gray-50 py-16 md:py-24 relative overflow-hidden">
    <!-- Arka Plan Dekorasyon -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 left-10 w-64 h-64 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-80 h-80 bg-purple-500 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-400 rounded-full blur-3xl animate-pulse" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Başlık -->
        <div class="text-center max-w-3xl mx-auto fadeInUp">
            <span class="tag" style="background: #1e3a5f; color: white; padding: 6px 16px md:px-6 md:py-2 text-[10px] md:text-xs;">
                <i class="fas fa-rocket mr-2"></i> KURUMSAL STRATEJİ & BÜYÜME DANIŞMANLIĞI
            </span>
            <h2 class="section-title text-3xl md:text-5xl mt-4">
                Kurumunuzu 
                <span class="gradient-text">geleceğe</span> 
                <br>taşıyacak strateji
            </h2>
            <div class="section-divider" style="width: 60px md:w-80px; height: 4px md:h-5px; background: linear-gradient(90deg, #2563eb, #60a5fa); margin: 16px auto 0;"></div>
            <p class="text-gray-500 mt-6 text-sm md:text-lg max-w-2xl mx-auto leading-relaxed">
                Kurumunuzun mevcut durumunu 360° analiz eder, pazar fırsatlarını değerlendirir 
                ve sürdürülebilir büyüme için uçtan uca bir strateji tasarlarız.
            </p>
        </div>

        <!-- ===== 3 ADIM ===== -->
        <div class="grid md:grid-cols-3 gap-6 mt-12">

            <!-- 1. ADIM - KEŞİF & ANALİZ -->
            <div class="step-card group" style="animation-delay: 0.1s;">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-blue-200 hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-500 group-hover:-translate-y-2 h-full">
                    <div class="bg-gradient-to-br from-blue-600 via-blue-500 to-cyan-400 p-6 md:p-8 text-white relative overflow-hidden min-h-[200px]">
                        <div class="absolute inset-0 opacity-30">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-20 -mt-20 animate-pulse"></div>
                            <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-20 -mb-20 animate-pulse" style="animation-delay: 1s;"></div>
                        </div>
                        <div class="relative z-10 flex items-start justify-between">
                            <div>
                                <span class="text-5xl md:text-6xl font-bold text-white/10">01</span>
                            </div>
                            <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center text-2xl backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold mt-2 relative z-10 group-hover:translate-x-2 transition-all duration-300">Keşif &amp; Analiz</h3>
                        <p class="text-blue-100/90 text-sm relative z-10 mt-1 group-hover:translate-x-1 transition-all duration-300">1-2 Hafta</p>
                    </div>
                    <div class="p-6 md:p-8">
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            Mevcut durumunuzu, verilerinizi ve hedeflerinizi <span class="font-semibold text-blue-600">derinlemesine inceliyoruz</span>. 
                            Güçlü ve zayıf yönlerinizi belirliyor, pazar fırsatlarını ve tehditleri analiz ediyoruz.
                        </p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-medium rounded-full border border-blue-200 hover:bg-blue-100 transition-all duration-300">Pazar Analizi</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-medium rounded-full border border-blue-200 hover:bg-blue-100 transition-all duration-300">Rekabet Stratejisi</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-medium rounded-full border border-blue-200 hover:bg-blue-100 transition-all duration-300">SWOT Analizi</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-medium rounded-full border border-blue-200 hover:bg-blue-100 transition-all duration-300">Paydaş Görüşmeleri</span>
                        </div>
                        <div class="mt-4 p-3 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl border border-blue-200">
                            <p class="text-xs text-gray-600"><i class="fas fa-check-circle text-blue-600 mr-1"></i> <span class="font-semibold">Sonuç:</span> Durum analizi raporu, SWOT matrisi</p>
                            <p class="text-xs text-gray-500 mt-1"><i class="fas fa-clock text-blue-600 mr-1"></i> Tahmini Süre: 1-2 Hafta</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. ADIM - STRATEJİ TASARIMI -->
            <div class="step-card group" style="animation-delay: 0.2s;">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-emerald-200 hover:shadow-2xl hover:shadow-emerald-500/20 transition-all duration-500 group-hover:-translate-y-2 h-full">
                    <div class="bg-gradient-to-br from-emerald-600 via-emerald-500 to-green-400 p-6 md:p-8 text-white relative overflow-hidden min-h-[200px]">
                        <div class="absolute inset-0 opacity-30">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-20 -mt-20 animate-pulse"></div>
                            <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-20 -mb-20 animate-pulse" style="animation-delay: 1s;"></div>
                        </div>
                        <div class="relative z-10 flex items-start justify-between">
                            <div>
                                <span class="text-5xl md:text-6xl font-bold text-white/10">02</span>
                            </div>
                            <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center text-2xl backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold mt-2 relative z-10 group-hover:translate-x-2 transition-all duration-300">Strateji Tasarımı</h3>
                        <p class="text-emerald-100/90 text-sm relative z-10 mt-1 group-hover:translate-x-1 transition-all duration-300">1-2 Hafta</p>
                    </div>
                    <div class="p-6 md:p-8">
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            Kurumunuza özel, <span class="font-semibold text-emerald-600">uygulanabilir bir eylem planı</span> 
                            ve öncelik matrisi oluşturuyoruz. Hedeflerinize giden yolu haritalıyor, kaynakları optimize ediyoruz.
                        </p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-medium rounded-full border border-emerald-200 hover:bg-emerald-100 transition-all duration-300">Operasyonel Verimlilik</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-medium rounded-full border border-emerald-200 hover:bg-emerald-100 transition-all duration-300">Performans Takibi</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-medium rounded-full border border-emerald-200 hover:bg-emerald-100 transition-all duration-300">KPI Belirleme</span>
                            <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-medium rounded-full border border-emerald-200 hover:bg-emerald-100 transition-all duration-300">Kaynak Planlama</span>
                        </div>
                        <div class="mt-4 p-3 bg-gradient-to-r from-emerald-50 to-green-50 rounded-xl border border-emerald-200">
                            <p class="text-xs text-gray-600"><i class="fas fa-check-circle text-emerald-600 mr-1"></i> <span class="font-semibold">Sonuç:</span> Stratejik eylem planı, KPI matrisi, yol haritası</p>
                            <p class="text-xs text-gray-500 mt-1"><i class="fas fa-clock text-emerald-600 mr-1"></i> Tahmini Süre: 1-2 Hafta</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. ADIM - UYGULAMA & TAKİP -->
            <div class="step-card group" style="animation-delay: 0.3s;">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-purple-200 hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-500 group-hover:-translate-y-2 h-full">
                    <div class="bg-gradient-to-br from-purple-600 via-purple-500 to-pink-400 p-6 md:p-8 text-white relative overflow-hidden min-h-[200px]">
                        <div class="absolute inset-0 opacity-30">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-20 -mt-20 animate-pulse"></div>
                            <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-20 -mb-20 animate-pulse" style="animation-delay: 1s;"></div>
                        </div>
                        <div class="relative z-10 flex items-start justify-between">
                            <div>
                                <span class="text-5xl md:text-6xl font-bold text-white/10">03</span>
                            </div>
                            <div class="w-14 h-14 rounded-2xl bg-white/20 flex items-center justify-center text-2xl backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold mt-2 relative z-10 group-hover:translate-x-2 transition-all duration-300">Uygulama &amp; Takip</h3>
                        <p class="text-purple-100/90 text-sm relative z-10 mt-1 group-hover:translate-x-1 transition-all duration-300">2-4 Hafta</p>
                    </div>
                    <div class="p-6 md:p-8">
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            Ekiplerinizle birlikte <span class="font-semibold text-purple-600">sahada uyguluyor</span>, 
                            sonuçları düzenli olarak ölçüyor ve raporluyoruz. Gerektiğinde stratejiyi optimize ediyoruz.
                        </p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-medium rounded-full border border-purple-200 hover:bg-purple-100 transition-all duration-300">Saha Desteği</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-medium rounded-full border border-purple-200 hover:bg-purple-100 transition-all duration-300">Raporlama</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-medium rounded-full border border-purple-200 hover:bg-purple-100 transition-all duration-300">Optimizasyon</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-medium rounded-full border border-purple-200 hover:bg-purple-100 transition-all duration-300">Geri Bildirim</span>
                        </div>
                        <div class="mt-4 p-3 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-200">
                            <p class="text-xs text-gray-600"><i class="fas fa-check-circle text-purple-600 mr-1"></i> <span class="font-semibold">Sonuç:</span> Uygulama raporları, performans analizleri</p>
                            <p class="text-xs text-gray-500 mt-1"><i class="fas fa-clock text-purple-600 mr-1"></i> Tahmini Süre: 2-4 Hafta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== SÜREÇ ÖZET TABLOSU ===== -->
        <div class="mt-16 bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-200">
            <div class="bg-gradient-to-r from-blue-700 to-cyan-600 px-6 md:px-8 py-5 md:py-6 text-white">
                <h3 class="text-xl md:text-2xl font-bold">📊 Süreç Özeti</h3>
                <p class="text-blue-100/80 text-sm">Tüm aşamalar ve beklentiler</p>
            </div>
            <div class="p-4 md:p-8 overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b-2 border-gray-200">
                            <th class="py-3 px-3 md:px-4 font-semibold text-gray-700 text-sm">Aşama</th>
                            <th class="py-3 px-3 md:px-4 font-semibold text-gray-700 text-sm">Süre</th>
                            <th class="py-3 px-3 md:px-4 font-semibold text-gray-700 text-sm hidden md:table-cell">Yapılanlar</th>
                            <th class="py-3 px-3 md:px-4 font-semibold text-gray-700 text-sm">Çıktı</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100 hover:bg-blue-50/50 transition">
                            <td class="py-3 md:py-4 px-3 md:px-4">
                                <span class="inline-flex items-center gap-2 font-medium text-blue-700 text-sm">
                                    <span class="w-6 h-6 rounded-full bg-blue-600 text-white text-xs flex items-center justify-center">1</span>
                                    Keşif & Analiz
                                </span>
                            </td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm">1-2 Hafta</td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm hidden md:table-cell">Pazar Analizi, Rekabet Stratejisi, SWOT, Paydaş Görüşmeleri</td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm">Durum Analizi Raporu</td>
                        </tr>
                        <tr class="border-b border-gray-100 hover:bg-emerald-50/50 transition">
                            <td class="py-3 md:py-4 px-3 md:px-4">
                                <span class="inline-flex items-center gap-2 font-medium text-emerald-700 text-sm">
                                    <span class="w-6 h-6 rounded-full bg-emerald-600 text-white text-xs flex items-center justify-center">2</span>
                                    Strateji Tasarımı
                                </span>
                            </td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm">1-2 Hafta</td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm hidden md:table-cell">Operasyonel Verimlilik, KPI Belirleme, Kaynak Planlama</td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm">Stratejik Eylem Planı</td>
                        </tr>
                        <tr class="hover:bg-purple-50/50 transition">
                            <td class="py-3 md:py-4 px-3 md:px-4">
                                <span class="inline-flex items-center gap-2 font-medium text-purple-700 text-sm">
                                    <span class="w-6 h-6 rounded-full bg-purple-600 text-white text-xs flex items-center justify-center">3</span>
                                    Uygulama & Takip
                                </span>
                            </td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm">2-4 Hafta</td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm hidden md:table-cell">Saha Desteği, Raporlama, Optimizasyon, Geri Bildirim</td>
                            <td class="py-3 md:py-4 px-3 md:px-4 text-gray-600 text-sm">Uygulama Raporları</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ===== SIK SORULAN SORULAR ===== -->
        <div class="mt-12 bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-200">
            <div class="bg-gradient-to-r from-purple-700 to-pink-600 px-6 md:px-8 py-5 md:py-6 text-white">
                <h3 class="text-xl md:text-2xl font-bold">❓ Sık Sorulan Sorular</h3>
            </div>
            <div class="p-4 md:p-8 space-y-4">
                <div class="border-b border-gray-100 pb-4">
                    <button onclick="toggleAnswer(this)" class="w-full text-left flex items-center justify-between group">
                        <span class="font-semibold text-gray-800 group-hover:text-blue-600 transition text-sm md:text-base">Süreç ne kadar sürüyor?</span>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-blue-600 transition text-sm"></i>
                    </button>
                    <div class="answer hidden mt-2 text-gray-600 text-sm leading-relaxed">
                        Proje kapsamına ve kurumunuzun büyüklüğüne bağlı olarak süreç genellikle 4-8 hafta arasında tamamlanır. Keşif ve analiz aşaması 1-2 hafta, strateji tasarımı 1-2 hafta, uygulama ve takip aşaması ise 2-4 hafta sürer.
                    </div>
                </div>
                <div class="border-b border-gray-100 pb-4">
                    <button onclick="toggleAnswer(this)" class="w-full text-left flex items-center justify-between group">
                        <span class="font-semibold text-gray-800 group-hover:text-blue-600 transition text-sm md:text-base">Hangi sektörlere hizmet veriyorsunuz?</span>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-blue-600 transition text-sm"></i>
                    </button>
                    <div class="answer hidden mt-2 text-gray-600 text-sm leading-relaxed">
                        20+ farklı sektörde deneyimimiz bulunmaktadır. Teknoloji, finans, sağlık, enerji, perakende, lojistik, e-ticaret ve danışmanlık başta olmak üzere birçok sektöre hizmet vermekteyiz.
                    </div>
                </div>
                <div class="border-b border-gray-100 pb-4">
                    <button onclick="toggleAnswer(this)" class="w-full text-left flex items-center justify-between group">
                        <span class="font-semibold text-gray-800 group-hover:text-blue-600 transition text-sm md:text-base">Danışmanlık sürecine kimler dahil oluyor?</span>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-blue-600 transition text-sm"></i>
                    </button>
                    <div class="answer hidden mt-2 text-gray-600 text-sm leading-relaxed">
                        Sürece kurumunuzun üst yönetimi, ilgili departman yöneticileri ve kilit paydaşlar dahil olur. Ekibimiz ise alanında uzman stratejik danışmanlar, analistler ve proje yöneticilerinden oluşur.
                    </div>
                </div>
                <div>
                    <button onclick="toggleAnswer(this)" class="w-full text-left flex items-center justify-between group">
                        <span class="font-semibold text-gray-800 group-hover:text-blue-600 transition text-sm md:text-base">Süreç sonunda ne kazanıyoruz?</span>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-blue-600 transition text-sm"></i>
                    </button>
                    <div class="answer hidden mt-2 text-gray-600 text-sm leading-relaxed">
                        Süreç sonunda kurumunuza özel stratejik yol haritası, uygulanabilir eylem planı, performans göstergeleri (KPI), kaynak optimizasyonu planı ve sürdürülebilir büyüme stratejisi kazanırsınız.
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== EK BİLGİLER ===== -->
        <div class="grid md:grid-cols-2 gap-6 mt-12 max-w-4xl mx-auto">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-blue-200 shadow-sm hover:shadow-xl hover:border-blue-300 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-clock text-lg"></i>
                    </div>
                    <h4 class="font-bold text-gray-800">Ortalama Süreç</h4>
                </div>
                <p class="text-gray-600 text-sm">Proje kapsamına göre 4-8 hafta arasında tamamlanır. Hızlı ve etkili sonuçlar için optimize edilmiş bir süreç sunarız.</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-emerald-200 shadow-sm hover:shadow-xl hover:border-emerald-300 transition-all duration-300 group">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-green-400 flex items-center justify-center text-white group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-users text-lg"></i>
                    </div>
                    <h4 class="font-bold text-gray-800">Ekip Desteği</h4>
                </div>
                <p class="text-gray-600 text-sm">Her aşamada uzman danışman ekibimiz sizinle birlikte çalışır. Süreç boyunca kesintisiz iletişim ve destek sağlanır.</p>
            </div>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-purple-200 shadow-sm hover:shadow-xl hover:border-purple-300 transition-all duration-300 group md:col-span-2 max-w-md mx-auto">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-400 flex items-center justify-center text-white group-hover:scale-110 transition-all duration-300">
                        <i class="fas fa-chart-simple text-lg"></i>
                    </div>
                    <h4 class="font-bold text-gray-800">Ölçülebilir Sonuçlar</h4>
                </div>
                <p class="text-gray-600 text-sm">Her aşama sonunda somut çıktılar ve raporlar sunarız. Başarıyı ölçülebilir metriklerle takip eder, süreci sürekli iyileştiririz.</p>
            </div>
        </div>

        <!-- ===== BAŞVURU BUTONU ===== -->
        <div class="mt-16 text-center">
            <a href="/basvuru" class="inline-flex items-center gap-2 md:gap-3 bg-gradient-to-r from-blue-600 to-cyan-400 text-white px-8 md:px-12 py-4 md:py-5 rounded-2xl font-semibold hover:shadow-2xl hover:shadow-blue-500/30 hover:scale-105 transition-all duration-300 text-sm md:text-lg group">
                <i class="fas fa-rocket group-hover:animate-bounce"></i>
                Danışmanlık Başvurusu Yapın
                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
            <div class="flex flex-wrap justify-center gap-6 md:gap-8 mt-6 text-gray-500 text-xs md:text-sm">
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> Ücretsiz Ön Görüşme</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> 18 Yıl Deneyim</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-blue-500"></i> %94 Memnuniyet</span>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleAnswer(button) {
        const answer = button.nextElementSibling;
        const icon = button.querySelector('i');
        if (answer.classList.contains('hidden')) {
            answer.classList.remove('hidden');
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            answer.classList.add('hidden');
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    }
</script>

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes pulse {
        0%, 100% { opacity: 0.15; }
        50% { opacity: 0.35; }
    }
    
    .fadeInUp { animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards; }
    .animate-pulse { animation: pulse 3s ease-in-out infinite; }
    
    .step-card {
        opacity: 0;
        transform: translateY(40px);
        animation: fadeInUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
    }
    
    .step-card .group-hover\:translate-x-2 {
        transition: transform 0.3s ease;
    }
    .step-card .group-hover\:rotate-6 {
        transition: transform 0.5s ease;
    }
    .step-card .group-hover\:scale-110 {
        transition: transform 0.3s ease;
    }
    .step-card .group-hover\:gap-3 {
        transition: gap 0.3s ease;
    }
    
    .answer {
        transition: all 0.3s ease;
    }
    .answer.hidden {
        display: none;
    }
    .answer:not(.hidden) {
        display: block;
        animation: slideDown 0.3s ease forwards;
    }
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @media (max-width: 768px) {
        .step-card .min-h-[200px] {
            min-height: 160px;
        }
        .step-card .text-5xl {
            font-size: 2.5rem;
        }
        .step-card .text-2xl {
            font-size: 1.2rem;
        }
    }
</style>
@endsection