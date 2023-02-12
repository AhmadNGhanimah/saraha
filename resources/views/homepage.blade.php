@extends('layouts.master')
@section('title')
Home
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-4">
            @include('layouts.sidebar')
        </div>
      <div class="col-lg-8">
          @include('messages')
      </div>

    </div>


@endsection

