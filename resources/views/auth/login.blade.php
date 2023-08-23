@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{asset('system')}}/images/logo.svg" alt="logo">
                            </div>
                            <h4>Register</h4>
                            <h6 class="font-weight-light">Register to continue.</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    You don't have an account? <a href="{{route('register')}}" class="text-primary">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

@endsection
