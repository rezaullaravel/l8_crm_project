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

                    </div>

                    <div class="">
                        <form action="">
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
                                        <p class=" text-2xl text-black mb-2 ml-2">Address</p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="text" name="c_shipping_address" required>
                                    </div>

                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">State</p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="text" name="c_state" required>
                                    </div>


                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">City</p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="text" name="c_city" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Postcode / ZIP</p>
                                        <input
                                            class=" w-full  bg-azureish_white px-3 py-2 rounded-md appearance-none focus:outline-none"
                                            type="text" name="c_zipcode" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Email</p>
                                        <input class=" w-full  bg-azureish_white px-3 py-2 rounded-md focus:outline-none"
                                            type="email" name="c_email" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class=" text-2xl text-black mb-2 ml-2">Phone</p>
                                        <input
                                            class=" w-full  bg-azureish_white px-3 py-2 rounded-md appearance-none focus:outline-none"
                                            type="text" name="c_phone" required>
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
                                                    <p class=" text-xl font-medium text-black">Delivery Charhe</p>
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
                                    <div class="mt-10 flex justify-end">
                                        <button type="submit" class=" bg-[#357403] px-4 py-2 text-white">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
