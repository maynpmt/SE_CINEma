<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" /> -->
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap-responsive.min.css')}}" /> -->
    <!-- <link rel="stylesheet" href="{{asset('css/matrix-login.css')}}" /> -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />
    <!-- <link href="{{asset('frontEnd/css/main-may.css')}}" rel="stylesheet"> -->
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
@include('frontEnd.layouts.header-paan')
<div class="w3-cell-row">
    <div class="w3-container w3-cell">
    
     </div>
    <div class="w3-container w3-cell ">
         <div class="box">
         <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
         <img src="{{asset('frontEnd/images/home/profile.png')}}" alt="" height="200"  />
             <h1><b> Admin login </b></h1>
             <input type="hidden" name="_token" value="{{csrf_token()}}">
             <div class="title">
             <b> E - mail</b>
             </div>
             <div class="input">
                 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <br><span class="invalid-feedback" style="color: white;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
             </div>
             <div class="title">
             <b> Password</b>
             </div>
             <div class="input">
             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
             </div>
             <!-- <div class="control-group">
                 <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
            </div>
            <div class="control-group">
                 <button type="submit" >Login</button>
            </div> -->
            <span id="text_forgot"><a href="#" class="flip-link btn btn-info" id="to-recover"><b>forgot password?</b></a></span>
            <br>
            <br><span>
            <button type="submit"  style="font-size: 20px; margin-bottom: 20px;"><b>Login</b></button></span> 
             <!-- <table style="width:100%">
                <tr>
                    <th>
                    <span class="add-on"><i class="icon-user"> </i></span>
                    </th>
                    <th>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <br><span class="invalid-feedback" style="color: white;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </th>
                    
                </tr>
                <tr>
                    <th>
                    <span class="add-on"><i class="icon-lock" ></i></span>
                    </th>
                    <th>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </th>
                    
                </tr>
                <tr>
                    <th>
                    <span class="pull-left"><a href="#" id="to-recover">forgot password?</a></span>
                    </th>
                    <th>
                    <span class="pull-right"><button type="submit" >Login</button></span>
                    </th>
                    
                </tr>
             </table> -->
             </form>
         </div>
    </div>
    <div class="w3-container  w3-cell" id="last">
    </div>
</div>

<!-- <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="control-group">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><a class="btn btn-info">Recover</a></span>
        </div>
    </form> -->

    <!-- <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <h1><b> Admin login </b></h1>
            </div>
            <div class="col-sm-4">
                <div class="box">
                    <h1><b> Admin login </b></h1>
                </div>
            </div>
            <div class="col-sm-4">
            <h1><b> Admin login </b></h1>
            </div>
        </div>
    </div> -->

<!-- <div id="loginbox"> -->
    <!-- <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
        <h1> <b> Admin login </b> </h1>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="control-group normal_text"> 
            <h3><img src="{{asset('img/logo.png')}}" alt="Logo" /></h3>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <br><span class="invalid-feedback" style="color: white;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="control-group">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success">Login</button></span>
        </div>
    </form>


    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="control-group">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><a class="btn btn-info">Recover</a></span>
        </div>
    </form> -->
<!-- </div> -->

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/matrix.login.js')}}"></script>
</body>

</html>
