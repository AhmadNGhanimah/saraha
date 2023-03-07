@extends('layouts.master')
<style>


    h1.logo {
        font-size: 4em;
    }

    .bg-fb-blue {
    background: linear-gradient(28deg, #16222A, #1E86AF)
    }

    small.form-text.text-muted a {
        color: #9cb4d8;
    }

    .btn.btn-fb {
        background-color: #16222A;
        border-color: #29487d;
        border-radius: 0;
        color: #ffffff;
    }

    .btn.btn-fb-submit {
        background: linear-gradient(#79bc64, #578843);
        box-shadow: inset 0 1px 1px #a4e388;
        border-color: #3b6e22 #3b6e22 #2c5115;
        color: #ffffff;
    }

    .btn-add-language {
        padding: 2px 9px;
        border-radius: 1px;
    }

    .far, .fas, .fb-icon {
        color: #adb9d3!important;
    }

    .fb-light-blue {
        color: #adb9d3;
    }





</style>
@section('content')
    <main>
        <div class="row bg-fb-blue pt-5">
            <div class="container">
                <div class="row no-gutters pl-2 pr-2">
                    <div class="col-sm-12 col-md-6">
                        <h1 class="text-white logo">Saraha</h1>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <form class="float-right">
                            <div class="form-row">
                                <div class="col-auto">
                                    <label class="sr-only" for="emailPhone">Email or Phone</label>
                                    <input type="text" class="form-control form-control-sm mb-2" id="emailPhone" placeholder="Email or Phone">
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only" for="password">Password</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control form-control-sm" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <input type="submit" id="submit" class="btn btn-sm btn-fb mb-2 align-bottom" value="Log In">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #edf0f5;">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-6 mt-5 pr-5">
                        <h2>Connect with friends and the world around you on Facebook.</h2>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 pl-0">
                                <i class="far fa-newspaper fa-3x align-middle"></i>
                                <span class="ml-2"><strong>See photos and updates</strong> from friends in News Feed.</span>
                            </li>
                            <li class="list-group-item bg-transparent border-0 pl-0">
                                <i class="far fa-star fa-3x align-middle"></i>
                                <span class="ml-2"><strong>Share what's new</strong> in your life on your Timeline.</span>
                            </li>
                            <li class="list-group-item bg-transparent border-0 pl-0">
                                <i class="fas fa-vector-square fa-3x align-middle"></i>
                                <span class="ml-2"><strong>Find more</strong> of what you're looking for with Facebook Search.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 mt-3">
                        <h1>Sign Up</h1>
                        <h6>It's free and always will be.</h6>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phoneEmail" placeholder="Mobile number or email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New password">
                            </div>
                            <h5 class="fb-light-blue">Birthday</h3>
                                <div class="form-row mb-3">
                                    <div class="col-auto pl-0 pr-0">
                                        <select class="custom-select my-1" id="inlineFormCustomSelectPref">
                                            <option value="1">Jan</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Apr</option>
                                            <option value="5">May</option>
                                            <option value="6">Jun</option>
                                            <option value="7" selected>Jul</option>
                                            <option value="8">Aug</option>
                                            <option value="9">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dec</option>
                                        </select>
                                    </div>
                                    <div class="col-auto pl-0 pr-0">
                                        <select class="custom-select my-1" id="inlineFormCustomSelectPref">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6" selected>6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col-auto pl-0 pr-0">
                                        <select class="custom-select my-1" id="inlineFormCustomSelectPref">
                                            <option value="1985">1985</option>
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1989</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994" selected>1994</option>
                                        </select>
                                    </div>
                                    <div class="col-auto pl-1">
                                        <i class="fas fa-question-circle popover-icon" tabindex="0" data-popover-content="#bdaySelect" id="showPopover" data-toggle="popover" data-html="true" data-placement="left"></i>
                                        <div class="popover-block-container">
                                            <div id="bdaySelect" style="display:none;">
                                                <div class="popover-body">
                                                    <strong>Providing your birthday</strong> helps make sure you get the right Facebook experience for your age. If you want to change who sees this, go to the About section of your profile. For more details, please visit our <a href="https://www.facebook.com/privacy/explanation/" target="_blank" rel="noopener">Data Policy</a>.
                                                    <hr>
                                                    <span class="float-right mb-2">
                        <a href="#" class="btn btn-sm btn-fb align-right">Close</a>
                      </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto pl-0">
                                    <h5 class="fb-light-blue">Gender</h3>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="femaleRadio" name="genderRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="femaleRadio">Female</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="maleRadio" name="genderRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="maleRadio">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadio" name="genderRadio" oninput="on_change(event)" class="custom-control-input" value="customSelect">
                                            <label class="custom-control-label" for="customRadio">Custom</label>
                                        </div>
                                        <div class="custom-control custom-control-inline pl-0">
                                            <i class="fas fa-question-circle popover-icon" tabindex="0" data-popover-content="#genderSelect" id="showPopover" data-toggle="popover" data-html="true" data-placement="left"></i>
                                            <div class="popover-block-container">
                                                <div id="genderSelect" style="display:none;">
                                                    <div class="popover-body">
                                                        You can change who sees your gender on your profile later. Select Custom to choose another gender, or if you'd rather not say.
                                                        <hr>
                                                        <span class="float-right mb-2">
                        <a href="#" class="btn btn-sm btn-fb align-right">Close</a>
                      </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="text" style="display:none;">
                                            <select class="custom-select my-1" id="inlineFormCustomSelectPref">
                                                <option value="1" selected>Select your pronoun</option>
                                                <option value="2">She: "Wish her a happy birthday!"</option>
                                                <option value="3">He: "Wish him a happy birthday!"</option>
                                                <option value="4">They: "Wish them a happy birthday!"</option>
                                            </select>
                                            <small class="text-muted">Your pronoun is visible to everyone.</small>
                                            <input class="form-control" placeholder="Gender (optional)">
                                        </div>
                                        <small class="text-muted d-block mb-3">By clicking Sign Up, you agree to our <a href="https://www.facebook.com/legal/terms/update" target="_blank">Terms</a>, <a href="https://www.facebook.com/about/privacy/update" target="_blank">Data Policy</a> and <a href="https://www.facebook.com/policies/cookies/" target="_blank">Cookies Policy</a>. You may receive SMS Notifications from us and can opt out any time.</small>
                                </div>
                                <button type="submit" class="btn btn-md btn-fb-submit pl-5 pr-5 mb-3">Sign Up</button>
                        </form>
                        <hr>
                        <p class="font-weight-bold"><a href="#">Create a Page</a> for a celebrity, band or business.</p>
                    </div>
                </div>
            </div> <!-- End Container -->
        </div>
    </main>
    <script>
        $("[data-toggle=popover]").popover({
            html : true,
            trigger: 'focus',
            content: function() {
                var content = $(this).attr("data-popover-content");
                return $(content).children(".popover-body").html();
            }
        });

        function on_change(el){
            var selectedOption = el.target.value;
            if (selectedOption === 'customSelect') {
                document.getElementById('text').style.display = 'block';
            } else {
                document.getElementById('text').style.display = 'none'; // Hide el
            }
        }
    </script>
@endsection
