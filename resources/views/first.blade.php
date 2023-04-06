@extends('layouts.master')
@section('title')
    Welcome
@endsection
@section('content')
    <section class="pageWelcome pt-2" id="pageWelcome">
        <div class="row">
            <div class="col-lg-6 col-sm-12  staticImage">
                <img src="{{asset('image/test2.jpeg')}}" alt="">
            </div>
            <div class="col-lg-6 col-sm-12  sliderImage">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('assets/images/icons/google.png')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('assets/images/icons/google.png')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('assets/images/icons/google.png')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="howToUse d-flex justify-content-center pt-4 bg_custom">
            <p>
                طريقة الاستخدام
            </p>
        </div>
        <div class="d-flex justify-content-center pt-5">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-75">
                            <div class="card-body">
                                <p class="card-text">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك  بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-75">
                            <div class="card-body">
                                <p class="card-text">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك  بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-75">
                            <div class="card-body">
                                <p class="card-text">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك  بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-75">
                            <div class="card-body">
                                <p class="card-text">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك  بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection

