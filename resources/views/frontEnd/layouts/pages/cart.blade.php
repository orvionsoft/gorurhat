@extends('frontEnd.layouts.master') @section('title','Shopping Cart') @section('content')
<section class="breadcrumb-section">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="custom-breadcrumb">
     <ul>
      <li><a href="{{route('home')}}">Home </a></li>
      <li>
       <a><i class="bi bi-arrow-right-left"></i> </a>
      </li>
      <li><a href="">Shopping Cart</a></li>
     </ul>
    </div>
   </div>
  </div>
 </div>
</section>
<!-- breadcrumb end -->
<section class="vcart-section">
 @php $subtotal = Cart::instance('shopping')->subtotal(); $subtotal=str_replace(',','',$subtotal); $subtotal=str_replace('.00', '',$subtotal); view()->share('subtotal',$subtotal); $shipping =
 Session::get('shipping')?Session::get('shipping'):0; $discount = Session::get('discount')?Session::get('discount'):0; @endphp
 <div class="container">
  <div class="row" id="cartlist">
   <div class="col-sm-9">
    <div class="vcart-inner">
     <div class="cart-title">
      <h4>Shopping Cart</h4>
     </div>
     <div class="vcart-content">
      <div class="table-responsive">
       <table class="table">
        <thead>
         <tr>
          <th>Image</th>
          <th>Product</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Total</th>
          <th>Remove</th>
         </tr>
        </thead>
        <tbody>
         @foreach($data as $value)
         <tr>
          <td><img height="60" src="{{asset($value->options->image)}}" alt="" /></td>
          <td class="cart_name">
           {{$value->name}}
           @if($value->options->type === 'cow')
           <div style="font-size: 12px; color: #666; margin-top: 8px;">
            @if($value->options->breed) <div><strong>জাত:</strong> {{$value->options->breed}}</div> @endif
            @if($value->options->age) <div><strong>বয়স:</strong> {{$value->options->age}} বছর</div> @endif
            @if($value->options->weight) <div><strong>ওজন:</strong> {{$value->options->weight}} কেজি</div> @endif
            @if($value->options->color) <div><strong>রঙ:</strong> {{$value->options->color}}</div> @endif
           </div>
           @endif
          </td>
          <td>{{$value->price}} ৳</td>
          <td>
           <div class="qty-cart vcart-qty">
            <div class="quantity">
             <button class="minus cart_decrement" data-id="{{$value->rowId}}">-</button>
             <input type="text" value="{{$value->qty}}" readonly />
             <button class="plus cart_increment" data-id="{{$value->rowId}}">+</button>
            </div>
           </div>
          </td>
          <td>{{$value->price*$value->qty}} ৳</td>
          <td>
           <button class="remove-cart cart_remove" data-id="{{$value->rowId}}"><i data-feather="x"></i></button>
          </td>
         </tr>
         @endforeach
        </tbody>
       </table>
      </div>
     </div>
    </div>
    <div class="coupon-form">
     <form action="">
      <input type="text" placeholder="apply coupon" />
      <button>Apply</button>
     </form>
    </div>
   </div>
   <div class="col-sm-3">
    <div class="cart-summary">
     <h5>Cart Summary</h5>
     <table class="table">
      <tbody>
       <tr>
        <td>Items</td>
        <td>{{Cart::instance('shopping')->count()}} (qty)</td>
       </tr>
       <tr>
        <td>Total</td>
        <td>৳{{$subtotal}}</td>
       </tr>
       <tr>
        <td>Shipping</td>
        <td>৳{{$shipping}}</td>
       </tr>
       <tr>
        <td>Discount</td>
        <td>৳{{$discount}}</td>
       </tr>
       <tr>
        <td>Total</td>
        <td>৳{{($subtotal+$shipping) - $discount}}</td>
       </tr>
      </tbody>
     </table>
     <a href="{{route('customer.checkout')}}" class="go_cart">PROCESS TO CHECKOUT</a>
    </div>
   </div>
  </div>
 </div>
</section>

@endsection
