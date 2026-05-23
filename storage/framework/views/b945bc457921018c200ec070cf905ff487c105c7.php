<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gorurhat</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

        

                <!-- AI Basic SEO: Structured Data -->
                

                <!-- Favicon -->
                <link rel="shortcut icon" href="<?php echo e(asset($generalsetting->favicon)); ?>" alt="<?php echo e($generalsetting->name); ?> Favicon" />

                <?php echo $__env->yieldPushContent('seo'); ?>
                <?php echo $__env->yieldPushContent('css'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/animate.css')); ?>" />
        <!-- Bootstrap Icons Professional Package -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.carousel.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.theme.default.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/mobile-menu.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/select2.min.css')); ?>" />
        <!-- toastr css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/backEnd/')); ?>/assets/css/toastr.min.css" />

        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/wsit-menu.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/style.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/responsive.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/main.css')); ?>" />

        <meta name="facebook-domain-verification" content="<?php echo e($generalsetting->facebook_verification); ?>" />
        <meta name="google-site-verification" content="<?php echo e($generalsetting->google_verification); ?>" />
		
		<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		

        <?php $__currentLoopData = $pixels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pixel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "<?php echo e($pixel->code); ?>");
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=<?php echo e($pixel->code); ?>&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php $__currentLoopData = $gtm_code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gtm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Google tag (gtag.js) -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-<?php echo e($gtm->code); ?>');</script>
        <!-- End Google Tag Manager -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <style>
            html, body {
                font-family: 'Google Sans', 'Hind Siliguri', sans-serif !important;
                margin: 0;
                padding: 0;
            }

            .whatsapp-float {
                position: fixed;
                bottom: 20px; /* Adjust vertical position */
                left: 20px; /* Adjust horizontal position */
                z-index: 1000;
                background-color: #25D366;
                color: white;
                border-radius: 50%;
                padding: 15px;
                font-size: 24px; /* Icon size */
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
                display: none;
                align-items: center;
                justify-content: center;
            }
        
            .whatsapp-float:hover {
                color: white;
                box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            }
            /* Hide the .whatsapp-float element on mobile devices */
            @media (max-width: 768px) {
                .whatsapp-float {
                    display: none;
                }
                /* Hide any raw header code output (e.g., plain URL) that may show up on mobile */
                .header-code-wrapper {
                    display: none !important;
                }
            }
            .stock-out-overlay {
                position: absolute;
                top: 50%;
                left: 0;
                transform: translateY(-50%);
                width: 100%;
                background-color: white;
                color: black;
                font-size: 1em;
                opacity:0.8;
                font-weight: bold;
                text-align: center;
                padding: 10px 0;
                overflow: hidden;
                white-space: nowrap;
            }
            /* Facebook icon */
            .social_list .fa-facebook-f {
                padding:5px 8px;
                color:white;
                background-color: #3b5998; 
                
            }
            
            .social_list .fa-facebook-f:hover {
                background-color: #2d4373;  /* Darker Facebook blue on hover */
            }
            
            /* Twitter icon */
            .social_list .fa-twitter {
                padding:5px 8px;
                color:white;
                background-color: rgb(238,128,33);  /* Twitter blue */
            }
            
            .social_list .fa-twitter:hover {
                padding:5px 8px;
                color:white;
                background-color: rgb(238,128,33);  /* Darker Twitter blue on hover */
            }
            
            /* Instagram icon */
            .social_list .fa-instagram {
                padding:5px 8px;
                color:white;
                background-color: #e4405f;  /* Instagram pink */
            }
            
            .social_list .fa-instagram:hover {
                padding:5px 8px;
                color:white;
                background-color: #bc2a8d;  /* Darker Instagram purple-pink on hover */
            }
            
            /* LinkedIn icon */
            .social_list .fa-linkedin {
                padding:5px 8px;
                color:white;
                background-color: rgb(238,128,33);  /* LinkedIn blue */
            }
            
            .social_list .fa-linkedin:hover {
                background-color: rgb(238,128,33);  /* Darker LinkedIn blue on hover */
            }
            
            /* WhatsApp icon */
            .social_list .fa-whatsapp {
                padding:5px 8px;
                color:white;
                background-color: #25d366;  /* WhatsApp green */
            }
            
            .social_list .fa-whatsapp:hover {
                background-color: #128c7e;  /* Darker WhatsApp green on hover */
            }
            
            /* YouTube icon */
            .social_list .fa-youtube {
                padding:5px 8px;
                color:white;
                background-color: #ff0000;  /* YouTube red */
            }
            
            .social_list .fa-youtube:hover {
                background-color: #cc0000;  /* Darker YouTube red on hover */
            }

            /* Footer with deep black background */
            footer {
                background: #000000 !important;
            }

            .footer-top {
                background: transparent !important;
            }

            .footer-bottom {
                background: transparent !important;
            }

            /* Footer text colors */
            .footer-about p,
            .footer-menu ul li a,
            .copyright p,
            .copyright p a,
            .footer-hotlint,
            .stay_conn a {
                color: #ffffff !important;
            }

            .footer-menu ul li.title a {
                color: #ffffff !important;
                font-weight: 600;
            }

            /* Remove any filter from logo */
            .footer-about img {
                filter: none !important;
            }

            .footer-menu ul li a:hover {
                color: #f0f0f0 !important;
                text-decoration: underline;
            }

            /* Social icons in footer */
            .social_link .social_list a {
                background-color: rgba(255, 255, 255, 0.2) !important;
                border-radius: 50%;
                display: inline-block;
                transition: all 0.3s ease;
            }

            .social_link .social_list a:hover {
                background-color: rgba(255, 255, 255, 0.3) !important;
                transform: translateY(-3px);
            }

            .social_link .social_list a i {
                color: #ffffff !important;
                font-size: 18px;
                width: 36px;
                height: 36px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Override any existing icon colors */
            .social_list .fa-facebook-f,
            .social_list .fa-twitter,
            .social_list .fa-instagram,
            .social_list .fa-linkedin,
            .social_list .fa-whatsapp,
            .social_list .fa-youtube {
                background-color: transparent !important;
            }

            .btn-shop {
                background: linear-gradient(90deg, #e08d0c, #fdd835);
                color: #1f1f1f !important;
                border: none;
                padding: 10px 22px;
                border-radius: 50px;
                font-weight: 600;
                box-shadow: 0 8px 18px rgba(224, 141, 12, 0.22);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .btn-shop:hover {
                transform: none !important;
                box-shadow: none !important;
                background: none !important;
                color: #000 !important;
            }

            .btn-white {
                background-color: #ffffff !important;
                color: #000000 !important;
                border: 1px solid #ddd !important;
                padding: 10px 18px;
                border-radius: 50px;
            }

            .btn-white:hover {
                background-color: #f7f7f7 !important;
            }

            .header-right {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                gap: 20px;
            }

            .btn-shop {
                color: #000 !important;
                background: none !important;
                border: none !important;
                padding: 0;
                margin: 0;
                box-shadow: none !important;
                text-decoration: none;
                white-space: nowrap;
                border-bottom: 2px solid transparent;
                transition: color 0.2s ease, background 0.2s ease, border-bottom-color 0.2s ease;
            }


            .btn-location {
                color: #000 !important;
                background: none !important;
                border: none !important;
                padding: 0;
                margin: 0;
                box-shadow: none !important;
                text-decoration: none;
                white-space: nowrap;
                border-bottom: 2px solid transparent;
                transition: color 0.2s ease, background 0.2s ease, border-bottom-color 0.2s ease;
            }

            .btn-location:hover {
                transform: none !important;
                box-shadow: none !important;
                background: none !important;
                color: #000 !important;
                border-bottom: 2px solid #c00000 !important;
            }

            .btn-contact {
                border-bottom: 2px solid transparent;
                transition: color 0.2s ease, background 0.2s ease, border-bottom-color 0.2s ease;
            }

            .btn-contact:hover {
                border-bottom-color: #c00000 !important;
            }

            .main-logo {
                padding-left: 0 !important;
                margin-left: 0 !important;
            }

    #content {
        width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

            .catagory_menu {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.75rem;
            }

            .cat-scroll-wrapper {
                overflow: hidden;
                width: 100%;
            }

            .cat-list-scroll {
                display: flex;
                gap: 0.75rem;
                margin: 0;
                padding: 0;
                list-style: none;
                white-space: nowrap;
            }

            .cat-list-scroll > li {
                flex: 0 0 auto;
            }

            .cat-nav-btn {
                border: none;
                background: rgba(255, 255, 255, 0.08);
                color: #000000;
                padding: 10px 12px;
                border-radius: 50%;
                cursor: pointer;
                transition: background 0.2s ease, transform 0.2s ease;
            }

            .cat-nav-btn:hover {
                background: rgba(255, 255, 255, 0.18);
                transform: translateY(-1px);
            }

            .cat-nav-btn:focus {
                outline: none;
            }

            @media (max-width: 992px) {
                .cat-nav-btn {
                    display: none;
                }
            }

            .cat_head {
                color: #000;
            }

            .navbar-wide {
                max-width: 2220px;
                margin: 0 auto;
            }

            @media (max-width: 1600px) {
                .navbar-wide {
                    padding-left: 1rem !important;
                    padding-right: 1rem !important;
                }
            }

            @media (max-width: 1400px) {
                .navbar-wide {
                    padding-left: 1.5rem !important;
                    padding-right: 1.5rem !important;
                }
            }

            /* Glassy Effect on Scroll */
            header#navbar_top {
                transition: all 0.4s ease;
            }

            header#navbar_top.glassy-effect {
                background: rgba(255, 255, 255, 0.7) !important;
                backdrop-filter: blur(10px);
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08) !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.18);
            }

            header#navbar_top.glassy-effect .logo-area {
                background: rgba(255, 255, 255, 0.5);
                backdrop-filter: blur(10px);
            }

            header#navbar_top.glassy-effect .menu-area {
                background: rgba(255, 255, 255, 0.5);
                backdrop-filter: blur(10px);
            }

            /* Hide scroll to top button */
            .scrolltop {
                display: none !important;
            }
        </style>
        <div class="header-code-wrapper">
            
        </div>
    </head>
    <body class="gotop" style="background: white;">
       
        <?php $subtotal = Cart::instance('shopping')->subtotal(); ?>
        
    <!-- Responsive Navbar Section -->
<style>
    /* Navbar Styles */
    .responsive-navbar {
        background: linear-gradient(to right, #c60000, #ce1f1f);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 50px;
        font-family: 'Times New Roman', serif;
        color: white;
        position: relative;
        z-index: 1000;
        flex-wrap: nowrap;
        width: 100%;
        box-sizing: border-box;
        margin: 0;
    }

    /* Logo Area */
    .navbar-logo {
        display: flex;
        align-items: center;
        flex-shrink: 0;
    }

    .navbar-logo img {
        width: 230px;
        height: auto;
        object-fit: contain;
    }

    /* Desktop Menu */
    .navbar-menu {
        list-style: none;
        display: flex;
        gap: 30px;
        margin: 0;
        padding: 0;
        font-size: 20px;
        flex-shrink: 0;
    }

    .navbar-menu li a {
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        padding: 5px 0;
        display: inline-block;
    }

    .navbar-menu li a:hover {
        opacity: 0.9;
    }

    .navbar-menu li a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: white;
        transition: width 0.3s ease;
    }

    .navbar-menu li a:hover::after {
        width: 100%;
    }

    /* Mobile Menu Button (Hamburger) - Right Side */
    .mobile-menu-btn {
        display: none;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 10px;
        z-index: 1001;
        flex-direction: column;
        gap: 5px;
        margin-left: auto;
        flex-shrink: 0;
    }

    .mobile-menu-btn span {
        display: block;
        width: 30px;
        height: 3px;
        background-color: white;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    /* Mobile Menu Overlay */
    .mobile-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1999;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .mobile-overlay.active {
        visibility: visible;
        opacity: 1;
    }

    /* Mobile Menu Panel - Slides from Right */
    .mobile-menu-panel {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 350px;
        height: 100%;
        background: linear-gradient(135deg, #c60000, #b01010);
        z-index: 2000;
        transition: right 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        box-shadow: -5px 0 30px rgba(0, 0, 0, 0.3);
        display: flex;
        flex-direction: column;
    }

    .mobile-overlay.active .mobile-menu-panel {
        right: 0;
    }

    /* Mobile Menu Header */
    .mobile-menu-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .mobile-menu-header .mobile-logo {
        width: 160px;
        height: auto;
    }

    .close-menu {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        font-size: 30px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .close-menu:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg);
    }

    /* Mobile Menu Items with Bootstrap Icons */
    .mobile-nav-items {
        list-style: none;
        padding: 20px 0;
        margin: 0;
    }

    .mobile-nav-items li {
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }

    .mobile-nav-items li a {
        display: block;
        padding: 18px 25px;
        color: white;
        text-decoration: none;
        font-size: 18px;
        font-family: 'Times New Roman', serif;
        transition: all 0.3s;
    }

    .mobile-nav-items li a i {
        margin-right: 12px;
        font-size: 20px;
        width: 25px;
    }

    .mobile-nav-items li a:hover {
        background: rgba(255, 255, 255, 0.1);
        padding-left: 35px;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .responsive-navbar {
            padding: 12px 25px;
        }
        
        .navbar-logo img {
            width: 180px;
        }
    }

    @media (max-width: 768px) {
        .responsive-navbar {
            padding: 10px 20px;
            width: 100%;
            box-sizing: border-box;
        }
        
        /* Hide desktop menu */
        .navbar-menu {
            display: none;
        }
        
        /* Show mobile menu button on right side */
        .mobile-menu-btn {
            display: flex;
        
        }
        
        .navbar-logo img {
            width: 160px;
        }
    }

    @media (max-width: 480px) {
        .responsive-navbar {
            padding: 8px 15px;
        }
        
        .navbar-logo img {
            width: 140px;
        }
        
        .mobile-nav-items li a {
            padding: 15px 20px;
            font-size: 16px;
        }
        
        .mobile-nav-items li a i {
            font-size: 18px;
            margin-right: 10px;
        }
    }

    /* Animation for hamburger to X */
    .mobile-menu-btn.active span:nth-child(1) {
        transform: rotate(45deg) translate(8px, 6px);
    }

    .mobile-menu-btn.active span:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-btn.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }

    /* Body scroll lock when menu open */
    body.menu-open {
        overflow: hidden;
    }
</style>

<!-- Navbar HTML -->
<nav class="responsive-navbar">
    <div class="navbar-logo">
        <img src="<?php echo e(asset($generalsetting->white_logo)); ?>" alt="<?php echo e($generalsetting->name); ?>">
    </div>

    <!-- Desktop Menu -->
    <ul class="navbar-menu">
        <li><a href="<?php echo e(route('home')); ?>">হোমপেজ</a></li>
        <li><a href="<?php echo e(route('shop')); ?>">কোরবানির হাট</a></li>
        <li><a href="<?php echo e(route('contact')); ?>">যোগাযোগ</a></li>
    </ul>

    <!-- Mobile Hamburger Button (Right Side) -->
    <button class="mobile-menu-btn" id="mobileMenuBtn">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>

<!-- Mobile Menu Overlay & Panel -->
<div class="mobile-overlay" id="mobileOverlay">
    <div class="mobile-menu-panel">
        <div class="mobile-menu-header">
            <img src="<?php echo e(asset($generalsetting->white_logo)); ?>" style="width: 230px" alt="Logo" class="mobile-logo">
            <button class="close-menu" id="closeMenuBtn">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <ul class="mobile-nav-items">
            <li><a href="<?php echo e(route('home')); ?>"><i class="bi bi-house-door-fill"></i> হোমপেজ</a></li>
            <li><a href="<?php echo e(route('shop')); ?>"><i class="bi bi-shop"></i> কোরবানির হাট</a></li>
            <li><a href="<?php echo e(route('contact')); ?>"><i class="bi bi-envelope-fill"></i> যোগাযোগ</a></li>
        </ul>
    </div>
</div>

<!-- JavaScript for Mobile Menu -->
<script>
    // Get elements
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const closeMenuBtn = document.getElementById('closeMenuBtn');
    const body = document.body;

    // Function to open mobile menu
    function openMobileMenu() {
        mobileOverlay.classList.add('active');
        mobileMenuBtn.classList.add('active');
        body.classList.add('menu-open');
    }

    // Function to close mobile menu
    function closeMobileMenu() {
        mobileOverlay.classList.remove('active');
        mobileMenuBtn.classList.remove('active');
        body.classList.remove('menu-open');
    }

    // Event listener for hamburger button
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (mobileOverlay.classList.contains('active')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    // Event listener for close button
    if (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', () => {
            closeMobileMenu();
        });
    }

    // Close menu when clicking on overlay background
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', (e) => {
            if (e.target === mobileOverlay) {
                closeMobileMenu();
            }
        });
    }

    // Close menu when window is resized above 768px
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768 && mobileOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
    });

    // Close menu when clicking on any mobile menu link
    document.querySelectorAll('.mobile-nav-items a').forEach(link => {
        link.addEventListener('click', () => {
            closeMobileMenu();
        });
    });
</script>
        <div id="content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
            <!-- content end -->
    <?php
        $footer_setting = optional(isset($footers) ? $footers->first() : null);
    ?>
   <footer style="background: linear-gradient(to bottom, #4d0404, #000000 ); border-top: 8px solid #550303; color: #ffffff; padding: 60px 5% 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div class="footer-grid">
        <div class="footer-about">
            <div class="logo-container">
                <img src="<?php echo e(asset($generalsetting->white_logo)); ?>" style="width: auto; max-width: 100%; height: auto;" alt="<?php echo e($generalsetting->name); ?>">
            </div>
            <p style="color: #cccccc; line-height: 1.8; max-width: 520px; margin-top: 18px;">
                <?php echo e($footer_setting->description ?? $generalsetting->description ?? 'আমাদের হাট থেকে সেরা কোরবানির পশু বেছে নিন।'); ?>

            </p>
            <div class="social-icons">
                <?php if($footer_setting->facebook_link): ?>
                    <a href="<?php echo e($footer_setting->facebook_link); ?>" target="_blank" class="social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                <?php endif; ?>
                <?php if($footer_setting->youtube_link): ?>
                    <a href="<?php echo e($footer_setting->youtube_link); ?>" target="_blank" class="social-icon" title="YouTube"><i class="bi bi-youtube"></i></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-links">
            <h4>প্রয়োজনীয় লিঙ্ক</h4>
            <ul>
                <li><a href="<?php echo e(route('home')); ?>">হোমপেজ</a></li>
                <li><a href="<?php echo e(route('shop')); ?>">কোরবানির হাট</a></li>
                <li><a href="<?php echo e(route('contact')); ?>">যোগাযোগ</a></li>
                <li><a href="<?php echo e(route('page', 'about')); ?>">আমাদের সম্পর্কে</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h4>যোগাযোগ</h4>
            <div class="contact-card">
                <p style="margin: 0 0 8px; color: #a7a7a7; font-size: 0.95rem;">আমাদের সাথে ফোন করুন</p>
                <p style="margin: 0; font-size: 1rem; color: #ffffff;"><?php echo e($footer_setting->phone_number ?? $contact->hotline ?? '+880 1234 567 890'); ?></p>
            </div>
            <div class="contact-card" style="margin-top: 16px;">
                <p style="margin: 0 0 8px; color: #a7a7a7; font-size: 0.95rem;">ঠিকানা</p>
                <p style="margin: 0; font-size: 1rem; color: #ffffff;"><?php echo e($footer_setting->address ?? $contact->address ?? 'বনানী, ঢাকা, বাংলাদেশ'); ?></p>
            </div>
        </div>
    </div>
    <div style="padding-top: 18px; text-align: center; border-top: 1px solid #1a1a1a; margin-top: 30px;">
        <p style="color: #9e9e9e; margin: 0; font-size: 0.95rem; text-align: center;">© <?php echo e(date('Y')); ?> <?php echo e($generalsetting->name); ?>. সর্বস্বত্ব সংরক্ষিত।</p>
    </div>
</footer>

<style>
    /* Reset and Base Styles */
    .footer {
        width: 100%;
        box-sizing: border-box;
    }

    /* Force list items to display properly */
    footer ul {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    
    footer li {
        list-style: none !important;
        display: block !important;
        margin-bottom: 12px !important;
    }
    
    footer li a {
        color: #e0e0e0 !important;
        text-decoration: none !important;
        display: inline-block !important;
        position: relative;
        transition: all 0.3s ease;
    }

    /* Link Hover Effects */
    footer li a:hover {
        color: #e2e9e3 !important;
        transform: translateX(5px);
    }

    footer li a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        bottom: 0;
        left: 0;
        background-color: #a3a7a3;
        transition: width 0.3s ease;
    }

    footer li a:hover::after {
        width: 100%;
    }

    /* Social Icons */
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white !important;
        border-radius: 8px;
     
        font-size: 22px;
  
    }


    .footer-grid {
        display: grid;
        grid-template-columns: minmax(260px, 1.6fr) minmax(220px, 1fr) minmax(220px, 1fr);
        gap: 40px;
        align-items: start;
        margin-bottom: 40px;
    }

    .footer-about .logo-container {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .footer-links h4,
    .footer-contact h4 {
        position: relative;
        margin-bottom: 24px;
        font-size: 1.1rem;
        color: #ffffff;
    }

    .footer-links h4::after,
    .footer-contact h4::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 52px;
        height: 2px;
        background: #c00000;
        transition: left 0.3s ease;
    }

    .footer-links ul {
        margin-top: 10px;
    }

    .footer-links li {
        margin-bottom: 14px !important;
    }

    .footer-contact .contact-card {
        background: #0d0d0d;
        border: 1px solid #191919;
        border-radius: 15px;
        padding: 22px;
        transition: all 0.2s ease;
    }

    .footer-contact .contact-card:hover {
        border-color: #c00000;
        background: #111;
    }

    .footer-contact .contact-card p:last-child {
        margin-bottom: 0;
    }

    .footer-about p {
        max-width: 100%;
        margin-top: 18px;
    }

    .social-icons {
        display: flex;
        gap: 16px;
        margin-top: 30px;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    footer {
        width: 100%;
        box-sizing: border-box;
    }

    /* Remove borders from footer text elements */
    footer p, footer a, footer h2, footer h4 {
        border: none !important;
        outline: none !important;
    }

    /* Dashboard menu button text - make bold */
    .sidebar-menu a {
        font-weight: bold !important;
    }

    nav ul li a {
        text-decoration: none;
    }

    .footer-about img {
        max-width: 100%;
        height: auto;
    }

    .footer-contact .contact-card p {
        word-break: break-word;
    }

    /* ========== RESPONSIVE STYLES (মোবাইলে সবকিছু সেন্টার) ========== */

    /* Tablet */
    @media screen and (max-width: 992px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        footer {
            padding: 50px 4% 20px !important;
        }
    }

    /* Mobile */
    @media screen and (max-width: 768px) {
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 35px;
        }
        footer {
            padding: 40px 5% 20px !important;
        }
        
        /* সবকিছু সেন্টারে */
        .footer-about,
        .footer-links,
        .footer-contact {
            text-align: center !important;
        }
        
        .footer-about .logo-container {
            justify-content: center !important;
            flex-direction: column !important;
        }
        
        .social-icons {
            justify-content: center !important;
        }
        
        .footer-links h4::after,
        .footer-contact h4::after {
            left: 50% !important;
            transform: translateX(-50%) !important;
        }
        
        .footer-links ul {
            margin-top: 8px;
        }
        
        footer li a {
            font-size: 0.95rem;
        }
        
        .social-icon {
            width: 42px !important;
            height: 42px !important;
            font-size: 20px;
        }
        
        /* যোগাযোগ কার্ড সেন্টার করা */
        .footer-contact .contact-card {
            max-width: 320px;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
        }
        
        .footer-about p {
            margin-left: auto;
            margin-right: auto;
        }
    }

    /* Small Mobile */
    @media screen and (max-width: 480px) {
        footer {
            padding: 35px 5% 18px !important;
        }
        
        .footer-about .logo-container img {
            max-width: 150px;
        }
        
        .footer-links h4,
        .footer-contact h4 {
            font-size: 1rem;
            margin-bottom: 16px;
        }
        
        .footer-links h4::after,
        .footer-contact h4::after {
            width: 45px;
            bottom: -6px;
        }
        
        .footer-about p {
            font-size: 0.9rem;
        }
        
        .social-icon {
            width: 38px !important;
            height: 38px !important;
            font-size: 18px;
        }
        
        .social-icons {
            gap: 12px !important;
        }
        
        /* যোগাযোগ কার্ড ছোট স্ক্রিনে */
        .footer-contact .contact-card {
            padding: 15px;
            max-width: 280px;
        }
        
        .footer-contact .contact-card p:first-of-type {
            font-size: 0.85rem;
        }
        
        .footer-contact .contact-card p:last-of-type {
            font-size: 0.9rem;
        }
        
        .copyright p {
            font-size: 0.8rem;
        }
        
        footer li a {
            font-size: 0.9rem;
        }
    }

    /* Extra Small */
    @media screen and (max-width: 360px) {
        .footer-grid {
            gap: 25px;
        }
        
        .footer-contact .contact-card {
            padding: 12px;
            max-width: 260px;
        }
        
        .social-icon {
            width: 35px !important;
            height: 35px !important;
            font-size: 16px;
        }
    }
</style>
        <div class="footer_nav">
            <ul>
                <li>
                    <a class="toggle">
                        <span>
                            <i class="bi bi-list"></i>
                        </span>
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="https://wa.me/<?php echo e(str_replace(['+', ' ', '-'], '', $contact->whatsapp)); ?>">
                        <span>
                            <i class="bi bi-whatsapp"></i>
                        </span>
                        <span>Whatsapp</span>
                    </a>
                </li>

                <li class="mobile_home">
                    <a href="<?php echo e(route('home')); ?>">
                        <span><i class="bi bi-house-fill"></i></span> <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('customer.checkout')); ?>">
                        <span>
                            <i class="bi bi-cart-fill"></i>
                        </span>
                        <span>Cart (<b class="mobilecart-qty"><?php echo e(Cart::instance('shopping')->count()); ?></b>)</span>
                    </a>
                </li>
                <?php if(Auth::guard('customer')->user()): ?>
                <li>
                    <a href="<?php echo e(route('customer.account')); ?>">
                        <span>
                            <i class="bi bi-person"></i>
                        </span>
                        <span>Account</span>
                    </a>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo e(route('customer.login')); ?>">
                        <span>
                            <i class="bi bi-person"></i>
                        </span>
                        <span>Login</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        
        <a href="https://wa.me/<?php echo e(str_replace(['+', ' ', '-'], '', $contact->whatsapp)); ?>?text=Hello, I would like to inquire about..." target="_blank" class="whatsapp-float">
            <i class="bi bi-whatsapp"></i>
        </a>

        <div class="scrolltop" style="">
            <div class="scroll">
                <i class="bi bi-chevron-up"></i>
            </div>
        </div>

        <!-- /. fixed sidebar -->

        <div id="custom-modal"></div>
        <div id="page-overlay"></div>
        <div id="loading"><div class="custom-loader"></div></div>

        <script src="<?php echo e(asset('public/frontEnd/js/jquery-3.6.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/mobile-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/wsit-menu.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/mobile-menu-init.js')); ?>"></script>
        <script src="<?php echo e(asset('public/frontEnd/js/wow.min.js')); ?>"></script>
        <script>
            new WOW().init();
        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <!-- feather icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
        <script>
            feather.replace();
        </script>
        <script src="<?php echo e(asset('public/backEnd/')); ?>/assets/js/toastr.min.js"></script>
        <?php echo Toastr::message(); ?> <?php echo $__env->yieldPushContent('script'); ?>
        <script>
            $(".quick_view").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('quickview')); ?>",
                        success: function (data) {
                            if (data) {
                                $("#custom-modal").html(data);
                                $("#custom-modal").show();
                                $("#loading").hide();
                                $("#page-overlay").show();
                            }
                        },
                    });
                }
            });
        </script>
        <!-- quick view end -->
        <!-- cart js start -->
        <script>
            $(".addcartbutton").on("click", function () {
                var id = $(this).data("id");
                var qty = 1;
                if (id) {
                    $.ajax({
                        cache: "false",
                        type: "GET",
                        url: "<?php echo e(url('add-to-cart')); ?>/" + id + "/" + qty,
                        dataType: "json",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart successfully');
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });
            $(".cart_store").on("click", function () {
                var id = $(this).data("id");
                var qty = $(this).parent().find("input").val();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id, qty: qty ? qty : 1 },
                        url: "<?php echo e(route('cart.store')); ?>",
                        success: function (data) {
                            if (data) {
                                toastr.success('Success', 'Product add to cart succfully');
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_remove").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.remove')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart() + cart_summary();
                            }
                        },
                    });
                }
            });

            $(".cart_increment").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.increment')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_decrement").on("click", function () {
                var id = $(this).data("id");
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.decrement')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            function cart_count() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('cart.count')); ?>",
                    success: function (data) {
                        if (data) {
                            $("#cart-qty").html(data);
                        } else {
                            $("#cart-qty").empty();
                        }
                    },
                });
            }
            function mobile_cart() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('mobile.cart.count')); ?>",
                    success: function (data) {
                        if (data) {
                            $(".mobilecart-qty").html(data);
                        } else {
                            $(".mobilecart-qty").empty();
                        }
                    },
                });
            }
            function cart_summary() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('shipping.charge')); ?>",
                    dataType: "html",
                    success: function (response) {
                        $(".cart-summary").html(response);
                    },
                });
            }
        </script>
        <!-- cart js end -->
        <script>
            $(".search_click").on("keyup change", function () {
                var keyword = $(".search_keyword").val();
                $.ajax({
                    type: "GET",
                    data: { keyword: keyword },
                    url: "<?php echo e(route('livesearch')); ?>",
                    success: function (products) {
                        if (products) {
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
            $(".msearch_click").on("keyup change", function () {
                var keyword = $(".msearch_keyword").val();
                $.ajax({
                    type: "GET",
                    data: { keyword: keyword },
                    url: "<?php echo e(route('livesearch')); ?>",
                    success: function (products) {
                        if (products) {
                            $("#loading").hide();
                            $(".search_result").html(products);
                        } else {
                            $(".search_result").empty();
                        }
                    },
                });
            });
        </script>
        <!-- search js start -->
        <script></script>
        <script></script>
        <script>
            $(".district").on("change", function () {
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    data: { id: id },
                    url: "<?php echo e(route('districts')); ?>",
                    success: function (res) {
                        if (res) {
                            $(".area").empty();
                            $(".area").append('<option value="">Select..</option>');
                            $.each(res, function (key, value) {
                                $(".area").append('<option value="' + key + '" >' + value + "</option>");
                            });
                        } else {
                            $(".area").empty();
                        }
                    },
                });
            });
        </script>
        <script>
            $(".toggle").on("click", function () {
                $("#page-overlay").show();
                $(".mobile-menu").addClass("active");
            });

            $("#page-overlay").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
                $(".feature-products").removeClass("active");
            });

            $(".mobile-menu-close").on("click", function () {
                $("#page-overlay").hide();
                $(".mobile-menu").removeClass("active");
            });

            $(".mobile-filter-toggle").on("click", function () {
                $("#page-overlay").show();
                $(".feature-products").addClass("active");
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".parent-category").each(function () {
                    const menuCatToggle = $(this).find(".menu-category-toggle");
                    const secondNav = $(this).find(".second-nav");

                    menuCatToggle.on("click", function () {
                        menuCatToggle.toggleClass("active");
                        secondNav.slideToggle("fast");
                        $(this).closest(".parent-category").toggleClass("active");
                    });
                });
                $(".parent-subcategory").each(function () {
                    const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
                    const thirdNav = $(this).find(".third-nav");

                    menuSubcatToggle.on("click", function () {
                        menuSubcatToggle.toggleClass("active");
                        thirdNav.slideToggle("fast");
                        $(this).closest(".parent-subcategory").toggleClass("active");
                    });
                });

                var $catWrapper = $(".cat-scroll-wrapper");
                var scrollAmount = 320;

                $(".prev-cat").on("click", function () {
                    $catWrapper.animate({
                        scrollLeft: $catWrapper.scrollLeft() - scrollAmount
                    }, 300);
                });

                $(".next-cat").on("click", function () {
                    $catWrapper.animate({
                        scrollLeft: $catWrapper.scrollLeft() + scrollAmount
                    }, 300);
                });
            });
        </script>

        <script>
            var menu = new MmenuLight(document.querySelector("#menu"), "all");

            var navigator = menu.navigation({
                selectedClass: "Selected",
                slidingSubmenus: true,
                // theme: 'dark',
                title: "ক্যাটাগরি",
            });

            var drawer = menu.offcanvas({
                // position: 'left'
            });

            //  Open the menu.
            document.querySelector('a[href="#menu"]').addEventListener("click", (evnt) => {
                evnt.preventDefault();
                drawer.open();
            });
        </script>

        <script>
            // document.addEventListener("DOMContentLoaded", function () {
            //     window.addEventListener("scroll", function () {
            //         if (window.scrollY > 200) {
            //             document.getElementById("navbar_top").classList.add("fixed-top");
            //         } else {
            //             document.getElementById("navbar_top").classList.remove("fixed-top");
            //             document.body.style.paddingTop = "0";
            //         }
            //     });
            // });
            /*=== Main Menu Fixed === */
            // document.addEventListener("DOMContentLoaded", function () {
            //     window.addEventListener("scroll", function () {
            //         if (window.scrollY > 0) {
            //             document.getElementById("m_navbar_top").classList.add("fixed-top");
            //             // add padding top to show content behind navbar
            //             navbar_height = document.querySelector(".navbar").offsetHeight;
            //             document.body.style.paddingTop = navbar_height + "px";
            //         } else {
            //             document.getElementById("m_navbar_top").classList.remove("fixed-top");
            //             // remove padding top from body
            //             document.body.style.paddingTop = "0";
            //         }
            //     });
            // });
            /*=== Main Menu Fixed === */

            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $(".scrolltop:hidden").stop(true, true).fadeIn();
                    // Apply glassy effect to navbar
                    $("#navbar_top").addClass("glassy-effect");
                } else {
                    $(".scrolltop").stop(true, true).fadeOut();
                    // Remove glassy effect from navbar
                    $("#navbar_top").removeClass("glassy-effect");
                }
            });
            $(function () {
                $(".scroll").click(function () {
                    $("html,body").animate({ scrollTop: $(".gotop").offset().top }, "1000");
                    return false;
                });
            });
        </script>
        <script>
            $(".filter_btn").click(function(){
               $(".filter_sidebar").addClass('active');
               $("body").css("overflow-y", "hidden");
            })
            $(".filter_close").click(function(){
               $(".filter_sidebar").removeClass('active');
               $("body").css("overflow-y", "auto");
            })
        </script>
        <!--search ANIMAtion end-->
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo e($gtm->code); ?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>
</html><?php /**PATH C:\laragon\www\orvionshop3\resources\views/frontEnd/layouts/master.blade.php ENDPATH**/ ?>