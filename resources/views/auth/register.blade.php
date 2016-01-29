@extends('admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: #404040">
        <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="register-box-body col-md-12" style="background: #404040">
            <p class="register-box-msg">Add a new admin</p>
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
            <div class="col-md-offset-3 col-md-6" >
                <form class="" role="form" method="POST" action="{{ url('/auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>

                </form>
            </div>
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
      @stop    
