@extends('layouts.master')
@section('title')
    {{__('custom.messages')}}
@endsection
@section('content')
  <section class="contact-us pt-3">
      <div class="container">
          <h2 class="text-center">
              {{__('custom.msg_desc')}}
          </h2>
      </div>
  </section>

  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif

  {{$user->profile_image}}
    <hr class="container mb-3">
    <section class="form-contact-us container">
        <form action="{{route('SentMessage',$user->random)}}" method="post">
            @csrf
            <div class="form-group text-center">
                <p>{{__('custom.send_user')}}</p>
                <label for="exampleInputEmail1" class="text-capitalize">{{$user->name}}</label>
                <textarea class="form-control" name="message" id="exampleInputEmail1" ></textarea>
            </div>
            <div class="text-center btnContactUs custom">
                <button type="submit" class="btn btn-link border">{{__('custom.send')}}</button>
            </div>
        </form>

    </section>


@endsection

