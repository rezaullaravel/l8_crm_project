@extends('frontend.frontend_master')

@section('content')
    <section>

        <div class=" py-10 px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">

                <div class="lg:w-4/5 mx-auto">
                    <div class="flex flex-wrap">
                        <div class="">
                            <h1>Shipping Address</h1>
                        </div>

                        @if (Session('message'))

                          <div>
                            {{ Session::get('message') }}
                          </div>

                        @endif

                    </div>

                    <div class="">
                        <form action="{{ route('place.order') }}" method="POST">
                            @csrf
                            <div class="lg:grid lg:grid-cols-12 gap-20 items-center mt-10">
                                <div class=" col-span-8">
                                    <div class=" grid md:grid-cols-2 gap-5">
                                        <div class="">
                                            <p class=" text-2xl text-black mb-2 ml-2">Customer Name</p>
                                            <input
                                                class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                                type="text" name="customer_name" value="{{ Auth::user()->name }}" required disabled>
                                        </div>

                                    </div>
                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Address<span style="color: #ff0000;">*</span></p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="text" name="c_shipping_address" required>
                                    </div>

                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Country<span style="color: #ff0000;">*</span></p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="text" name="c_country" required>
                                    </div>

                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">State</p>
                                        <select class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                             name="c_state">
                                             <option value="" selected disabled>Select</option>
                                             @foreach ($states as $state)
                                                 <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                             @endforeach
                                            </select>
                                    </div>


                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">City<span style="color: #ff0000;">*</span></p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="text" name="c_city" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Zip Code<span style="color: #ff0000;">*</span></p>
                                        <input
                                            class=" w-full  bg-azureish_white px-3 py-2 rounded-md appearance-none focus:outline-none"
                                            type="text" name="c_zipcode" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Email<span style="color: #ff0000;">*</span></p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="email" name="c_email" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Phone<span style="color: #ff0000;">*</span></p>
                                        <input
                                            class=" w-full  bg-azureish_white px-3 py-2 rounded-md appearance-none focus:outline-none"
                                            type="text" name="c_phone" required>
                                    </div>

                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Payment Type<span style="color: #ff0000;">*</span></p>
                                        <input type="radio" name="payment_type" value="cash_on_delivery" checked>Cash On Delivery
                                        <input type="radio" name="payment_type" value="paypal">Paypal
                                        <input type="radio" name="payment_type" value="stripe">Stripe
                                    </div>
                                </div>

                                {{-- calculation start --}}
                                    <div style="display: none;">
                                        @php
                                        $cartproducts = App\Models\ShoppingCart::where('user_id',Auth::user()->id)->get();
                                        $total = 0;
                                        $total_quantity = 0;
                                        @endphp


                                        <table>
                                            <thead>
                                            <th>qty</th>
                                            <th>price</th>
                                            </thead>
                                            <tbody>
                                            @foreach ( $cartproducts as $product)
                                                <tr>
                                                    <td>{{ $product->quantity }}</td>
                                                    <td>{{ $product->product->price*$product->quantity }}</td>
                                                </tr>
                                                @php
                                                   $total_quantity = $total_quantity+$product->quantity;
                                                    $total =  $total+ $product->product->price*$product->quantity;
                                                @endphp
                                            @endforeach
                                            </tbody>
                                        </table>


                                    </div>
                                {{-- calculation end --}}
                                <div class=" col-span-4 mt-4 lg:mt-0 ">
                                    <div class=" bg-azureish_white px-8 pt-4 pb-10 rounded-lg">
                                        <h2 class=" text-3xl font-bold text-black text-center">Order Summary</h2>
                                        <div class=" mt-10">
                                            <div class=" flex justify-between items-center">
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">Total Product </p>
                                                </div>
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">{{ $total_quantity  }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mt-3">
                                            <div class=" flex justify-between items-center">
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">Price</p>
                                                </div>
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">{{ $total }} $</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mt-3">
                                            <div class=" flex justify-between items-center">
                                                {{-- <div class="">
                                                    <p class=" text-xl font-medium text-black">Vat</p>
                                                </div>
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">3$</p>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class=" mt-3 border border-b-black pb-4">
                                            <div class=" flex justify-between items-center">
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">Delivery Charge</p>
                                                </div>
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">1$</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mt-3">
                                            <div class=" flex justify-between items-center">
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">Total</p>
                                                </div>
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">{{ $total+1 }}$</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" name="order_total" value="{{ $total+1 }}">
                                    @if(count($cartproducts)>0)
                                    <div class="mt-10 flex justify-end">
                                        <button type="submit" class=" bg-[#357403] px-4 py-2 text-white">Place Order</button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
