@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <p> {{route('SendMessageView',Auth::user()->random)}}</p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif


                    @foreach($messages as $message)
                            <div>
                                <p>{{$message->message}}</p>
                                <a href="{{route('favourite',$message->id)}}">@if($message->favourite)<i class="fa-solid fa-heart"></i> @else <i class="fa-regular fa-heart"></i> @endif</a>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
