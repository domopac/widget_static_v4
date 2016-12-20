<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- aquery ui css -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="dist/css/ripples.min.css">
    <!-- Drop down -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
    <!-- main -->
    <link href="css/main.css" rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--test-->
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
     style="position:absolute;width:0;height:0;visibility:hidden">
    <defs>
        <symbol xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 24" id="Bs-calendar">
            <path
                d="M1.714 22.286h3.857v-3.857h-3.857v3.857zM6.429 22.286h4.286v-3.857h-4.286v3.857zM1.714 17.571h3.857v-4.286h-3.857v4.286zM6.429 17.571h4.286v-4.286h-4.286v4.286zM1.714 12.429h3.857v-3.857h-3.857v3.857zM11.571 22.286h4.286v-3.857h-4.286v3.857zM6.429 12.429h4.286v-3.857h-4.286v3.857zM16.714 22.286h3.857v-3.857h-3.857v3.857zM11.571 17.571h4.286v-4.286h-4.286v4.286zM6.857 6v-3.857q0-0.174-0.127-0.301t-0.301-0.127h-0.857q-0.174 0-0.301 0.127t-0.127 0.301v3.857q0 0.174 0.127 0.301t0.301 0.127h0.857q0.174 0 0.301-0.127t0.127-0.301zM16.714 17.571h3.857v-4.286h-3.857v4.286zM11.571 12.429h4.286v-3.857h-4.286v3.857zM16.714 12.429h3.857v-3.857h-3.857v3.857zM17.143 6v-3.857q0-0.174-0.127-0.301t-0.301-0.127h-0.857q-0.174 0-0.301 0.127t-0.127 0.301v3.857q0 0.174 0.127 0.301t0.301 0.127h0.857q0.174 0 0.301-0.127t0.127-0.301zM22.286 5.143v17.143q0 0.696-0.509 1.205t-1.205 0.509h-18.857q-0.696 0-1.205-0.509t-0.509-1.205v-17.143q0-0.696 0.509-1.205t1.205-0.509h1.714v-1.286q0-0.884 0.629-1.513t1.513-0.629h0.857q0.884 0 1.513 0.629t0.629 1.513v1.286h5.143v-1.286q0-0.884 0.629-1.513t1.513-0.629h0.857q0.884 0 1.513 0.629t0.629 1.513v1.286h1.714q0.696 0 1.205 0.509t0.509 1.205z"></path>
        </symbol>
        <symbol xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" id="Bs-arrow-left">
            <path
                d="M13.891 17.418c0.268 0.272 0.268 0.709 0 0.979s-0.701 0.271-0.969 0l-7.83-7.908c-0.268-0.27-0.268-0.707 0-0.979l7.83-7.908c0.268-0.27 0.701-0.27 0.969 0s0.268 0.709 0 0.979l-7.141 7.419 7.141 7.418z"></path>
        </symbol>
        <symbol xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 20 20" id="Bs-arrow-right">
            <path
                d="M13.25 10l-7.141-7.42c-0.268-0.27-0.268-0.707 0-0.979 0.268-0.27 0.701-0.27 0.969 0l7.83 7.908c0.268 0.271 0.268 0.709 0 0.979l-7.83 7.908c-0.268 0.271-0.701 0.27-0.969 0s-0.268-0.707 0-0.979l7.141-7.417z"></path>
        </symbol>
    </defs>
</svg>

<div class="container-fluid">


    <div class="navbar navbar-default primary_color">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#calendar"><i class="glyphicon glyphicon-calendar"></i> Kalender</a>
                </li>
                <li class=""><a href="#rooms"><i class="glyphicon glyphicon-bed"></i> Zimmer</a></li>
                <li class=""><a href="#service"><i class="glyphicon glyphicon-star"></i> Leistungen</a></li>
                <li class="disabled"><a href="#total"><i class="glyphicon glyphicon-user"></i> Übersicht</a></li>
            </ul>
        </div>

    </div>
    <div class="progress">
        <div class="progress-bar primary_bg" style="width: 25%"></div>
    </div>

</div>


<div class="container-fluid">
    <div class="jumbotron" id="summary">

        <div class="row">

            <div class="col-xs text-center">
                <span id="summary_rooms">1</span><span id="summary_persons">2</span><span
                    id="summary_kinder"></span><span id="summary_fromDate"></span><span id="summary_toDate"></span>
            </div>
        </div>


    </div>
</div>

<? include 'step1_calendar.php'; ?>

<? include 'step2_rooms.php'; ?>

<? include 'step3_service.php'; ?>

<? include 'step4_total.php'; ?>


<!-- jquery  -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- jquery ui -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- bootstrap  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- material  -->
<script type="text/javascript" src="dist/js/material.min.js"></script>
<script type="text/javascript" src="dist/js/ripples.min.js"></script>
<!-- date stuff  -->
<script type="text/javascript" src="dist/js/moment-with-locales.js"></script>
<!-- drop down  -->
<script type="text/javascript" src="js/jquery.dropdown.js"></script>
<!-- my stuff  -->
<script type="text/javascript" src="js/staticData.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bookingprocess.js"></script>
<script>
    $.material.init();

    $("#calendar").show(400);

    $("select").dropdown({"autoinit": ".select"});

    $(".accordion").accordion({
        collapsible: true,
        active: false,
        heightStyle: "content"
    });

    $(".calendar_accordion").accordion({
        collapsible: true,
        active: 0,
        heightStyle: "content"
    });


</script>


</body>

</html>


