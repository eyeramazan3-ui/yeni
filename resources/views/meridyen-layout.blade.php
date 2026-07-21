<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Meridyen Danışmanlık')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #F5F9FF; }

        /* ===== NAVBAR ===== */
        .navbar {
            background: transparent;
            padding: 16px 20px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        /* ===== MENÜ ===== */
        .menu {
            display: flex !important;
            background: linear-gradient(135deg, #1a4a8a, #2563eb, #3b82f6) !important;
            width: 100% !important;
            height: 56px !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 50px !important;
            box-shadow: 
                0 10px 40px rgba(37, 99, 235, 0.4) !important,
                0 0 60px rgba(37, 99, 235, 0.1) !important,
                inset 0 1px 0 rgba(255, 255, 255, 0.2) !important;
            padding: 0 16px !important;
            gap: 4px !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            position: relative !important;
        }

        .menu::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 30% 50%, rgba(255, 255, 255, 0.08), transparent 60%);
            animation: shimmerRotate 10s linear infinite;
            pointer-events: none;
        }

        @keyframes shimmerRotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .menu a {
            outline: 0 !important;
            border: 0 !important;
            min-width: 44px !important;
            height: 42px !important;
            border-radius: 50px !important;
            background-color: transparent !important;
            display: flex !important;
            flex-direction: row !important;
            align-items: center !important;
            justify-content: center !important;
            color: rgba(255, 255, 255, 0.9) !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            cursor: pointer !important;
            text-decoration: none !important;
            padding: 0 18px !important;
            flex-shrink: 0 !important;
            gap: 6px !important;
            position: relative !important;
            z-index: 1 !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            letter-spacing: 0.3px !important;
        }

        .menu a:hover {
            transform: translateY(-3px) scale(1.04) !important;
            background-color: rgba(255, 255, 255, 0.2) !important;
            color: #fff !important;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
        }

        .menu a span {
            font-size: 0.9rem !important;
            font-weight: 600 !important;
            line-height: 1 !important;
            opacity: 1 !important;
            white-space: nowrap !important;
            color: #fff !important;
        }

        /* ===== OK İŞARETİ ===== */
        .menu a .arrow {
            font-size: 10px !important;
            transition: transform 0.3s ease !important;
            color: rgba(255, 255, 255, 0.7) !important;
        }

        .menu-wrapper:hover > a .arrow {
            transform: rotate(180deg) !important;
            color: #fff !important;
        }

        .menu a.active {
            background: transparent !important;
            color: #fff !important;
            transform: none !important;
            box-shadow: none !important;
        }

        .menu a.active::after {
            display: none !important;
        }

        /* ===== LOGO ===== */
        .menu .logo {
            border-radius: 999rem !important;
            padding: 0 20px !important;
            flex-direction: row !important;
            gap: 0 !important;
            font-size: 18px !important;
            font-weight: 800 !important;
            color: white !important;
            min-width: auto !important;
            height: 42px !important;
            background: rgba(255, 255, 255, 0.12) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            margin-right: 8px !important;
        }
        .menu .logo:hover {
            background: rgba(255, 255, 255, 0.2) !important;
            transform: translateY(-2px) !important;
        }
        .menu .logo span {
            color: rgba(255, 255, 255, 0.8) !important;
            font-weight: 500 !important;
            font-size: 18px !important;
        }

        /* ===== MEGA MENÜ (DESKTOP) ===== */
        .menu-wrapper {
            position: relative !important;
            display: flex !important;
            align-items: center !important;
            height: 42px !important;
        }
        .menu-wrapper > a {
            border-radius: 50px !important;
            gap: 6px !important;
        }
        .menu-wrapper:hover .mega-menu {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateX(-50%) translateY(0) !important;
        }

        .mega-menu {
            position: absolute !important;
            top: calc(100% + 14px) !important;
            left: 50% !important;
            transform: translateX(-50%) translateY(10px) !important;
            background: white !important;
            border-radius: 18px !important;
            box-shadow: 0 30px 80px rgba(0,0,0,0.2) !important;
            padding: 10px 0 !important;
            min-width: 230px !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
            border: 1px solid rgba(0,0,0,0.05) !important;
        }

        .mega-menu::before {
            content: '';
            position: absolute;
            top: -7px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 14px;
            height: 14px;
            background: white;
            border-top: 1px solid rgba(0,0,0,0.05);
            border-left: 1px solid rgba(0,0,0,0.05);
        }

        .mega-menu a {
            display: flex !important;
            align-items: center !important;
            gap: 12px !important;
            padding: 10px 28px !important;
            color: #374151 !important;
            text-decoration: none !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            transition: 0.2s !important;
            white-space: nowrap !important;
            border-radius: 0 !important;
            background: transparent !important;
            box-shadow: none !important;
            flex: none !important;
            text-align: left !important;
            flex-direction: row !important;
            height: auto !important;
            min-width: auto !important;
        }
        .mega-menu a:hover {
            background: #eff6ff !important;
            color: #2563EB !important;
            transform: translateX(4px) !important;
            box-shadow: none !important;
        }

        .mega-menu .divider {
            height: 1px !important;
            background: #e5e7eb !important;
            margin: 4px 20px !important;
        }

        /* ===== HAMBURGER ===== */
        .hamburger {
            cursor: pointer !important;
            display: none !important;
            background: none !important;
            border: none !important;
            padding: 8px !important;
            flex-shrink: 0 !important;
            color: white !important;
            z-index: 2 !important;
        }
        .hamburger svg {
            height: 2.2em !important;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1)) !important;
        }
        .hamburger .line {
            fill: none !important;
            stroke: white !important;
            stroke-linecap: round !important;
            stroke-linejoin: round !important;
            stroke-width: 3 !important;
        }

        @media (max-width: 992px) {
            .menu a:not(.logo) { display: none !important; }
            .hamburger { display: block !important; }
            .mega-menu { display: none !important; }
            .menu .logo { font-size: 16px !important; padding: 0 16px !important; margin-right: 0 !important; }
            .menu { height: 54px !important; padding: 0 12px !important; border-radius: 50px !important; justify-content: space-between !important; }
            .menu a { height: 40px !important; }
            .menu .logo { height: 40px !important; }
        }

        @media (max-width: 480px) {
            .menu .logo { font-size: 14px !important; padding: 0 12px !important; }
            .menu { height: 48px !important; border-radius: 40px !important; padding: 0 10px !important; }
            .menu .logo { height: 36px !important; }
            .menu .logo span { font-size: 14px !important; }
        }

        /* ===== MOBILE PANEL ===== */
        .mobile-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.4);
            z-index: 999;
        }
        .mobile-overlay.open { display: block; }

        .mobile-panel {
            position: fixed;
            top: 0;
            right: -100%;
            width: 320px;
            max-width: 85%;
            height: 100%;
            background: white;
            z-index: 1000;
            transition: right 0.3s ease;
            padding: 30px 24px;
            overflow-y: auto;
        }
        .mobile-panel.open { right: 0; }

        .mobile-panel .m-close {
            background: none;
            border: none;
            font-size: 28px;
            float: right;
            cursor: pointer;
            color: #333;
            padding: 4px 8px;
            border-radius: 12px;
            transition: 0.3s;
        }
        .mobile-panel .m-close:hover { background: #f1f5f9; }

        .mobile-panel .m-logo {
            font-size: 22px;
            font-weight: 800;
            color: #1D4ED8;
            text-decoration: none;
            display: block;
            margin-bottom: 24px;
            clear: both;
        }
        .mobile-panel .m-logo span { color: #3B82F6; }

        .mobile-panel .m-link {
            display: block;
            padding: 14px 0;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid #f0f0f0;
            transition: 0.3s;
            cursor: pointer;
        }
        .mobile-panel .m-link:hover {
            color: #2563EB;
            padding-left: 8px;
        }

        /* ===== MOBİL MEGA MENÜ (ALT MENÜ) ===== */
        .mobile-panel .m-link-parent {
            border-bottom: 1px solid #f0f0f0;
        }
        .mobile-panel .m-link-parent .m-link {
            border-bottom: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }
        .mobile-panel .m-link-parent .m-sub-toggle {
            background: none;
            border: none;
            color: #333;
            font-size: 14px;
            cursor: pointer;
            padding: 14px 0 14px 12px;
            transition: 0.3s;
            flex-shrink: 0;
        }
        .mobile-panel .m-link-parent .m-sub-toggle.active {
            transform: rotate(180deg);
            color: #2563EB;
        }
        .mobile-panel .m-sub-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            padding-left: 16px;
            background: #fafafa;
        }
        .mobile-panel .m-sub-menu.open {
            max-height: 500px;
        }
        .mobile-panel .m-sub-menu .m-link {
            border-bottom: none;
            padding: 10px 0 10px 16px;
            font-size: 14px;
            color: #555;
            border-left: 2px solid #e5e7eb;
        }
        .mobile-panel .m-sub-menu .m-link:hover {
            border-left-color: #2563EB;
            color: #2563EB;
            padding-left: 20px;
        }
        .mobile-panel .m-sub-menu .m-link:last-child {
            border-bottom: none;
        }

        .mobile-panel .m-btn {
            display: block;
            background: linear-gradient(135deg, #2563EB, #1D4ED8);
            color: white;
            padding: 16px 20px;
            border-radius: 12px;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: 0.3s;
            box-shadow: 0 4px 25px rgba(37, 99, 235, 0.3);
        }
        .mobile-panel .m-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 40px rgba(37, 99, 235, 0.4);
        }

        /* ===== FOOTER ===== */
        .footer {
            background: #0f172a;
            color: #eee;
            padding: 48px 0;
            margin-top: 60px;
        }
        .footer-social {
            display: inline-block;
            width: 44px;
            height: 44px;
            line-height: 44px;
            text-align: center;
            background: #1a365d;
            border-radius: 50%;
            color: white;
            transition: 0.3s;
            margin: 0 4px;
            text-decoration: none;
        }
        .footer-social:hover {
            background: #2563eb;
        }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* ===== COMMON STYLES ===== */
        .gradient-bg {
            background: linear-gradient(135deg, #0a0f1e 0%, #0f172a 40%, #1a365d 70%, #2563eb 100%);
            position: relative;
            overflow: hidden;
        }
        .gradient-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 30% 50%, rgba(37, 99, 235, 0.3), transparent 60%);
            animation: auroraSpin 20s linear infinite;
        }
        @keyframes auroraSpin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .shimmer-text {
            background: linear-gradient(90deg, #2563eb, #60a5fa, #2563eb);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 4s linear infinite;
        }
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }

        .section-title {
            font-size: 48px;
            font-weight: 800;
            color: #0B1F3A;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 5px;
            border-radius: 30px;
            background: linear-gradient(90deg, #2563EB, #3B82F6);
        }
        @media (max-width: 768px) { .section-title { font-size: 32px; } }

        .section-divider {
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #2563eb, #60a5fa);
            border-radius: 4px;
            margin: 16px auto 0;
        }
        .tag {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 6px 20px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
            transition: 0.3s;
            letter-spacing: 0.5px;
        }
        .gradient-text {
            background: linear-gradient(135deg, #2563eb, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body>

<!-- ===== HEADER ===== -->
<nav class="navbar">
    <div class="navbar-inner">
        <div class="menu">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                Meridyen<span>Danışmanlık</span>
            </a>

            <!-- Menü Öğeleri -->
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <span>Ana Sayfa</span>
            </a>
            <a href="{{ route('hakkimizda') }}" class="{{ request()->routeIs('hakkimizda') ? 'active' : '' }}">
                <span>Hakkımızda</span>
            </a>

            <!-- Mega Menü - Kurumsal Çözümler (OK İŞARETLİ) -->
            <div class="menu-wrapper">
                <a href="{{ route('hizmetler') }}" class="{{ request()->routeIs('hizmetler*') ? 'active' : '' }}">
                    <span>Kurumsal</span>
                    <span class="arrow"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="mega-menu">
                    <a href="{{ route('hizmet.stratejik-planlama') }}">Strateji Yönetimi</a>
                    <div class="divider"></div>
                    <a href="{{ route('hizmet.pazara-giris') }}">Pazara Giriş</a>
                    <div class="divider"></div>
                    <a href="{{ route('hizmet.surec-iyilestirme') }}">Süreç İyileştirme</a>
                    <div class="divider"></div>
                    <a href="{{ route('hizmet.veri-analitigi') }}">Veri Analitiği</a>
                </div>
            </div>

            <a href="{{ route('surec') }}" class="{{ request()->routeIs('surec') ? 'active' : '' }}">
                <span>Süreç</span>
            </a>
            <a href="{{ route('referanslar') }}" class="{{ request()->routeIs('referanslar') ? 'active' : '' }}">
                <span>Referanslar</span>
            </a>
            <a href="{{ route('projeler') }}" class="{{ request()->routeIs('projeler') ? 'active' : '' }}">
                <span>Projeler</span>
            </a>
            <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                <span>Blog</span>
            </a>

            <!-- Hamburger (Mobil) -->
            <button class="hamburger" id="hamburgerBtn">
                <svg viewBox="0 0 32 32" width="28" height="28">
                    <path class="line" d="M7 10 L25 10" stroke="white" stroke-width="3"/>
                    <path class="line" d="M7 16 L25 16" stroke="white" stroke-width="3"/>
                    <path class="line" d="M7 22 L25 22" stroke="white" stroke-width="3"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- ===== MOBILE PANEL ===== -->
<div class="mobile-overlay" id="mobileOverlay"></div>
<div class="mobile-panel" id="mobilePanel">
    <button class="m-close" id="mCloseBtn"><i class="fas fa-times"></i></button>
    <a href="{{ route('home') }}" class="m-logo">Meridyen<span>Danışmanlık</span></a>
    
    <a href="{{ route('home') }}" class="m-link">Ana Sayfa</a>
    <a href="{{ route('hakkimizda') }}" class="m-link">Hakkımızda</a>
    
    <!-- Mobil Mega Menü - Kurumsal Çözümler (Alt Menülü) -->
    <div class="m-link-parent">
        <a href="javascript:void(0)" class="m-link" onclick="toggleSubMenu(this)">
            Kurumsal Çözümler
            <span class="m-sub-toggle"><i class="fas fa-chevron-down"></i></span>
        </a>
        <div class="m-sub-menu">
            <a href="{{ route('hizmet.stratejik-planlama') }}" class="m-link">Strateji Yönetimi</a>
            <a href="{{ route('hizmet.pazara-giris') }}" class="m-link">Pazara Giriş</a>
            <a href="{{ route('hizmet.surec-iyilestirme') }}" class="m-link">Süreç İyileştirme</a>
            <a href="{{ route('hizmet.veri-analitigi') }}" class="m-link">Veri Analitiği</a>
        </div>
    </div>
    
    <a href="{{ route('surec') }}" class="m-link">Süreç</a>
    <a href="{{ route('referanslar') }}" class="m-link">Referanslar</a>
    <a href="{{ route('projeler') }}" class="m-link">Projeler</a>
    <a href="{{ route('blog') }}" class="m-link">Blog</a>
    
    <a href="{{ route('basvuru') }}" class="m-btn">Danışmanlık Başlat</a>
</div>

<script>
    document.getElementById('hamburgerBtn').addEventListener('click', function(e) {
        e.stopPropagation();
        document.getElementById('mobileOverlay').classList.add('open');
        document.getElementById('mobilePanel').classList.add('open');
        document.body.style.overflow = 'hidden';
    });

    document.getElementById('mCloseBtn').addEventListener('click', closeMobile);
    document.getElementById('mobileOverlay').addEventListener('click', closeMobile);

    function closeMobile() {
        document.getElementById('mobileOverlay').classList.remove('open');
        document.getElementById('mobilePanel').classList.remove('open');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.m-link, .m-btn').forEach(function(link) {
        link.addEventListener('click', function(e) {
            if (e.target.closest('.m-sub-toggle')) return;
            if (e.target.closest('.m-link-parent')) return;
            closeMobile();
        });
    });

    // Mobil Alt Menü Aç/Kapa
    function toggleSubMenu(link) {
        var parent = link.closest('.m-link-parent');
        var subMenu = parent.querySelector('.m-sub-menu');
        var toggle = parent.querySelector('.m-sub-toggle');
        
        subMenu.classList.toggle('open');
        toggle.classList.toggle('active');
    }

    document.querySelectorAll('.m-sub-menu .m-link').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.stopPropagation();
            setTimeout(closeMobile, 300);
        });
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.getElementById('mobilePanel').classList.contains('open')) {
            closeMobile();
        }
    });
</script>

<!-- ===== CONTENT ===== -->
<main>
    @yield('content')
</main>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="container">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold text-white">Meridyen<span class="text-blue-400">Danışmanlık</span></h3>
                <p class="text-gray-400 text-sm mt-2">Kurumların potansiyelini ölçülebilir sonuçlara çeviririz.</p>
            </div>
            <div>
                <h4 class="font-bold text-lg text-white mb-4">Hızlı Linkler</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-blue-400">Ana Sayfa</a></li>
                    <li><a href="{{ route('hakkimizda') }}" class="hover:text-blue-400">Hakkımızda</a></li>
                    <li><a href="{{ route('hizmetler') }}" class="hover:text-blue-400">Kurumsal Çözümler</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg text-white mb-4">Hizmetler</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><a href="{{ route('hizmet.stratejik-planlama') }}" class="hover:text-blue-400">Strateji Yönetimi</a></li>
                    <li><a href="{{ route('hizmet.pazara-giris') }}" class="hover:text-blue-400">Pazara Giriş</a></li>
                    <li><a href="{{ route('hizmet.surec-iyilestirme') }}" class="hover:text-blue-400">Süreç İyileştirme</a></li>
                    <li><a href="{{ route('hizmet.veri-analitigi') }}" class="hover:text-blue-400">Veri Analitiği</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg text-white mb-4">İletişim</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><i class="fas fa-phone text-blue-400 w-5"></i> 0 (555) 123 45 67</li>
                    <li><i class="fas fa-envelope text-blue-400 w-5"></i> info@meridyen.com.tr</li>
                    <li><i class="fas fa-map-marker-alt text-blue-400 w-5"></i> İstanbul</li>
                </ul>
                <div class="flex gap-2 mt-4">
                    <a href="#" class="footer-social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="footer-social"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer-social"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-6 text-center text-sm text-gray-500">&copy; 2025 Meridyen Danışmanlık. Tüm hakları saklıdır.</div>
    </div>
</footer>

</body>
</html>