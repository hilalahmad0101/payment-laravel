<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Payment Tracker</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/c2605b0aa5.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/logo1.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/logo1.png')}}">

    <!-- Bootstrap Files-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'My Daily Activities'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
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
                                <a href="{{ route('game-plan') }}"> <img src="{{asset('images/website-1.png')}}" class="img-fluid"
                                        alt=""></a>
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
                {{ $slot }}
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    @livewireScripts

    <script>
        window.addEventListener('hide-game-plan-model', function(){
            $("#exampleModalAddGame").modal('hide');
        })
        window.addEventListener('show-delete-game-modal', function(){
            $("#exampleModalDel").modal('show');
        })
        window.addEventListener('hide-delete-game-modal', function(){
            $("#exampleModalDel").modal('hide');
        })

        window.addEventListener('hideupdate-game-plan-model', function(){
            $("#updateExampleModalAddGame").modal('hide');
        })
        window.addEventListener('hideupdate-game-user-model', function(){
            $("#exampleModalAddUser").modal('hide');
        })
        
    </script>   
</body>


</html>
