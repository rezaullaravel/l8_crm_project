<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cart Product</title>
    <style>
       .reset-padding-margin {
            padding: 0;
         }
    </style>
</head>
<body>


    @php
    $total = 0;
@endphp
@if (count($products)>0)
 <table class="table cartTable">
    <tbody>
       <tr>
          <th class="t-head">Sl no.</th>
          <th class="t-head head-it ">Products</th>
          <th class="t-head">Thumbnail</th>
          <th class="t-head">Price</th>
          <th class="t-head">Quantity</th>
          <th class="t-head">Action</th>
       </tr>

       @foreach ($products as $key => $product)
       <tr class="cross cartpage">
          <td class="t-data"> {{ $key+1 }}</td>
          <td class="t-data">
             {{ $product->product->product_name }}
          </td>
          <td class="t-data">
             <img src="{{ asset($product->product->product_thumbnail) }}" alt="" width="80" height="80">
          </td>
          <td class="t-data">{{ $product->product->price*$product->quantity }} TK.</td>
          <td class="t-data">
             <div class="input-group quantity">
                @if ($product->quantity>1)
                <button class="input-group-text qtyDecrement"
                   data-id="{{ $product->id }}",
                   >-</button>
                @else
                <button class="input-group-text"
                   >-</button>
                @endif
                <input type="text" class="qty-input qtystyle"  value="{{ $product->quantity }}">
                <button class="input-group-text qtyIncrement"
                   data-id="{{ $product->id }}",
                   >+</button>
             </div>
          </td>
{{--
          <td class="t-data">
            <select name="color" disabled class="form-control color" required data-id={{ $product->id }}>
                <option value="" selected disabled>Select</option>
                <option value="red" {{ $product->color=='red'?'selected':'' }}>Red</option>
                <option value="green" {{ $product->color=='green'?'selected':'' }}>Green</option>
                <option value="blue" {{ $product->color=='blue'?'selected':'' }}>Blue</option>
            </select>
           </td> --}}



          <td class="t-data">
             <button  class="btn btn-danger" data-id="{{ $product->id }}",  id="deleteCartItem" title="Remove"><i class="fa fa-trash"></i>Remove</button>
          </td>
       </tr>
       @php
       $total = $total + $product->product->price*$product->quantity;
       @endphp
       @endforeach
       <tr>
          <td colspan="3" class="t-data"><strong>Total Price</strong></td>
          <td class="t-data"><strong>{{ $total }} TK.</strong></td>
          <td class="t-data"></td>
          <td class="t-data"></td>
       </tr>
    </tbody>
 </table>
  @else
   <h4 class="text-danger text-center">Your shopping card is empty.</h4>
  @endif

  <h4 class="text-danger text-center cartProductempty" style="display: none;">Your shopping card is empty.</h4>
  @if (count( $products)>0)
  <div class="card-sample">
      <div  style="float: right;">
          <a href="{{ url('/cart/empty') }}" class="btn btn-info">Empty Cart</a>
          <a href="{{ url('/checkout') }}" class="btn btn-danger">Checkout</a>
      </div>
  </div>
  @endif



</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
{{-- ajax set up --}}
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
{{-- ajax set up end --}}

{{-- product quantity increment --}}
<script>
    $(document).ready(function(){
       $(document).on('click','.qtyIncrement',function(e){
         e.preventDefault();
           var rowId = $(this).data('id');

           //alert(rowId);

           var data = {
            //    _token: '{{csrf_token()}}',
               'rowId':rowId,

               }

           $.ajax({
               url:'/quantity/increment',
               method:'POST',
               data:data,


               success:function(response){
                  $('.table').load(location.href+' .table');
               //console.log('success');
               }, error:function(error){
                console.log(error);
               },
           })
       })
    });

 </script>
 {{-- cart quantity increment end --}}


 {{-- product quantity decrement --}}
<script>
    $(document).ready(function(){
       $(document).on('click','.qtyDecrement',function(e){
        e.preventDefault();
           var rowId = $(this).data('id');


          // alert(rowId);

           var data = {
            //    _token: '{{csrf_token()}}',
               'rowId':rowId,

               }

           $.ajax({
               url:'/quantity/decrement',
               method:'POST',
               data:data,


               success:function(response){
                  $('.table').load(location.href+' .table');
               //    console.log('success');
               },
           })
       })
    });

 </script>
 {{-- product quantity decrement end --}}


 {{-- delete cart item --}}
 <script>

    $(document).ready(function(){
       $(document).on('click','#deleteCartItem',function(){
           let rowId = $(this).data('id');


          // alert(rowId);

           var data = {
            //    _token: '{{csrf_token()}}',
               'rowId':rowId,

               }

           $.ajax({
               url:'/cart-item/delete',
               method:'GET',
               data:data,


               success:function(response){
                   $('.cartTable').load(location.href+' .cartTable');
                   //$('.cartCount').load(location.href+' .cartCount');
                   if(response.products==0){
                    $('.cartTable').hide();
                    $('.cartProductempty').show();
                    $('.card-sample').hide();
                    //window.location.reload();

                   }


               },
           })
       })
    });

</script>
 {{-- delete cart item end --}}
