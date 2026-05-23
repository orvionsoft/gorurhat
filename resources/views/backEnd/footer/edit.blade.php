@extends('backEnd.layouts.master')
@section('title','Footer Settings Edit')
@section('css')
<link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/css/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/libs/summernote/summernote-lite.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('footer.index')}}" class="btn btn-primary rounded-pill">Manage</a>
                </div>
                <h4 class="page-title">Footer Settings Edit</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form action="{{route('footer.update', $footer->slug)}}" method="POST" class=row data-parsley-validate="">
                    @csrf
                    @method('PUT')
                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title *</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $footer->title) }}" id="title" required="">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col-end -->
                    
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4">{{ old('description', $footer->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="link" class="form-label">Link (URL)</label>
                            <input type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $footer->link) }}" id="link" placeholder="https://example.com">
                            @error('link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="phone_number" class="form-label">ফোন নম্বর (Phone Number)</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $footer->phone_number) }}" id="phone_number" placeholder="+880 1234567890">
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="whatsapp_number" class="form-label">হোয়াটসঅ্যাপ নম্বর (WhatsApp Number)</label>
                            <input type="text" class="form-control @error('whatsapp_number') is-invalid @enderror" name="whatsapp_number" value="{{ old('whatsapp_number', $footer->whatsapp_number) }}" id="whatsapp_number" placeholder="+880 1234567890">
                            @error('whatsapp_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">ঠিকানা (Address)</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="3" placeholder="Enter your address">{{ old('address', $footer->address) }}</textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="facebook_link" class="form-label">ফেসবুক লিংক (Facebook Link)</label>
                            <input type="url" class="form-control @error('facebook_link') is-invalid @enderror" name="facebook_link" value="{{ old('facebook_link', $footer->facebook_link) }}" id="facebook_link" placeholder="https://facebook.com/yourpage">
                            @error('facebook_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="youtube_link" class="form-label">ইউটিউব লিংক (YouTube Link)</label>
                            <input type="url" class="form-control @error('youtube_link') is-invalid @enderror" name="youtube_link" value="{{ old('youtube_link', $footer->youtube_link) }}" id="youtube_link" placeholder="https://youtube.com/yourchannel">
                            @error('youtube_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="whatsapp_link" class="form-label">হোয়াটসঅ্যাপ লিংক (WhatsApp Link)</label>
                            <input type="url" class="form-control @error('whatsapp_link') is-invalid @enderror" name="whatsapp_link" value="{{ old('whatsapp_link', $footer->whatsapp_link) }}" id="whatsapp_link" placeholder="https://wa.me/1234567890">
                            @error('whatsapp_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order" value="{{ old('sort_order', $footer->sort_order) }}" id="sort_order">
                            @error('sort_order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Status</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="status" id="status" value="1" @if($footer->status == 1) checked @endif>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->

                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded-pill me-2">Update Footer</button>
                            <a href="{{route('footer.index')}}" class="btn btn-secondary rounded-pill">Cancel</a>
                        </div>
                    </div>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('public/backEnd')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{asset('public/backEnd')}}/assets/libs/summernote/summernote-lite.min.js"></script>
@endsection
