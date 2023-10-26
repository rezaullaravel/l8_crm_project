{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('frontend.frontend_master')
@section('content')
    {{-- =============Register-start============ --}}
    <section>
        <div class=" py-20">
            <div class="container mx-auto">
                <div class=" w-4/5 mx-auto  shadow-shadow_card  rounded-md">
                    <div class="grid grid-cols-12 gap-10 items-center">
                        <div class=" col-span-5">
                            <div class=" flex justify-center">
                                <img src="{{ asset('frontend/asset/img/account.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class=" col-span-7">
                            <div class="p-10">

                                <div class=" bg-almond py-2.5 px-5 rounded-lg mt-6">
                                    <h2 class=" text-xl font-bold text-black">Login</h2>
                                </div>


                                <div class=" mt-5">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mt-3">
                                            <h2 class=" text-sm font-normal text-black">Email</h2>
                                            <div class="mt-2 input_area">
                                                    <input id="email" type="email" class="bg-almond focus:outline-none pl-3 pr-10 py-2 rounded-lg w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                <div class=" input_icon text-black text-lg leading-none">
                                                    <iconify-icon icon="clarity:email-line"></iconify-icon>
                                                </div>
                                            </div>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                        <div class="mt-3">
                                            <h2 class=" text-sm font-normal text-black">Password</h2>
                                            <div class="mt-2 input_area">
                                                    <input id="passwordlog" type="password" class="bg-almond focus:outline-none pl-3 pr-10 py-2 rounded-lg w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                <div class=" input_icon text-black text-lg leading-none cursor-pointer">
                                                    <i class="fas fa-eye-slash" id="eyelog"></i>

                                                </div>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class=" flex justify-start mt-6">
                                            <button type="submit"
                                                class=" text-black text-xs  hover:bg-palecyan px-6 py-2   bg-almond">Login</button>
                                        </div>
                                    </form>
                                    <div class=" mt-2.5">
                                        <a href="{{ url('register') }}"
                                            class=" text-base text-black font-normal hover:underline hover:underline-offset-4">Have
                                            any Account ? <span class=" text-blue-500">Register</span></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- =============Register-End============ --}}
@endsection
