@extends('backEnd.layouts.master')
@section('title','Product Manage')
@section('css')
<style>
    .product-manage-card,
    .dashboard-panel {
        background: #fff;
        border-radius: 18px;
        padding: 24px;
        box-shadow: 0 12px 35px rgba(0,0,0,0.05);
    }
    .dashboard-panel-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    .dashboard-panel-title h3 {
        margin: 0;
        font-size: 20px;
        color: #222;
    }
    .dashboard-panel-title a {
        color: white;
        text-decoration: none;
        font-weight: 600;
    }
    .dashboard-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }
    .dashboard-table th,
    .dashboard-table td {
        padding: 14px 12px;
        text-align: left;
        border-bottom: 1px solid #f0f0f0;
        vertical-align: middle;
    }
    .dashboard-table thead th {
        background: #fff5f5;
        color: #555;
        font-weight: 700;
    }
    .dashboard-table tbody tr:last-child td {
        border-bottom: none;
    }
    .dashboard-tag {
        display: inline-flex;
        align-items: center;
        background: #e8f5e9;
        color: #2e7d32;
        border-radius: 999px;
        padding: 6px 12px;
        font-size: 12px;
    }
    .dashboard-tag.inactive {
        background: #fdecea;
        color: #c00000;
    }
    .custom_form {
        margin-bottom: 20px;
    }
    .custom_form .form-group {
        display: flex;
        gap: 8px;
        align-items: center;
        flex-wrap: wrap;
    }
    .custom_form input {
        border: 1px solid #c00000;
        border-radius: 8px;
        padding: 12px 18px;
        width: 100%;
        max-width: 320px;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    .custom_form input:focus {
        outline: none;
        border-color: #c00000;
        box-shadow: 0 0 0 2px rgba(192, 0, 0, 0.1);
    }
    .custom_form button {
        border-radius: 8px;
        background: #c00000;
        border-color: #c00000;
        color: #fff;
        padding: 12px 24px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .custom_form button:hover {
        background: #a00000;
        border-color: #a00000;
    }
    .custom-btn-list a,
    .custom-btn-list button {
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #c00000;
        color: #c00000;
        background: #fff;
        border-radius: 8px;
        transition: all .2s ease;
    }
    .custom-btn-list a:hover,
    .custom-btn-list button:hover {
        background: #c00000;
        border-color: #c00000;
        color: #fff;
    }
    .custom-paginate {
        margin-top: 18px;
        display: flex;
        justify-content: flex-end;
    }
    .custom-paginate .pagination li a {
        border-radius: 8px;
        border: 1px solid #dee2e6;
        color: #495057;
    }
    .custom-paginate .pagination .active a {
        background: #c00000;
        border-color: #c00000;
        color: #fff;
    }
    .btn-add-cow {
        border-radius: 8px !important;
        background: #c00000 !important;
        border-color: #c00000 !important;
        padding: 10px 20px !important;
    }
    .btn-add-cow:hover {
        background: #a00000 !important;
        border-color: #a00000 !important;
    }
    .dashboard-table th img,
    .dashboard-table td img {
        max-width: 60px;
        border-radius: 8px;
    }
    .dashboard-table th,
    .dashboard-table td {
        border-color: #e3e7eb;
    }
    .product-manage-card .page-title-right {
        display: none;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('products.create')}}" class="btn btn-primary rounded-pill btn-add-cow" style="border-radius: 5px !important; background: #c00000 !important; border-color: #c00000 !important;"><i class="fe-shopping-cart"></i> Add Cows</a>
                </div>
                <h4 class="page-title">Product Manage</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row">
    <div class="col-12">
        <div class="card product-manage-card">
            <div class="card-body">
                <div class="dashboard-panel-title">
                    <h3>Product Manage</h3>
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <a href="{{ route('products.index') }}">সব পণ্য দেখুন</a>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-lg-6">
                        <form class="custom_form" method="GET" action="{{ route('products.index') }}">
                            <div class="form-group">
                                <input type="text" name="keyword" placeholder="Search products by name, category..." value="{{ request('keyword') }}">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th style="width:10%;">Image</th>
                            <th style="width:20%;">Name</th>
                            <th style="width:12%;">Category</th>
                            <th style="width:10%;">Price</th>
                            <th style="width:8%;">Stock</th>
                            <th style="width:12%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key=>$value)
                        <tr>
                            <td><img src="{{asset($value->image?$value->image->image:'')}}" class="backend-image" alt="{{$value->name}}" style="max-width: 60px; border-radius: 5px;"></td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->category?$value->category->name:''}}</td>
                            <td>{{$value->new_price}}</td>
                            <td>{{$value->stock}}</td>
                            <td>
                                <div class="button-list custom-btn-list">
                                    <a href="{{route('products.edit',$value->id)}}" title="Edit" style="border-radius: 5px; border: 1px solid #c00000; color: #c00000; background: #fff;"><i class="fe-edit"></i></a>

                                    <form method="post" action="{{route('products.destroy')}}" class="d-inline">        
                                        @csrf
                                    <input type="hidden" value="{{$value->id}}" name="hidden_id">
                                    <button type="submit" class="delete-confirm" title="Delete" style="border-radius: 5px; border: 1px solid #c00000; color: #c00000; background: #fff;"><i class="fe-trash-2"></i></button></form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                    </table>
                </div>
                <div class="custom-paginate">
                    {{$data->links('pagination::bootstrap-4')}}
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $(".checkall").on('change',function(){
      $(".checkbox").prop('checked',$(this).is(":checked"));
    });
    
    $(document).on('click', '.hotdeal_update', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        console.log('url',url);
        var product = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var product_ids=product.get();
        if(product_ids.length ==0){
            toastr.error('Please Select A Product First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{product_ids},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    });
    $(document).on('click', '.update_status', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        var product = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var product_ids=product.get();
        if(product_ids.length ==0){
            toastr.error('Please Select A Product First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{product_ids},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    });
    $(document).on('click', '.update_status', function(e){
        e.preventDefault();
        var url = $(this).attr('height');
        var product = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var product_ids=product.get();
        if(product_ids.length ==0){
            toastr.error('Please Select A Product First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{product_ids},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    });
    
    
})
</script>
@endsection