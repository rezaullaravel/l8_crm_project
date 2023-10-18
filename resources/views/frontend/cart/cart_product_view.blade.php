@extends('frontend.frontend_master')

@section('content')
    <section>

        <div class="py-10 px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class=" lg:w-4/5 mx-auto">
                    <div class=" lg:w-3/4 mx-auto">
                        @php
                           $total = 0;
                        @endphp
                        @if (count($products)>0)
                         {{-- cart product loop start --}}
                        <div class="cartProduct">
                            @foreach ($products as $key => $product)
                            <div class="mt-10  border border-gray-300 p-5 rounded-xl mb-6">
                                <div class="md:grid grid-cols-12 gap-10 items-center">
                                    <div class="col-span-4">
                                        <div class="cart_img   h-[150px] rounded-lg"
                                            style="background-image: url('{{ asset($product->product->product_thumbnail) }}')">

                                        </div>

                                    </div>
                                    <div class=" col-span-8">
                                        <div class=" mt-2 md:mt-0">
                                            <h2 class=" text-xl font-medium font-satoshi text-vampireblack"> {{ $product->product->product_name }}</h2>
                                            {{-- <p class=" text-base text-black mt-2">Wired | Sony | 40mm | 20 - 20000Hz | 3.5mm
                                                (mini-jack)</p> --}}
                                        </div>
                                        <div class=" flex gap-4">
                                            <div class=" flex items-center gap-4 mb-4">
                                                <div class=" mt-2">

                                                    @if ($product->quantity>1)
                                                    <button class=" text-xl text-black qtyDecrement"  data-id="{{ $product->id }}",>
                                                        <iconify-icon icon="pepicons-pop:line-x"></iconify-icon>
                                                    </button>
                                                    @else
                                                    <button class=" text-xl text-black">
                                                        <iconify-icon icon="pepicons-pop:line-x"></iconify-icon>
                                                    </button>
                                                    @endif

                                                </div>
                                                <div class="mt-1">
                                                    <span class="text-2xl text-black">
                                                        {{ $product->quantity }}
                                                    </span>
                                                </div>
                                                <div class=" mt-2">
                                                    <button class=" text-xl text-black qtyIncrement"  data-id="{{ $product->id }}",>
                                                        <iconify-icon icon="fluent:add-12-filled"></iconify-icon>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-2xl font-satoshi text-black font-bold mb-4">
                                                    {{ $product->product->price*$product->quantity }} $
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button data-id="{{ $product->id }}",  id="deleteCartItem">
                                                <div class=" flex gap-2 items-center">
                                                    <div class=" text-lg text-black mt-1"><iconify-icon
                                                            icon="material-symbols:delete"></iconify-icon></div>
                                                    <div class="">
                                                        <span>Remove</span>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                               $total = $total + $product->product->price*$product->quantity;
                            @endphp
                            @endforeach

                            <p>Total: {{ $total }} $</p>
                        </div>
                        {{-- cart product loop end --}}
                        @else
                        <h4>Your cart is empty.</h4>
                        @endif

                        <h4 class="cartProductempty" style="display: none;">Your cart is empty</h4>


                      @if (count($products)>0)

                        <div class=" md:flex gap-6 justify-center md:justify-end card-sample">
                            <div class="">
                                <a href="{{ url('/cart/empty') }}"
                                    class="bg-black px-10 py-3 rounded-md text-white  hover:bg-[#357403]">Empty
                                    Cart</a>
                            </div>
                            <div class=" mt-6 md:mt-0">
                                <a href="{{ url('/checkout/page') }}"
                                    class="bg-[#357403] px-10 py-3 rounded-md text-white  hover:bg-black">Check
                                    Out</a>
                            </div>
                        </div>

                      @endif
                    </div>

                </div>
            </div>
        </div>
    </section>

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
                _token: '{{csrf_token()}}',
               'rowId':rowId,

               }

           $.ajax({
               url:'/quantity/increment',
               method:'POST',
               data:data,


               success:function(response){
                  $('.cartProduct').load(location.href+' .cartProduct');
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
                _token: '{{csrf_token()}}',
               'rowId':rowId,

               }

           $.ajax({
               url:'/quantity/decrement',
               method:'POST',
               data:data,


               success:function(response){
                  $('.cartProduct').load(location.href+' .cartProduct');
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
                _token: '{{csrf_token()}}',
               'rowId':rowId,

               }

           $.ajax({
               url:'/cart-item/delete',
               method:'GET',
               data:data,


               success:function(response){
                   $('.cartProduct').load(location.href+' .cartProduct');
                   //$('.cartCount').load(location.href+' .cartCount');
                   if(response.products==0){
                    $('.cartProduct').hide();
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
@endsection
