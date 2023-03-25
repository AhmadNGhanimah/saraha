@extends('layouts.master')
<style>


    h1.logo {
        font-size: 4em;
    }

    .bg-fb-blue {
    background: linear-gradient(28deg, #16222A, #1E86AF)
    }

    small.form-text.text-muted a {
        color: #9cb4d8;
    }

    .btn.btn-fb {
        background-color: #16222A;
        border-color: #29487d;
        border-radius: 0;
        color: #ffffff;
    }

    .btn.btn-fb-submit {
        background: linear-gradient(#79bc64, #578843);
        box-shadow: inset 0 1px 1px #a4e388;
        border-color: #3b6e22 #3b6e22 #2c5115;
        color: #ffffff;
    }

    .btn-add-language {
        padding: 2px 9px;
        border-radius: 1px;
    }

    .far, .fas, .fb-icon {
        color: #adb9d3!important;
    }

    .fb-light-blue {
        color: #adb9d3;
    }





</style>
@section('content')
    <div class="container login p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">@lang('custom.email_adress')</label>

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
                                <label for="password" class="col-md-4 col-form-label text-md-end">@lang('custom.password')</label>

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
                                            @lang('custom.remember_me')
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0 buttonlogin">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn theme-color">
                                        @lang('custom.Login') @endlang
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn theme-color-text" href="{{ route('password.request') }}">
                                          @lang('custom.forgotYourPassword')
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
@endsection
