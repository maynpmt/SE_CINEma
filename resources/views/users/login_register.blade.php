@extends('frontEnd.layouts.master-paan')
@section('title','Login Page')
@section('slider')
@endsection
@section('content')
    <div class="container" >
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
    </div>
    
    <div class="container" id="Login_page">
        <div class="row">
            <div class="col-xs-5">
                <div class="login-form">
                    <h1><b>login account</b></h1>
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
                     <!-- <button type="submit" class="btn btn-default"> -->
                         <b>Login</b>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-xs-2">
                <h1 class="or"> - OR - </h1>
            </div>
            <div class="col-xs-5">
                <div class="signup-form"> 
                    <h1><b>Register account</b></h1>
                        <table>
                            <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <tr>
                                    <td><b>Name</b></td>
                                    <td> 
                                    <input type="text" placeholder="Name" name="name" value="{{old('name')}}"/>
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </td>
                                </tr>
                                <tr>
                                    <td><b>E-mail</b></td>
                                    <td> 
                                    <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}"/>
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Password</b></td>
                                    <td> 
                                    <input type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
                                    <span class="text-danger">{{$errors->first('password')}}</span></td>
                                </tr>
                                <tr>
                                    <td><b>Confirm Password</b></td>
                                    <td> 
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                                    <span class="text-danger">{{$errors->first('password_confirmation')}}</span></td>
                                </tr>
                                <tr>
                                    <td><b>Address</b></td>
                                    <td> 
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="text" placeholder="Address" name="name" value="{{old('name')}}"/>
                                    <span class="text-danger">{{$errors->first('Address')}}</span></td>
                                </tr>
                                <tr>
                                    <td><b>City</b></td>
                                    <td> 
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="text" placeholder="City" name="name" value="{{old('name')}}"/>
                                    <span class="text-danger">{{$errors->first('City')}}</span></td>
                                </tr>
                                <tr>
                                    <td><b>Country</b></td>
                                    <td> 
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="text" placeholder="Country" name="name" value="{{old('name')}}"/>
                                    <span class="text-danger">{{$errors->first('Country')}}</span></td>
                                </tr>
                                <tr>
                                    <td><b>Phone number</b></td>
                                    <td> 
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="text" placeholder="Phone number" name="name" value="{{old('name')}}"/>
                                    <span class="text-danger">{{$errors->first('Phone number')}}</span></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                    <button type="submit" class="btn btn-default">
                                         <b>Sign up </b>  
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        </table>

                    <!-- <div class="col-xs-4">
                    <span id="text_form_login">
                    <b>Name</b>
                    </span>
                   
                    <span id="text_form_login">
                    <b>E-mail</b>
                    </span>
                    <span id="text_form_login">
                    <b>Password</b>
                    </span>
                    <span id="text_form_login">
                    <b>Confirm Password</b>
                    </span>
                    <span id="text_form_login">
                    <b>Address</b>
                    </span>
                    <span id="text_form_login">
                    <b>City</b>
                    </span>
                    <span id="text_form_login">
                    <b>Country</b>
                    </span>
                    <span id="text_form_login">
                    <b>Phone number</b>
                    </span>
                    
                    </div>
                    <div class="col-xs-8">
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

                        <button type="submit" class="btn btn-default">
                            <b>Sign up </b>  
                            </button>
                    </form> -->
                </div>
            </div>
        </div> 
    </div>
 <!-- <div style="margin-bottom: 20px;"></div> -->
@endsection