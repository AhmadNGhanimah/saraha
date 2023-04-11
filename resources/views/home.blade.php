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
                    <div class="alert alert-success" id="success-alert" style="display: none">
                        تم النسخ
                    </div>
                    <div class="input-group mb-3 customIcons">
                        <input type="text" class="form-control" id="my-link" value="{{route('SendMessageView',Auth::user()->random)}}" >
                        <div class="input-group-append">
                            <button class="btn theme-color customButtonMsg" data-clipboard-target="#my-link"   type="button">@lang('custom.shareFriends')</button>

                            <div class="justify-content-start d-flex">
                                <a href="https://twitter.com/share?url={{route('SendMessageView',Auth::user()->random)}}" target="_blank">
                                    <i class="fa-brands fa-twitter fa-2xl twitter"></i>
                                </a>

                                <a href="https://www.facebook.com/sharer/sharer.php?u={{route('SendMessageView',Auth::user()->random)}}" target="_blank">
                                    <i class="fa-brands fa-facebook fa-2xl facebook"></i>
                                </a>

                                <a href="https://wa.me/?text={{route('SendMessageView',Auth::user()->random)}}" target="_blank">
                                    <i class="fa-brands fa-whatsapp fa-2xl whatsapp"></i>

                                </a>
                            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js" integrity="sha512-7O5pXpc0oCRrxk8RUfDYFgn0nO1t+jLuIOQdOMRp4APB7uZ4vSjspzp5y6YDtDs4VzUSTbWzBFZ/LKJhnyFOKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var clipboard = new ClipboardJS('.btn');
    clipboard.on('success', function(e) {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
        e.clearSelection();
    });

    clipboard.on('error', function(e) {

    });
</script>
@endsection

