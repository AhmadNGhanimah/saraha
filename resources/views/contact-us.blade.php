@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
  <section class="contact-us pt-3">
      <div class="container">
          <h2>
              You can contact us via the standard form
          </h2>
      </div>
  </section>
    <hr class="container">
    <section class="form-contact-us container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                <small id="emailHelp" class="form-text text-muted">Input Your Full Name</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">The Message</label>
                <textarea class="form-control" id="exampleInputEmail1" ></textarea>
            </div>
            <div class="text-center btnContactUs">
                <button type="submit" class="btn btn-link border">Send</button>

            </div>
        </form>

    </section>


@endsection

