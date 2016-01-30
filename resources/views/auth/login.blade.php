<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>EventProject</title>


    <!-- Bootstrap 3.3.4 xxxx -->
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/adminlte/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type="image/png" />

    <style type="text/css" >
        .login-page .main-footer {
            width: 100%;
            /*position: absolute;*/
            margin-left: 0;
            bottom: 0;
            color: #b8c7ce;
            background-color: #2b3739;
            border-color: #2b3739;
            line-height: 40px
        }
        a {
            color:#5cbd62 !important;
        }
        body {
            background-color: rgba(43,55,57,1) !important;
            color:#ffffff !important;
        }
        .btn-primary {
            background-color: #5cbd62 !important;
            border:0 !important;
            padding: 12px !important;
            box-shadow: inset 0 -2px 0 rgba(0,0,0,.25) !important;
        }

        .glyphicon {
            color: #5cbd62 !important;
        }
        .login-box-body {
            background-color: rgba(43,55,57,1) !important;
            color:#ffffff !important;
        }
        .form-control {
            background-color: rgba(234,234,234,.1) !important;
            border: 1px solid transparent!important;
            outline: none !important;
            box-shadow: none !important;
            color: #ffffff !important;
            height: 40px !important;
            padding: 6px 12px !important;
        }
        .form-control:focus {
            border: 1px solid #5cbd62 !important;
        }
    </style>
</head>
<body class="skin-green login-page">
<div class="login-box">

    <div class="login-logo">
        <a href=""><img src="{{ asset('EventProject-logo.png') }}" class="img-responsive center-block" /></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="" role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <label for="email" class="required">Email</label>
                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" maxlength="35">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="password" class="required">Password</label>
                <input type="password" id="password" class="form-control" name="password" maxlength="20">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            <div class="form-group has-feedback">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>

        </form>

        <a class="text-center" href="{{ url('/password/email') }}">Forgot Your Password?</a>
        <br/>


    </div>
</div><!-- ./wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 0.1
    </div>
</footer>

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset('/adminlte/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
