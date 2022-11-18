<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Payment Tracker</title>

    <script src="https://kit.fontawesome.com/c2605b0aa5.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/logo1.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/logo1.png') }}">
    <!-- Bootstrap Files-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>


    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <style>
       
    </style>
    <style>
        .box {
            width: 85%;
            height: 100px;
            background-color: #272c4a;
            margin-left: 10px;
            padding: 10px;
        }

        .box p {
            font-size: 35px;
            color: white;
            font-weight: bold;
            line-height: 30px;
            padding-left: 10px;
            margin-top: 20px;
            display: inline-block;
        }

        .box p span {
            font-size: 20px;
            font-weight: 400;
            color: #818181;
        }

        .box-icon {
            font-size: 40px !important;
            float: right;
            margin-top: 35px !important;
            color: #818181;
            padding-right: 10px;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <nav class="navbar1">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-3">
                                <a href="{{ route('game-plan') }}"> <img src="{{ asset('images/website-1.png') }}"
                                        class="img-fluid" alt=""></a>
                            </div>
                            <div class="col-6 col-md-6 text-center my-auto">
                                <label for="">Las Olas Social Club</label>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </nav>
                {{-- <div class="row ">
                    <div class="col-md-3 col-sm-12">
                        <div class="box">
                            <p>67<br /><span>Customers</span></p>
                            <i class="fa fa-users box-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="box">
                            <p>88<br /><span>Projects</span></p>
                            <i class="fa fa-list box-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="box">
                            <p>99<br /><span>Orders</span></p>
                            <i class="fa fa-shopping-bag box-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="box">
                            <p>78<br /><span>Tasks</span></p>
                            <i class="fa fa-tasks box-icon"></i>
                        </div>
                    </div>
                </div> --}}
                @yield('content')
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });

        $('#clear').click(function(e) {

            e.preventDefault();

            sig.signature('clear');

            $("#signature64").val('');

        });
    </script>
</body>


</html>
