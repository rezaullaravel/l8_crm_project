<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>


</head>

<body>
    <nav>
        <div class="bg-crayola py-4 pl-4 pr-5 lg:px-16 xl:px-0 nav_area ">
            <div class="container mx-auto">
                <div class=" grid grid-cols-12 items-center gap-3">
                    <div class=" col-span-2 md:col-span-3">
                        <div class=" flex items-center gap-5">
                            <div class="">
                                <button class="text-3xl text-black leading-none"><iconify-icon
                                        icon="ic:round-menu"></iconify-icon></button>
                            </div>
                            <div class=" hidden md:flex">
                                <a href="#" class=" text-2xl text-black font-semibold leading-none">SHOP</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-span-8 md:col-span-6">
                        <form action="">
                            <div class="search_area">
                                <input
                                    class="w-full py-2 md:py-3 lg:pl-4 pl-2 pr-8 lg:pr-10 rounded-md text-xl font-normal text-black  font-satoshi focus:outline-none"
                                    type="text" placeholder="Search">
                                <div class=" search_btn">
                                    <button class=" text-lg md:text-2xl text-black"><iconify-icon
                                            icon="prime:search"></iconify-icon></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-span-2  md:col-span-3">
                        <div class=" cart_btn  flex justify-end">
                            <div class="">
                                {{-- shopping cart start --}}
                                <div class="">
                                    <a class=" text-2xl text-black" href="{{ route('cart-product.view') }}"><iconify-icon
                                            icon="mdi:cart"></iconify-icon></a>
                                </div>
                                 {{-- shopping cart end --}}
                                @if (Auth::check())
                                 @php
                                     $cartProducts = DB::table('shopping_carts')->where('user_id',Auth::user()->id)->count();
                                 @endphp
                                <div
                                   class="product_count flex justify-center items-center bg-white w-5 h-5 rounded-full">
                                    <h2 class=" text-xs text-crayola">{{  $cartProducts }}</h2>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    @yield('content')









    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="{{ asset('frontend/asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/coustom.js') }}"></script>
</body>

</html>
