<!DOCTYPE html>
<html lang="en">
<head>

    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Respomsive slider -->
    <link href="calendar/css/responsive-calendar.css" rel="stylesheet">
    <script src="assets/jquery.js"></script>
</head>
<body>
<div class="container">
    <!-- Responsive calendar - START -->
    <div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
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

        </div>
    </div>
    <!-- Responsive calendar - END -->
</div>
<!-- HTML to write -->
<a href="#" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="hover">Hover over me</a>
<p id='container'>
    <button class='btn btn-primary btn-large' data-popover="true" data-html=true data-content="<a href='http://www.wojt.eu' target='blank' >click me, I'll try not to disappear</a>">hover here</button>
</p>








<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
<script src="calendar/js/responsive-calendar.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
            time: '2013-05',
            events: {
                "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
                "2013-04-26": {"number": 1, "url": "http://w3widgets.com"},
                "2013-05-03":{"number": 1},
                "2013-06-12": {}}
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
    $('body').popover({ selector: '[data-popover]', trigger: 'click hover', placement: 'right', content :'content', delay: {show: 50, hide: 400}});
// popover ends
</script>
</body>
</html>