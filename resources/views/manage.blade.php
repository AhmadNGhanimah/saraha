@extends('layouts.master')
@section('title')
    Manage
@endsection
@section('content')
    <section class="manage" id="manage">
        <div class="row">
            <div class="col-lg-4">
                @include('layouts.sidebar')
            </div>

            <div class="col-lg-6">
                <div class="text-center">

                    <h1>Account Setting</h1>
                </div>
                <div class="pt-4">
                    <i class="fa-solid fa-person-praying"><span class="pl-3">Deleted Account</span></i>
                </div>
                <hr>
                <div class="pt-3 pl-3">
                    <form>
                        <p>You will lose all content and data on this account, such as incoming messages and photos
                        </p>
                        <input type="submit" href="" class="btn btn-danger" value="Delete Account">
                    </form>
                </div>

                <div class="pt-4">
                    <i class="fa-solid fa-lock"><span class="pl-3">Change password</span></i>
                </div>

                <hr>
                <form method="" action="">
                    <div class="mb-3 row">
                        <label for="currentPassword" class="col-sm-2 col-form-label">Current Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="currentPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="newPassword" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="newPassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="newPassword" class="col-sm-2 col-form-label">New Password Confirmation</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="newPassword">
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <div class="col-sm-2 "></div>
                        <div class="col-sm-10 col-sm-2 col-form-label ">
                            <input type="submit" href="" class="btn changePassword" value="Change">
                        </div>
                    </div>
                </form>
                <hr>
                <div class="pt-4 pb-2">
                    <i class="fa-solid fa-user"><span class="pl-3">Edit personal information</span></i>
                </div>
                <form>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="mb-3 row bio">
                        <label for="bio" class="col-sm-2 col-form-label">Bio</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="bio">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 ">Country</label>
                        <div class="col-sm-10">
                            <select class=" form-control" data-country="US">
                                <option value="1">Jo</option>
                                <option value="2">SA</option>
                                <option value="3">Th</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 ">Gender</label>
                        <div class="col-sm-10">
                            <select class=" form-control" data-country="US">
                                <option value="1">Male</option>
                                <option value="2">Female</option>

                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <div class="col-sm-2 "></div>
                        <div class="col-sm-10 col-sm-2 col-form-label">
                            <input type="submit" href="" class="btn changePassword" value="Save">
                        </div>
                    </div>


                </form>
                <div class="mySocial">
                    <div class="pt-4 pb-2">
                        <i class="fa-solid fa-network-wired"><span class="pl-3">My social networking URL</span></i>
                    </div>
                    <hr>
                    <p>Your social network links will appear in your account</p>
                    <form>
                        <div class="mb-3 row">
                            <label for="Facebook" class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="facebook" id="facebook">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Twitter" class="col-sm-2 col-form-label">Twitter</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="twitter" id="Twitter">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Instagram" class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="instagram" id="Instagram">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="youtube" class="col-sm-2 col-form-label">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="youtube" id="youtube">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="site" class="col-sm-2 col-form-label">Other Site</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="Site" id="site">
                            </div>
                        </div>
                        <div class="mb-3 row ">
                            <div class="col-sm-2 "></div>
                            <div class="col-sm-10 col-sm-2 col-form-label">
                                <input type="submit" href="" class="btn changePassword" value="Save">
                            </div>
                        </div>

                    </form>

                </div>


            </div>


        </div>

    </section>

@endsection

