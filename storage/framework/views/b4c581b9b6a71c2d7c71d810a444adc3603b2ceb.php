 
<?php $__env->startSection('title','Hot Deals'); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/jquery-ui.css')); ?>" />
<style>
.pagination .page-link {
    color: #c00000 !important;
    border-color: #c00000 !important;
}
.pagination .page-item.active .page-link {
    background-color: #c00000 !important;
    border-color: #c00000 !important;
    color: #ffffff !important;
}

/* Qurbani Section Header */
.qurbani-header {
    margin: 0;
    padding: 40px;

}

.qurbani-header-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 30px;
}


.qurbani-title h2 {
    color: #c00000;
    font-size: 32px;
    margin: 0 0 10px 0;
    font-weight: bold;
}

.qurbani-title p {
    color: #666;
    margin: 0;
    font-size: 14px;
}

.qurbani-nav-buttons {
    display: flex;
    gap: 10px;
}

.qurbani-nav-buttons button {
    width: 40px;
    height: 40px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    font-size: 18px;
    transition: all 0.3s ease;
}

.qurbani-nav-buttons .prev-btn {
    background: #fff1f1;
    color: #c00000;
}

.qurbani-nav-buttons .prev-btn:hover {
    background: #c00000;
    color: white;
}

.qurbani-nav-buttons .next-btn {
    background: #c00000;
    color: white;
}

.qurbani-nav-buttons .next-btn:hover {
    background: #a00000;
}

/* Product Grid */
.qurbani-products {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 60px;
    padding: 0 40px;
}

.product-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.product-card-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.product-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #c00000;
    color: white;
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    gap: 4px;
}

.product-card-body {
    padding: 15px;
}

.product-card-body h3 {
    margin: 0 0 10px 0;
    font-size: 18px;
    color: #333;
}

.product-details {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
    font-size: 13px;
    color: #777;
}

.product-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.product-price {
    color: #c00000;
    font-weight: bold;
    font-size: 16px;
}

.product-btn {
    border: 1px solid #c00000;
    background: transparent;
    color: #c00000;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 12px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
}

.product-btn:hover {
    background: #c00000;
    color: white;
}

/* Stock Out Overlay */
.stock-out-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    z-index: 20;
}

/* Filter Section */
.qurbani-filter {
    max-width: 1100px;
    margin: 0 auto;
    background: #1a1a1a;
    padding: 25px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    gap: 30px;
    color: white;
    margin-bottom: 40px;
    margin-left: 40px;
    margin-right: 40px;
}

.filter-group {
    flex: 1;
}

.filter-label {
    display: block;
    font-size: 12px;
    color: #999;
    margin-bottom: 8px;
}

.filter-group select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #333;
    background: #fff;
    color: #333;
    appearance: none;
    font-size: 14px;
    cursor: pointer;
}

.filter-group select:focus {
    outline: none;
    border-color: #c00000;
}

.range-label {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    margin-bottom: 8px;
    color: #ccc;
}

.range-track {
    height: 4px;
    background: #333;
    position: relative;
    border-radius: 2px;
}

.range-fill {
    position: absolute;
    height: 100%;
    background: #c00000;
}

.range-thumb {
    position: absolute;
    top: -6px;
    width: 14px;
    height: 14px;
    background: #c00000;
    border-radius: 50%;
    cursor: pointer;
}

.search-btn {
    background: #c00000;
    color: white;
    border: none;
    padding: 12px 35px;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.search-btn:hover {
    background: #a00000;
}

/* Price and Weight input styles */
.price-inputs, .weight-inputs {
    display: flex;
    gap: 8px;
}

.price-inputs input, .weight-inputs input {
    width: 50px;
    padding: 4px;
    border-radius: 3px;
    border: 1px solid #555;
    background: #333;
    color: #fff;
    text-align: center;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .qurbani-products {
        grid-template-columns: repeat(3, 1fr);
        padding: 0 20px;
    }
    
    .qurbani-filter {
        flex-wrap: wrap;
        margin-left: 20px;
        margin-right: 20px;
    }
    
    .category-product.main_product_inner {
        grid-template-columns: repeat(3, 1fr) !important;
    }
}

@media (max-width: 768px) {
    .qurbani-header {
        padding: 30px 20px;
    }
    
    .qurbani-header-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .qurbani-title h2 {
        font-size: 28px;
    }
    
    .qurbani-title p {
        font-size: 13px;
    }
    
    .qurbani-products {
        grid-template-columns: repeat(2, 1fr);
        padding: 0 20px;
        gap: 15px;
    }
    
    .qurbani-filter {
        flex-direction: column;
        align-items: stretch;
        padding: 20px;
        gap: 15px;
    }
    
    .filter-group {
        width: 100%;
    }
    
    .search-btn {
        width: 100%;
        justify-content: center;
        padding: 10px 20px;
    }
    
    .category-product.main_product_inner {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    
    .product-card {
        height: auto !important;
    }
    
    .sorting-section .row > div {
        margin-bottom: 10px;
    }
    
    .filter_sort {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 10px;
    }
    
    .page-sort {
        width: 100%;
    }
    
    .sort-form select {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .qurbani-header {
        padding: 20px 15px;
    }
    
    .qurbani-header-content {
        margin-bottom: 20px;
    }
    
    .qurbani-title h2 {
        font-size: 24px;
    }
    
    .qurbani-title p {
        font-size: 12px;
    }
    
    .qurbani-nav-buttons button {
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
    
    .qurbani-products {
        grid-template-columns: 1fr;
        padding: 0 15px;
        gap: 15px;
    }
    
    .qurbani-filter {
        margin-left: 15px;
        margin-right: 15px;
        padding: 15px;
    }
    
    .category-product.main_product_inner {
        grid-template-columns: 1fr !important;
    }
    
    .product-card-image {
        height: 180px;
    }
    
    .product-card-body h3 {
        font-size: 16px;
    }
    
    .product-details {
        font-size: 12px;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    .product-price {
        font-size: 14px;
    }
    
    .product-btn {
        padding: 5px 10px;
        font-size: 11px;
    }
    
    .range-label {
        flex-direction: column;
        gap: 8px;
    }
    
    .price-inputs, .weight-inputs {
        justify-content: flex-start;
    }
    
    .showing-data {
        text-align: center;
    }
    
    .custom_paginate {
        margin-top: 20px;
    }
}

/* Tablet Landscape */
@media (min-width: 769px) and (max-width: 1024px) {
    .category-product.main_product_inner {
        grid-template-columns: repeat(3, 1fr) !important;
    }
}

/* Small Desktop */
@media (min-width: 1025px) and (max-width: 1280px) {
    .qurbani-products,
    .category-product.main_product_inner {
        gap: 15px;
    }
}

/* Fix for product section container */
.product-section .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Responsive table for sorting section */
@media (max-width: 767px) {
    .sorting-section .row {
        flex-direction: column;
    }
    
    .sorting-section [class*="col-"] {
        width: 100%;
    }
    
    .category-breadcrumb {
        justify-content: center;
        margin-bottom: 15px;
    }
    
    .filter_sort {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
    
    .filter_btn {
        order: 1;
    }
    
    .page-sort {
        order: 2;
        flex: 1;
    }
}

/* Ensure images are responsive */
img {
    max-width: 100%;
    height: auto;
}

/* Make pagination responsive */
.custom_paginate {
    overflow-x: auto;
    margin-top: 30px;
}

.custom_paginate .pagination {
    flex-wrap: wrap;
    justify-content: center;
}

/* Responsive button group for mobile */
@media (max-width: 576px) {
    .btn-group-responsive {
        flex-direction: column;
        gap: 10px;
    }
    
    .btn-group-responsive a,
    .btn-group-responsive button {
        width: 100%;
        justify-content: center;
    }
}
</style>
<?php $__env->stopPush(); ?> 

<?php $__env->startSection('content'); ?>


<script>
    function filterSelection(category, element) {
        let items = document.getElementsByClassName('filter-item');
        let buttons = document.getElementsByClassName('tab-btn');

        for (let btn of buttons) {
            btn.style.backgroundColor = "transparent";
            btn.style.color = "#333";
        }
        element.style.backgroundColor = "#d30000";
        element.style.color = "white";

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

<!-- Qurbani Section Header -->
<div class="qurbani-header">
    <div class="qurbani-header-content">
        <div class="qurbani-title">
            <h2>কোরবানির বিশেষ আকর্ষণ</h2>
            <p>সেরা জাতের বাছাইকৃত প্রিমিয়াম পশু</p>
        </div>
        <div class="qurbani-nav-buttons">
            <button class="prev-btn">&lt;</button>
            <button class="next-btn">&gt;</button>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="qurbani-products">
        <?php $__currentLoopData = $products->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product-card">
            <div class="product-card-image">
                <img src="<?php echo e(asset($value->image ? $value->image->image : 'https://via.placeholder.com/300x200')); ?>" alt="<?php echo e($value->name); ?>">
                <div class="product-badge">
                    ● <?php echo e($value->category->name ?? 'ক্যাটাগরি নেই'); ?>

                </div>
                <?php if($value->stock < 1): ?>
                <div class="stock-out-overlay">STOCK OUT</div>
                <?php endif; ?>
            </div>
            <div class="product-card-body">
                <h3><?php echo e(Str::limit($value->name, 30)); ?></h3>
                <div class="product-details">
                    <span>⚖ <?php echo e($value->weight ? $value->weight.' কেজি' : 'ওজন নেই'); ?></span>
                    <span>🎗 <?php echo e($value->category->name ?? 'নেই'); ?></span>
                </div>
                <div class="product-footer">
                    <span class="product-price">৳ <?php echo e(number_format($value->new_price, 0)); ?></span>
                    <a href="<?php echo e(route('product',$value->slug)); ?>" class="product-btn">বিস্তারিত দেখুন →</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Filter Section -->
    <div class="qurbani-filter">
        <form action="<?php echo e(route('shop')); ?>" method="GET" id="filterForm" style="display: contents; width: 100%;">
            <div class="filter-group">
                <label class="filter-label">ক্যাটাগরি</label>
                <select name="category" onchange="document.getElementById('filterForm').submit()">
                    <option value="">সকল পশু</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php if(request('category') == $category->id): ?> selected <?php endif; ?>>
                        <?php echo e($category->name); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="filter-group">
                <div class="range-label">
                    <span>ওজন (কেজি)</span>
                    <span class="weight-inputs">
                        <input type="number" name="min_weight" placeholder="সর্বনিম্ন" value="<?php echo e(request('min_weight')); ?>" id="minWeightInput">
                        <span>-</span>
                        <input type="number" name="max_weight" placeholder="সর্বোচ্চ" value="<?php echo e(request('max_weight')); ?>" id="maxWeightInput">
                    </span>
                </div>
                <div class="range-track" id="weightTrack">
                    <div class="range-fill" id="weightFill"></div>
                    <div class="range-thumb" id="weightMinThumb"></div>
                    <div class="range-thumb" id="weightMaxThumb"></div>
                </div>
            </div>

            <div class="filter-group">
                <div class="range-label">
                    <span>মূল্য সীমা (৳)</span>
                    <span class="price-inputs">
                        <input type="number" name="min_price" placeholder="সর্বনিম্ন" value="<?php echo e(request('min_price')); ?>" id="minPriceInput">
                        <span>-</span>
                        <input type="number" name="max_price" placeholder="সর্বোচ্চ" value="<?php echo e(request('max_price')); ?>" id="maxPriceInput">
                    </span>
                </div>
                <div class="range-track" id="priceTrack">
                    <div class="range-fill" id="priceFill"></div>
                    <div class="range-thumb" id="priceMinThumb"></div>
                    <div class="range-thumb" id="priceMaxThumb"></div>
                </div>
            </div>

            <button type="submit" class="search-btn">
                <i class="bi bi-search"></i> গরু খুঁজুন
            </button>
        </form>
    </div>
</div>

<!-- All Products Section -->
<section class="product-section">
    <div class="container">
        <div class="sorting-section">
            <div class="row">
                <div class="col-sm-6">
                    <div class="category-breadcrumb d-flex align-items-center">
                        <a href="<?php echo e(route('home')); ?>">Home</a>
                        <span>/</span>
                        <strong>All Products</strong>
                    </div>
                </div>
               
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="category-product main_product_inner" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div style="box-shadow: 0 8px 30px rgba(0,0,0,0.1); height: 350px;" class="filter-item <?php echo e($value->category->slug ?? ''); ?> product-card">
                        <div class="product-card-image">
                            <img src="<?php echo e(asset($value->image->image ?? 'public/frontEnd/images/placeholder.png')); ?>" alt="<?php echo e($value->name); ?>">
                            <div class="product-badge"><?php echo e($value->category->name ?? 'ক্যাটাগরি নেই'); ?></div>
                            <?php if($value->stock < 1): ?>
                                <div class="stock-out-overlay">STOCK OUT</div>
                            <?php endif; ?>
                        </div>
                        <div class="product-card-body">
                            <h3><?php echo e(Str::limit($value->name, 45)); ?></h3>
                            <div class="product-details">
                                <span>⚖ <?php echo e($value->weight ?? 'ওজন নেই'); ?> কেজি</span>
                                <span style="margin-right: 20px;">🎗 <?php echo e($value->category->name ?? 'নেই'); ?></span>
                            </div>
                            <div class="product-footer" style="padding-top: 20px">
                                <span class="product-price">৳ <?php echo e(number_format($value->new_price)); ?></span>
                                <a href="<?php echo e(route('product', $value->slug)); ?>" class="product-btn">বিস্তারিত দেখুন →</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div style="text-align: center; padding: 40px; width: 100%; grid-column: 1 / -1;">
                        <p style="font-size: 18px; color: #666;">কোন পণ্য পাওয়া যায়নি</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
            <div class="col-sm-12">
                <div class="custom_paginate">
                    <?php echo e($products->links('pagination::bootstrap-4')); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Unique Hero Section with Smaller Responsive Buttons -->
<section class="unique-hero-section" style="
    padding: 60px 20px; 
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
            <a href="<?php echo e(route('shop')); ?>" class="unique-shop-btn" style="
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
/* Unique Hero Section Responsive Styles */
@media (max-width: 768px) {
    .unique-hero-section {
        padding: 40px 15px !important;
    }
    
    .unique-hero-card {
        padding: 30px 20px !important;
    }
    
    .unique-hero-title {
        font-size: 28px !important;
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
        padding: 30px 12px !important;
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
        flex-direction: column !important;
    }
    
    .unique-shop-btn,
    .unique-call-btn {
        padding: 8px 16px !important;
        font-size: 12px !important;
        justify-content: center !important;
        width: 100% !important;
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

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
    $(".sort").change(function(){
       $('#loading').show();
       $(".sort-form").submit();
    })
    
    $(".form-attribute").on('change click',function(){
        $(".attribute-submit").submit();
    })

    // Dynamic Range Slider for Weight and Price
    $(document).ready(function() {
        // Weight Range Configuration (example values: min 100kg, max 1000kg)
        const weightMin = 100;
        const weightMax = 1000;
        let currentWeightMin = parseInt($('#minWeightInput').val()) || weightMin;
        let currentWeightMax = parseInt($('#maxWeightInput').val()) || weightMax;
        
        // Price Range Configuration (example values: min 10000, max 500000)
        const priceMin = 10000;
        const priceMax = 500000;
        let currentPriceMin = parseInt($('#minPriceInput').val()) || priceMin;
        let currentPriceMax = parseInt($('#maxPriceInput').val()) || priceMax;
        
        function updateWeightSlider() {
            let minPercent = ((currentWeightMin - weightMin) / (weightMax - weightMin)) * 100;
            let maxPercent = ((currentWeightMax - weightMin) / (weightMax - weightMin)) * 100;
            $('#weightFill').css({
                'left': minPercent + '%',
                'right': (100 - maxPercent) + '%'
            });
            $('#weightMinThumb').css('left', 'calc(' + minPercent + '% - 7px)');
            $('#weightMaxThumb').css('left', 'calc(' + maxPercent + '% - 7px)');
        }
        
        function updatePriceSlider() {
            let minPercent = ((currentPriceMin - priceMin) / (priceMax - priceMin)) * 100;
            let maxPercent = ((currentPriceMax - priceMin) / (priceMax - priceMin)) * 100;
            $('#priceFill').css({
                'left': minPercent + '%',
                'right': (100 - maxPercent) + '%'
            });
            $('#priceMinThumb').css('left', 'calc(' + minPercent + '% - 7px)');
            $('#priceMaxThumb').css('left', 'calc(' + maxPercent + '% - 7px)');
        }
        
        function updateWeightInputs() {
            $('#minWeightInput').val(currentWeightMin);
            $('#maxWeightInput').val(currentWeightMax);
            updateWeightSlider();
        }
        
        function updatePriceInputs() {
            $('#minPriceInput').val(currentPriceMin);
            $('#maxPriceInput').val(currentPriceMax);
            updatePriceSlider();
        }
        
        // Weight slider events
        let weightDragging = null;
        
        $('#weightMinThumb').on('mousedown', function() {
            weightDragging = 'min';
            $(document).on('mousemove', onWeightMouseMove);
            $(document).on('mouseup', onWeightMouseUp);
        });
        
        $('#weightMaxThumb').on('mousedown', function() {
            weightDragging = 'max';
            $(document).on('mousemove', onWeightMouseMove);
            $(document).on('mouseup', onWeightMouseUp);
        });
        
        function onWeightMouseMove(e) {
            let trackOffset = $('#weightTrack').offset();
            let trackWidth = $('#weightTrack').width();
            let mouseX = e.clientX - trackOffset.left;
            let percent = Math.min(Math.max(mouseX / trackWidth, 0), 1);
            let value = Math.round(weightMin + (percent * (weightMax - weightMin)));
            
            if (weightDragging === 'min') {
                currentWeightMin = Math.min(value, currentWeightMax - 10);
                if (currentWeightMin < weightMin) currentWeightMin = weightMin;
                updateWeightInputs();
            } else if (weightDragging === 'max') {
                currentWeightMax = Math.max(value, currentWeightMin + 10);
                if (currentWeightMax > weightMax) currentWeightMax = weightMax;
                updateWeightInputs();
            }
        }
        
        function onWeightMouseUp() {
            weightDragging = null;
            $(document).off('mousemove', onWeightMouseMove);
            $(document).off('mouseup', onWeightMouseUp);
            $('#filterForm').submit();
        }
        
        // Price slider events
        let priceDragging = null;
        
        $('#priceMinThumb').on('mousedown', function() {
            priceDragging = 'min';
            $(document).on('mousemove', onPriceMouseMove);
            $(document).on('mouseup', onPriceMouseUp);
        });
        
        $('#priceMaxThumb').on('mousedown', function() {
            priceDragging = 'max';
            $(document).on('mousemove', onPriceMouseMove);
            $(document).on('mouseup', onPriceMouseUp);
        });
        
        function onPriceMouseMove(e) {
            let trackOffset = $('#priceTrack').offset();
            let trackWidth = $('#priceTrack').width();
            let mouseX = e.clientX - trackOffset.left;
            let percent = Math.min(Math.max(mouseX / trackWidth, 0), 1);
            let value = Math.round(priceMin + (percent * (priceMax - priceMin)));
            
            if (priceDragging === 'min') {
                currentPriceMin = Math.min(value, currentPriceMax - 1000);
                if (currentPriceMin < priceMin) currentPriceMin = priceMin;
                updatePriceInputs();
            } else if (priceDragging === 'max') {
                currentPriceMax = Math.max(value, currentPriceMin + 1000);
                if (currentPriceMax > priceMax) currentPriceMax = priceMax;
                updatePriceInputs();
            }
        }
        
        function onPriceMouseUp() {
            priceDragging = null;
            $(document).off('mousemove', onPriceMouseMove);
            $(document).off('mouseup', onPriceMouseUp);
            $('#filterForm').submit();
        }
        
        // Input field changes
        $('#minWeightInput').on('change', function() {
            let val = parseInt($(this).val());
            if (!isNaN(val)) {
                currentWeightMin = Math.min(val, currentWeightMax - 10);
                if (currentWeightMin < weightMin) currentWeightMin = weightMin;
                updateWeightInputs();
                $('#filterForm').submit();
            }
        });
        
        $('#maxWeightInput').on('change', function() {
            let val = parseInt($(this).val());
            if (!isNaN(val)) {
                currentWeightMax = Math.max(val, currentWeightMin + 10);
                if (currentWeightMax > weightMax) currentWeightMax = weightMax;
                updateWeightInputs();
                $('#filterForm').submit();
            }
        });
        
        $('#minPriceInput').on('change', function() {
            let val = parseInt($(this).val());
            if (!isNaN(val)) {
                currentPriceMin = Math.min(val, currentPriceMax - 1000);
                if (currentPriceMin < priceMin) currentPriceMin = priceMin;
                updatePriceInputs();
                $('#filterForm').submit();
            }
        });
        
        $('#maxPriceInput').on('change', function() {
            let val = parseInt($(this).val());
            if (!isNaN(val)) {
                currentPriceMax = Math.max(val, currentPriceMin + 1000);
                if (currentPriceMax > priceMax) currentPriceMax = priceMax;
                updatePriceInputs();
                $('#filterForm').submit();
            }
        });
        
        // Initialize sliders
        updateWeightSlider();
        updatePriceSlider();
    });
</script>
<script>
    $("#simple_timer").syotimer({
        date: new Date(2015, 0, 1),
        layout: "hms",
        doubleNumbers: false,
        effectType: "opacity",

        periodUnit: "d",
        periodic: true,
        periodInterval: 1,
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\orvionshop3\resources\views/frontEnd/layouts/pages/shop.blade.php ENDPATH**/ ?>