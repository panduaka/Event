@extends('Master')


@section('content')
    <div id="works" class="page-header">
         <h1 STYLE="color:whitesmoke !important;">'{{$event_name}}'</h1>
    </div>

<div class="container">
    <div class="row">
        <!-- Responsive calendar - START -->
        <div class="col-md-3" style="padding-top: 10px;">
            <div class="responsive-calendar ">
                <div class="controls row">
                    <div class="col-md-3  col-xs-4">
                        <a class="pull-left" data-go="prev"> <i class="fa fa-arrow-circle-o-left  fa-2x"></i>
                            {{--<div class="btn"><i class="icon-chevron-left"></i></div>--}}
                        </a>
                    </div>
                    <div class="col-md-6  col-xs-4">
                        <h4><span data-head-year></span></h4><h4> <span data-head-month></span></h4>
                    </div>
                    <div class="col-md-3  col-xs-4">
                        <a class="pull-right" data-go="next"><i class="fa fa-arrow-circle-o-right  fa-2x"></i>
                            {{--<div class="btn"><i class="icon-chevron-right"></i></div>--}}
                        </a>
                    </div>
                </div><hr/>
                <div class="day-headers">
                    <div class="day header">Mon</div>
                    <div class="day header">Tue</div>
                    <div class="day header">Wed</div>
                    <div class="day header">Thu</div>
                    <div class="day header">Fri</div>
                    <div class="day header">Sat</div>
                    <div class="day header">Sun</div>
                </div>
                <div class="days" data-group="days">
                    <!-- the place where days will be generated -->
                </div>
            </div>

        </div>
        <!-- Responsive calendar - END -->
        <div class="col-sm-9">
            <div class="panel panel-default">
               {{-- <div class="panel-heading"><h1>Panel Heading</h1></div>--}}
                <div class="panel-body">
                    <div><img src="{{ URL::asset('images/EVENT.jpg')}}" class="img-rounded" alt="Cinque Terre" width="100%" height="100%"></div>
                    <hr>

                    <div class="panel panel-default" style="margin-top: 1%; margin-bottom: 0%; background-color: rgb(0, 169, 198);border-color: rgb(4, 152, 178); padding: 10px; color:white ">Elite 2K16 - Back to the Era, Reunion of VGS 2011 O/L Batch was held on 2nd of January 2016 from 11.00 am onwards at Hotel Somro, Maharagama.</div>
                    {{--<div  align="right"><div class="shape"><p align="right">Date.</p></div></div>
                    <div  align="left"><div class="shape1"><p align="left">Time.</p></div></div>
                    <div  align="right"><div class="shape"><p align="right">Location.</p></div></div>--}}
                    <div >Photo Editing Credits</div>
                    <div  >Photo Credits</div>
                    {{--<div align="center" style="background-image: url('image/wood.jpg');">--}}
                        <div class="mg-image"><div style="display:inline-block;"><img src="{{ URL::asset('images/EVENT.jpg')}}" style="width: 100%;height: 100%;border: 10px solid white"></div></div>
                    {{--</div>--}}
                    <div >Share</div>
                    <div>Comments</div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop