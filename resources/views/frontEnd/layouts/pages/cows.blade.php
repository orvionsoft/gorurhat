@extends('frontEnd.layouts.master') 
@section('title','গরু')
@push('css')
<link rel="stylesheet" href="{{asset('public/frontEnd/css/jquery-ui.css')}}" />
<style>
.cow-details {
    font-size: 12px;
    color: #666;
    margin: 5px 0;
}
.cow-spec {
    display: flex;
    justify-content: space-between;
    padding: 3px 0;
    border-bottom: 1px solid #f0f0f0;
}
</style>
@endpush 
@section('content')
<section class="product-section">
    <div class="container">
        <div class="sorting-section">
            <div class="row">
                <div class="col-sm-6">
                    <div class="category-breadcrumb d-flex align-items-center">
                        <a href="{{ route('home') }}">Home</a>
                        <span>/</span>
                        <strong>গরু</strong>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="showing-data">
                                <span>Showing {{ $cows->firstItem() }}-{{ $cows->lastItem() }} of {{ $cows->total() }} Results</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mobile-filter-toggle">
                                <i class="bi bi-list-ul"></i><span>filter</span>
                            </div>
                            <div class="page-sort">
                                <form action="" class="sort-form">
                                    <select name="sort" class="form-control form-select sort">
                                        <option value="1" @if(request()->get('sort')==1)selected @endif>গরু: Latest</option>
                                        <option value="2" @if(request()->get('sort')==2)selected @endif>গরু: Oldest</option>
                                        <option value="3" @if(request()->get('sort')==3)selected @endif>Price: High To Low</option>
                                        <option value="4" @if(request()->get('sort')==4)selected @endif>Price: Low To High</option>
                                        <option value="5" @if(request()->get('sort')==5)selected @endif>Name: A-Z</option>
                                        <option value="6" @if(request()->get('sort')==6)selected @endif>Name: Z-A</option>
                                    </select>
                                    <input type="hidden" name="min_price" value="{{request()->get('min_price')}}" />
                                    <input type="hidden" name="max_price" value="{{request()->get('max_price')}}" />
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="category-product main_product_inner">
                    @forelse($cows as $key=>$cow)
                    <div class="product_item wist_item">
                        <div class="product_item_inner">
                            <div class="pro_img">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset($cow->image ? $cow->image->image : 'uploads/default.png') }}" alt="{{$cow->name}}" />
                                </a>
                            </div>
                            <div class="pro_des">
                                <div class="pro_name">
                                    <a href="javascript:void(0)">{{Str::limit($cow->name,80)}}</a>
                                </div>
                                <div class="cow-details">
                                    <div class="cow-spec">
                                        <span><strong>জাত:</strong></span>
                                        <span>{{$cow->breed ?? 'N/A'}}</span>
                                    </div>
                                    <div class="cow-spec">
                                        <span><strong>বয়স:</strong></span>
                                        <span>{{$cow->age ?? 'N/A'}} বছর</span>
                                    </div>
                                    <div class="cow-spec">
                                        <span><strong>ওজন:</strong></span>
                                        <span>{{$cow->weight ?? 'N/A'}} কেজি</span>
                                    </div>
                                    <div class="cow-spec">
                                        <span><strong>রঙ:</strong></span>
                                        <span>{{$cow->color ?? 'N/A'}}</span>
                                    </div>
                                </div>
                                <div class="pro_price">
                                    <p>
                                        ৳ {{ number_format($cow->price) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="pro_btn">
                            <form action="{{route('cow.cart.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$cow->id}}" />
                                <input type="hidden" name="qty" value="1" />
                                <button type="submit" class="addcartbutton">কার্টে যোগ করুন</button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <div class="col-sm-12">
                        <div class="alert alert-info">
                            কোন গরু পাওয়া যায়নি।
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="custom_paginate">
                    {{$cows->links('pagination::bootstrap-4')}}
                   
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@push('script')
<script>
    $(".sort").change(function(){
       $('#loading').show();
       $(".sort-form").submit();
    })
</script>
