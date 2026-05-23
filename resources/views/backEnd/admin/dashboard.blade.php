@extends('backEnd.layouts.master')
@section('title','Dashboard')

@section('css')
<link href="{{asset('public/backEnd/')}}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd/')}}/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
<style>
.dashboard-wrapper { padding: 20px 0; }
.dashboard-header { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 24px; }
.dashboard-header h1 { margin: 0; font-size: 28px; color: #c00000; }
    .dashboard-header .dashboard-actions { display: flex; gap: 16px; align-items: center; }
    .dashboard-actions span { font-size: 20px; cursor: pointer; }
    .dashboard-stats { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap: 20px; margin-bottom: 24px; }
    .dashboard-card { background: #fff; border-radius: 16px; padding: 22px; box-shadow: 0 12px 35px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center; gap: 16px; }
        .dashboard-card .card-label { color: #777; font-size: 13px; margin-bottom: 8px; }
            .dashboard-card .card-value { font-size: 32px; font-weight: 700; color: #222; }
                .dashboard-card .card-note { color: #2e7d32; font-size: 12px; margin-top: 6px; }
                    .dashboard-card .card-icon { width: 52px; height: 52px; border-radius: 14px; display: grid; place-items: center; background: #fff3f3; color: #c00000; font-size: 20px; }
                        .dashboard-main { display: grid; grid-template-columns: 1fr; gap: 20px; }
                        .dashboard-panel { background: #fff; border-radius: 18px; padding: 24px; box-shadow: 0 12px 35px rgba(0,0,0,0.05); }
                            .dashboard-panel-title { display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; }
                            .dashboard-panel-title h3 { margin: 0; font-size: 18px; color: #222; }
                                .dashboard-panel-title a { color: #c00000; text-decoration: none; font-weight: 600; }
                                    .dashboard-table { width: 100%; border-collapse: collapse; font-size: 14px; }
                                    .dashboard-table th, .dashboard-table td { padding: 14px 12px; text-align: left; }
                                    .dashboard-table thead th { background: #fff5f5; color: #555; }
                                        .dashboard-table tbody tr { border-bottom: 1px solid #f0f0f0; }
                                        .dashboard-table tbody tr:last-child { border-bottom: none; }
                                        .dashboard-tag { display: inline-flex; align-items: center; background: #e8f5e9; color: #2e7d32; border-radius: 999px; padding: 6px 12px; font-size: 12px; }
                                            .dashboard-actions-row { display: grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap: 20px; margin-top: 24px; }
                                            .action-box { border-radius: 18px; padding: 28px; display: flex; justify-content: space-between; align-items: center; color: #fff; min-height: 140px; }
                                                .action-box.red { background: #a00000; }
                                                    .action-box.gold { background: #917e00; }
                                                        .action-box h4 { margin: 0 0 10px 0; font-size: 22px; }
                                                        .action-box p { margin: 0; opacity: .9; font-size: 14px; }
                                                        .action-box .action-icon { width: 50px; height: 50px; border-radius: 14px; background: rgba(255,255,255,0.2); display: grid; place-items: center; font-size: 24px; }
                                                        .dashboard-quicklink { display: flex; justify-content: flex-end; margin-bottom: 20px; }
                                                        .dashboard-quicklink a { background: #c00000; color: #fff; padding: 11px 20px; border-radius: 12px; display: inline-flex; align-items: center; gap: 10px; text-decoration: none; font-weight: 600; }
                                                            .dashboard-quicklink .badge { background: #ffe5e5; color: #c00000; padding: 6px 12px; border-radius: 999px; font-size: 12px; }
                                                                @media(max-width: 1100px) { .dashboard-main { grid-template-columns: 1fr; } }
                                                                @media(max-width: 900px) { .dashboard-stats { grid-template-columns: 1fr 1fr; } }
                                                                @media(max-width: 640px) { .dashboard-stats, .dashboard-actions-row { grid-template-columns: 1fr; } }
                                                                </style>
                                                                @endsection
                                                                
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-header">
            <div>
                        
                                                </div>
                                                        <div class="dashboard-actions">
                                                            
                                                                                        </div>
                                                                                            </div>
                                                                                            
    <div class="dashboard-stats">
            <div class="dashboard-card">
                        <div>
                                        <div class="card-label">মোট অর্ডার</div>
                                                        <div class="card-value">{{ $total_order }}</div>
                                                                        <div class="card-note">আজ {{ $today_order }} টি</div>
                                                                                    </div>
                                                                                                <div class="card-icon"><i class="fas fa-shopping-cart"></i></div>
                                                                                                        </div>
                                                                                                                <div class="dashboard-card">
                                                                                                                            <div>
                                                                                                                                            <div class="card-label">মোট পণ্য</div>
                                                                                                                                                            <div class="card-value">{{ $total_product }}</div>
                                                                                                                                                                            <div class="card-note">সকল পণ্যের তথ্য</div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                                    <div class="card-icon"><i class="fas fa-box"></i></div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                    <div class="dashboard-card">
                                                                                                                                                                                                                                <div>
                                                                                                                                                                                                                                                <div class="card-label">মোট গ্রাহক</div>
                                                                                                                                                                                                                                                                <div class="card-value">{{ $total_customer }}</div>
                                                                                                                                                                                                                                                                                <div class="card-note">নতুন গ্রাহক</div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                        <div class="card-icon"><i class="fas fa-users"></i></div>
                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                        <div class="dashboard-card">
                                <a href="{{ route('categories.index') }}" style="display:flex; justify-content:space-between; gap:16px; width:100%; color:inherit; text-decoration:none;">
                                    <div>
                                        <div class="card-label">মোট ক্যাটাগরি</div>
                                        <div class="card-value">{{ \App\Models\Category::count() }}</div>
                                        <div class="card-note">সিস্টেমে মোট বিভাগ</div>
                                    </div>
                                    <div class="card-icon"><i class="fas fa-tags"></i></div>
                                </a>
                            </div>
                        </div>
    <div class="dashboard-main">
            <div class="dashboard-panel">
                        <div class="dashboard-panel-title">
                                        <h3>সাম্প্রতিক পণ্য</h3>
                                                        <a href="{{ route('products.index') }}">সব পণ্য দেখুন</a>
                                                                    </div>
                                                                                                                        <div style="overflow-x:auto;">
                                                                                                                                        <table class="dashboard-table">
                                                                                                                                                            <thead>
                                                                                                                                                                                    <tr>
                                                                                                                                                                                                                <th>ছবি</th>
                                                                                                                                                                                                                                            <th>নাম</th>
                                                                                                                                                                                                                                                                        <th>ক্যাটাগরি</th>
                                                                                                                                                                                                                                                                                                                                <th>মূল্য</th>
                                                                                                                                                                                                                                                                                                                                                            <th>স্টক</th>
                                                                                                                                                                                                                                                                                                                                                                                <th>স্ট্যাটাস</th>
                                                                                                                                                                                                                                                                                                                                                        </tr>
                                                                                                                                                                                                                                                                                                                                                                            </thead>
                                                                                                                                                                                                                                                                                                                                                                                                <tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                        @forelse($latest_product as $product)
                                                                                                                                                                                                                                                                                                                                                                                                                                                <tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <td><img src="{{ asset($product->image ? $product->image->image : '') }}" alt="{{ $product->name }}" style="max-width: 60px; border-radius: 6px;"></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <td>{{ $product->name }}</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <td>{{ optional($product->category)->name ?: 'N/A' }}</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <td>৳ {{ number_format($product->new_price, 2) }}</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <td>{{ $product->stock }}</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <td>@if($product->status==1)<span class="dashboard-tag" style="background:#e8f5e9;color:#2e7d32;">Active</span>@else<span class="dashboard-tag" style="background:#fdecea;color:#c00000;">Inactive</span>@endif</td>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            @empty
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <tr><td colspan="6">কোনো পণ্য নেই</td></tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            @endforelse
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </tbody>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
    <div class="dashboard-actions-row">
            <a href="{{ route('products.create') }}" class="action-box red" style="text-decoration:none; color:inherit;">
                        <div>
                                        <h4 style="color: white;">নতুন পণ্য যুক্ত করুন</h4>
                                                        <p style="color: white;">আপনার ইনভেন্টরিতে নতুন পণ্য সহজেই যোগ করুন।</p>
                                                                    </div>
                                                                                <div class="action-icon"><i class="fas fa-plus"></i></div>
                                                                                        </a>
                                                                                                <a href="{{ route('categories.create') }}" class="action-box gold" style="text-decoration:none; color:inherit;">
                                                                                                            <div>
                                                                                                                            <h4 style="color: white;">নতুন ক্যাটাগরি তৈরি করুন</h4>
                                                                                                                                            <p style="color: white;">পণ্যের সঠিক শ্রেণীবিন্যাসের জন্য গ্রুপ তৈরির অপশন।</p>
                                                                                                                                                        </div>
                                                                                                                                                                    <div class="action-icon"><i class="fas fa-plus"></i></div>
                                                                                                                                                                            </a>
                                                                                                                                                                                </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                @endsection
                                                                                                                                                                                