
<?php $__env->startSection('title', $details->name); ?> 
<?php $__env->startPush('seo'); ?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="app-url" content="<?php echo e(route('product', $details->slug)); ?>" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php echo e($details->meta_description); ?>" />
<meta name="keywords" content="<?php echo e($details->slug); ?>" />

<?php
    $productImage = optional($details->image)->image ?? optional($details->images->first())->image;
    $productImageUrl = $productImage ? asset($productImage) : 'https://via.placeholder.com/1200x675';
?>

<!-- Twitter Card data -->
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="<?php echo e($details->name); ?>" />
<meta name="twitter:title" content="<?php echo e($details->name); ?>" />
<meta name="twitter:description" content="<?php echo e($details->meta_description); ?>" />
<meta name="twitter:creator" content="gomobd.com" />
<meta property="og:url" content="<?php echo e(route('product', $details->slug)); ?>" />
<meta name="twitter:image" content="<?php echo e($productImageUrl); ?>" />

<!-- Open Graph data -->
<meta property="og:title" content="<?php echo e($details->name); ?>" />
<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo e(route('product', $details->slug)); ?>" />
<meta property="og:image" content="<?php echo e($productImageUrl); ?>" />
<meta property="og:description" content="<?php echo e($details->meta_description); ?>" />
<meta property="og:site_name" content="<?php echo e($details->name); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/zoomsl.css')); ?>">
<style>
    .details-stat-item {
        background: #fff5f5;
        padding: 18px;
        border-radius: 16px;
        text-align: center;
        border: 1px solid rgba(192, 0, 0, 0.12);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.04);
    }

    .details-stat-icon {
        width: 46px;
        height: 46px;
        margin: 0 auto 10px auto;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(192, 0, 0, 0.12);
        color: #c00000;
        font-size: 20px;
    }

    .details-stat-label {
        font-size: 12px;
        color: #666;
        margin-bottom: 6px;
    }

    .details-stat-value {
        font-size: 15px;
        font-weight: 700;
        color: #c00000;
    }

    .details-note {
        margin-top: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #666;
        font-size: 13px;
    }

    .details-note i {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(192, 0, 0, 0.08);
        color: #c00000;
        font-size: 16px;
    }

    .details-modal-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: #c00000;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 22px;
    }

    @media (max-width: 992px) {
        .details-top-card {
            flex-wrap: wrap !important;
        }

        .details-top-card > div {
            flex: 1 1 100% !important;
            min-width: 0 !important;
        }

        .details-image-column {
            min-width: 0 !important;
        }

        .details-image-column > div {
            width: 100% !important;
        }

        .details-image-column .details-main-image {
            height: auto !important;
            min-height: 280px !important;
        }

        .details-thumbnails {
            flex-wrap: wrap !important;
            gap: 8px !important;
        }

        .details-thumbnails > div {
            height: 72px !important;
        }

        .details-content-column {
            padding-top: 20px !important;
            border: none !important;
        }

        .details-stat-grid {
            grid-template-columns: 1fr !important;
        }

        .details-stat-grid > div {
            padding: 15px !important;
        }

        .details-cta .details-cta-buttons {
            flex-direction: column !important;
            gap: 12px !important;
        }

        .details-cta .details-cta-buttons button,
        .details-cta .details-cta-buttons a {
            width: 100% !important;
        }

        .details-summary {
            padding: 30px 15px !important;
        }
    }

    @media (max-width: 768px) {
        .details-top-card {
            gap: 18px !important;
            padding: 18px !important;
        }

        .details-top-card h1 {
            font-size: 26px !important;
        }

        .details-top-card p,
        .details-top-card .details-price-text,
        .details-top-card .details-feature-list li {
            font-size: 14px !important;
        }

        .details-cta {
            padding: 35px 15px !important;
        }

        .details-cta h2 {
            font-size: 28px !important;
        }

        .details-cta button,
        .details-cta a {
            font-size: 15px !important;
        }
    }

    @media (max-width: 576px) {
        .details-top-card {
            padding: 16px !important;
        }

        .details-top-card .details-main-image {
            min-height: 220px !important;
        }

        .details-red-hero {
            padding: 30px 12px !important;
        }

        .details-red-hero h2 {
            font-size: 24px !important;
        }

        .details-red-hero .details-cta-buttons {
            flex-direction: column !important;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="homeproduct main-details-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
<section class="details-top-card" style="max-width: 1000px; margin: 0 auto; background: white; padding: 20px; border-radius: 12px; display: flex; gap: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #eee; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    
    <div class="details-image-column" style="flex: 1.2;">
        <div class="details-main-image" style="position: relative; width: 100%; height: 400px; border-radius: 15px; overflow: hidden; margin-bottom: 15px;">
            <img src="<?php echo e($productImageUrl); ?>" alt="Main Product" style="width: 100%; height: 100%; object-fit: cover;">
            <?php if($details->weight): ?>
            <div style="position: absolute; top: 15px; left: 15px; background: #c00000; color: white; padding: 8px 14px; border-radius: 20px; font-size: 14px; font-weight: 700; display: flex; align-items: center; gap: 8px;">
                <i class="bi bi-speedometer2" style="font-size: 16px;"></i> ওজন: <?php echo e($details->weight); ?> কেজি
            </div>
            <?php endif; ?>
        </div>

        <div class="details-thumbnails" style="display: flex; gap: 10px;">
            <?php $__currentLoopData = $details->images->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="flex: 1; height: 80px; <?php echo e($index == 0 ? 'border: 2px solid #c00000;' : ''); ?> border-radius: 8px; overflow: hidden; <?php echo e($index > 0 ? 'opacity: 0.8;' : ''); ?>">
                <img src="<?php echo e(asset($image->image)); ?>" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="details-content-column" style="flex: 1; border: 1px solid #f0f0f0; padding: 25px; border-radius: 12px;">
        <h1 style="color: #c00000; margin: 0 0 5px 0; font-size: 32px; font-weight: 800;"><?php echo e($details->name); ?></h1>
        <p style="color: #666; margin-bottom: 20px; font-size: 14px;">আইডি নং: #<?php echo e($details->product_code); ?></p>

        <div style="margin-bottom: 25px;">
            <span style="display: block; color: #444; font-size: 14px; margin-bottom: 5px;">বিক্রয় মূল্য</span>
            <span style="font-size: 28px; font-weight: bold; color: #000;">৳ <?php echo e(number_format($details->new_price)); ?></span>
            <?php if($details->weight): ?>
            <span style="color: #c00000; font-size: 14px; margin-left: 10px;">ওজন: <?php echo e($details->weight); ?> কেজি</span>
            <?php endif; ?>
        </div>

        <div class="details-stat-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 30px;">
            <div class="details-stat-item">
                <div class="details-stat-icon"><i class="bi bi-speedometer2"></i></div>
                <div class="details-stat-label">ওজন</div>
                <div class="details-stat-value"><?php echo e($details->weight ?? 'N/A'); ?> কেজি</div>
            </div>
            <div class="details-stat-item">
                <div class="details-stat-icon"><i class="bi bi-calendar-event"></i></div>
                <div class="details-stat-label">বয়স</div>
                <div class="details-stat-value"><?php echo e($details->age ?? 'N/A'); ?></div>
            </div>
            <div class="details-stat-item">
                <div class="details-stat-icon"><i class="bi bi-award"></i></div>
                <div class="details-stat-label">জাত</div>
                <div class="details-stat-value"><?php echo e($details->breed ?? 'N/A'); ?></div>
            </div>
            <div class="details-stat-item">
                <div class="details-stat-icon"><i class="bi bi-shield-check"></i></div>
                <div class="details-stat-label">স্বাস্থ্য</div>
                <div class="details-stat-value"><?php echo e($details->health ?? 'N/A'); ?></div>
            </div>
        </div>

        <button id="book-now-button" type="button" style="width: 100%; background: #c00000; color: white; border: none; padding: 15px; border-radius: 8px; font-size: 18px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 12px;">
            <i class="bi bi-calendar-check"></i> বুক করুন
        </button>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>" target="_blank" style="width: 100%; background: white; color: #c00000; border: 1px solid #c00000; padding: 12px; border-radius: 8px; font-size: 16px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px; text-decoration: none;">
            <i class="bi bi-share"></i> শেয়ার করুন
        </a>

        <div class="details-note">
            <i class="bi bi-truck"></i>
            সারা বাংলাদেশে হোম ডেলিভারি সুবিধা আছে
        </div>

        <div id="bookingContactModal" style="display:none; position: fixed; inset: 0; z-index: 10000; background: rgba(0, 0, 0, 0.75); align-items: center; justify-content: center; padding: 20px;">
            <div style="background: #fff; width: 100%; max-width: 460px; border-radius: 24px; overflow: hidden; box-shadow: 0 24px 70px rgba(0,0,0,0.3); position: relative;">
                <div style="background: #fff; padding: 25px 25px 18px 25px; position: relative;">
                    <button id="bookingModalClose" type="button" style="position: absolute; top: 18px; right: 18px; border: none; background: transparent; font-size: 24px; color: #444; cursor: pointer; line-height: 1;">×</button>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                        <div style="width: 48px; height: 48px; border-radius: 14px; background: #c00000; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 22px;"><i class="bi bi-geo-fill"></i></div>
                        <div>
                            <h2 style="margin: 0; font-size: 26px; color: #111;">বুকিং তথ্য</h2>
                            <div style="width: 45px; height: 4px; background: #c00000; margin-top: 8px; border-radius: 4px;"></div>
                        </div>
                    </div>
                    <p style="margin: 0 0 18px 0; color: #555; font-size: 15px; line-height: 1.75;">আপনি এই পশুটি বুক করতে চাইলে নিচের নম্বরে যোগাযোগ করুন। আমাদের প্রতিনিধি আপনাকে বুকিং প্রক্রিয়া সম্পন্ন করতে সাহায্য করেবেন।</p>
                </div>
                <div style="padding: 0 25px 25px 25px; display: grid; gap: 14px;">
                    <a href="tel:<?php echo e(preg_replace('/[^0-9+]/', '', $contact->hotline ?? '')); ?>" style="display: block; padding: 16px 18px; border-radius: 14px; background: #c00000; color: #fff; font-size: 16px; font-weight: 700; text-decoration: none; box-shadow: 0 12px 30px rgba(192,0,0,0.15);">
                        <span style="display: inline-flex; align-items: center; gap: 10px;"><i class="bi bi-telephone"></i> কল করুন: <?php echo e($contact->hotline ?? '+880 1234 567890'); ?></span>
                    </a>
                    <a href="https://wa.me/<?php echo e(str_replace(['+', ' ', '-'], '', $contact->whatsapp ?? '')); ?>" target="_blank" style="display: block; padding: 16px 18px; border-radius: 14px; background: #24c55a; color: #fff; font-size: 16px; font-weight: 700; text-decoration: none; box-shadow: 0 12px 30px rgba(36,197,90,0.15);">
                        <span style="display: inline-flex; align-items: center; gap: 10px;"><i class="bi bi-whatsapp"></i> WhatsApp এর মাধ্যমে বুক করুন</span>
                    </a>
                </div>
                <div style="background: #fff5f5; border-top: 1px solid #ffe5e5; padding: 16px 25px 20px 25px; color: #7a1b1b; font-size: 14px; text-align: center;">
                    <span style="display: inline-flex; align-items: center; gap: 8px; font-weight: 600;"><i class="bi bi-lock"></i> হেরিটেজ হাট সিকুয়র বুকিং</span>
                </div>
            </div>
        </div>
    </div>
</section>
            </div>
        </div>
    </div>
</div>


<section class="details-red-hero" style="
    background-color: #b20000; 
    background-image: linear-gradient(90deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 50%, rgba(0,0,0,0.1) 100%);
    padding: 60px 20px; 
    text-align: center; 
    position: relative;
    overflow: hidden;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
">
    
    <div style="margin-bottom: 40px;">
        <h2 style="color: white; font-size: 36px; margin: 0 0 10px 0; font-weight: bold; text-align: center;">আমাদের খামার থেকে সরাসরি</h2>
        <p style="color: rgba(255,255,255,0.8); font-size: 16px; margin: 0; text-align: center;">সরাসরি দেখুন আপনার প্রিয় পশুটি</p>
    </div>

    <div style="
        max-width: 900px; 
        margin: 0 auto; 
        position: relative; 
        border: 3px solid #d35a5a; 
        border-radius: 20px; 
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        aspect-ratio: 16 / 9;
        background-color: #000;
    ">
        <img src="https://via.placeholder.com/1200x675" alt="Farm Video Thumbnail" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">

        <div style="
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            background: white;
            width: 60px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        ">
            <div style="
                width: 0; 
                height: 0; 
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-left: 12px solid #333;
                margin-left: 3px;
            "></div>
        </div>

        <div style="
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            border: 1px solid rgba(255,255,255,0.1);
        ">
            সঠিক যত্ন ও পুষ্টিকর খাবার
        </div>
    </div>

</section>

<section>
    <div style="margin: 0; padding: 50px 20px; background-color: #ffffff; font-family: 'Segoe UI', Arial, sans-serif; color: #333; line-height: 1.6;">

    <section style="max-width: 800px; margin: 0 auto 80px auto; text-align: center;">
        <h2 style="color: #c00000; font-size: 28px; margin-bottom: 10px;">পশুর বিস্তারিত তথ্য</h2>
        <div style="width: 50px; height: 3px; background: #c00000; margin: 0 auto 25px auto;"></div>
        <p style="color: #555; font-size: 15px; max-width: 700px; margin: 0 auto;">
            এই শাহীওয়াল জাতের ষাঁড়টি অত্যন্ত সুঠাম এবং প্রাকৃতিকভাবে পালিত। এটি কুষ্টিয়ার একটি আদর্শ খামার থেকে সংগ্রহ করা হয়েছে। পশুর শারীরিক গঠন অত্যন্ত চমৎকার এবং এর চামড়া মসৃণ। কোরবানির জন্য এটি একটি রাজকীয় পছন্দ হতে পারে।
        </p>
    </section>

    <div style="display: flex; align-items: center; width: 100%; max-width: 800px; margin: 20px auto;">
    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to right, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
    
  <div style="margin: 0 15px; display: flex; align-items: center; justify-content: center;">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#F0B9BA" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>

    <div style="flex-grow: 1; height: 3px;  background: linear-gradient(to left, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
</section>

</div>

  <section style="max-width: 800px; margin: 0 auto 80px auto; background: white; padding: 40px 30px; border-radius: 12px;">
    <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="color: #c00000; font-size: 28px; margin-bottom: 10px;">স্বাস্থ্য নোট</h2>
        <div style="width: 50px; height: 3px; background: #c00000; margin: 0 auto;"></div>
    </div>

    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <div style="flex: 1; background: #fdf2f2; padding: 25px; border-radius: 12px; border: 1px solid #f9e1e1; min-width: 200px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                <i class="bi bi-fire" style="color: #c00000; font-size: 28px;"></i>
                <h3 style="color: #c00000; margin: 0; font-size: 18px;">প্রধান খাদ্য</h3>
            </div>
            <ul style="list-style: none; padding: 0; font-size: 14px; color: #444;">
                <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <i class="bi bi-check-circle-fill" style="color: #c00000; font-size: 14px;"></i>
                    <span>টাটকা কাঁচা ঘাস এবং খড়</span>
                </li>
                <li style="margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                    <i class="bi bi-check-circle-fill" style="color: #c00000; font-size: 14px;"></i>
                    <span>উন্নত মানের দানাদার খাদ্য</span>
                </li>
                <li style="display: flex; align-items: center; gap: 8px;">
                    <i class="bi bi-check-circle-fill" style="color: #c00000; font-size: 14px;"></i>
                    <span>খৈল এবং ভুষি মিশ্রণ</span>
                </li>
            </ul>
        </div>
        
        <div style="flex: 1; background: #fdf2f2; padding: 25px; border-radius: 12px; border: 1px solid #f9e1e1; min-width: 200px;">
            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                <i class="bi bi-star-fill" style="color: #c00000; font-size: 28px;"></i>
                <h3 style="color: #c00000; margin: 0; font-size: 18px;">বিশেষ পুষ্টি</h3>
            </div>
            <div style="display: flex; gap: 12px; flex-direction: column;">
                <div style="display: flex; align-items: flex-start; gap: 8px;">
                    <i class="bi bi-droplet-fill" style="color: #c00000; font-size: 14px; margin-top: 2px;"></i>
                    <p style="font-size: 14px; color: #444; margin: 0;">
                        সম্পূর্ণ প্রাকৃতিকভাবে মোটাতাজা করা হয়েছে।
                    </p>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 8px;">
                    <i class="bi bi-shield-check" style="color: #c00000; font-size: 14px; margin-top: 2px;"></i>
                    <p style="font-size: 14px; color: #444; margin: 0;">
                        কোনো প্রকার কৃত্রিম স্টেরয়েড ব্যবহার করা হয়নি।
                    </p>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 8px;">
                    <i class="bi bi-capsule" style="color: #c00000; font-size: 14px; margin-top: 2px;"></i>
                    <p style="font-size: 14px; color: #444; margin: 0;">
                        নিয়মিত খনিজ লবণ এবং ভিটামিন সরবরাহ করা হয়েছে।
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding-bottom: 50px">
     <div style="display: flex; align-items: center; width: 100%; max-width: 800px; margin: 20px auto;">
    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to right, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
    
  <div style="margin: 0 15px; display: flex; align-items: center; justify-content: center;">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#F0B9BA" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>

    <div style="flex-grow: 1; height: 3px;  background: linear-gradient(to left, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
</section>

 <!-- খাদ্য তালিকা Section -->
<section style="max-width: 800px; margin: 0 auto 80px auto;">
    <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="color: #c00000; font-size: 28px; margin-bottom: 10px;">স্বাস্থ্য সনদ</h2>
        <div style="width: 50px; height: 3px; background: #c00000; margin: 0 auto;"></div>
    </div>

    <div style="display: flex; align-items: center; background: #f9f9f9; padding: 25px; border-radius: 15px; border: 1px solid #eee; flex-wrap: wrap; gap: 20px;">
        <div style="background: #fdf2f2; width: 80px; height: 80px; border-radius: 10px; display: flex; align-items: center; justify-content: center; border: 1px solid #f9e1e1;">
            <i class="bi bi-heart-fill" style="color: #c00000; font-size: 40px;"></i>
        </div>
        <div style="flex: 1; min-width: 200px;">
            <p style="font-size: 14px; color: #555; margin: 0 0 15px 0; line-height: 1.6;">
                আমাদের বিশেষজ্ঞ ভেটেরিনারি ডাক্তার দ্বারা পশুর নিয়মিত স্বাস্থ্য পরীক্ষা করা হয়েছে। খুরা রোগ (FMD) সহ সকল গুরুত্বপূর্ণ টিকা সময়মতো প্রদান করা হয়েছে।
            </p>
            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                <span style="display: inline-flex; align-items: center; gap: 5px; background: #e8f5e9; color: #2e7d32; padding: 5px 12px; border-radius: 20px; font-size: 11px;">
                    <i class="bi bi-shield-check" style="font-size: 11px;"></i> টিকা প্রাপ্ত
                </span>
                <span style="display: inline-flex; align-items: center; gap: 5px; background: #e8f5e9; color: #2e7d32; padding: 5px 12px; border-radius: 20px; font-size: 11px;">
                    <i class="bi bi-bug" style="font-size: 11px;"></i> কৃমিমুক্ত
                </span>
                <span style="display: inline-flex; align-items: center; gap: 5px; background: #e8f5e9; color: #2e7d32; padding: 5px 12px; border-radius: 20px; font-size: 11px;">
                    <i class="bi bi-award-fill" style="font-size: 11px;"></i> ভেটেরিনারি সার্টিফাইড
                </span>
            </div>
        </div>
    </div>
</section>

<!-- বিশেষ দ্রষ্টব্য Section -->
<section style="max-width: 800px; margin: 0 auto 80px auto;">
    <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="color: #c00000; font-size: 28px; margin-bottom: 10px;">বিশেষ দ্রষ্টব্য</h2>
        <div style="width: 50px; height: 3px; background: #c00000; margin: 0 auto;"></div>
    </div>

    <div style="background: #fdf2f2; padding: 30px; border-radius: 12px; border: 1px dashed #c00000;">
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14px; color: #444;">
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                <i class="bi bi-info-circle-fill" style="color: #c00000; font-size: 16px; margin-top: 2px;"></i>
                <span>পশুর প্রকৃত ওজন কোরবানির আগে সামান্য পরিবর্তন হতে পারে।</span>
            </li>
            <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                <i class="bi bi-clock-history" style="color: #c00000; font-size: 16px; margin-top: 2px;"></i>
                <span>অগ্রিম বুকিং এর পর কোনো কারণে বুকিং বাতিল করতে চাইলে ২৪ ঘণ্টার মধ্যে জানাতে হবে।</span>
            </li>
            <li style="display: flex; align-items: flex-start; gap: 10px;">
                <i class="bi bi-gift-fill" style="color: #c00000; font-size: 16px; margin-top: 2px;"></i>
                <span>ঈদের ৩ দিন আগে পর্যন্ত পশুকে আমাদের খামারে বিনামূল্যে রাখার সুবিধা পাবেন।</span>
            </li>
        </ul>
    </div>
</section>

</div>

<section style="
    padding: 60px 20px; 
    font-family: sans-serif; 
    display: flex; 
    justify-content: center; 
    align-items: center;">

    <div style="
        background: linear-gradient(135deg, #a00000 0%, #4a0000 100%); 
        color: white;
        border: 6px solid #f9f9f9;
        padding: 50px; 
        border-radius: 20px; 
        text-align: center; 
        max-width: 800px; 
        width: 100%; 
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);">

        <h2 style="font-size: 36px; margin: 0 0 15px 0;">ঐতিহ্যবাহী সেরা পশুটি বুক করুন</h2>
        <p style="font-size: 16px; opacity: 0.9; margin-bottom: 30px; text-align: center; color: white;">স্টক ফুরিয়ে যাওয়ার আগেই আপনার কোরবানির জন্য সেরা পশুটি নিশ্চিত করুন।<br>১০০% বিশ্বস্ত ডিজিটাল কোরবানি হাট।</p>

        <div style="display: flex; justify-content: center; gap: 15px;">
            <a href="<?php echo e(route('shop')); ?>" style="
                background: white; 
                color: #a00000; 
                border: none; 
                padding: 12px 25px; 
                border-radius: 6px; 
                font-weight: bold; 
                cursor: pointer; 
                display: flex; 
                align-items: center; 
                gap: 8px; text-decoration: none;">
                <i class="bi bi-cart-fill"></i> হাটে প্রবেশ করুন
            </a>
            <button style="
                background: transparent; 
                color: white; 
                border: 1px solid rgba(255,255,255,0.3); 
                padding: 12px 25px; 
                border-radius: 6px; 
                cursor: pointer;">
                 কল করুন ০৯৮-२२२-४४४
            </button>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?> <?php $__env->startPush('script'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var bookButton = document.getElementById('book-now-button');
        var bookingModal = document.getElementById('bookingContactModal');
        var bookingClose = document.getElementById('bookingModalClose');

        if (bookButton && bookingModal && bookingClose) {
            bookButton.addEventListener('click', function () {
                bookingModal.style.display = 'flex';
            });

            bookingClose.addEventListener('click', function () {
                bookingModal.style.display = 'none';
            });

            bookingModal.addEventListener('click', function (event) {
                if (event.target === bookingModal) {
                    bookingModal.style.display = 'none';
                }
            });
        }
    });
</script>

<script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/frontEnd/js/zoomsl.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        $(".details_slider").owlCarousel({
            margin: 15,
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
        });
        $(".indicator-item").on("click", function() {
            var slideIndex = $(this).data("id");
            $(".details_slider").trigger("to.owl.carousel", slideIndex);
        });
    });
</script>
<!--Data Layer Start-->
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    
    dataLayer.push({
        event: "view_item",
        ecommerce: {
            items: [{
                item_name: "<?php echo e($details->name); ?>",
                item_id: "<?php echo e($details->id); ?>",
                price: "<?php echo e($details->new_price); ?>",
                item_brand: "<?php echo e($details->brand?$details->brand->name:''); ?>",
                item_category: "<?php echo e($details->category?$details->category->name:''); ?>",
                item_variant: "<?php echo e($details->pro_unit); ?>",
                currency: "BDT",
                quantity: <?php echo e($details->stock ?? 0); ?>

            }],
            impression: [
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    {
                        item_name: "<?php echo e($value->name); ?>",
                        item_id: "<?php echo e($value->id); ?>",
                        price: "<?php echo e($value->new_price); ?>",
                        item_brand: "<?php echo e($details->brand?$details->brand->name:''); ?>",
                        item_category: "<?php echo e($value->category ? $value->category->name : ''); ?>",
                        item_variant: "<?php echo e($value->pro_unit); ?>",
                        currency: "BDT",
                        quantity: <?php echo e($value->stock ?? 0); ?>

                    },
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ]
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add_to_cart').click(function() {
            gtag("event", "add_to_cart", {
                currency: "BDT",
                value: "1.5",
                items: [
                    <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            item_id: "<?php echo e($details->id); ?>",
                            item_name: "<?php echo e($details->name); ?>",
                            price: "<?php echo e($details->new_price); ?>",
                            currency: "BDT",
                            quantity: <?php echo e($cartInfo->qty ?? 0); ?>

                        },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#order_now').click(function() {
            gtag("event", "add_to_cart", {
                currency: "BDT",
                value: "1.5",
                items: [
                    <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            item_id: "<?php echo e($details->id); ?>",
                            item_name: "<?php echo e($details->name); ?>",
                            price: "<?php echo e($details->new_price); ?>",
                            currency: "BDT",
                            quantity: <?php echo e($cartInfo->qty ?? 0); ?>

                        },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ]
            });
        });
    });
</script>

<!-- Data Layer End-->
<script>
    $(document).ready(function() {
        $(".related_slider").owlCarousel({
            margin: 10,
            items: 6,
            loop: true,
            dots: true,
            nav: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true,
                },
            },
        });
        // $('.owl-nav').remove();
    });
</script>
<script>
    $(document).ready(function() {
        $(".minus").click(function() {
            var $input = $(this).parent().find("input");
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $(".plus").click(function() {
            var $input = $(this).parent().find("input");
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
</script>

<script>
    function getSelectedRadioValue(name) {
        var radios = document.getElementsByName(name);
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return radios[i].value;
            }
        }
        return '';
    }

    function sendSuccess() {
        return true;
    }
</script>
<script>
    $(document).ready(function() {
        $(".rating label").click(function() {
            $(".rating label").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".thumb_slider").owlCarousel({
            margin: 15,
            items: 4,
            loop: true,
            dots: false,
            nav: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
        });
    });
</script>

<script type="text/javascript">
    $(".block__pic").imagezoomsl({
        zoomrange: [3, 3]
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\orvionshop3\resources\views/frontEnd/layouts/pages/details.blade.php ENDPATH**/ ?>