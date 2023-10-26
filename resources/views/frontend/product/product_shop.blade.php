@extends('frontend.frontend_master')
@section('content')
    {{-- ===========Shop-heading-start====== --}}
    <section>
        <div class="px-3 lg:px-10 xl:px-0">
            <div class="container mx-auto">
                <div class=" flex justify-between items-center py-5">
                    <div class=" flex items-center gap-2">
                        <div class="">
                            <a class=" text-xl font-medium text-black hover:text-palecyan hover:underline"
                                href="{{ url('/home') }}">Home /</a>
                        </div>
                        <div class="">
                            <a class="text-xl font-medium text-black hover:text-palecyan hover:underline"
                                href="{{ url('/shop') }}">Shop</a>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <div class="">
                                <p class="text-base text-neonblue">30 days return period</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- ===========Shop-heading-start====== --}}
    <section>
        <div class=" px-3 lg:px-10 xl:px-0 mb-10">
            <div class="container mx-auto">
                <div class="lg:grid lg:grid-cols-12 lg:gap-6">
                    <div class=" col-span-3">
                        <div class="lg:mb-5 md:mb-0">
                            <form action="">
                                <div class="search_input">
                                    <input type="text" placeholder="Search"
                                        class="border-b border-black focus:outline-none text-xl text-black w-full px-4 py-2">

                                    <div class="search_icon">
                                        <button type="submit" class=" text-2xl text-black"> <iconify-icon
                                                icon="iconamoon:search-thin"></iconify-icon></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="grid lg:grid-cols-none md:grid-cols-2 grid-cols-1 gap-6 lg:gap-5 mt-10 lg:mt-0">
                            <div class="item border-b border-black py-3">
                                <a class="sub-btn text-2xl font-medium text-black">

                                    <div class=" flex justify-between items-center">
                                        <span>Categories</span>
                                        <div class="">
                                            <i class="fas fa-angle-right dropdown"></i>
                                        </div>
                                    </div>


                                </a>
                                <div class="sub-menu">
                                    <a href="#" class="sub-item  text-sm font-normal px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Smartwatch.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Watches, Bags & Jewellery</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Typing.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Electronic Devices</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Appliance.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>TV & Home Appliances</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Food.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Groceries</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Fashion.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Women’s & Girls Fashion</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Suit.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Men’s & Boys Fashion</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Magneticsensor.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Electronic Accessories</span>

                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="item border-b border-black py-3">
                                <a class="sub-btn text-2xl font-medium text-black">
                                    <div class=" flex justify-between items-center">
                                        <span>Brand</span>
                                        <div class="">
                                            <i class="fas fa-angle-right dropdown"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="sub-menu">
                                    <a href="#" class="sub-item  text-sm font-normal px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Brandimage.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Samsungy</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Brandimage.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Sony</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Brandimage.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Hp</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Brandimage.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Chanel</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Brandimage.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>Zip IT Good</span>

                                        </div>
                                    </a>
                                    <a href="#" class="sub-item  text-sm font-normal  px-2 pb-2">
                                        <div class=" flex items-center gap-2">
                                            <span>
                                                <img src="{{ asset('asset/img/Brandimage.png') }}" class=" w-6 h-6"
                                                    alt="">
                                            </span>
                                            <span>BS Leather</span>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item border-b border-black py-3">
                                <p class="text-2xl font-medium text-black">Price</p>
                                <div class=" mt-4">
                                    <form action="">
                                        <div class=" flex gap-3 mmb-3">
                                            <div class=" mt-[2px]">
                                                <input type="checkbox">
                                            </div>
                                            <div class="">
                                                <p class="text-base font-normal font-satoshi  px-2 pb-2">1$
                                                    to 150$</p>
                                            </div>
                                        </div>
                                        <div class=" flex gap-3 mmb-3">
                                            <div class=" mt-[2px]">
                                                <input type="checkbox">
                                            </div>
                                            <div class="">
                                                <p class="text-base font-normal font-satoshi  px-2 pb-2">150$
                                                    to 500 $</p>
                                            </div>
                                        </div>
                                        <div class=" flex gap-3 mmb-3">
                                            <div class=" mt-[2px]">
                                                <input type="checkbox">
                                            </div>
                                            <div class="">
                                                <p class="text-base font-normal font-satoshi  px-2 pb-2">501 $
                                                    to 900 $</p>
                                            </div>
                                        </div>
                                        <div class=" flex gap-3 mmb-3">
                                            <div class=" mt-[2px]">
                                                <input type="checkbox">
                                            </div>
                                            <div class="">
                                                <p class="text-base font-normal font-satoshi  px-2 pb-2">501 $
                                                    to 900 $</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-span-9">
                        <div class="grid  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:gap-5">
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product01.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product02.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product03.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product04.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product05.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product01.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product01.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product02.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product03.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product04.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product05.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                            <div class="">
                                <div class="">
                                    <img class="w-full h-full" src="{{ asset('asset/img/product01.png') }}"
                                        alt="">
                                </div>
                                <div class=" bg-white px-4 py-5">
                                    <div class=" flex justify-between items-start">
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">Sony Camera</h2>
                                        </div>
                                        <div class="">
                                            <h2 class="text-base lg:text-xs text-black">945$</h2>
                                        </div>
                                    </div>
                                    <div class=" mt-3 flex justify-center">
                                        <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                            <div class=" flex items-center gap-2 ">
                                                <div class=" text-base lg:text-sm text-black mt-1">
                                                    <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                </div>
                                                <div class="">
                                                    <span class="text-base lg:text-xs text-black">Add To Cart</span>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            {{-- ==========product======= --}}
                        </div>
                        <div class=" mt-10">
                            <ul class=" flex justify-end gap-3">
                                <li>
                                    <a href="#">
                                        <div
                                            class=" text-4xl w-10 h-10 bg-black text-white p-4   flex justify-center items-center leading-none">
                                            <iconify-icon icon="iconamoon:arrow-left-2-bold"></iconify-icon>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div
                                            class=" text-xl w-10 h-10 bg-crayola text-white p-4   flex justify-center items-center leading-none">
                                            1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div
                                            class=" text-xl w-10 h-10 border border-crayola text-crayola p-4   flex justify-center items-center leading-none">
                                            2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div
                                            class=" text-xl w-10 h-10 border border-crayola text-crayola p-4   flex justify-center items-center leading-none">
                                            3
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div
                                            class=" text-xl w-10 h-10 border border-crayola text-crayola p-4   flex justify-center items-center leading-none">
                                            4
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div
                                            class=" text-4xl w-10 h-10 bg-black text-white p-4   flex justify-center items-center leading-none">
                                            <iconify-icon icon="iconamoon:arrow-right-2-bold"
                                                class=""></iconify-icon>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
