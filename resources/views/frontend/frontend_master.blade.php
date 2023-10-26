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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/app.js') }}"></script>


</head>

<body>

    <nav>
        <div class="nav_area bg-[#484692] px-3 py-2 lg:px-16 lg:py-6 xl:px-0">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 items-center">
                    <div class="col-span-3">
                        <div class="">
                            <h2 class="text-4xl font-bold text-crayola">Logo</h2>
                        </div>
                    </div>
                    <div class="main_menu col-span-6">
                        <ul class="items-center justify-center gap-8 lg:flex">
                            <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                    href="{{ url('/') }}">Home</a>
                            </li>
                            <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                    href="#">About</a>
                            </li>
                            <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                    href="#">Shop</a>
                            </li>
                            <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                    href="#">Blog</a>
                            </li>
                            <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                    href="#">Contact</a>
                            </li>
                            @if (Auth::check() && Auth::user()->role == '0')
                                <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                        href="{{ url('/home') }}">Dashboard</a>
                                </li>
                            @endif

                            @if (Auth::check() && Auth::user()->role == '1')
                                <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                        href="{{ url('/admin/dashboard') }}">A Dashboard</a>
                                </li>
                            @endif

                            @if (Auth::check() && Auth::user()->role == '2')
                                <li><a class="font-satoshi text-lg font-bold text-white hover:text-crayola"
                                        href="{{ url('/employee/dashboard') }}">E Dashboard</a>
                                </li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-span-6 lg:col-span-3">
                        <div class="mt-3 flex items-center justify-center gap-6 lg:justify-end">
                            <div class="hidden lg:flex">
                                <button class="text-2xl text-white hover:text-crayola"><iconify-icon
                                        icon="prime:search"></iconify-icon></button>
                            </div>
                            @if (!Auth::check())
                                <div class="">
                                    <a class="text-2xl text-white hover:text-crayola" href="{{ url('/login') }}"
                                        title="Login"><iconify-icon icon="mdi:user"></iconify-icon></a>
                                </div>
                            @endif
                            <div class="">
                                <div class="cart_icon">
                                    <a class="text-2xl text-white hover:text-crayola"
                                        href="{{ route('cart-product.view') }}"><iconify-icon
                                            icon="mdi:cart-outline"></iconify-icon></a>
                                    {{-- cart item count start --}}
                                    @if (Auth::check())
                                        @php
                                            $cartProducts = DB::table('shopping_carts')
                                                ->where('user_id', Auth::user()->id)
                                                ->count();
                                        @endphp
                                        <div
                                            class="cart_count flex h-5 w-5 items-center justify-center rounded-full bg-crayola">
                                            <p class="text-[10px] text-white">{{ $cartProducts }}</p>
                                        </div>
                                    @endif
                                    {{-- cart item count end --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-3 lg:hidden">
                        <div class="flex justify-end">
                            <button id="menu_btn" class="text-2xl leading-none text-white">
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
        <div class="bg-[#484692] px-3 pb-2 pt-10 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="grid gap-3 md:grid-cols-2 lg:grid-cols-4 lg:gap-10">
                    <div class="">
                        <h2 class="text-center text-xl font-bold text-white lg:text-left lg:text-lg">Explore</h2>
                        <div class="mt-5">
                            <ul>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-center text-base text-[#EADDFF] hover:underline">Terms &
                                        Conditions</a></li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Privacy</a></li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-center text-xl font-bold text-white lg:text-left lg:text-lg">Company</h2>
                        <div class="mt-5">
                            <ul>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Blog</a></li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-center text-xl font-bold text-white lg:text-left lg:text-lg">Articles</h2>
                        <div class="mt-5">
                            <ul>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Sales Tracking Software</a>
                                </li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Sales Analytics Software</a>
                                </li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Capsule CRM Software</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-center text-xl font-bold text-white lg:text-left lg:text-lg">Industries</h2>
                        <div class="mt-5">
                            <ul>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">For Startups</a></li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">For Small Business</a></li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">For Mid-Sized Business</a>
                                </li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Real Estate</a>
                                </li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Travel Agencies</a>
                                </li>
                                <li class="mb-4 text-center lg:text-left"><a href="#"
                                        class="text-base text-[#EADDFF] hover:underline">Hotels and Hospitalities</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="items-center justify-between border-t border-[#EADDFF] md:flex">
                    <div class="flex items-center justify-center gap-5 md:justify-start">
                        <div class="">
                            <a href="">
                                <div class="flex items-center gap-3">
                                    <div class="mt-2 text-2xl">
                                        <iconify-icon icon="logos:facebook"></iconify-icon>
                                    </div>
                                    <div class="text-sm text-white">
                                        Like us
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="">
                            <a href="">
                                <div class="flex items-center gap-3">
                                    <div class="mt-2 text-2xl">
                                        <iconify-icon icon="logos:twitter"></iconify-icon>
                                    </div>
                                    <div class="text-sm text-white">
                                        Follow us
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="">
                            <div class="flex items-center justify-center gap-3">
                                <div class="mt-2 text-lg text-white md:text-2xl">
                                    <iconify-icon icon="mdi:copyright"></iconify-icon>
                                </div>
                                <div class="text-sm text-white md:text-sm">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            @if (Session::has('err'))
                toastr.error('{{ Session::get('err') }}');
            @elseif (Session::has('info-message'))
                toastr.success('{{ Session::get('info-message') }}');
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
    <script src="{{ asset('frontend/asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/coustom.js') }}"></script>
</body>

</html>
