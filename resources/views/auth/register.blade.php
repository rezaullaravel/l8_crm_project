{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label  class="col-md-4 col-form-label text-md-end">{{ __('Register As') }}</label>

                            <div class="col-md-6">
                                <select   class="form-control" name="role" required>
                                    <option value="0" selected>User</option>
                                    <option value="2">Employee</option>
                                </select>

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
                                <h2 class="text-base text-black">Start for free</h2>
                                <div class=" bg-almond py-2.5 px-5 rounded-lg mt-6">
                                    <h2 class=" text-xl font-bold text-black">Create new account</h2>
                                </div>


                                <div class=" mt-5">

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div>
                                            <div class="">
                                                <h2 class=" text-sm font-normal text-black">Name</h2>
                                                <div class="mt-2 input_area">
                                                        <input id="name" type="text" class="bg-almond focus:outline-none pl-3 pr-7 py-2 rounded-lg w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    <div class=" input_icon text-black text-2xl leading-none">
                                                        <iconify-icon icon="basil:user-outline"></iconify-icon>
                                                    </div>
                                                </div>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h2 class=" text-sm font-normal text-black">Email</h2>
                                            <div class="mt-2 input_area">
                                                    <input id="email" type="email" class="bg-almond focus:outline-none pl-3 pr-10 py-2 rounded-lg w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                                    <input id="password" type="password" class="bg-almond focus:outline-none pl-3 pr-10 py-2 rounded-lg w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                <div class=" input_icon text-black text-lg leading-none cursor-pointer">
                                                    <i class="fas fa-eye-slash" id="eye"></i>

                                                </div>
                                            </div>

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                           @enderror
                                        </div>

                                        <div class="mt-3">
                                            <h2 class=" text-sm font-normal text-black">Confirm Password</h2>
                                            <div class="mt-2 input_area">


                                                    <input id="password-confirm" type="password" class="bg-almond focus:outline-none pl-3 pr-10 py-2 rounded-lg w-full" name="password_confirmation" required autocomplete="new-password">
                                                <div class=" input_icon text-black text-lg leading-none cursor-pointer">
                                                    <i class="fas fa-eye-slash" id="eye2"></i>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <h2 class=" text-sm font-normal text-black">Register As</h2>
                                            <div class="mt-2 input_area">


                                                    <select   class="bg-almond focus:outline-none pl-3 pr-10 py-2 rounded-lg w-full" name="role" required>
                                                        <option value="0" selected>User</option>
                                                        <option value="2">Employee</option>
                                                    </select>

                                            </div>
                                        </div>
                                        <div class=" flex justify-start mt-6">
                                            <button type="submit"
                                                class=" text-black text-xs  hover:bg-palecyan px-6 py-2   bg-almond">Create
                                                account</button>
                                        </div>
                                    </form>
                                    <div class=" mt-2.5">
                                        <a href="{{ url('login') }}"
                                            class=" text-base text-black font-normal hover:underline hover:underline-offset-4">Already
                                            a
                                            member? <span class=" text-blue-500">Log
                                                In</span></a>
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
