@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-4">
        @include('layouts.sidebar')
    </div>
    <div class="col-lg-8">
        <section class="maessages">
            <div class="container-fluid">
                <div>
                    <div class="text-center namePageBody pt-3">
                        <h1><i class="fa-regular fa-message"></i>Messages</h1>
                    </div>
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" value="{{route('SendMessageView',Auth::user()->random)}}" id="myInput">
                        <div class="input-group-append">
                            <button class="btn shareWithFriends" onclick="myFunction()" type="button">Share With Friends</button>
                        </div>
                    </div>
                    <div>
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">Msg 1 </h4>
                            @if($messages->count()>0)
                                @foreach($messages as $message)
                                    <div>
                                        <p>{{$message->message}}</p>
                                        <a href="{{route('favourite',$message->id)}}">@if($message->favourite)<i class="fa-solid fa-heart"></i> @else <i class="fa-regular fa-heart"></i> @endif</a>
                                        <small class="pb-3">{{$message->created_at}}</small>
                                    </div>
                                @endforeach
                            @endif
                            <hr>

                        </div>

                    </div>
                </div>
            </div>

        </section>


    </div>

</div>
@endsection
<script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied the text: ");
    }
</script>
