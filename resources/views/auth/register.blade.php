@extends('layouts.master')
@section('title' )
    @lang('custom.register')
@endsection
@section('content')
<div class="container registar">
    <div class="row justify-content-center customRegistar">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('custom.register') </div>

                <div class="card-body">
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang('custom.name')</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang('custom.email_adress') @endlang</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

{{--                        <div class="row mb-3">--}}
{{--                            <label for="profile_image"--}}
{{--                                   class="col-md-4 col-form-label text-md-end">Profile Image (Optional)</label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <input type="file" class="form-control" name="profile_image" >--}}
{{--                                @error('profile_image')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">@lang('custom.password')</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">@lang('custom.confirm_password')</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0 registarButton">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn theme-color">
                                   @lang('custom.register')
                                </button>
                            </div>
                        </div>

                        <div class="auth__social-media">
                            <p>
                                <span> أو استخدم إحدى هذه الخيارات</span>
                            </p>

                            <div class="sites">
                                <a href="{{route('social_login','google')}}">
                                    <span>
                                        المتابعة باستخدام حساب Google
                                    </span>
                                    <img src="{{asset('/assets/images/icons/google.png')}}" alt="google">
                                </a>
                                <a href="{{route('social_login','facebook')}}">
                                   <span>
                                        المتابعة باستخدام حساب Facebook
                                    </span>
                                    <img src="{{asset('/assets/images/icons/facebook.png')}}" alt="facebook">
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
