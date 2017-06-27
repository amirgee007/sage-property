<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    {{--<link rel="shortcut icon" type="image/x-icon" href="/favicon.png">--}}
    <link rel="shortcut icon" href="{{asset('/images/home/logo1.png')}}" type="image/x-icon" />

    
    <title>Sage-Property</title>

    <!-- Bootstrap CSS -->
    <link href="/admin_sage/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/admin_sage/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/admin_sage/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/admin_sage/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="/admin_sage/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="/admin_sage/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="/admin_sage/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="/admin_sage/css/owl.carousel.css" type="text/css">
    <link href="/admin_sage/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="/admin_sage/css/fullcalendar.css">
    <link href="/admin_sage/css/widgets.css" rel="stylesheet">
    <link href="/admin_sage/css/style.css" rel="stylesheet">
    <link href="/admin_sage/css/style-responsive.css" rel="stylesheet" />
    <link href="/admin_sage/css/xcharts.min.css" rel=" stylesheet">
    <link href="/admin_sage/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body>

<!-- container section start -->
<section id="container" class="">

@include('admin.partials.header')

@yield('content')

</section>
<!-- container section start -->

<!-- javascripts -->
<script src="/admin_sage/js/jquery.js"></script>
<script src="/admin_sage/js/jquery-ui-1.10.4.min.js"></script>
<script src="/admin_sage/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/admin_sage/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="/admin_sage/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="/admin_sage/js/jquery.scrollTo.min.js"></script>
<script src="/admin_sage/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="/admin_sage/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="/admin_sage/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="/admin_sage/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/admin_sage/js/owl.carousel.js" ></script>
<!-- jQuery full calendar -->
<<script src="/admin_sage/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/admin_sage/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="/admin_sage/js/calendar-custom.js"></script>
<script src="/admin_sage/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="/admin_sage/js/jquery.customSelect.min.js" ></script>
<script src="/admin_sage/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="/admin_sage/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="/admin_sage/js/sparkline-chart.js"></script>
<script src="/admin_sage/js/easy-pie-chart.js"></script>
<script src="/admin_sage/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/admin_sage/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="/admin_sage/js/xcharts.min.js"></script>
<script src="/admin_sage/js/jquery.autosize.min.js"></script>
<script src="/admin_sage/js/jquery.placeholder.min.js"></script>
<script src="/admin_sage/js/gdp-data.js"></script>
<script src="/admin_sage/js/morris.min.js"></script>
<script src="/admin_sage/js/sparklines.js"></script>
<script src="/admin_sage/js/charts.js"></script>
<script src="/admin_sage/js/jquery.slimscroll.min.js"></script>

<script>


    $(function() {
        $(".knob").knob({
            'draw' : function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function(){
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code){
                el.html(el.html()+' (GDP - '+gdpData[code]+')');
            }
        });
    });

</script>


<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>


@yield('script')

</body>
</html>