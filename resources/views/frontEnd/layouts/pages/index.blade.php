@extends('frontEnd.layouts.master') 
@section('title', 'Home') 
@push('css')
<style>
    body, h1, h2, h3, h4, h5, h6, p, div, span, a, button, input, textarea, select {
        font-family: "Hind Siliguri", sans-serif !important;
    }
    
    #home-contact-button {
        position: relative;
        overflow: hidden;
    }
    
    #home-contact-button:hover {
        background: rgba(255, 255, 255, 0.25) !important;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3), inset 0 1px rgba(255, 255, 255, 0.4) !important;
        border-color: rgba(255, 255, 255, 0.5) !important;
        transform: translateY(-2px);
    }
    
    #home-contact-button:active {
        transform: translateY(0);
    }

    .product-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .product-card-image {
        position: relative;
        height: 180px;
        overflow: hidden;
    }

    .product-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .product-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: rgba(179, 0, 0, 0.9);
        color: #fff;
        padding: 6px 10px;
        border-radius: 999px;
        font-size: 12px;
    }

    .stock-out-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0,0,0,0.55);
        color: #fff;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .product-card-body {
        padding: 15px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .product-card-body h3 {
        margin: 0 0 10px 0;
        font-size: 18px;
        color: #333;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-details {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        color: #777;
        font-size: 14px;
        margin-bottom: 15px;
    }

    .product-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
        gap: 10px;
    }

    .product-price {
        color: #b30000;
        font-weight: 700;
        font-size: 18px;
    }

    .product-btn {
        border: 1px solid #c00000;
        background: transparent;
        color: #c00000;
        padding: 8px 14px;
        border-radius: 8px;
        font-size: 13px;
        text-decoration: none;
        white-space: nowrap;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    .product-btn:hover {
        background: #c00000;
        color: #fff;
    }
</style>
@endpush
@push('seo')
 
<meta name="description" content="{!! $generalsetting->meta_description !!}" />
<meta name="keyword" content="{!! $generalsetting->meta_keyword !!}" />

		<!-- Open Graph data -->
<meta property="og:title" content="{{$generalsetting->name}}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ URL::to('/') }}" />
<meta property="og:image" content="{{asset($generalsetting->og_baner)}}" />
<meta property="og:description" content="{!! $generalsetting->meta_description !!}" />
@endpush @push('css')
<link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
@endpush @section('content')
<section style="
    display: flex; 
    align-items: center; 
    justify-content: space-between; 
    padding: 0 5% 60px 5%; 
    background-color: #1a1a1a; 
    background-image: url('{{ asset($sliders->first()->image ?? '') }}'); 
    background-size: cover; 
    background-position: center; 
    color: white; 
    font-family: Arial, sans-serif; 
    min-height: 500px;
    ">
    
    <div style="flex: 1; padding-right: 40px;">
        <span style="background-color: #d30000; padding: 5px 10px; border-radius: 10px; font-size: 14px; display: inline-block; margin-bottom: 20px;">
            <i class="bi bi-star-fill" style="color: white; margin-right: 5px;"></i>অনলাইন গরুর হাট
        </span>
        <h1 style="font-size: 48px; margin: 0 0 20px 0; line-height: 1.2; font-weight: 600;">কুরবানির সেরা গরু<br>অনলাইনে কিনুন</h1>
        <p style="font-size: 18px; opacity: 0.9; margin-bottom: 30px; color: #fff; max-width: 450px;">
            স্বাস্থ্যকর, দেশীয় ও খামারজাত পশু — পূর্ণ আস্থার সাথে কিনুন আপনার পছন্দের পশুটি।
        </p>
        
        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="{{ route('shop') }}" style="background-color: #d30000; color: white; border: none; padding: 8px 18px; border-radius: 8px; cursor: pointer; font-size: 14px; display: inline-flex; align-items: center; text-decoration: none;">
                <i class="bi bi-cart-fill" style="margin-right: 6px; font-size: 13px;"></i>হাটে প্রবেশ করুন
            </a>
            <button id="home-contact-button" type="button" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3); color: white; padding: 8px 18px; border-radius: 8px; cursor: pointer; font-size: 14px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2), inset 0 1px rgba(255, 255, 255, 0.2); transition: all 0.3s ease; display: inline-flex; align-items: center;">
                <i class="bi bi-telephone-fill" style="margin-right: 6px; font-size: 13px;"></i>সরাসরি কল করুন
            </button>
        </div>
    </div>

</section>

<style>
    /* Responsive adjustments */
    @media (max-width: 768px) {
        section {
      
        }
        
        section h1 {
            font-size: 32px !important;
        }
        
        section p {
            font-size: 15px !important;
        }
        
        section a, section button {
            padding: 6px 14px !important;
            font-size: 12px !important;
        }
        
        section a i, section button i {
            font-size: 12px !important;
        }
    }
</style>

<section style="padding: 60px 20px; text-align: center; font-family: sans-serif; background-color: #f9f9f9;">
    
    <h2 style="color: #c00000; font-size: 32px; margin-bottom: 10px; font-weight: 600;">কীভাবে অর্ডার করবেন?</h2>
    <div style="width: 80px; height: 3px; background-color: #c00000; margin: 0 auto 50px;"></div>

    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; max-width: 1200px; margin: 0 auto;">
        
        <div style="flex: 1; min-width: 200px; max-width: 250px;">
            <a href="{{ route('shop') }}" style="text-decoration: none; color: inherit; display: block;">
                <div style="background: linear-gradient(145deg, #d30000, #a00000); width: 80px; height: 80px; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                    <i class="bi bi-search-heart" style="color: white; font-size: 36px;"></i>
                </div>
                <h3 style="color: #c00000; font-size: 18px; margin-bottom: 10px;">কোরবানির পশু পছন্দ করুন</h3>
                <p style="color: #555; font-size: 14px; line-height: 1.6; text-align: center;">আমাদের বিশাল হাট থেকে সেরা পশুটি বেছে নিন।</p>
            </a>
        </div>

        <div style="flex: 1; min-width: 200px; max-width: 250px;">
            <button type="button" class="home-contact-trigger" style="all: unset; cursor: pointer; width: 100%; display: block; text-align: center;">
                <div style="background: linear-gradient(145deg, #d30000, #a00000); width: 80px; height: 80px; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                    <i class="bi bi-chat-square-quote-fill" style="color: white; font-size: 36px;"></i>
                </div>
                <h3 style="color: #c00000; font-size: 18px; margin-bottom: 10px;">লাইভ ভিডিও</h3>
                <p style="color: #555; font-size: 14px; line-height: 1.6; text-align: center;">ভিডিও কলে সরাসরি দেখে পূর্ণ নিশ্চিত হোন।</p>
            </button>
        </div>

        <div style="flex: 1; min-width: 200px; max-width: 250px;">
            <button type="button" class="home-contact-trigger" style="all: unset; cursor: pointer; width: 100%; display: block; text-align: center;">
                <div style="background: linear-gradient(145deg, #d30000, #a00000); width: 80px; height: 80px; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                
                    <i class="bi bi-cash-coin" style="color: white; font-size: 36px; margin-left: 10px;"></i>
                </div>
                <h3 style="color: #c00000; font-size: 18px; margin-bottom: 10px;">বুকিং নিশ্চিত করুন</h3>
                <p style="color: #555; font-size: 14px; line-height: 1.6; text-align: center;">বুকিং মানি পরিশোধ করে মালিকানা নিশ্চিত করুন।</p>
            </button>
        </div>

        <div style="flex: 1; min-width: 200px; max-width: 250px;">
            <button type="button" class="home-contact-trigger" style="all: unset; cursor: pointer; width: 100%; display: block; text-align: center;">
                <div style="background: linear-gradient(145deg, #d30000, #a00000); width: 80px; height: 80px; border-radius: 12px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">
                    <i class="bi bi-geo-alt" style="color: white; font-size: 36px;"></i>
                </div>
                <h3 style="color: #c00000; font-size: 18px; margin-bottom: 10px;">হোম ডেলিভারি</h3>
                <p style="color: #555; font-size: 14px; line-height: 1.6; text-align: center;">ঈদের আগেই নিরাপদে আপনার বাড়িতে ডেলিভারি।</p>
            </button>
        </div>

    </div>
</section>
<div id="homeContactModal" style="display:none; position: fixed; inset: 0; z-index: 10000; background: rgba(0, 0, 0, 0.75); align-items: center; justify-content: center; padding: 20px;">
    <div style="background: #fff; width: 100%; max-width: 460px; border-radius: 24px; overflow: hidden; box-shadow: 0 24px 70px rgba(0,0,0,0.3); position: relative;">
        <div style="background: #fff; padding: 25px 25px 18px 25px; position: relative;">
            <button id="homeModalClose" type="button" style="position: absolute; top: 18px; right: 18px; border: none; background: transparent; font-size: 24px; color: #444; cursor: pointer; line-height: 1;">×</button>
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background: #c00000; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 22px;"><i class="bi bi-telephone-fill"></i></div>
                <div>
                    <h2 style="margin: 0; font-size: 26px; color: #111;">আমাদের সাথে যোগাযোগ করুন</h2>
                    <div style="width: 45px; height: 4px; background: #c00000; margin-top: 8px; border-radius: 4px;"></div>
                </div>
            </div>
            <p style="margin: 0 0 18px 0; color: #555; font-size: 15px; line-height: 1.75;">আপনার যেকোনো প্রশ্ন বা সহায়তার জন্য আমাদের সাথে সরাসরি যোগাযোগ করুন। আমাদের দল আপনাকে সাহায্য করতে প্রস্তুত।</p>
        </div>
        <div style="padding: 0 25px 25px 25px; display: grid; gap: 14px;">
            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contact->hotline ?? '') }}" style="display: block; padding: 16px 18px; border-radius: 14px; background: #c00000; color: #fff; font-size: 16px; font-weight: 700; text-decoration: none; box-shadow: 0 12px 30px rgba(192,0,0,0.15);">
                <span style="display: inline-flex; align-items: center; gap: 10px;"><i class="bi bi-telephone"></i> কল করুন: {{ $contact->hotline ?? '+880 1234 567890' }}</span>
            </a>
            <a href="https://wa.me/{{ str_replace(['+', ' ', '-'], '', $contact->whatsapp ?? '') }}" target="_blank" style="display: block; padding: 16px 18px; border-radius: 14px; background: #24c55a; color: #fff; font-size: 16px; font-weight: 700; text-decoration: none; box-shadow: 0 12px 30px rgba(36,197,90,0.15);">
                <span style="display: inline-flex; align-items: center; gap: 10px;"><i class="bi bi-whatsapp"></i> WhatsApp এর মাধ্যমে যোগাযোগ করুন</span>
            </a>
        </div>
        <div style="background: #fff5f5; border-top: 1px solid #ffe5e5; padding: 16px 25px 20px 25px; color: #7a1b1b; font-size: 14px; text-align: center;">
            <span style="display: inline-flex; align-items: center; gap: 8px; font-weight: 600;"><i class="bi bi-lock"></i> সুরক্ষিত এবং নির্ভরযোগ্য যোগাযোগ</span>
        </div>
    </div>
</div>




@php
    $hotDealEndDate = $generalsetting->hot_deal_end_date.'T23:59:59';
    $flashSaleEndDate = $generalsetting->flash_sale_end_date.'T23:59:59';
    $isHotDealActive = $hotDealEndDate && \Carbon\Carbon::parse($hotDealEndDate)->isFuture(); // Check if the date is in the future
    $isFlashSaleActive = $flashSaleEndDate && \Carbon\Carbon::parse($flashSaleEndDate)->isFuture(); 
@endphp
<!--//Flash sales-->
@if($isFlashSaleActive)
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name">Flash Sales </span>
                            </div>

                            <div class="">
                                <div class="offer_timer" id="flash_sale_timer"></div>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="flash_sale_slider owl-carousel">
                    @foreach ($flas_sales as $key => $value)
                        <div class="product_item wist_item">
                            <div class="product_item_inner">

                                <div class="pro_img">
                                    <a href="{{ route('product', $value->slug) }}">
                                        <img src="{{ asset($value->image ? $value->image->image : '') }}"
                                            alt="{{ $value->name }}" />
                                    </a>
                                    @if($value->stock < 1)
                                    <div class="stock-out-overlay">STOCK OUT</div>
                                    @endif
                                </div>
                                <div class="pro_des">
                                    <div class="pro_name">
                                        <a href="{{ route('product', $value->slug) }}">{{ Str::limit($value->name, 80) }}</a>
                                    </div>
                                    
                                    <span style="background-color:#FFBCA5" class="px-3 py-0 rounded-pill">Sold {{$value->sold??0}}</span>
                                  
                                    <div class="pro_price">
                                        <p>
                                            ৳ {{ $value->new_price }} 
                                           
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
@endif
<!--//hot deals-->
@if($isHotDealActive)
<section class="homeproduct" id="homeproduct_responsive">
    <div class="container">
        <div class="row">
         
            <div class="col-sm-12">
                <div class="product_slider owl-carousel">
                    @foreach ($hotdeal_top as $key => $value)
                        <div class="product_item wist_item">
                            <div class="product_item_inner">

                                <div class="pro_img">
                                    <a href="{{ route('product', $value->slug) }}">
                                        <img src="{{ asset($value->image ? $value->image->image : '') }}"
                                            alt="{{ $value->name }}" />
                                    </a>
                                    @if($value->stock < 1)
                                    <div class="stock-out-overlay">STOCK OUT</div>
                                    @endif
                                </div>
                                <div class="pro_des">
                                    <div class="pro_name">
                                        <a
                                            href="{{ route('product', $value->slug) }}">{{ Str::limit($value->name, 80) }}</a>
                                    </div>
                                    <div class="pro_price">
                                        <p>
                                            ৳ {{ $value->new_price }} 
                                           
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
           
        </div>
    </div>
    <div style="display: flex; align-items: center; width: 100%; max-width: 800px; margin: 20px auto;">
    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to right, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
    
    <div style="margin: 0 15px; display: flex; align-items: center; justify-content: center;">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L10 5H14L12 2Z" fill="#F0B9BA"/>
            <path d="M12 5C9 5 7 7 7 10V13H17V10C17 7 15 5 12 5Z" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5 13V21H19V13" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 21V17C10 15.9 10.9 15 12 15C13.1 15 14 15.9 14 17V21" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4 11V13M20 11V13M3 13H5M19 13H21" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
    </div>

    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to left, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
</div>
</section>
@endif



@if($generalsetting->show_all_products)
<section id="offer_more" style="padding: 80px 5%; ">
    
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px;">
        <div>
            <h2 style="color: #b30000; font-size: 36px; margin: 0;">কোরবানির বিশেষ আকর্ষণ</h2>
            <p style="color: #666; font-size: 18px; margin-top: 10px;">সেরা জাতের বাছাইকৃত প্রিমিয়াম পশু</p>
        </div>
        <div style="display: flex; gap: 10px;">
            <button id="special-prev" style="width: 40px; height: 40px; border-radius: 8px; border: none; background-color: #ffeaea; color: #b30000; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-chevron-left" style="font-size: 20px;"></i>
            </button>
            <button id="special-next" style="width: 40px; height: 40px; border-radius: 8px; border: none; background-color: #ffeaea; color: #b30000; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-chevron-right" style="font-size: 20px;"></i>
            </button>
        </div>
    </div>

    <!-- Slider Container -->
    <div style="position: relative; overflow: hidden;">
        <div id="offer-more-slider" style="display: flex; gap: 20px; padding: 10px 0; overflow-x: hidden; scroll-behavior: smooth; scrollbar-width: none;">
            
            @foreach($all_products as $value)
            <div class="product-card" style="box-shadow: 0 8px 30px rgba(0,0,0,0.1); background: white; border-radius: 12px;  box-shadow: 0 4px 15px rgba(0,0,0,0.08); height: 350px; display: flex; flex-direction: column; min-width: 250px; flex-shrink: 0; transition: all 0.3s ease;">
                <div class="product-card-image" style="position: relative; height: 180px;">
                    <a href="{{ route('product', $value->slug) }}">
                        <img src="{{ asset($value->image ? $value->image->image : 'https://via.placeholder.com/300x200') }}" alt="{{ $value->name }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                    </a>
                    <div class="product-badge" style="position: absolute; top: 12px; left: 12px; background: rgba(179, 0, 0, 0.9); color: #fff; padding: 6px 10px; border-radius: 999px; font-size: 12px;">
                        ● {{ $value->category->name ?? 'প্রিমিয়াম' }}
                    </div>
                    @if($value->stock < 1)
                    <div class="stock-out-overlay" style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.55); color: #fff; font-weight: 700; letter-spacing: 1px;">
                        STOCK OUT
                    </div>
                    @endif
                </div>
                <div class="product-card-body" style="padding: 15px; display: flex; flex-direction: column; flex: 1;">
                    <h3 style="margin: 0 0 10px 0; font-size: 18px; color: #333; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ Str::limit($value->name, 30) }}</h3>
                    <div class="product-details" style="display: flex; justify-content: space-between; gap: 10px; color: #777; font-size: 14px; margin-bottom: 15px;">
                        <span>⚖ {{ is_numeric($value->weight) ? $value->weight . ' কেজি' : ($value->weight ?? 'ওজন নেই') }}</span>
                        <span style="margin-right: 50px">🎗 {{ $value->category->name ?? 'প্রিমিয়াম' }}</span>
                    </div>
                    <div class="product-footer" style="display: flex; justify-content: space-between; align-items: center; margin-top: auto; gap: 10px;">
                        <span class="product-price" style="color: #b30000; font-weight: 700; font-size: 18px;">৳ {{ number_format($value->new_price, 0) }}</span>
                        <a href="{{ route('product', $value->slug) }}" class="product-btn" style="color: #b30000; text-decoration: none; font-weight: 500; padding: 5px 10px; background: #ffeaea; border-radius: 5px; transition: all 0.3s ease;">
                            বিস্তারিত দেখুন →
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- JavaScript for Slider -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('offer-more-slider');
    const prevBtn = document.getElementById('special-prev');
    const nextBtn = document.getElementById('special-next');
    
    if (!slider || !prevBtn || !nextBtn) return;
    
    // Get product card width including gap
    const productCard = slider.querySelector('.product-card');
    if (!productCard) return;
    
    const cardWidth = productCard.offsetWidth;
    const gap = 20; // gap between cards
    const scrollAmount = cardWidth + gap;
    
    // Next button click
    nextBtn.addEventListener('click', function() {
        slider.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });
    
    // Previous button click
    prevBtn.addEventListener('click', function() {
        slider.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });
    
    // Optional: Disable buttons at edges
    const checkScrollButtons = () => {
        const maxScroll = slider.scrollWidth - slider.clientWidth;
        
        if (slider.scrollLeft <= 0) {
            prevBtn.style.opacity = '0.5';
            prevBtn.style.cursor = 'not-allowed';
        } else {
            prevBtn.style.opacity = '1';
            prevBtn.style.cursor = 'pointer';
        }
        
        if (slider.scrollLeft >= maxScroll - 5) {
            nextBtn.style.opacity = '0.5';
            nextBtn.style.cursor = 'not-allowed';
        } else {
            nextBtn.style.opacity = '1';
            nextBtn.style.cursor = 'pointer';
        }
    };
    
    // Initial check
    checkScrollButtons();
    
    // Check on scroll
    slider.addEventListener('scroll', checkScrollButtons);
});
</script>

<!-- CSS Styles -->
<style>
    /* Hide scrollbar but keep functionality */
    #offer-more-slider::-webkit-scrollbar {
        display: none;
    }
    
    /* Previous Button Hover Effect */
    #special-prev:hover {
        background-color: #b30000 !important;
        color: white !important;
        transform: translateX(-3px) scale(1.05);
        box-shadow: 0 4px 12px rgba(179, 0, 0, 0.3);
    }
    
    /* Next Button Hover Effect */
    #special-next:hover {
        background-color: #8b0000 !important;
        color: white !important;
        transform: translateX(3px) scale(1.05);
        box-shadow: 0 4px 12px rgba(179, 0, 0, 0.4);
    }
    
    /* Product Card Hover Effect */
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }
    
    /* Product Image Zoom on Hover */
    .product-card:hover .product-card-image img {
        transform: scale(1.08);
    }
    
    /* Product Button Hover Effect */
    .product-btn:hover {
        background: #b30000 !important;
        color: white !important;
        transform: translateX(5px);
        box-shadow: 0 2px 8px rgba(179, 0, 0, 0.3);
    }
    
    /* Active/Click effect for buttons */
    #special-prev:active, #special-next:active {
        transform: scale(0.95);
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        #offer-more-slider .product-card {
            min-width: 260px;
        }
        
        #special-prev, #special-next {
            width: 35px !important;
            height: 35px !important;
        }
        
        #special-prev i, #special-next i {
            font-size: 18px !important;
        }
    }
    
    @media (max-width: 480px) {
        #offer-more-slider .product-card {
            min-width: 240px;
        }
        
        #offer_more h2 {
            font-size: 24px !important;
        }
        
        #offer_more p {
            font-size: 14px !important;
        }
        
        #special-prev, #special-next {
            width: 32px !important;
            height: 32px !important;
        }
    }
</style>
@endif

<div style="display: flex; align-items: center; width: 100%; max-width: 800px; margin: 20px auto;">
    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to right, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
    
  <div style="margin: 0 15px; display: flex; align-items: center; justify-content: center;">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#F0B9BA" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>

    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to left, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
</div>

<section style="padding: 60px 5%; font-family: 'Segoe UI', Arial, sans-serif; text-align: center; color: #333;">
    <style>
        .offer-products-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 20px;
            text-align: left;
        }
        .offer-products-grid .filter-item {
            min-height: 100%;
        }
        @media (max-width: 1200px) {
            .offer-products-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        @media (max-width: 768px) {
            .offer-products-grid {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
        }
        .tab-btn {
            transition: 0.3s;
        }
    </style>
    
    <h2 style="color: #ff0000; font-size: 42px; margin: 0 auto 10px; font-weight: bold;">বিশাল কোরবানির পশুর হাট</h2>
    <div style="width: 100px; height: 3px; background-color: #ff0000; margin: 0 auto 30px;"></div>

    @php $offerProductCount = $offerCategories->sum(fn($category) => $category->products->count()); @endphp

    @if($offerCategories->count())
       <div style="background-color: white; display: inline-flex; flex-wrap: wrap; justify-content: center; padding: 6px; border-radius: 35px; margin-bottom: 50px; overflow: hidden; gap: 4px; border: 2px solid #ff0000; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
    <button class="tab-btn active" onclick="filterSelection('all', this)" style="background-color: #d30000; color: white; border: none; padding: 10px 25px; border-radius: 35px; cursor: pointer; font-weight: bold; transition: all 0.3s ease;">সকল পশু</button>
    @foreach($offerCategories as $category)
        <button class="tab-btn" onclick="filterSelection('{{ $category->slug }}', this)" style="background-color: transparent; color: #333; border: none; padding: 10px 25px; border-radius: 35px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#ffebeb'; this.style.color='#d30000'; this.style.transform='translateY(-2px)';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333'; this.style.transform='translateY(0)';">{{ $category->name }}</button>
    @endforeach
</div>

        <div id="product-container" class="offer-products-grid">
            @foreach($offerCategories as $category)
                @foreach($category->products as $product)
                    <div style="box-shadow: 0 8px 30px rgba(0,0,0,0.1); height: 350px;" class="filter-item {{ $category->slug }} product-card">
                        <div class="product-card-image">
                            <img src="{{ asset($product->image->image ?? 'public/frontEnd/images/placeholder.png') }}" alt="{{ $product->name }}">
                            <div class="product-badge">{{ $category->name }}</div>
                            @if($product->stock < 1)
                                <div class="stock-out-overlay">STOCK OUT</div>
                            @endif
                        </div>
                        <div class="product-card-body">
                            <h3>{{ Str::limit($product->name, 45) }}</h3>
                            <div class="product-details">
                                <span>⚖ {{ is_numeric($product->weight) ? $product->weight . ' কেজি' : ($product->weight ?? 'ওজন নেই') }}</span>
                                <span style="margin-right: 30px;">🎗 {{ $category->name }}</span>
                            </div>
                            <div class="product-footer">
                                <span class="product-price">৳ {{ number_format($product->new_price) }}</span>
                                <a href="{{ route('product', $product->slug) }}" class="product-btn">বিস্তারিত <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        @if($offerProductCount > 8)
            <div style="margin-top: 30px; text-align: center;">
                <a href="{{ route('shop') }}" style="display: inline-block; z-index: 1; background: #d30000; color: #fff; padding: 14px 28px; border-radius: 50px; font-size: 16px; text-decoration: none; transition: background 0.3s;">আরও দেখুন</a>
            </div>
        @endif
    @else
        <p style="color: #666; font-size: 16px; margin-top: 30px;">কোনো পশু প্রদর্শনের জন্য ক্যাটেগরি পাওয়া যায়নি।</p>
    @endif
</section>


<div style="display: flex; align-items: center; width: 100%; max-width: 800px; margin: 20px auto;">
    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to right, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
    
  <div style="margin: 0 15px; display: flex; align-items: center; justify-content: center;">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="#F0B9BA" stroke="#F0B9BA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>

    <div style="flex-grow: 1; height: 3px; background: linear-gradient(to left, rgba(240, 185, 186, 0), rgba(240, 185, 186, 1));"></div>
</div>
<script>
    function filterSelection(category, element) {
        let items = document.getElementsByClassName('filter-item');
        let buttons = document.getElementsByClassName('tab-btn');

        // Update Active Button Style
        for (let btn of buttons) {
            btn.style.backgroundColor = "transparent";
            btn.style.color = "#333";
        }
        element.style.backgroundColor = "#d30000";
        element.style.color = "white";

        // Filter Items
        for (let item of items) {
            if (category === 'all') {
                item.style.display = "block";
            } else {
                if (item.classList.contains(category)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            }
        }
    }
</script>


<section style="background-color: #f8f8f8; padding: 80px 5%; font-family: 'Segoe UI', Arial, sans-serif; text-align: left;">
    
    <h2 style="color: #d30000; font-size: 36px; margin-bottom: 10px; font-weight: 700; text-align: center;">কেন হেরিটেজ হাট সেরা?</h2>
    <div style="width: 70px; height: 3px; background-color: #d30000; margin: 0 auto 45px; border-radius: 3px;"></div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 28px; max-width: 1280px; margin: 0 auto;">
        
        <!-- Card 1: Shield (health) -->
        <div class="feature-card" style="background: white; padding: 30px; border-radius: 15px; text-align: left; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; cursor: pointer;">
            <i class="bi bi-shield-check" style="color: #d30000; text-align: left !important; margin-left: -265px; font-size: 36px; margin-bottom: 18px; display: inline-block;"></i>
            <h3 style="font-size: 1.35rem; font-weight: 600; text-align: left !important; margin-left: -165px; color: #1e1e2a; margin-bottom: 12px;">শতভাগ স্বাস্থ্যকর</h3>
            <p style="color: #4a5568; font-size: 0.9rem; line-height: 1.5;">আমরা গ্যারান্টি দিচ্ছি আমাদের হাটের প্রতিটি পশু সম্পুর্ন প্রাকৃতিক উপায়ে স্বাস্থ্যকর ও সতেজ পন্য।</p>
        </div>

        <!-- Card 2: Truck (delivery) -->
        <div class="feature-card" style="background: white; padding: 30px; border-radius: 15px; text-align: left; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; cursor: pointer;">
            <i class="bi bi-truck" style="color: #d30000; font-size: 36px; margin-bottom: 18px; margin-left: -265px; display: inline-block;"></i>
            <h3 style="font-size: 1.35rem; font-weight: 600; text-align: left !important; margin-left: -145px; color: #1e1e2a; margin-bottom: 12px;">দ্রুত হোম ডেলিভারি</h3>
            <p style="color: #4a5568; font-size: 0.9rem; line-height: 1.5;">আপনার পছন্দের পশুটি সরাসরি আপনার বাড়ির দুয়ারে নিরাপদে পৌঁছে দেয়ার দায়িত্ব আমাদের।</p>
        </div>

        <!-- Card 3: Check circle (payment) -->
        <div class="feature-card" style="background: white; padding: 30px; border-radius: 15px; text-align: left; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; cursor: pointer;">
            <i class="bi bi-check-circle-fill" style="color: #d30000; font-size: 36px; margin-bottom: 18px; margin-left: -265px; display: inline-block;"></i>
            <h3 style="font-size: 1.35rem; font-weight: 600; text-align: left !important; margin-left: -175px; color: #1e1e2a; margin-bottom: 12px;">নিরাপদ পেমেন্ট</h3>
            <p style="color: #4a5568; font-size: 0.9rem; line-height: 1.5;">বুকিং মানি থেকে শুরু করে পূর্ণ পেমেন্ট—সবই করতে পারবেন স্বচ্ছ ডিজিটাল মাধ্যমে।</p>
        </div>

        <!-- Card 4: Video (live video) -->
        <div class="feature-card" style="background: white; padding: 30px; border-radius: 15px; text-align: left; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; cursor: pointer;">
            <i class="bi bi-camera-video-fill" style="color: #d30000; font-size: 36px; margin-bottom: 18px; margin-left: -265px; display: inline-block;"></i>
            <h3 style="font-size: 1.35rem; font-weight: 600; text-align: left !important; margin-left: -140px; color: #1e1e2a; margin-bottom: 12px;">লাইভ ভিডিও সুবিধা</h3>
            <p style="color: #4a5568; font-size: 0.9rem; line-height: 1.5;">পছন্দের পশুটি সরাসরি খামার থেকে ভিডিও কলে দেখার পূর্ণ সুবিধা দিচ্ছি আমরা।</p>
        </div>

        <!-- Card 5: Agriculture Tractor (own farm) -->
        <div class="feature-card" style="background: white; padding: 30px; border-radius: 15px; text-align: left; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; cursor: pointer;">
          <i class="bi bi-truck-flatbed" style="color: #d30000; font-size: 36px; margin-bottom: 18px; margin-left: -265px; display: inline-block;"></i>
            <h3 style="font-size: 1.35rem; font-weight: 600; margin-left: -195px; color: #1e1e2a; margin-bottom: 12px;">নিজস্ব খামার</h3>
            <p style="color: #4a5568; font-size: 0.9rem; line-height: 1.5;">সবগুলো পশু আমাদের নিজস্ব তত্ত্বাবধানে এবং অভিজ্ঞ কারিগরদের দ্বারা লালিত-পালিত।</p>
        </div>

        <!-- Card 6: Headset (support) -->
        <div class="feature-card" style="background: white; padding: 30px; border-radius: 15px; text-align: left !important; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; cursor: pointer;">
            <i class="bi bi-headset" style="color: #d30000; margin-left: -265px; font-size: 36px; margin-bottom: 18px; display: inline-block;"></i>
            <h3 style="font-size: 1.35rem; font-weight: 600; margin-left: -125px; color: #1e1e2a; margin-bottom: 12px;">২৪/৭ কাস্টমার সাপোর্ট</h3>
            <p style="color: #4a5568; font-size: 0.9rem; line-height: 1.5;">কেনার আগে বা ডেলিভারি পর্যন্ত যে কোনো প্রয়োজনে আমাদের টিম আপনার সেবায় নিয়োজিত।</p>
        </div>

    </div>
</section>

<style>
    /* hover effect: red top border + lift + shadow */
    .feature-card:hover {
        transform: translateY(-10px);
        border-top: 4px solid #d30000 !important;
        border-bottom: none !important;
    
    }
    
    /* smooth transition for all cards */
    .feature-card {
        transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        border-bottom: none !important;
        border-top: 4px solid transparent;
    }
    
    /* responsive fix */
    @media (max-width: 768px) {
  
        .feature-card {
            padding: 24px !important;
        }
    }
</style>

<section class="unique-hero-section" style="
    font-family: sans-serif; 
    display: flex; 
    justify-content: center; 
    align-items: center;">

    <div class="unique-hero-card" style="
        background: linear-gradient(135deg, #a00000 0%, #4a0000 100%); 
        color: white;
        border: 6px solid #f9f9f9;
        padding: 50px; 
        border-radius: 20px; 
        text-align: center; 
        max-width: 800px; 
        width: 100%; 
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);">

        <h2 class="unique-hero-title" style="font-size: 36px; margin: 0 0 15px 0;">ঐতিহ্যবাহী সেরা পশুটি বুক করুন</h2>
        <p class="unique-hero-description" style="font-size: 16px; opacity: 0.9; margin-bottom: 30px; text-align: center; color: white;">স্টক ফুরিয়ে যাওয়ার আগেই আপনার কোরবানির জন্য সেরা পশুটি নিশ্চিত করুন।<br>১০০% বিশ্বস্ত ডিজিটাল কোরবানি হাট।</p>

        <div class="unique-button-group" style="display: flex; justify-content: center; gap: 12px; flex-wrap: wrap;">
            <a href="{{ route('shop') }}" class="unique-shop-btn" style="
                background: white; 
                color: #a00000; 
                border: none; 
                padding: 8px 18px; 
                border-radius: 5px; 
                font-weight: bold; 
                font-size: 13px;
                cursor: pointer; 
                display: inline-flex; 
                align-items: center; 
                gap: 6px; 
                text-decoration: none;
                transition: all 0.3s ease;">
                <i class="bi bi-cart-fill"></i> হাটে প্রবেশ করুন
            </a>
            <button class="unique-call-btn" style="
                background: transparent; 
                color: white; 
                border: 1px solid rgba(255,255,255,0.3); 
                padding: 8px 18px; 
                border-radius: 5px; 
                font-size: 13px;
                cursor: pointer;
                transition: all 0.3s ease;">
                 কল করুন ০৯৮-२२२-४४४
            </button>
        </div>
    </div>
</section>

<style>
/* Responsive styles with unique class names */
@media (max-width: 768px) {
    .unique-hero-section {
        padding: 40px 15px;
    }
    
    .unique-hero-card {
        padding: 30px 20px !important;
    }
    
    .unique-hero-title {
        font-size: 28px !important;
    }
    .unique-hero-section{
        margin-top: -50px !important;
        min-height: 10px !important;
    }
    .unique-hero-description {
        font-size: 14px !important;
        margin-bottom: 25px !important;
    }
    
    .unique-button-group {
        gap: 10px !important;
    }
    
    .unique-shop-btn,
    .unique-call-btn {
        padding: 7px 16px !important;
        font-size: 12px !important;
    }
}

@media (max-width: 480px) {
    .unique-hero-section {
        padding: 30px 12px;
    }
    
    .unique-hero-card {
        padding: 25px 15px !important;
    }
    
    .unique-hero-title {
        font-size: 24px !important;
    }
    
    .unique-hero-description {
        font-size: 13px !important;
        margin-bottom: 20px !important;
    }
    
    .unique-button-group {
        gap: 8px !important;
    }
    
    .unique-shop-btn,
    .unique-call-btn {
        padding: 6px 14px !important;
        font-size: 11px !important;
    }
    
    .unique-shop-btn i {
        font-size: 11px;
    }
}

/* Hover effects */
.unique-shop-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.unique-call-btn:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.5);
}
</style>
@if($campaognads)
<section>
    <div class="row">
        @foreach($campaognads as $campaignAds)
        <div class="col-12">
            <a href="{{$campaignAds->link}}?sold=show">
                <img style=" width: 100% !important;" src="{{$campaignAds->image}}"/>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endif


@if($reviews->count()>0)
<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h5 class="text-center text-light py-2" style="background-color:#000; color:#fff;">
                        সম্মানীত কাষ্টমারদের পজিটিভ রিভিউ
                    </h5>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="customer-review owl-carousel">
                    @foreach ($reviews as $review)
                    <div class="border rounded">
                        <img class="w-100" src="{{ asset($review->image) }}" />
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</section>
@endif
<section style="background-color: #fdfbf7; padding: 20px; font-family: 'Hind Siliguri', sans-serif;">

    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .feature-card {
            position: relative;
            background: #ffffff;
            border-radius: 4px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* কার্ড হোভার করলে সামান্য উপরে উঠবে */
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        /* নিচ দিয়ে এনিমেটেড বর্ডার (বাম থেকে ডানে) */
        .feature-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 4px;
            background-color: #000;
            transition: width 0.4s ease-in-out;
        }

        .feature-card:hover::after {
            width: 0 !important;
            display: none !important;
        }

        .feature-card::after {
            display: none !important;
        }

        /* আইকন কন্টেইনার - হালকা সবুজ (ছবির মতো) */
        .icon-container {
            width: 65px;
            height: 65px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            background-color: #e8f5e9;  /* হালকা সবুজ ব্যাকগ্রাউন্ড - ছবির মতো */
            transition: all 0.3s ease;
        }

        /* আইকনের ডিফল্ট কালার - গাঢ় সবুজ */
        .icon-container img {
            width: 40px;
            height: auto;
            transition: all 0.3s ease;
        }

        /* হোভার ইফেক্ট - ব্যাকগ্রাউন্ড কালো হবে, আইকন সাদা হবে */
        .feature-card:hover .icon-container {
            background-color: #000;  /* কালো */
        }

        .feature-card:hover .icon-container img {
            filter: brightness(0) invert(1);  /* সাদা */
            transform: scale(1.05);
        }

        /* Pagination Black Color */
        .pagination .page-link {
            color: #000;
            border-color: #000;
        }

        .pagination .page-item.active .page-link {
            background-color: #000;
            border-color: #000;
            color: #fff;
        }

        .pagination .page-link:hover {
            color: #000;
            border-color: #000;
        }

        /* টেক্সট স্টাইল - ছবির টেক্সট অনুযায়ী */
        h3 {
            font-size: 22px;
            font-weight: 700;
            color: #000;
            margin: 0 0 10px 0;
        }

        p {
            font-size: 15px;
            color: #000;
            margin: 0;
            line-height: 1.6;
        }

        /* বাংলা টেক্সট সঠিকভাবে দেখানোর জন্য */
        .bangla-text {
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>


<section>
    <div class="row">
        @foreach($footertopads as $footerAds)
        <div class="col-md-12">
            <a href="{{$footerAds->link}}?sold=show">
                <img class="w-100" src="{{$footerAds->image}}"/>
            </a>
        </div>
        @endforeach
    </div>
</section>

@endsection @push('script')
<script src="{{ asset('public/frontEnd/js/jquery.syotimer.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".main_slider").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            autoplayHoverPause: true,
            margin: 0,
            mouseDrag: true,
            smartSpeed: 8000,
            autoplayTimeout: 3000,
            animateOut: "fadeOutRight",
            animateIn: "slideInLeft",

            navText: ["<i class='bi bi-chevron-left'></i>",
                "<i class='bi bi-chevron-right'></i>"
            ],
        });
    });
</script>
<script>
    $(document).ready(function() {
        var specialCarousel = $("#special-attractions-carousel").owlCarousel({
            margin: 25,
            loop: true,
            dots: false,
            nav: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
            },
        });

        $("#special-prev").click(function() {
            specialCarousel.trigger('prev.owl.carousel');
        });

        $("#special-next").click(function() {
            specialCarousel.trigger('next.owl.carousel');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".category-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 5,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 8,
                    nav: true,
                    loop: false,
                },
            },
        });

        $(".product_slider").owlCarousel({
            margin: 15,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 6,
                    nav: false,
                },
            },
        });
        
        $(".flash_sale_slider").owlCarousel({
            margin: 8,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: false,
                },
                600: {
                    items: 6,
                    nav: false,
                },
                1000: {
                    items: 7,
                    nav: false,
                },
            },
        });
        
        $(".category-sliger").owlCarousel({
            margin: 12,
            items: 5,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 4,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: false,
                },
            },
        });
        $(".customer-review").owlCarousel({
            margin: 8,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: false,
                },
            },
        });
    });
</script>

<script>
    $("#simple_timer").syotimer({
        date: new Date("{{$generalsetting->hot_deal_end_date}}T23:59:59"), // November is month 10 (0-indexed)
        layout: "hms", // Hours, minutes, seconds
        doubleNumbers: false, // No leading zeros
        effectType: "opacity", // Opacity effect when changing numbers
        periodUnit: "d", // Period unit set to days
        periodic: false // Countdown only, no reset
    });
   $("#flash_sale_timer").syotimer({
        date: new Date("{{$generalsetting->flash_sale_end_date}}T23:59:59"), // Use the date from your Laravel model
        layout: "hms", // Hours, minutes, seconds
        doubleNumbers: false, // No leading zeros
        effectType: "opacity", // Opacity effect when changing numbers
        periodUnit: "d", // Period unit set to days
        periodic: false, // Countdown only, no reset
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var contactButton = document.getElementById('home-contact-button');
        var contactModal = document.getElementById('homeContactModal');
        var closeButton = document.getElementById('homeModalClose');
        var contactTriggers = document.querySelectorAll('.home-contact-trigger');

        if (contactModal && closeButton) {
            if (contactButton) {
                contactButton.addEventListener('click', function () {
                    contactModal.style.display = 'flex';
                });
            }

            contactTriggers.forEach(function (trigger) {
                trigger.addEventListener('click', function () {
                    contactModal.style.display = 'flex';
                });
            });

            closeButton.addEventListener('click', function () {
                contactModal.style.display = 'none';
            });

            contactModal.addEventListener('click', function (event) {
                if (event.target === contactModal) {
                    contactModal.style.display = 'none';
                }
            });
        }
    });
</script>
