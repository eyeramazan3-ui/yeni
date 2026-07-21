<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *{margin:0;padding:0;box-sizing:border-box}
        body{font-family:'Inter',sans-serif;background:#0a0a1a;color:#fff;overflow-x:hidden}
        
        /* ===== ANIMATED BACKGROUND ===== */
        .bg-wrap{position:fixed;top:0;left:0;width:100%;height:100%;z-index:0;overflow:hidden}
        .bg-wrap .orb{position:absolute;border-radius:50%;filter:blur(120px);animation:orbFloat 25s ease-in-out infinite;opacity:0.4}
        .orb1{width:700px;height:700px;background:#ff6b6b;top:-250px;right:-150px;animation-delay:0s}
        .orb2{width:600px;height:600px;background:#a29bfe;bottom:-200px;left:-150px;animation-delay:5s}
        .orb3{width:500px;height:500px;background:#fd79a8;top:30%;left:5%;animation-delay:10s}
        .orb4{width:550px;height:550px;background:#00cec9;bottom:20%;right:-100px;animation-delay:15s}
        .orb5{width:450px;height:450px;background:#fdcb6e;top:60%;right:25%;animation-delay:20s}
        .orb6{width:400px;height:400px;background:#ff9ff3;top:10%;left:40%;animation-delay:7s}
        @keyframes orbFloat{0%,100%{transform:translate(0,0) scale(1) rotate(0deg)}25%{transform:translate(80px,-50px) scale(1.3) rotate(90deg)}50%{transform:translate(-60px,70px) scale(0.7) rotate(180deg)}75%{transform:translate(70px,40px) scale(1.2) rotate(270deg)}}
        
        /* ===== GRID ===== */
        .grid-overlay{position:fixed;top:0;left:0;width:100%;height:100%;z-index:0;pointer-events:none;background-image:linear-gradient(rgba(255,255,255,0.02) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.02) 1px,transparent 1px);background-size:60px 60px}
        
        /* ===== NAVBAR ===== */
        .navbar{position:fixed;top:0;width:100%;padding:0.8rem 0;z-index:1000;transition:all .4s ease;background:rgba(10,10,26,0.5);backdrop-filter:blur(30px);border-bottom:1px solid rgba(255,255,255,0.05)}
        .navbar.scrolled{background:rgba(10,10,26,0.9);padding:0.5rem 0}
        .nav-container{max-width:1200px;margin:0 auto;padding:0 2rem;display:flex;justify-content:space-between;align-items:center}
        .logo{font-size:1.5rem;font-weight:900;background:linear-gradient(135deg,#ff6b6b,#a29bfe,#fd79a8,#00cec9,#fdcb6e);background-size:400% 400%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:gradientMove 3s ease infinite;text-decoration:none}
        @keyframes gradientMove{0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%}}
        .nav-menu{display:flex;list-style:none;gap:2.5rem;align-items:center}
        .nav-menu a{color:rgba(255,255,255,0.6);text-decoration:none;font-weight:500;font-size:0.95rem;transition:all .3s;position:relative}
        .nav-menu a::after{content:'';position:absolute;bottom:-4px;left:0;width:0;height:2px;background:linear-gradient(135deg,#ff6b6b,#a29bfe,#fd79a8);transition:width .3s;border-radius:2px}
        .nav-menu a:hover::after,.nav-menu a.active::after{width:100%}
        .nav-menu a:hover,.nav-menu a.active{color:#fff}
        .nav-cta{padding:8px 24px;border-radius:50px;background:linear-gradient(135deg,#ff6b6b,#a29bfe);color:#fff!important;font-weight:600!important;animation:pulseBtn 2s ease-in-out infinite}
        .nav-cta::after{display:none!important}
        .nav-cta:hover{transform:scale(1.05);box-shadow:0 8px 30px rgba(162,155,254,0.4)}
        @keyframes pulseBtn{0%,100%{transform:scale(1)}50%{transform:scale(1.05)}}
        .hamburger{display:none;flex-direction:column;gap:5px;cursor:pointer}
        .hamburger span{width:28px;height:2.5px;background:#fff;border-radius:2px;transition:all .3s}
        
        /* ===== HERO ===== */
        .hero{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:7rem 2rem;position:relative;z-index:1}
        .hero-content{text-align:center;max-width:1000px;z-index:2}
        
        /* ===== BÜYÜK İKON ===== */
        .hero-icon-wrap{display:flex;justify-content:center;margin-bottom:2rem;animation:fadeInDown 1s ease}
        .hero-icon{position:relative;width:180px;height:180px;display:flex;align-items:center;justify-content:center;font-size:7rem;border-radius:50%;background:rgba(255,255,255,0.03);border:2px solid rgba(255,255,255,0.05);animation:iconPulse 3s ease-in-out infinite,iconColor 4s linear infinite;box-shadow:0 0 60px rgba(162,155,254,0.1)}
        .hero-icon i{animation:iconSpin 20s linear infinite;position:relative;z-index:2}
        .hero-icon::before{content:'';position:absolute;inset:-5px;border-radius:50%;background:conic-gradient(from 0deg,#ff6b6b,#a29bfe,#fd79a8,#00cec9,#fdcb6e,#ff9ff3,#ff6b6b);animation:iconBorder 4s linear infinite;opacity:0.5;filter:blur(10px)}
        @keyframes iconPulse{0%,100%{transform:scale(1) rotate(0deg)}50%{transform:scale(1.15) rotate(5deg)}}
        @keyframes iconSpin{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
        @keyframes iconBorder{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
        @keyframes iconColor{0%{color:#ff6b6b;text-shadow:0 0 40px rgba(255,107,107,0.3)}25%{color:#a29bfe;text-shadow:0 0 40px rgba(162,155,254,0.3)}50%{color:#fd79a8;text-shadow:0 0 40px rgba(253,121,168,0.3)}75%{color:#00cec9;text-shadow:0 0 40px rgba(0,206,201,0.3)}100%{color:#ff6b6b;text-shadow:0 0 40px rgba(255,107,107,0.3)}}
        
        /* ===== İKON ETRAFINDA DÖNEN KÜÇÜK DAİRELER ===== */
        .orbiting-circles{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none}
        .orbit-circle{position:absolute;width:20px;height:20px;border-radius:50%;animation:orbit 8s linear infinite}
        .orbit-circle:nth-child(1){background:#ff6b6b;top:-10px;left:50%;margin-left:-10px;animation-delay:0s;box-shadow:0 0 20px rgba(255,107,107,0.5)}
        .orbit-circle:nth-child(2){background:#a29bfe;bottom:-10px;left:50%;margin-left:-10px;animation-delay:4s;box-shadow:0 0 20px rgba(162,155,254,0.5)}
        .orbit-circle:nth-child(3){background:#fd79a8;top:50%;left:-10px;margin-top:-10px;animation-delay:2s;box-shadow:0 0 20px rgba(253,121,168,0.5)}
        .orbit-circle:nth-child(4){background:#00cec9;top:50%;right:-10px;margin-top:-10px;animation-delay:6s;box-shadow:0 0 20px rgba(0,206,201,0.5)}
        .orbit-circle:nth-child(5){background:#fdcb6e;top:15%;right:0%;animation-delay:1s;box-shadow:0 0 20px rgba(253,203,110,0.5)}
        .orbit-circle:nth-child(6){background:#ff9ff3;bottom:15%;left:0%;animation-delay:3s;box-shadow:0 0 20px rgba(255,159,243,0.5)}
        .orbit-circle:nth-child(7){background:#55efc4;top:15%;left:0%;animation-delay:5s;box-shadow:0 0 20px rgba(85,239,196,0.5)}
        .orbit-circle:nth-child(8){background:#fab1a0;bottom:15%;right:0%;animation-delay:7s;box-shadow:0 0 20px rgba(250,177,160,0.5)}
        @keyframes orbit{0%{transform:rotate(0deg) translateX(110px) rotate(0deg)}100%{transform:rotate(360deg) translateX(110px) rotate(-360deg)}}
        
        .hero-badge{display:inline-block;padding:8px 24px;border-radius:50px;background:linear-gradient(135deg,rgba(255,107,107,0.12),rgba(162,155,254,0.12));border:1px solid rgba(255,255,255,0.06);font-size:0.8rem;color:rgba(255,255,255,0.7);letter-spacing:1px;margin-bottom:1.5rem;backdrop-filter:blur(10px);animation:fadeInDown 1s ease 0.3s both}
        .hero-badge i{color:#ff6b6b;margin-right:8px;animation:spin 4s linear infinite}
        @keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
        @keyframes fadeInDown{from{opacity:0;transform:translateY(-30px)}to{opacity:1;transform:translateY(0)}}
        
        .hero-title{font-size:4.5rem;font-weight:900;line-height:1.05;margin-bottom:1.2rem;letter-spacing:-2px;animation:fadeInUp 1s ease 0.5s both}
        @keyframes fadeInUp{from{opacity:0;transform:translateY(40px)}to{opacity:1;transform:translateY(0)}}
        .hero-title .rainbow{background:linear-gradient(135deg,#ff6b6b,#a29bfe,#fd79a8,#00cec9,#fdcb6e,#ff6b6b);background-size:400% 400%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:gradientMove 3s ease infinite}
        .hero-title .neon{color:#fff;text-shadow:0 0 30px rgba(162,155,254,0.2),0 0 60px rgba(162,155,254,0.1)}
        .hero-subtitle{font-size:1.3rem;color:rgba(255,255,255,0.5);max-width:650px;margin:0 auto 2.5rem;line-height:1.8;font-weight:300;animation:fadeInUp 1s ease 0.8s both}
        .hero-buttons{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;animation:fadeInUp 1s ease 1.1s both}
        .btn{padding:1rem 3rem;border:none;border-radius:50px;font-size:1rem;font-weight:600;cursor:pointer;transition:all .4s cubic-bezier(0.175,0.885,0.32,1.275);display:inline-block;text-decoration:none;position:relative;overflow:hidden}
        .btn-primary{background:linear-gradient(135deg,#ff6b6b,#a29bfe);color:#fff;box-shadow:0 8px 40px rgba(162,155,254,0.3)}
        .btn-primary:hover{transform:translateY(-4px) scale(1.05);box-shadow:0 15px 60px rgba(162,155,254,0.5)}
        .btn-primary::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(135deg,transparent,rgba(255,255,255,0.2),transparent);transition:left .6s}
        .btn-primary:hover::before{left:100%}
        .btn-secondary{background:rgba(255,255,255,0.04);color:#fff;border:1.5px solid rgba(255,255,255,0.1);backdrop-filter:blur(10px)}
        .btn-secondary:hover{background:rgba(255,255,255,0.08);transform:translateY(-4px);border-color:#a29bfe;box-shadow:0 8px 40px rgba(162,155,254,0.15)}
        .btn-pulse{animation:pulseBtn 2s ease-in-out infinite}
        
        /* ===== FLOATING EMOJIS ===== */
        .floating-emojis{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none;overflow:hidden;z-index:0}
        .float-emoji{position:absolute;font-size:2.5rem;animation:floatEmoji 25s ease-in-out infinite;opacity:0.2}
        .float-emoji:nth-child(1){top:5%;left:3%;animation-delay:0s}
        .float-emoji:nth-child(2){top:15%;right:5%;animation-delay:4s}
        .float-emoji:nth-child(3){bottom:20%;left:3%;animation-delay:8s}
        .float-emoji:nth-child(4){bottom:30%;right:3%;animation-delay:12s}
        .float-emoji:nth-child(5){top:45%;left:1%;animation-delay:16s}
        .float-emoji:nth-child(6){top:55%;right:1%;animation-delay:20s}
        .float-emoji:nth-child(7){top:30%;left:10%;animation-delay:3s}
        .float-emoji:nth-child(8){bottom:10%;right:8%;animation-delay:7s}
        @keyframes floatEmoji{0%,100%{transform:translateY(0) rotate(0deg) scale(1)}33%{transform:translateY(-40px) rotate(15deg) scale(1.3)}66%{transform:translateY(30px) rotate(-15deg) scale(0.7)}}
        
        /* ===== FEATURES ===== */
        .features{padding:6rem 2rem;position:relative;z-index:1;background:rgba(255,255,255,0.01);border-top:1px solid rgba(255,255,255,0.04);border-bottom:1px solid rgba(255,255,255,0.04)}
        .section-header{text-align:center;max-width:700px;margin:0 auto 4rem}
        .section-tag{display:inline-block;padding:6px 20px;border-radius:50px;background:linear-gradient(135deg,rgba(255,107,107,0.1),rgba(162,155,254,0.1));border:1px solid rgba(255,255,255,0.04);font-size:0.75rem;color:#ff6b6b;letter-spacing:1px;margin-bottom:0.8rem;text-transform:uppercase}
        .section-title{font-size:3rem;font-weight:800;background:linear-gradient(135deg,#ff6b6b,#a29bfe,#fd79a8,#00cec9);background-size:300% 300%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:gradientMove 3s ease infinite}
        .section-subtitle{color:rgba(255,255,255,0.3);font-size:1.05rem;font-weight:300;margin-top:0.5rem}
        .features-grid{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:2rem}
        .feature-card{background:rgba(255,255,255,0.02);padding:2.5rem 2rem;border-radius:24px;border:1px solid rgba(255,255,255,0.04);transition:all .5s cubic-bezier(0.175,0.885,0.32,1.275);text-align:center;position:relative;overflow:hidden}
        .feature-card:hover{transform:translateY(-10px);border-color:rgba(162,155,254,0.2);box-shadow:0 20px 60px rgba(0,0,0,0.3)}
        .feature-icon{font-size:3.5rem;margin-bottom:1rem;display:inline-block;animation:bounce 3s ease-in-out infinite}
        .feature-card:nth-child(2) .feature-icon{animation-delay:0.5s}
        .feature-card:nth-child(3) .feature-icon{animation-delay:1s}
        .feature-card:nth-child(4) .feature-icon{animation-delay:1.5s}
        @keyframes bounce{0%,100%{transform:translateY(0)}50%{transform:translateY(-15px)}}
        .feature-card h3{font-size:1.2rem;font-weight:700;margin-bottom:0.5rem;color:#fff}
        .feature-card p{color:rgba(255,255,255,0.4);line-height:1.7;font-weight:300;font-size:0.95rem}
        .feature-glow{position:absolute;top:0;left:50%;transform:translateX(-50%);width:60%;height:2px;background:linear-gradient(90deg,transparent,var(--glow),transparent)}
        .feature-card:nth-child(1){--glow:#ff6b6b}
        .feature-card:nth-child(2){--glow:#a29bfe}
        .feature-card:nth-child(3){--glow:#fd79a8}
        .feature-card:nth-child(4){--glow:#00cec9}
        
        /* ===== SHOWCASE ===== */
        .showcase{padding:5rem 2rem;position:relative;z-index:1}
        .showcase-grid{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:2rem}
        .showcase-item{background:rgba(255,255,255,0.02);border-radius:20px;padding:2rem;border:1px solid rgba(255,255,255,0.04);transition:all .4s;text-align:center}
        .showcase-item:hover{transform:translateY(-5px) scale(1.02);box-shadow:0 15px 40px rgba(0,0,0,0.2);border-color:rgba(162,155,254,0.15)}
        .showcase-icon{font-size:3rem;margin-bottom:1rem;display:block}
        .showcase-item h4{font-size:1.1rem;font-weight:600;margin-bottom:0.3rem;color:#fff}
        .showcase-item p{color:rgba(255,255,255,0.3);font-size:0.9rem;font-weight:300}
        
        /* ===== COUNTERS ===== */
        .counters{padding:5rem 2rem;position:relative;z-index:1;background:rgba(255,255,255,0.01);border-top:1px solid rgba(255,255,255,0.04);border-bottom:1px solid rgba(255,255,255,0.04)}
        .counter-container{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:2rem;text-align:center}
        .counter-item{position:relative;padding:1.5rem;border-radius:20px;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.04);transition:all .3s}
        .counter-item:hover{transform:scale(1.05);border-color:rgba(162,155,254,0.15)}
        .counter-number{font-size:3.5rem;font-weight:900;background:linear-gradient(135deg,#ff6b6b,#a29bfe,#fd79a8,#00cec9);background-size:300% 300%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:gradientMove 3s ease infinite;display:inline-block}
        .counter-item p{color:rgba(255,255,255,0.25);font-size:0.9rem;font-weight:300;margin-top:0.3rem}
        
        /* ===== TESTIMONIALS ===== */
        .testimonials{padding:5rem 2rem;position:relative;z-index:1}
        .testimonial-grid{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:2rem}
        .testimonial-card{background:rgba(255,255,255,0.02);padding:2rem;border-radius:20px;border:1px solid rgba(255,255,255,0.04);transition:all .4s}
        .testimonial-card:hover{transform:translateY(-5px);border-color:rgba(162,155,254,0.1);box-shadow:0 15px 40px rgba(0,0,0,0.1)}
        .testimonial-stars{color:#fdcb6e;font-size:1rem;margin-bottom:1rem;letter-spacing:3px}
        .testimonial-text{color:rgba(255,255,255,0.5);font-weight:300;line-height:1.8;font-style:italic;font-size:0.95rem}
        .testimonial-author{display:flex;align-items:center;gap:1rem;margin-top:1.2rem;padding-top:1.2rem;border-top:1px solid rgba(255,255,255,0.04)}
        .testimonial-avatar{width:42px;height:42px;border-radius:50%;background:linear-gradient(135deg,#ff6b6b,#a29bfe);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.9rem}
        .testimonial-name{font-weight:600;font-size:0.9rem;color:#fff}
        .testimonial-role{font-size:0.75rem;color:rgba(255,255,255,0.25)}
        
        /* ===== VISITOR ===== */
        .visitor-count{text-align:center;padding:1.5rem;color:rgba(255,255,255,0.08);font-size:0.8rem;border-top:1px solid rgba(255,255,255,0.02);position:relative;z-index:1}
        .visitor-count span{background:linear-gradient(135deg,#ff6b6b,#a29bfe);-webkit-background-clip:text;-webkit-text-fill-color:transparent;font-weight:600}
        
        /* ===== PAGES ===== */
        .page-title{text-align:center;padding:8rem 2rem 1.5rem;font-size:3.5rem;font-weight:900;background:linear-gradient(135deg,#ff6b6b,#a29bfe,#fd79a8,#00cec9,#fdcb6e);background-size:400% 400%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:gradientMove 3s ease infinite;position:relative;z-index:1}
        .page-content{max-width:800px;margin:0 auto;padding:2rem 2rem 4rem;color:rgba(255,255,255,0.5);line-height:1.9;font-weight:300;font-size:1.05rem;position:relative;z-index:1}
        .page-content h2{color:#fff;font-weight:700;font-size:1.8rem;margin-bottom:1rem}
        .page-content h3{background:linear-gradient(135deg,#ff6b6b,#a29bfe);-webkit-background-clip:text;-webkit-text-fill-color:transparent;font-weight:600;font-size:1.3rem;margin:1.5rem 0 0.5rem}
        .page-content ul{list-style:none;padding:0}
        .page-content li{padding:12px 0;border-bottom:1px solid rgba(255,255,255,0.03)}
        .page-content li:last-child{border-bottom:none}
        .page-content li strong{display:block;font-size:1.05rem;color:#fff;font-weight:600}
        .page-content li p{margin-top:2px;color:rgba(255,255,255,0.25);font-weight:300}
        .contact-form{background:rgba(255,255,255,0.02);padding:2.5rem;border-radius:20px;border:1px solid rgba(255,255,255,0.04);margin-top:1.5rem;backdrop-filter:blur(10px)}
        .contact-form h3{color:#fff;font-weight:600;font-size:1.3rem}
        .contact-form .sub{color:rgba(255,255,255,0.25);font-size:0.9rem;margin-bottom:1.2rem}
        .contact-form input,.contact-form textarea{width:100%;padding:14px 18px;border-radius:14px;border:1px solid rgba(255,255,255,0.06);background:rgba(255,255,255,0.03);color:#fff;margin-bottom:1rem;font-family:inherit;transition:all .3s;font-weight:300;font-size:0.95rem}
        .contact-form input:focus,.contact-form textarea:focus{outline:none;border-color:#a29bfe;background:rgba(255,255,255,0.06);box-shadow:0 0 30px rgba(162,155,254,0.05)}
        .contact-form input::placeholder,.contact-form textarea::placeholder{color:rgba(255,255,255,0.1)}
        .contact-form .btn{width:100%}
        
        /* ===== RESPONSIVE ===== */
        @media(max-width:768px){
            .nav-menu{display:none;position:absolute;top:100%;left:0;width:100%;background:rgba(10,10,26,0.98);flex-direction:column;padding:2rem;text-align:center;gap:1.5rem;backdrop-filter:blur(20px);border-bottom:1px solid rgba(255,255,255,0.05)}
            .nav-menu.active{display:flex}
            .hamburger{display:flex}
            .hamburger.active span:nth-child(1){transform:rotate(45deg) translate(7px,7px)}
            .hamburger.active span:nth-child(2){opacity:0}
            .hamburger.active span:nth-child(3){transform:rotate(-45deg) translate(7px,-7px)}
            .hero-title{font-size:2.8rem}
            .hero-subtitle{font-size:1rem}
            .btn{padding:0.8rem 2rem;font-size:0.9rem}
            .section-title{font-size:2.2rem}
            .page-title{font-size:2.5rem;padding:7rem 1rem 1.5rem}
            .counter-number{font-size:2.5rem}
            .features-grid{grid-template-columns:1fr}
            .showcase-grid{grid-template-columns:1fr}
            .testimonial-grid{grid-template-columns:1fr}
            .float-emoji{display:none}
            .hero-icon{width:120px;height:120px;font-size:4.5rem}
            .orbit-circle{display:none}
            .orb1,.orb2,.orb3,.orb4,.orb5,.orb6{width:200px;height:200px}
        }
        @media(max-width:480px){
            .hero-title{font-size:2rem}
            .nav-container{padding:0 1.2rem}
            .hero-icon{width:90px;height:90px;font-size:3.5rem}
        }
    </style>
</head>
<body>
    <!-- Background -->
    <div class="bg-wrap">
        <div class="orb orb1"></div>
        <div class="orb orb2"></div>
        <div class="orb orb3"></div>
        <div class="orb orb4"></div>
        <div class="orb orb5"></div>
        <div class="orb orb6"></div>
    </div>
    <div class="grid-overlay"></div>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="logo">✦ {{ $site_name ?? 'WebSite' }}</a>
            <ul class="nav-menu">
                <li><a href="{{ url('/') }}" class="@if($sayfa == 'anasayfa') active @endif">Ana Sayfa</a></li>
                <li><a href="{{ url('/hakkimizda') }}" class="@if($sayfa == 'hakkimizda') active @endif">Hakkımızda</a></li>
                <li><a href="{{ url('/hizmetler') }}" class="@if($sayfa == 'hizmetler') active @endif">Hizmetler</a></li>
                <li><a href="{{ url('/iletisim') }}" class="nav-cta">İletişim</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    @if($sayfa == 'anasayfa')
    <!-- Hero -->
    <section class="hero">
        <div class="floating-emojis">
            <span class="float-emoji">🚀</span>
            <span class="float-emoji">💡</span>
            <span class="float-emoji">✨</span>
            <span class="float-emoji">🎯</span>
            <span class="float-emoji">🌟</span>
            <span class="float-emoji">🔥</span>
            <span class="float-emoji">🌈</span>
            <span class="float-emoji">⚡</span>
        </div>
        <div class="hero-content">
            <div class="hero-icon-wrap">
                <div class="hero-icon">
                    <div class="orbiting-circles">
                        <div class="orbit-circle"></div>
                        <div class="orbit-circle"></div>
                        <div class="orbit-circle"></div>
                        <div class="orbit-circle"></div>
                        <div class="orbit-circle"></div>
                        <div class="orbit-circle"></div>
                        <div class="orbit-circle"></div>
                        <div class="orbit-circle"></div>
                    </div>
                    <i class="fas fa-rocket"></i>
                </div>
            </div>
            <div class="hero-badge">
                <i class="fas fa-sparkles"></i> YENİ NESİL DİJİTAL ÇÖZÜMLER
            </div>
            <h1 class="hero-title">
                <span class="neon">Yaratıcı</span><br>
                <span class="rainbow">Dijital Deneyimler</span>
            </h1>
            <p class="hero-subtitle">
                İşletmenizi geleceğe taşıyacak yenilikçi çözümler, 
                modern tasarımlar ve stratejik danışmanlık.
            </p>
            <div class="hero-buttons">
                <a href="{{ url('/hizmetler') }}" class="btn btn-primary btn-pulse">
                    <i class="fas fa-rocket"></i> Keşfet
                </a>
                <a href="{{ url('/iletisim') }}" class="btn btn-secondary">
                    <i class="fas fa-comment"></i> Danışmanlık Al
                </a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features">
        <div class="section-header">
            <div class="section-tag"><i class="fas fa-crown"></i> ÖZELLİKLER</div>
            <h2 class="section-title">Neden Bizi Seçmelisiniz?</h2>
            <p class="section-subtitle">Sizi rakiplerinizden ayıracak benzersiz avantajlar</p>
        </div>
        <div class="features-grid">
            @foreach($ozellikler as $index => $ozellik)
            <div class="feature-card">
                <div class="feature-glow"></div>
                <div class="feature-icon">{{ $ozellik['icon'] }}</div>
                <h3>{{ $ozellik['baslik'] }}</h3>
                <p>{{ $ozellik['aciklama'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Showcase -->
    <section class="showcase">
        <div class="section-header">
            <div class="section-tag"><i class="fas fa-bolt"></i> UZMANLIK</div>
            <h2 class="section-title">Hizmet Alanlarımız</h2>
            <p class="section-subtitle">İşletmenize özel profesyonel çözümler</p>
        </div>
        <div class="showcase-grid">
            <div class="showcase-item">
                <span class="showcase-icon">🖥️</span>
                <h4>Web Geliştirme</h4>
                <p>Modern, hızlı ve ölçeklenebilir web çözümleri</p>
            </div>
            <div class="showcase-item">
                <span class="showcase-icon">📱</span>
                <h4>Mobil Uygulama</h4>
                <p>iOS ve Android için native uygulamalar</p>
            </div>
            <div class="showcase-item">
                <span class="showcase-icon">☁️</span>
                <h4>Bulut Çözümler</h4>
                <p>Esnek ve güvenli bulut altyapıları</p>
            </div>
            <div class="showcase-item">
                <span class="showcase-icon">🎨</span>
                <h4>UI/UX Tasarım</h4>
                <p>Kullanıcı odaklı modern tasarımlar</p>
            </div>
        </div>
    </section>

    <!-- Counters -->
    <section class="counters">
        <div class="counter-container">
            <div class="counter-item">
                <div class="counter-number" data-target="1000">0</div>
                <p>Mutlu Müşteri</p>
            </div>
            <div class="counter-item">
                <div class="counter-number" data-target="500">0</div>
                <p>Proje Tamamlandı</p>
            </div>
            <div class="counter-item">
                <div class="counter-number" data-target="50">0</div>
                <p>Kazanılan Ödül</p>
            </div>
            <div class="counter-item">
                <div class="counter-number" data-target="25">0</div>
                <p>Hizmet Verilen Ülke</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="section-header">
            <div class="section-tag"><i class="fas fa-quote-left"></i> REFERANSLAR</div>
            <h2 class="section-title">Müşteri Yorumları</h2>
            <p class="section-subtitle">500+ mutlu müşterinin görüşleri</p>
        </div>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Harika bir ekip! Projemizi beklediğimizden çok daha iyi bir şekilde tamamladılar."</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">A</div>
                    <div>
                        <div class="testimonial-name">Ahmet Yılmaz</div>
                        <div class="testimonial-role">CEO, TechCorp</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Dijital dönüşüm yolculuğumuzda bize ilham verdiler. Profesyonel ve yaratıcı bir ekip."</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">E</div>
                    <div>
                        <div class="testimonial-name">Elif Demir</div>
                        <div class="testimonial-role">Pazarlama Direktörü</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-text">"Web sitemizi yeniden tasarladılar. Dönüşüm oranlarımız 2 katına çıktı. Mükemmel!"</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">M</div>
                    <div>
                        <div class="testimonial-name">Mehmet Kaya</div>
                        <div class="testimonial-role">Kurucu, StartUpX</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if($sayfa == 'hakkimizda')
    <div class="page-title">✦ Hakkımızda</div>
    <div class="page-content">
        <h2>Biz Kimiz?</h2>
        <p>Modern web teknolojileri ile müşterilerimize en iyi hizmeti sunmayı hedefliyoruz. 2024 yılından beri sektörde lider konumdayız.</p>
        
        <h3>Vizyonumuz</h3>
        <p>Dijital dünyada fark yaratmak ve müşterilerimize değer katmak.</p>
        
        <h3>Misyonumuz</h3>
        <p>En son teknolojileri kullanarak kaliteli ve hızlı çözümler üretmek.</p>
        
        <h3>Değerlerimiz</h3>
        <ul>
            <li><strong>✨ Müşteri Memnuniyeti</strong><p>Her zaman en iyi hizmet</p></li>
            <li><strong>🚀 Kaliteli Hizmet</strong><p>Profesyonel çözümler</p></li>
            <li><strong>💡 Yenilikçi Yaklaşım</strong><p>Değişimi takip etmek</p></li>
            <li><strong>🔒 Güvenilirlik</strong><p>Şeffaf iş ilişkileri</p></li>
        </ul>
    </div>
    @endif

    @if($sayfa == 'hizmetler')
    <div class="page-title">✦ Hizmetlerimiz</div>
    <div class="page-content">
        <h2>Neler Sunuyoruz?</h2>
        <ul>
            <li>
                <strong>🖥️ Web Geliştirme</strong>
                <p>Modern ve hızlı web siteleri, e-ticaret çözümleri</p>
            </li>
            <li>
                <strong>📱 Mobil Uygulama</strong>
                <p>iOS ve Android için native uygulamalar</p>
            </li>
            <li>
                <strong>☁️ Bulut Çözümler</strong>
                <p>Ölçeklenebilir bulut altyapıları ve hosting</p>
            </li>
            <li>
                <strong>🔒 Güvenlik</strong>
                <p>Gelişmiş güvenlik çözümleri</p>
            </li>
            <li>
                <strong>🎨 UI/UX Tasarım</strong>
                <p>Kullanıcı deneyimi odaklı modern tasarımlar</p>
            </li>
            <li>
                <strong>📊 Dijital Pazarlama</strong>
                <p>SEO, sosyal medya ve içerik pazarlama</p>
            </li>
        </ul>
    </div>
    @endif

    @if($sayfa == 'iletisim')
    <div class="page-title">✦ İletişim</div>
    <div class="page-content">
        <h2>Bize Ulaşın</h2>
        <p style="margin:20px 0;color:rgba(255,255,255,0.4);font-size:1.05rem">
            📧 <strong style="color:#fff">Email:</strong> info@website.com<br>
            📱 <strong style="color:#fff">Telefon:</strong> +90 555 123 4567<br>
            📍 <strong style="color:#fff">Adres:</strong> İstanbul, Türkiye
        </p>
        <div class="contact-form">
            <h3>💬 Hızlı İletişim Formu</h3>
            <p class="sub">Size en kısa sürede dönüş yapacağız</p>
            <form onsubmit="alert('🎉 Mesajınız başarıyla gönderildi!'); return false;">
                <input type="text" placeholder="Adınız Soyadınız" required>
                <input type="email" placeholder="E-posta Adresiniz" required>
                <input type="text" placeholder="Konu">
                <textarea placeholder="Mesajınız..." rows="4" required></textarea>
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Mesaj Gönder</button>
            </form>
        </div>
    </div>
    @endif

    <div class="visitor-count">
        <p>✦ Bu site <span id="visitorCount">{{ $ziyaretci ?? '0' }}</span> kez ziyaret edildi</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Hamburger
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            
            if(hamburger) {
                hamburger.addEventListener('click', () => {
                    hamburger.classList.toggle('active');
                    navMenu.classList.toggle('active');
                });
            }
            
            // Navbar scroll
            const navbar = document.getElementById('navbar');
            let lastScroll = 0;
            
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                if(currentScroll > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                if(currentScroll > lastScroll && currentScroll > 300) {
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    navbar.style.transform = 'translateY(0)';
                }
                lastScroll = currentScroll;
            });
            
            // Counters
            const counters = document.querySelectorAll('.counter-number');
            const speed = 200;
            
            const animateCounter = (counter) => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const current = parseFloat(counter.innerText);
                const increment = target / speed;
                
                if(current < target) {
                    let newVal = Math.min(current + increment, target);
                    if (Number.isInteger(target)) {
                        counter.innerText = Math.round(newVal);
                    } else {
                        counter.innerText = newVal.toFixed(1);
                    }
                    setTimeout(() => animateCounter(counter), 10);
                } else {
                    if (Number.isInteger(target)) {
                        counter.innerText = target + '+';
                    } else {
                        counter.innerText = target;
                    }
                }
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting) {
                        const counter = entry.target;
                        const val = parseFloat(counter.innerText);
                        if(val === 0 || val === 0.0) {
                            animateCounter(counter);
                        }
                    }
                });
            }, { threshold: 0.3 });
            
            counters.forEach(counter => observer.observe(counter));
            
            // Parallax effect on orbs
            const orbs = document.querySelectorAll('.orb');
            document.addEventListener('mousemove', (e) => {
                const x = (e.clientX / window.innerWidth - 0.5) * 40;
                const y = (e.clientY / window.innerHeight - 0.5) * 40;
                orbs.forEach((orb, index) => {
                    const speed = (index + 1) * 0.15;
                    orb.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
                });
            });
        });
    </script>
</body>
</html>