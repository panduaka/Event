@extends('admin')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Event
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Edit Event</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Event</h3>
                        </div>
                        <div class="login-box-body col-md-12">

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
                            <form class="" enctype="multipart/form-data" role="form" method="POST" action="{{ url('event/') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="name" class="required">Name</label>
                                        <input type="string" id="name" class="form-control" name="name" maxlength="80">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="venue" class="required">Venue</label>
                                        <input type="string" id="venue" class="form-control" name="venue">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="date" class="required">Date</label>
                                        <input type="date" id="date" class="form-control" name="date">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="time" class="required">Time</label>
                                        <input type="text" class="form-control" name="time">
                                    </div>
                                </div>
                                <div class="form-group has-feedback col-md-12">
                                    <label for="description" class="required">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="photo_feature" class="required">Feature Image</label>
                                        <input type="file" id="photo_feature" class="form-control" name="photo_feature">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_1" class="required">Image 1</label>
                                        <input type="file" id="photo_1" class="form-control" name="photo_1">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_3" class="required">Image 3</label>
                                        <input type="file" id="photo_3" class="form-control" name="photo_3">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_5" class="required">Image 5</label>
                                        <input type="file" id="photo_5" class="form-control" name="photo_5">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_7" class="required">Image 7</label>
                                        <input type="file" id="photo_7" class="form-control" name="photo_7">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="photo_more" class="required">More Image</label>
                                        <input type="file" id="photo_more" class="form-control" name="photo_more">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_2" class="required">Image 2</label>
                                        <input type="file" id="photo_2" class="form-control" name="photo_2">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_4" class="required">Image 4</label>
                                        <input type="file" id="photo_4" class="form-control" name="photo_4">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_6" class="required">Image 6</label>
                                        <input type="file" id="photo_6" class="form-control" name="photo_6">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_8" class="required">Image 8</label>
                                        <input type="file" id="photo_8" class="form-control" name="photo_8">
                                    </div>
                                </div>
                                <div class="col-md-12"><br></div>
                                <div class="form-group has-feedback col-md-offset-4 col-md-4">
                                    <button type="submit" class="btn btn-primary btn-block ">Create</button>
                                </div>

                            </form>
                        </div>
                    </div>


                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
