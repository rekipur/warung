<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style type="text/css">
        body    {
              background: url(img/back.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-top: 4%
        }
    </style>
</head>
<body  class="hidden-sn blue-skin">
<div class="container">




  <div class="row">
   
    <div class="col-sm-4"></div>
    
    <div class="col-sm-4">

<!--Form without header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-coffee"></i> Login:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
                {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="fa fa-envelope prefix" style="color: black;"></i>
                    {!! Form::text('email', null, ['class' =>'form-control','style'=>'color:black;']) !!}
                    {!! Form::label('email', 'Alamat Email') !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>

                <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
                    <i class="fa fa-lock prefix" style="color: black;"></i>
                    {!! Form::password('password', ['class'=>'form-control','style'=>'color:black;']) !!}
                    {!! Form::label('password', 'Kata Sandi') !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>

        <div class="text-xs-center">
            <button class="btn btn-deep-purple">Login</button>
        </div>
                {!! Form::close() !!}
    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <!--<p>Not a member? <a href="{{ url('/register') }}">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>-->
        </div>
    </div>
</div>

    </div>
    
    <div class="col-sm-4"></div>
    
  </div>

</div>
    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
</body>
</html>
