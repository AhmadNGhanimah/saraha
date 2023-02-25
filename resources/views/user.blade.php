@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
  <section class="contact-us pt-3">
      <div class="container">
          <h2>
              {{__('custom.welcome')}}
          </h2>
      </div>
  </section>

  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif

  {{$user->profile_image}}
    <hr class="container">
    <section class="form-contact-us container">
        <form action="{{route('SentMessage',$user->random)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">The Message For {{$user->name}}</label>
                <textarea class="form-control" name="message" id="exampleInputEmail1" ></textarea>
            </div>
            <div class="text-center btnContactUs">
                <button type="submit" class="btn btn-link border">Send</button>
            </div>
        </form>

    </section>


@endsection

