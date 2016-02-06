@extends('admin')

@section('content')
    <?php $timestamp=time()?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Event
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
                            <h3 class="box-title">{{$event->name}}</h3>
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

                            <form class="" enctype="multipart/form-data" role="form" method="POST" action="{{ url('event/'.$event->id.'/update') }}">
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="name" class="required">Name</label>
                                        <input type="text" id="name" value="{{$event->name}}" class="form-control" name="name" maxlength="80">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="venue" class="required">Venue</label>
                                        <input type="text" id="venue" value="{{$event->venue}}" class="form-control" name="venue">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="from" class="required">From</label>
                                        <input type="datetime" id='datetimepickerFrom' value="{{$event->from}}" class="form-control" name="from" placeholder="DD/MM/YYYY hh:mm PM">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="to" class="required">To</label>
                                        <input type="datetime" id='datetimepickerTo' value="{{$event->to}}" class="form-control" name="to" placeholder="DD/MM/YYYY hh:mm PM">
                                    </div>
                                </div>
                                <div class="form-group has-feedback col-md-12">
                                    <label for="description" class="required">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="3">{{$event->description}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="photo_feature" class="required">Feature Image</label>
                                        <input type="file" id="photo_feature" class="form-control" name="photo_feature"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_feature)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="photo_more" class="required">More Image</label>
                                        <input type="file" id="photo_more" class="form-control" name="photo_more"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_more)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                </div>
                                <!-- Column 1 -->
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="photo_1" class="required">Image 1</label>
                                        <input type="file" id="photo_1" class="form-control" name="photo_1"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_1)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_5" class="required">Image 5</label>
                                        <input type="file" id="photo_5" class="form-control" name="photo_5"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_5)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                </div>
                                <!-- Column 2 -->
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="photo_2" class="required">Image 2</label>
                                        <input type="file" id="photo_2" class="form-control" name="photo_2"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_2)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_6" class="required">Image 6</label>
                                        <input type="file" id="photo_6" class="form-control" name="photo_6"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_6)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                </div>
                                <!-- Column 3 -->
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="photo_3" class="required">Image 3</label>
                                        <input type="file" id="photo_3" class="form-control" name="photo_3"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_3)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_7" class="required">Image 7</label>
                                        <input type="file" id="photo_7" class="form-control" name="photo_7"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_7)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                </div>
                                <!-- Column 4 -->
                                <div class="col-md-3">
                                    <div class="form-group has-feedback">
                                        <label for="photo_4" class="required">Image 4</label>
                                        <input type="file" id="photo_4" class="form-control" name="photo_4"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_4)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="photo_8" class="required">Image 8</label>
                                        <input type="file" id="photo_8" class="form-control" name="photo_8"><br>
                                        <img src="{{asset('uploads/pictures/events/'.$event->photo_8)}}?{{$timestamp}}" alt="Feature Image" class="img-responsive img-rounded center-block editImagePreview"/>
                                    </div>
                                </div>
                                <div class="col-md-12"><br></div>
                                <div class="form-group has-feedback col-md-offset-4 col-md-4">
                                    <button type="submit" class="btn btn-primary btn-block ">Update</button>
                                </div>

                            </form>

                        </div>
                    </div>


                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepickerTo').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            });
            $('#datetimepickerFrom').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            });
        });
    </script>
@endsection