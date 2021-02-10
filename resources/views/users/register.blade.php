@extends('frontEnd.layouts.master')
@section('title','Register page')
@section('slider')
@endsection
@section('content')
    <div class="container" >
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div >
            <div class="row" >
            <div class="col-sm-4 col-sm-offset-1">
            <!-- <div class="login-form">
                <img src="{{asset('frontEnd/images/home/profile.png')}}" alt="" height="200"  />
                    <form action="{{url('/user_login')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <span id="text_form_login">
                            <b>E - mail</b>
                        </span>
                        <input type="email" placeholder="" name="email"/>
                        <span id="text_form_login" >
                            <b> Password </b>
                        </span>
                        <input type="password" placeholder="" name="password"/>
                        <span id="text_forgot">
                        <b>forgot password?</b>
                        </span>
                        <button type="submit" class="btn btn-default">
                        <b>Login</b>
                    </button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div> -->
            <div class="col-sm-4">
                <div class="signup-form"> 
                    <h2>New User Signup!</h2>
                    <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <input type="text" placeholder="Name" name="name" value="{{old('name')}}"/>
                        <span class="text-danger">{{$errors->first('name')}}</span>

                        <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}"/>
                        <span class="text-danger">{{$errors->first('email')}}</span>

                        <input type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
                        <span class="text-danger">{{$errors->first('password')}}</span>

                        <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>

                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div> sign up form
            </div>
        </div>
    </div>

    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection