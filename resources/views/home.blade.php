@extends('layouts.master')
@section('title' )
    @lang('custom.messages')
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="maessages">
            <div class="container-fluid">
                <div>
                    <div class="text-center namePageBody pt-3">
                        <h1><i class="fa-regular fa-message"></i>@lang('custom.messages')</h1>
                    </div>
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" value="{{route('SendMessageView',Auth::user()->random)}}" id="myInput">
                        <div class="input-group-append">
                            <button class="btn theme-color" onclick="myFunction()" type="button">@lang('custom.shareFriends')</button>
                        </div>
                    </div>
                    @if($messages->count()>0)
                        @foreach($messages as $message)
                            <div class="card mb-2">
                                <div class="card-body">
                                    {{$message->message}}
                                    <div>
                                    <small class="pb-3 text-secondary">{{$message->created_at}}</small>
{{--                                        <a href="{{route('favourite',$message->id)}}">@if($message->favourite)<i class="fa-solid fa-heart"></i> @else <i class="fa-regular fa-heart"></i> @endif</a>--}}
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif


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
        alert("The Text Copied ");
    }
</script>
