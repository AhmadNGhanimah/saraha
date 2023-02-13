<!doctype html>
<html lang="en">
@include('layouts.head')
<body>

<section class="maessages">
    <div class="container-fluid">
        <div>
            <div class="text-center">
                <img src="">
                <p> <i class="fa-solid fa-messages"></i>Messages</p>
            </div>
            <div>
                <div class="alert alert-primary" role="alert">
                    <h4 class="alert-heading">Msg 1 </h4>
                    <p> Text Massage Text Massage Massage </p>
                    <small class="pb-3">timestamp</small>
                    <hr>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Make Primary
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="replyMessages">
                                <button onclick='addInput()' class="btn btn-success">Reply</button>
                                <a href="https://www.google.com/" title="share to facebook"><img src="{{asset('image/fb-icon.png')}}"></a>
                                <a href="https://www.google.com/" title="share to Twitter"><img src="{{asset('image/Twitter-logo.svg.png')}}"></a>
                            </div>
                        </div>

                    </div>
                    <form action="" method="">
                        <div id='input-cont' class="submitFormInput pt-3" >

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

</section>

@include('layouts.footer')
@include('layouts.script')
</body>
</html>

<script>
    const container = document.getElementById('input-cont');
    var maxInputAllowed = 1;
    var inputCount = 0;

    // Call addInput() function on button click
    function addInput(){
        inputCount++; // Increment input count by one
        if(inputCount>1){

            return;
        }
        let input = document.createElement('input');
        input.placeholder = 'Write The best Messeges';
        container.appendChild(input);


    }
</script>




