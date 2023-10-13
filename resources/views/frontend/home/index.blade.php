@extends('frontend.frontend_master')

@section('content')
    {{-- ==============Hero-start============ --}}
    <section>
        <div class="heroBanner  pt-14 pb-24" style="background-image: url('{{ asset('frontend/asset/img/hero.jpg') }}')">
            <div class=" container mx-auto">
                <div class="">
                    <div class="grid grid-cols-2  justify-between">
                        <div class="">
                            <h2 class=" text-3xl text-white font-satoshi font-bold">An Intuitive & Impactful
                                <br>Customer Experience <br> Platform
                            </h2>
                            <p class=" text-sm font-satoshi text-white font-medium mt-4">The purpose of business is to
                                create
                                and <br> keep a customer.</p>
                        </div>
                        <div class="flex justify-end">
                            <div class="  w-2/4">
                                <h2 class=" text-lg font-normal text-white mb-6">Create your account</h2>
                                <form action="">
                                    <div class="mb-3">
                                        <input
                                            class=" bg-transparent border-b border-x-white w-full  focus:outline-none text-white placeholder:text-white  text-xs  px-2 py-2 "
                                            type="text" placeholder="Name">
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class=" bg-transparent border-b border-x-white w-full  focus:outline-none text-white placeholder:text-white  text-xs  px-2 py-2 "
                                            type="email" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input
                                            class=" bg-transparent border-b border-x-white w-full  focus:outline-none text-white placeholder:text-white  text-xs  px-2 py-2 "
                                            type="password" placeholder="Password">
                                    </div>
                                    <div class=" flex justify-end mt-10">
                                        <button type="submit"
                                            class=" text-black text-xs  bg-palecyan px-6 py-2  hover:bg-white">Get
                                            Started</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ==============Hero-end============ --}}
    {{-- ==============Who We Are start============ --}}
    <section>
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-8">
                <div class=" col-span-4">
                    <img class="w-full" src="{{ asset('frontend/asset/img/whoweare.png') }}" alt="">
                </div>
                <div class=" col-span-8">
                    <div class="py-6">
                        <h2 class=" text-2xl font-bold  text-black">Who We Are</h2>
                        <div class=" mt-8">
                            <p class=" text-xl text-black font-normal">We believe in the power of strong relationships.
                                Our mission to transform the way
                                businesses connect with their customers. Today, we stand as a trust.. Our mission to
                                transform the way</p>
                        </div>
                        <div class=" mt-5">
                            <a href="{{ url('about') }}" class=" text-base text-black hover:text-palecyan">
                                <div class=" flex items-center gap-3 justify-end">
                                    <div class=""> Read More </div>
                                    <div class=" mt-2"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ==============Who we are end============ --}}
    {{-- ==============Coustomer Need start============ --}}
    <section>
        <div class="coustomer_need" style="background-image: url('{{ asset('frontend/asset/img/coustomer-need.png') }}')">

            <div class="container  mx-auto">
                <div class="grid grid-cols-12">
                    <div class=" col-span-4">
                        <div class=" pt-12  pb-9">
                            <h2 class="text-2xl font-bold  text-black">We Know the <br>Customers’s Needs</h2>
                            <div class=" flex  justify-center mt-10">
                                <a href="" class=" text-black text-xs  bg-palecyan px-6 py-2  hover:bg-white">Know
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-span-8">
                        <div class=" flex justify-end">
                            <img class="" src="{{ asset('frontend/asset/img/coustomer.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- ==============Coustomer need End============ --}}

    {{-- ==============Features strat============ --}}
    <section>
        <div class="py-8">
            <div class="container mx-auto">
                <div class="">
                    <div class=" flex items-center gap-2.5">
                        <div class="">
                            <h2 class=" text-2xl text-black">Features</h2>
                        </div>
                        <div class="">
                            <img class=" w-6 h-6" src="{{ asset('frontend/asset/img/fetures.png') }}" alt="">
                        </div>
                    </div>
                    <div class=" mt-3">
                        <h2 class="text-2xl font-bold  text-black">We are Excited to Present <br>
                            Our World Class Digital Solution</h2>
                    </div>
                </div>
                <div class=" mt-10">
                    <div class="grid grid-cols-4 gap-10">
                        <div class="">
                            <div class=" feture_card px-6 py-10 ">
                                <div class="feture_icon">
                                    <img src="{{ asset('frontend/asset/img/Stopwatch.png') }}" alt="">
                                </div>
                                <div class=" fetuer_info mt-4">
                                    <p class=" text-base font-bold ">Real Time Customer Activity Tracking</p>
                                    <p class=" text-xs font-normal mt-3">System tracking is data that is collected ans
                                        accessible at the time of creation.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <div class=" feture_card px-6 py-10 ">
                                <div class="feture_icon">
                                    <img src="{{ asset('frontend/asset/img/Speechbubble.png') }}" alt="">
                                </div>
                                <div class=" fetuer_info mt-4">
                                    <p class=" text-base font-bold ">Centralized all your
                                        Communication</p>
                                    <p class=" text-xs font-normal mt-3">Share project plans, and files in a central
                                        hub, your project management software.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <div class=" feture_card px-6 py-10 ">
                                <div class="feture_icon">
                                    <img src="{{ asset('frontend/asset/img/Analysis.png') }}" alt="">
                                </div>
                                <div class=" fetuer_info mt-4">
                                    <p class=" text-base font-bold ">Customer Reporting & <br> Analysis</p>
                                    <p class=" text-xs font-normal mt-3">Our cusyomised SaaS reporting helps in
                                        crunching additional data in one place.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="">
                            <div class=" feture_card px-6 py-10 ">
                                <div class="feture_icon">
                                    <img src="{{ asset('frontend/asset/img/Analysis.png') }}" alt="">
                                </div>
                                <div class=" fetuer_info mt-4">
                                    <p class=" text-base font-bold ">Task Management <br> Sytem</p>
                                    <p class=" text-xs font-normal mt-3">Task Management is an essential part of
                                        improving the way things get done.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- ==============Features End============ --}}
    {{-- ==============Crm start============ --}}
    <section>
        <div class=" bg-palecyan py-10">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold  text-black text-center">CRM for Marketing and Support</h2>
                <div class="  w-4/5 mx-auto mt-3">
                    <p class=" text-sm text-black text-center">CRM is the only end-to-end customer engagement suite
                        with
                        all the sales marketing and support apps to
                        your customer-facing needs to engage with customers across every touchpoint. Add context to your
                        interactions and get the full picture so you can provide an amazing customer experience.
                    </p>
                </div>
                <div class=" flex justify-center mt-5">
                    <img src="{{ asset('frontend/asset/img/crmsupport.png') }}" alt="">
                </div>
                <div class=" mt-8">
                    <h2 class=" text-base font-bold text-black text-center">All in One Package</h2>
                    <div class=" mt-10">
                        <div class="grid grid-cols-5 gap-7">
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Visitor Tracking</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Help Desk</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Activity Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Sales Performance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Project Collaboration </p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Social Media</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Customer Survey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Marketing Automation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Extend Customize</p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" flex items-center gap-2">
                                    <div class="">
                                        <img src="{{ asset('frontend/asset/img/Greendot.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <p class=" text-sm text-black">Matrices & KPI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" flex  justify-center mt-10">
                            <a href="" class=" text-black text-xs  bg-crayola px-6 py-2  hover:bg-white">Know
                                More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- ==============Cnd End============ --}}

    {{-- ===========Our-product-start========== --}}
    <section>
        <div class=" py-10">
            <h2 class="text-2xl text-black text-center font-bold mb-3">Our Product</h2>

            <div class=" bg-palecyan py-3">
                <div class="  container mx-auto">

                    <div class="swiper myproduct">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product01.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Sony Camera</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">945$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product02.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Grocery Item</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">5$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product03.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Wrist Watch</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">18$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product04.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Perl Jewellery</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">45$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product05.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Grocery Item</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">5$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product01.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Sony Camera</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">945$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product02.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Grocery Item</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">5$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product03.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Wrist Watch</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">18$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product04.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Perl Jewellery</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">45$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="">
                                        <img class="w-full h-full" src="{{ asset('frontend/asset/img/product05.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" bg-white px-4 py-5">
                                        <div class=" flex justify-between items-start">
                                            <div class="">
                                                <h2 class=" text-xs text-black">Grocery Item</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-xs text-black">5$</h2>
                                            </div>
                                        </div>
                                        <div class=" mt-3 flex justify-center">
                                            <a href="#" class="  bg-crayola hover:bg-palecyan inline-block px-2">
                                                <div class=" flex items-center gap-2 ">
                                                    <div class="  text-sm text-black mt-1">
                                                        <iconify-icon icon="mdi:cart-variant"></iconify-icon>
                                                    </div>
                                                    <div class="">
                                                        <span class="text-xs text-black">Add To Cart</span>
                                                    </div>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div>
                    <div class=" flex  justify-center mt-10">
                        <a href="{{ url('shop') }}"
                            class=" text-black text-xs  bg-crayola px-6 py-2  hover:bg-white">EXPLORE
                            ALL
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- ===========Our-product-End========== --}}

    {{-- ===========Crm Tools start========== --}}
    <section>
        <div class=" crm_tools pt-16 pb-8" style="background-image: url('{{ asset('frontend/asset/img/crmtools.jpg') }}')">
            <div class=" container mx-auto">
                <h2 class="text-2xl  text-white text-center">CRM Tools that make you business grow </h2>
                <div class=" w-2/5 mx-auto mt-6">
                    <p class=" text-lg text-white text-center leading-none">Our Features needed to make customer <br>
                        acquisition
                        easier
                    </p>
                </div>
                <div class=" flex  justify-center mt-10">
                    <a href="" class=" text-black text-xs  bg-crayola px-6 py-2  hover:bg-white">Know
                        More</a>
                </div>
            </div>
        </div>
    </section>
    {{-- ===========Crm Tools end========== --}}
@endsection
