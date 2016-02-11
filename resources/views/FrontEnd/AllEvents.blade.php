@extends('Master')


@section('content')
    <div class="container" style="margin-top:60px;">
        <div class="row">
            <div class="col-sm-12 col-sm-offest-1">
                @foreach($events as $event)
                <div class="col-sm-6">
                    <!--    Here comes your card          -->
                    <div class="card-container">
                        <div class="card">
                            <div class="front">
                                <div class="cover">
                                    <img src="{{ URL::asset('images/EVENT.jpg')}}">
                                </div>
                                {{--<div class="user">
                                    --}}{{--<img class="img-circle" src="{{ URL::asset('rotating_cards/images/rotating_card_profile.png')}}"/>--}}{{--
                                </div>--}}
                                <div class="content">
                                    <div class="main">
                                        <h3 class="name">{{$event->name}}</h3>
                                        <p class="profession">{{$event->venue}}<br>{{$event->date}}</p>
                                        {{--<h5><i class="fa fa-map-marker fa-fw text-muted"></i> Paris, France</h5>--}}
                                        {{--<h5><i class="fa fa-building-o fa-fw text-muted"></i> Creative Tim Inc. </h5>
                                        <h5><i class="fa fa-envelope-o fa-fw text-muted"></i> inna@creative-tim.com</h5>--}}
                                    </div>

                                </div>
                            </div> <!-- end front panel -->
                            <div class="back">
                                <div class="header">
                                    <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                                </div>
                                <div class="content">
                                    <div class="main">
                                        <h4 class="text-center">Experince</h4>
                                        <p>Inna was working with our team since 2012.</p>
                                        <h4 class="text-center">Areas of Expertise</h4>
                                        <p>Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>
                                    </div>
                                </div>
                                {{--<div class="footer">
                                    <div class="social-links text-center">
                                        <a href="http://cretive-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                        <a href="http://cretive-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                        <a href="http://cretive-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                    </div>
                                </div>--}}
                            </div> <!-- end back panel -->
                        </div> <!-- end card -->
                    </div> <!-- end card-container -->

                </div>
               @endforeach
            </div>
        </div>
    </div>

@stop