@extends('frontend.frontend_master')

@section('content')
    <section>

        <div class="px-3 py-10 lg:px-16 xl:px-0">
            <div class="container mx-auto">

                <div class="mx-auto lg:w-4/5">
                    <div class="flex flex-wrap">
                        <div class="">
                            <h1>Shipping Address</h1>
                        </div>

                        {{-- @if (Session('message'))
                            <div>
                                {{ Session::get('message') }}
                            </div>
                        @endif --}}

                    </div>

                    <div class="">
                        <form action="{{ route('place.order') }}" method="POST">
                            @csrf
                            <div class="mt-10 items-center gap-20 lg:grid lg:grid-cols-12">
                                <div class="col-span-8">
                                    <div class="grid gap-5 md:grid-cols-2">
                                        <div class="">
                                            <p class="mb-2 ml-2 text-2xl text-black">Customer Name</p>
                                            <input class="w-full rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                                type="text" name="customer_name" value="{{ Auth::user()->name }}"
                                                required disabled>
                                        </div>

                                    </div>
                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">Address<span
                                                style="color: #ff0000;">*</span></p>
                                        <input class="w-full rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                            type="text" name="c_shipping_address" required>
                                    </div>

                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">Country<span
                                                style="color: #ff0000;">*</span></p>
                                        <input class="w-full rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                            type="text" name="c_country" required>
                                    </div>

                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">State</p>
                                        <select class="w-full rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                            name="c_state">
                                            <option value="" selected disabled>Select</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">City<span style="color: #ff0000;">*</span>
                                        </p>
                                        <input class="w-full rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                            type="text" name="c_city" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">Zip Code<span
                                                style="color: #ff0000;">*</span></p>
                                        <input
                                            class="w-full appearance-none rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                            type="text" name="c_zipcode" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">Email<span style="color: #ff0000;">*</span>
                                        </p>
                                        <input class="w-full rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                            type="email" name="c_email" required>
                                    </div>
                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">Phone<span style="color: #ff0000;">*</span>
                                        </p>
                                        <input
                                            class="w-full appearance-none rounded-md bg-azureish_white px-3 py-2 focus:outline-none"
                                            type="text" name="c_phone" required>
                                    </div>

                                    <div class="mt-6">
                                        <p class="mb-2 ml-2 text-2xl text-black">Payment Type<span
                                                style="color: #ff0000;">*</span></p>
                                        <input type="radio" name="payment_type" value="cash_on_delivery" checked>Cash On
                                        Delivery
                                        <input type="radio" name="payment_type" value="paypal">Paypal
                                        <input type="radio" name="payment_type" value="stripe">Stripe
                                    </div>
                                </div>

                                {{-- calculation start --}}
                                <div style="display: none;">
                                    @php
                                        $cartproducts = App\Models\ShoppingCart::where('user_id', Auth::user()->id)->get();
                                        $total = 0;
                                        $total_quantity = 0;
                                    @endphp


                                    <table>
                                        <thead>
                                            <th>qty</th>
                                            <th>price</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartproducts as $product)
                                                <tr>
                                                    <td>{{ $product->quantity }}</td>
                                                    <td>{{ $product->product->price * $product->quantity }}</td>
                                                </tr>
                                                @php
                                                    $total_quantity = $total_quantity + $product->quantity;
                                                    $total = $total + $product->product->price * $product->quantity;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                                {{-- calculation end --}}
                                <div class="col-span-4 mt-4 lg:mt-0">
                                    <div class="rounded-lg bg-azureish_white px-8 pb-10 pt-4">
                                        <h2 class="text-center text-3xl font-bold text-black">Order Summary</h2>
                                        <div class="mt-10">
                                            <div class="flex items-center justify-between">
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">Total Product </p>
                                                </div>
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">{{ $total_quantity }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="flex items-center justify-between">
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">Price</p>
                                                </div>
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">{{ $total }} $</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="flex items-center justify-between">
                                                {{-- <div class="">
                                                    <p class=" text-xl font-medium text-black">Vat</p>
                                                </div>
                                                <div class="">
                                                    <p class=" text-xl font-medium text-black">3$</p>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="mt-3 border border-b-black pb-4">
                                            <div class="flex items-center justify-between">
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">Delivery Charge</p>
                                                </div>
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">1$</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="flex items-center justify-between">
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">Total</p>
                                                </div>
                                                <div class="">
                                                    <p class="text-xl font-medium text-black">{{ $total + 1 }}$</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" name="order_total" value="{{ $total + 1 }}">
                                    @if (count($cartproducts) > 0)
                                        <div class="mt-10 flex justify-end">
                                            <button type="submit" class="bg-[#357403] px-4 py-2 text-white">Place
                                                Order</button>
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

    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "3000",
                "hideDuration": "1000",
                "timeOut": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            @if (Session::has('err'))
                toastr.error('{{ Session::get('err') }}');
            @elseif (Session::has('message'))
                toastr.success('{{ Session::get('message') }}');
            @elseif (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-top-center",
                }
                toastr.warning('{{ Session::get('warning') }}');
            @endif
        });
    </script>
@endsection
