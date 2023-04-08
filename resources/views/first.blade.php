@extends('layouts.master')
@section('title')
    Welcome
@endsection
@section('content')
    <section class="pageWelcome pt-5" id="pageWelcome">
        <div class="row">
            <div class="col-lg-6 col-sm-12  staticImage">
                <img src="{{asset('image/test2.jpeg')}}" alt="">
            </div>
            <div class="col-lg-6 col-sm-12  sliderText">
                <div class="container theme-color customBorder h-100">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active text-center">
                                <p class="customP">lorem ipsum (imagine longer text)lorem ipsum (imagine longer text)lorem ipsum (imagine longer text)lorem ipsum (imagine longer text)lorem ipsum (imagine longer text)lorem ipsum (imagine longer text)</p>
                            </div>
                            <div class="carousel-item text-center">
                                <p class="customP">lorsum (imagine longer text)lorem ipsum (imagine longer text)lorem ipsum (imagine longer text)lorem ipsum (imagine longer text)</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="howToUse d-flex justify-content-center theme-color customBorder  ">
            <h1>
                طريقة الاستخدام
            </h1>
        </div>
        <div class="d-flex justify-content-center howToUse">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-100 theme-color customBorderHowToUse">
                            <div class="card-body ">
                                <p class="card-text customHowToUse p-2">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-100 theme-color customBorderHowToUse">
                            <div class="card-body ">
                                <p class="card-text customHowToUse p-2">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-100 theme-color customBorderHowToUse">
                            <div class="card-body ">
                                <p class="card-text customHowToUse p-2">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 p-2">
                        <div class="card w-100 theme-color customBorderHowToUse">
                            <div class="card-body ">
                                <p class="card-text customHowToUse p-2">يمكنك إنشاء حساب خاص بك بكل سهولة
                                    سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك بصراحة وسرية تامة
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

