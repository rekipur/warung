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
    <div class="col-md-2"></div>
        <div class="col-md-8">

<!--Form without header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-lock"></i> Register:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        {!! Form::open(['url'=>'/register','class'=>'form-horizontal']) !!}
        <div class="md-form{{ $errors->has('name') ? ' has-error' : '' }}">
            <i class="fa fa-user prefix"></i>
            {!! Form::text('name', null, ['class'=>'form-control','length'=>'24']) !!}
            {!! Form::label('name', 'Nama') !!}
            {!! $errors->first('name','<p class="help-block">:message</p>') !!}
        </div>

        <div class="md-form{{ $errors->has('email') ? ' has-error': '' }}">
            <i class="fa fa-envelope prefix"></i>
            {!! Form::email('email', null, ['class'=>'form-control','length'=>'150']) !!}
            {!! Form::label('email', 'Alamat Email') !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="md-form{{ $errors->has('password') ? ' has-error': '' }}">
            <i class="fa fa-lock prefix"></i>
            {!! Form::password('password', null, ['class'=>'form-control','length'=>'60']) !!}
            {!! Form::label('password', 'Password') !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="md-form{{ $errors->has('password_confirmation') ? ' has-error': '' }}">
            <i class="fa fa-key prefix"></i>
            {!! Form::password('password_confirmation', null, ['class'=>'form-control','length'=>'60']) !!}
            {!! Form::label('password_confirmation', 'Password Confirmation') !!}
            {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="text-xs-center">
            <button class="btn btn-deep-purple">Registrasi</button>
        </div>
              {!! Form::close() !!}
    </div>

</div>
<!--/Form without header-->
        </div>
    <div class="col-md-2"></div>
    </div>
</div>
    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
</body>
</html>