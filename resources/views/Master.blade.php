<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>NITS EVENTS</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/animate/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/animate/set.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('assets/event.css') }}" />

    {{--calendar--}}
    <link href="{{ URL::asset('calendar/css/responsive-calendar.css') }}" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>

    {{--Rotating Cards--}}
    <link href='{{ URL::asset('rotating_cards/css/rotating-card.css') }}' rel='stylesheet'>

    <!-- gallery -->
    <link rel="stylesheet" href="{{ URL::asset('assets/gallery/blueimp-gallery.min.css') }}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico" type="image/x-icon') }}">
    <link rel="icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">


    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">
    <!-- jquery -->
    <script src="{{ URL::asset('assets/jquery.js') }}"></script>

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper" style="background-color: rgb(31, 43, 56)">
    <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav" style="background-color: rgb(31, 43, 56)">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="#home"><img src="{{ URL::asset('images/logo.png')}}" alt="logo"></a>
                    <!-- #Logo Ends -->


                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li class="active"><a href="{{url('/home')}}">Home</a></li>
                        <li ><a href="{{url('/about')}}">About</a></li>
                        <li ><a href="#partners">Partners</a></li>
                        <li ><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Ends -->



<div class="container">
    @yield('content')
</div>

<!-- Footer Starts -->
<div class="footer text-center spacer">

    Copyright 2016 LankaweKollo Studio. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- wow script -->
<script src="{{ URL::asset('assets/wow/wow.min.js')}}"></script>


<!-- boostrap -->
<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="{{ URL::asset('assets/mobile/touchSwipe.min.js')}}"></script>
<script src="{{ URL::asset('assets/respond/respond.js')}}"></script>

<!-- gallery -->
<script src="{{ URL::asset('assets/gallery/jquery.blueimp-gallery.min.js')}}"></script>

<!-- custom script -->
<script src="{{ URL::asset('assets/script.js')}}"></script>

{{--calendar--}}
<script src="{{ URL::asset('calendar/js/responsive-calendar.js')}}"></script>

{{--<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>--}}
{{--<script src="calendar/js/responsive-calendar.js"></script>--}}
{{--Resposive Calendar Script Starts here--}}
<script type="text/javascript">
    $(document).ready(function () {
        // geting events on date
        $.ajax({
            url: "../getEvents/",
            type: "get",
            dataType: 'json',
            // async:true,
            success: function(data){
                //console.log(data);
                var event_arr = {};
                data.forEach(function(event){
                    event_arr[event.date]={"url":"{{url('showAllEvents')}}"+"/"+event.date};
                });
                var today = new Date();
                today = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                $(".responsive-calendar").responsiveCalendar({
                    time: today,
                    events: event_arr
                });
            },
            error: function(data)
            {
                console.log("error",data);
            }
        });
    });

    /*popover starts*/
    var originalLeave = $.fn.popover.Constructor.prototype.leave;
    $.fn.popover.Constructor.prototype.leave = function(obj){
        var self = obj instanceof this.constructor ?
                obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type)
        var container, timeout;

        originalLeave.call(this, obj);

        if(obj.currentTarget) {
            container = $(obj.currentTarget).siblings('.popover')
            timeout = self.timeout;
            container.one('mouseenter', function(){
                //We entered the actual popover – call off the dogs
                clearTimeout(timeout);
                //Let's monitor popover content instead
                container.one('mouseleave', function(){
                    $.fn.popover.Constructor.prototype.leave.call(self, self);
                });
            })
        }
    };
    $('body').popover({ selector: '[data-popover]', trigger: 'click hover', placement: 'auto', content :'content', delay: {show: 50, hide: 400}});
    // popover ends
</script>


</body>
</html>