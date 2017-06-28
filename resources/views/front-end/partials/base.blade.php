<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>SAGE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Css -->
	<link href="https://www.fontify.me/wf/82017001d623e44d40953b2d596feacd" rel="stylesheet" type="text/css">
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="frontend/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="frontend/css/main.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="frontend/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="frontend/img/favicon.ico" type="image/x-icon">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <style>

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control{

            background-color: inherit;
        }

    </style>
</head>

<body>

    @include('front-end.partials.header')
    @yield('content')
    @include('front-end.partials.footer')
    @include('front-end.partials.navigation')
    @include('front-end.partials.models')


    <!--Javascript-->
    <script src="frontend/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="frontend/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="frontend/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="frontend/js/main.js" type="text/javascript"></script>
	<script>
	//menu
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

//
function openS() {
    document.getElementById("signinNav").style.height = "100%";
}

function closeS() {
    document.getElementById("signinNav").style.height = "0%";
}

</script>

    <script>
        $('div.alert').not('.alert-important').delay(2000).fadeOut(3000);

    </script>

    @if ($errors->has('email') || $errors->has('name') || $errors->has('password'))
        <script>
            $(document).ready(function() {
                $('#SignupModal').modal('show');
            });
        </script>
    @endif
    <!-- Google analytics -->
    <!-- End google analytics -->
</body>

</html>