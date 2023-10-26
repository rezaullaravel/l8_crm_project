{{-- <h4>Product single page</h4>
@if (Session('info-message'))
    <h4 style="color:#228b22">{{ Session::get('info-message') }}</h4>
@endif
<img src="{{ asset($product->product_thumbnail) }}" width="200px" height="200px" alt=""> <br><br>
<form action="{{ route('product.add.cart') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="number" name="quantity" min="1" value="1"> </br>
    <button type="submit">Add To Cart</button>
</form> --}}



@extends('frontend.frontend_master')
@section('content')
    <section>
        <div class="px-3 py-12 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="mx-auto lg:w-4/5">
                    <div class="flex">
                        <div class="">
                            <a href="#" class="font-satoshi text-xl font-semibold text-black">Home/</a>
                        </div>
                        <div class="">
                            <a href="#" class="font-satoshi text-xl font-semibold text-black">Shop/</a>
                        </div>
                        <div class="">
                            <p class="font-satoshi text-xl font-semibold text-black">View</p>
                        </div>
                    </div>
                    <div class="mt-12">
                        <div class="md:grid md:grid-cols-2 md:gap-20">
                            <div class="">

                                <div class="swiper product_gellery2">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->multiImages as $image)
                                            <div class="swiper-slide">
                                                <img class="w-full rounded-xl" src="{{ asset($image->product_image) }}" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="mx-auto lg:w-4/5">
                                    <div thumbsSlider="" class="swiper product_gellery mt-6">
                                        <div class="swiper-wrapper">
                                            @foreach ($product->multiImages as $image)
                                                <div class="swiper-slide coursor-pointer">

                                                    <img class="w-full rounded-xl"
                                                        src="{{ asset($image->product_image) }}" />
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-4 md:mt-0">
                                {{-- @if (Session('info-message'))
                                    <h4 style="color:#228b22">{{ Session::get('info-message') }}</h4>
                                @endif --}}
                                <div class="flex justify-center md:justify-start">
                                    <form action="{{ route('product.add.cart') }}" method="POST">
                                        @csrf
                                        {{-- <div class=" flex gap-5 items-center mb-4">
                                            <div class="">
                                                <p class=" text-base  text-black  font-satoshi">Color</p>
                                            </div>
                                            <div class="input_color mt-2">
                                                <input type="radio" name="color" id="red" value="red" />
                                                <label for="red"><span class="red"
                                                        style="background-color: #db2828"></span></label>

                                                <input type="radio" name="color" id="green" />
                                                <label for="green"><span class="green"
                                                        style="background-color: #21ba45"></span></label>

                                                <input type="radio" name="color" id="yellow" />
                                                <label for="yellow"><span class="yellow"
                                                        style="background-color:#fbbd08"></span></label>

                                                <input type="radio" name="color" id="olive" />
                                                <label for="olive"><span class="olive"
                                                        style="background-color: #b5cc18"></span></label>
                                                <input type="radio" name="color" id="black" />
                                                <label for="black"><span class="black"
                                                        style="background-color: #000"></span></label>

                                            </div>
                                        </div> --}}

                                        <h2 class="font-satoshi text-2xl font-semibold text-black">
                                            {{ $product->product_name }}</h2>
                                        <div class="">

                                            <div class="mb-4 flex items-center gap-4">
                                                {{-- <div class=" mt-2">
                                                    <button class=" text-xl text-black">
                                                        <iconify-icon icon="pepicons-pop:line-x"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="mt-1">
                                                    <span class="text-2xl text-black">1</span>
                                                </div>
                                                <div class=" mt-2">
                                                    <button class=" text-xl text-black">
                                                        <iconify-icon icon="fluent:add-12-filled"></iconify-icon>
                                                    </button>
                                                </div> --}}

                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="number" name="quantity" min="1" value="1">

                                            </div>

                                            <div class="">

                                                <h2 class="mb-4 font-satoshi text-2xl font-bold text-black">
                                                    {{ $product->price }} $</h2>
                                            </div>
                                        </div>
                                        <div class="mb-4 flex justify-center md:justify-start">
                                            <button class="bg-crayola px-5 py-1 hover:bg-black hover:text-white"
                                                type="submit">Add to
                                                Cart</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-4 md:mt-0">

                                    {{-- <div class="mt-5">
                                        <div class="">
                                            <p class=" text-base  text-black font-satoshi mb-4">Type:<span
                                                    class=" font-bold"> Wired</span></p>
                                            <p class=" text-base  text-black font-satoshi mb-4">Manufactures:<span
                                                    class=" font-bold"> Sony</span></p>
                                            <p class=" text-base  text-black font-satoshi mb-4">Speaker diameter:<span
                                                    class=" font-bold"> 40mm</span></p>
                                            <p class=" text-base  text-black font-satoshi mb-4">Headphone sensitivity:<span
                                                    class=" font-bold"> 108dB + 3dB</span></p>
                                            <p class=" text-base  text-black font-satoshi mb-4">Headphones frequency
                                                range:<span class=" font-bold"> 20 - 20000Hz</span></p>
                                            <p class=" text-base  text-black font-satoshi mb-4">Connection interfaces:<span
                                                    class=" font-bold"> 3.5mm (mini-jack)</span></p>
                                            <p class=" text-base  text-black font-satoshi mb-4">Cord length:<span
                                                    class=" font-bold"> 1.35m</span></p>
                                            <p class=" text-base  text-black font-satoshi mb-4">Status:<span
                                                    class=" font-bold"> Available</span></p>
                                        </div>
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mt-10 rounded-lg border border-slate-200 p-5">
                        <div class="border-b border-slate-200 pb-4">
                            <h2 class="font-satoshi text-2xl font-semibold">Description</h2>
                        </div>
                        <p class="mt-2 text-justify font-satoshi text-base font-normal text-slate-400">
                            {!! $product->product_description !!}</p>
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
            @if (Session::has('info-message'))
                toastr.error('{{ Session::get('info-message') }}');
            @endif
        });
    </script>
@endsection
