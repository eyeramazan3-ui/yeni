@extends('meridyen-layout')

@section('title', 'Başvuru - Meridyen Danışmanlık')

@section('content')
<section class="min-h-screen py-16 md:py-24" style="background: linear-gradient(135deg, #f0f4ff 0%, #dbeafe 50%, #bfdbfe 100%);">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-8 md:mb-12 fadeInUp">
            <span class="tag"><i class="fas fa-file-alt mr-1"></i> BAŞVURU</span>
            <h2 class="section-title text-3xl md:text-5xl">Danışmanlık <span class="gradient-text">Başvuru Formu</span></h2>
            <div class="section-divider"></div>
            <p class="text-gray-500 mt-4 text-sm md:text-base">Kurumunuz için en doğru çözümü birlikte tasarlayalım. Formu doldurun, size hemen dönelim.</p>
        </div>

        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 md:px-6 py-3 md:py-4 rounded-2xl mb-6 md:mb-8 flex items-center gap-3">
                <i class="fas fa-check-circle text-green-500 text-lg md:text-xl"></i>
                <span class="text-sm md:text-base">{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 md:px-6 py-3 md:py-4 rounded-2xl mb-6 md:mb-8">
                <ul class="list-disc list-inside text-sm md:text-base">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-xl p-6 md:p-12">
            <form action="{{ route('basvuru.gonder') }}" method="POST">
                @csrf
                
                <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ad Soyad <span class="text-red-500">*</span></label>
                        <input type="text" name="ad_soyad" value="{{ old('ad_soyad') }}" required
                               class="w-full border border-gray-200 p-3 md:p-4 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition text-sm md:text-base" 
                               placeholder="Adınız Soyadınız">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                               class="w-full border border-gray-200 p-3 md:p-4 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition text-sm md:text-base" 
                               placeholder="ornek@email.com">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4 md:gap-6 mt-4 md:mt-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Telefon <span class="text-red-500">*</span></label>
                        <input type="tel" name="telefon" value="{{ old('telefon') }}" required
                               class="w-full border border-gray-200 p-3 md:p-4 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition text-sm md:text-base" 
                               placeholder="0 (555) 123 45 67">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Firma Adı <span class="text-red-500">*</span></label>
                        <input type="text" name="firma" value="{{ old('firma') }}" required
                               class="w-full border border-gray-200 p-3 md:p-4 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition text-sm md:text-base" 
                               placeholder="Firma Adı">
                    </div>
                </div>

                <div class="mt-4 md:mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Konu <span class="text-red-500">*</span></label>
                    <input type="text" name="konu" value="{{ old('konu') }}" required
                           class="w-full border border-gray-200 p-3 md:p-4 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition text-sm md:text-base" 
                           placeholder="Başvuru Konusu">
                </div>

                <div class="mt-4 md:mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Mesaj <span class="text-red-500">*</span></label>
                    <textarea name="mesaj" rows="5" required
                              class="w-full border border-gray-200 p-3 md:p-4 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition resize-none text-sm md:text-base" 
                              placeholder="Danışmanlık ihtiyacınızla ilgili detayları yazın...">{{ old('mesaj') }}</textarea>
                </div>

                <div class="mt-6 md:mt-8">
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-400 text-white px-6 md:px-8 py-3 md:py-4 rounded-xl font-semibold hover:shadow-lg hover:scale-[1.02] transition-all duration-300 text-base md:text-lg">
                        <i class="fas fa-paper-plane mr-2"></i> Başvuruyu Gönder
                    </button>
                </div>

                <p class="text-xs text-gray-400 mt-4 text-center">
                    <i class="fas fa-lock mr-1"></i> Bilgileriniz güvenli bir şekilde saklanmaktadır.
                </p>
            </form>
        </div>
    </div>
</section>
@endsection