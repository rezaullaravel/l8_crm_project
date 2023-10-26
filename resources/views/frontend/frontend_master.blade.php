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
        <div class=" bg-[#484692] py-2 lg:py-6 px-3 lg:px-16 xl:px-0 nav_area">
            <div class="container mx-auto">
                <div class="grid grid-cols-12  items-center">
                    <div class=" col-span-3">
                        <div class="">
                            <h2 class=" text-4xl text-crayola font-bold">Logo</h2>
                        </div>
                    </div>
                    <div class="col-span-6 main_menu">
                        <ul class="lg:flex justify-center items-center
                            gap-8">
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                    href="{{ url('/') }}">Home</a>
                            </li>
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                    href="#">About</a>
                            </li>
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                    href="#">Shop</a>
                            </li>
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                    href="#">Blog</a>
                            </li>
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                    href="#">Contact</a>
                            </li>
                            @if (Auth::check() && Auth::user()->role=='0')
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                href="{{ url('/home') }}">Dashboard</a>
                            </li>
                            @endif

                            @if (Auth::check() && Auth::user()->role=='1')
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                href="{{ url('/admin/dashboard') }}">A Dashboard</a>
                            </li>
                            @endif

                            @if (Auth::check() && Auth::user()->role=='2')
                            <li><a class=" text-lg font-bold text-white hover:text-crayola font-satoshi"
                                href="{{ url('/employee/dashboard') }}">E Dashboard</a>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-span-6  lg:col-span-3">
                        <div class=" flex justify-center lg:justify-end items-center gap-6 mt-3">
                            <div class="hidden lg:flex">
                                <button class=" text-white hover:text-crayola text-2xl"><iconify-icon
                                        icon="prime:search"></iconify-icon></button>
                            </div>
                          @if (!Auth::check())
                          <div class="">
                            <a class=" text-white hover:text-crayola text-2xl" href="{{ url('/login') }}" title="Login"><iconify-icon
                                    icon="mdi:user"></iconify-icon></a>
                          </div>
                          @endif
                            <div class="">
                                <div class="cart_icon">
                                    <a class=" text-white hover:text-crayola text-2xl" href="{{ route('cart-product.view') }}"><iconify-icon
                                            icon="mdi:cart-outline"></iconify-icon></a>
                                    {{-- cart item count start --}}
                                    @if (Auth::check())
                                    @php
                                     $cartProducts = DB::table('shopping_carts')->where('user_id',Auth::user()->id)->count();
                                     @endphp
                                    <div
                                        class=" w-5 h-5 bg-crayola rounded-full flex  justify-center items-center cart_count">
                                        <p class=" text-white text-[10px]">{{ $cartProducts }}</p>
                                    </div>
                                    @endif
                                    {{-- cart item count end --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-3 lg:hidden ">
                        <div class=" flex justify-end">
                            <button id="menu_btn" class=" text-2xl text-white leading-none">
                                <iconify-icon icon="ic:round-menu"></iconify-icon>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    @yield('content')
    <footer>
        <div class=" bg-[#484692] pt-10 pb-2 px-3 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-10">
                    <div class="">
                        <h2 class=" text-white text-xl lg:text-lg text-center lg:text-left font-bold">Explore</h2>
                        <div class="mt-5">
                            <ul>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline text-center ">Terms &
                                        Conditions</a></li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Privacy</a></li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline ">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class=" text-white text-xl lg:text-lg text-center lg:text-left font-bold">Company</h2>
                        <div class="mt-5">
                            <ul>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Blog</a></li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class=" text-white text-xl lg:text-lg text-center lg:text-left font-bold">Articles</h2>
                        <div class="mt-5">
                            <ul>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Sales Tracking Software</a>
                                </li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Sales Analytics Software</a>
                                </li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Capsule CRM Software</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class=" text-white text-xl lg:text-lg text-center lg:text-left font-bold">Industries</h2>
                        <div class="mt-5">
                            <ul>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">For Startups</a></li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">For Small Business</a></li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">For Mid-Sized Business</a>
                                </li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Real Estate</a>
                                </li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Travel Agencies</a>
                                </li>
                                <li class=" mb-4 text-center lg:text-left"><a href="#"
                                        class=" text-[#EADDFF]  text-base hover:underline">Hotels and Hospitalities</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" border-t border-[#EADDFF]  md:flex justify-between items-center">
                    <div class=" flex justify-center md:justify-start items-center gap-5">
                        <div class="">
                            <a href="">
                                <div class=" flex items-center gap-3">
                                    <div class=" text-2xl mt-2 ">
                                        <iconify-icon icon="logos:facebook"></iconify-icon>
                                    </div>
                                    <div class=" text-sm text-white">
                                        Like us
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a href="">
                                <div class=" flex items-center gap-3">
                                    <div class=" text-2xl mt-2 ">
                                        <iconify-icon icon="logos:twitter"></iconify-icon>
                                    </div>
                                    <div class=" text-sm text-white">
                                        Follow us
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="">
                            <div class=" flex items-center justify-center gap-3">
                                <div class=" text-lg md:text-2xl mt-2 text-white ">
                                    <iconify-icon icon="mdi:copyright"></iconify-icon>
                                </div>
                                <div class="text-sm md:text-sm text-white">
                                    Copyright 2023. All Rights Reserved by CRM
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="{{ asset('frontend/asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/coustom.js') }}"></script>
</body>

</html>
