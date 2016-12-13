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


<div class="container-fluid">


        <div class="navbar navbar-default primary_color">
                 <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#calendar"><i class="glyphicon glyphicon-calendar"></i> Kalender</a>
                    </li>
                    <li><a href="#rooms"><i class="glyphicon glyphicon-bed"></i> Zimmer</a></li>
                    <li><a href="#service"><i class="glyphicon glyphicon-star"></i> Leistungen</a></li>
                    <li><a href="#total"><i class="glyphicon glyphicon-user"></i> Übersicht</a></li>
                </ul>
            </div>

        </div>
        <div class="progress">
            <div class="progress-bar primary_bg" style="width: 25%"></div>
        </div>

</div>


<div class="container-fluid">
    <div class="jumbotron">

        <div class="row">

            <div class="col-xs text-center" id="summary">
                <span id="summary_rooms">1</span><span id="summary_person">2</span><span id="summary_kinder"></span><span id="summary_fromDate"></span><span id="summary_toDate"></span>
            </div>
        </div>


    </div>
</div>


<div class="container-fluid widget_tab" id="calendar">


    <div class="row">
        
        <div class="col-md-8 col-xs-12">
 

            <div class="jumbotron ">
                <!--  Generated calendar  Start -->
                <div id="Bs-DayPicker" class="generated Bs-DayPicker Bs-Section Bs-DayPicker--valid">
                    <div class="Bs-Section__Block">
                        <div class="DayPicker-Wrapper">
                            <button type="button" title="Vorheriger Monat"
                                    class="DayPicker-Navigation--prev Bs--unstyled">
                                <svg class="Bs-Icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="http://www.hotelhgv.it/erweitertes-widget/#Bs-arrow-left"></use>
                                </svg>
                            </button>
                            <div class="DayPicker DayPicker--de-de DayPicker--interactionDisabled" role="application"
                                 tabindex="false">
                                <div class="DayPicker-Month">
                                    <form class="DayPicker-Caption"><select class="Bs-Select">
                                            <option value="2016-12-01">Dezember 2016</option>
                                            <option value="2017-01-01">Januar 2017</option>
                                            <option value="2017-02-01">Februar 2017</option>
                                            <option value="2017-03-01">März 2017</option>
                                            <option value="2017-04-01">April 2017</option>
                                            <option value="2017-05-01">Mai 2017</option>
                                            <option value="2017-06-01">Juni 2017</option>
                                            <option value="2017-07-01">Juli 2017</option>
                                            <option value="2017-08-01">August 2017</option>
                                            <option value="2017-09-01">September 2017</option>
                                            <option value="2017-10-01">Oktober 2017</option>
                                            <option value="2017-11-01">November 2017</option>
                                            <option value="2017-12-01">Dezember 2017</option>
                                            <option value="2018-01-01">Januar 2018</option>
                                        </select></form>
                                    <div class="DayPicker-Weekdays" role="rowgroup">
                                        <div class="DayPicker-WeekdaysRow" role="columnheader">
                                            <div class="DayPicker-Weekday"><abbr title="Montag">Mo</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Dienstag">Di</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Mittwoch">Mi</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Donnerstag">Do</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Freitag">Fr</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Samstag">Sa</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Sonntag">So</abbr></div>
                                        </div>
                                    </div>
                                    <div class="DayPicker-Body" role="grid">
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--disabled"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--disabled"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--disabled"></div>
                                            <div class="DayPicker-Day DayPicker-Day--disabled" role="gridcell"
                                                 aria-label="Do. 1. Dez. 2016" aria-disabled="true"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">1</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--disabled" role="gridcell"
                                                 aria-label="Fr. 2. Dez. 2016" aria-disabled="true"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">2</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--disabled" role="gridcell"
                                                 aria-label="Sa. 3. Dez. 2016" aria-disabled="true"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--disabled" role="gridcell"
                                                 aria-label="So. 4. Dez. 2016" aria-disabled="true"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">4</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day DayPicker-Day--disabled" role="gridcell"
                                                 aria-label="Mo. 5. Dez. 2016" aria-disabled="true"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">5</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="DayPicker-Day DayPicker-Day--today DayPicker-Day--bookable DayPicker-Day--first DayPicker-Day--last DayPicker-Day--selected"
                                                role="gridcell" aria-label="Di. 6. Dez. 2016" aria-disabled="false"
                                                aria-selected="true">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">6</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--warning" role="gridcell"
                                                 aria-label="Mi. 7. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich, da die Mindestaufenthaltsdauer nicht erfüllt wird">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">7</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Do. 8. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">8</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Fr. 9. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">9</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Sa. 10. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">10</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="So. 11. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">11</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mo. 12. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">12</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Di. 13. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">13</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mi. 14. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">14</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Do. 15. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">15</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Fr. 16. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">16</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Sa. 17. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">17</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="So. 18. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">18</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mo. 19. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">19</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Di. 20. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">20</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mi. 21. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">21</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Do. 22. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">22</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Fr. 23. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">23</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Sa. 24. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">24</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="So. 25. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">25</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mo. 26. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">26</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Di. 27. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">27</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mi. 28. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">28</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Do. 29. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">29</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Fr. 30. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">30</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Sa. 31. Dez. 2016" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">31</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--bookable"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="DayPicker-Month">
                                    <form class="DayPicker-Caption"><select class="Bs-Select">
                                            <option value="2016-12-01">Dezember 2016</option>
                                            <option value="2017-01-01" selected>Januar 2017</option>
                                            <option value="2017-02-01">Februar 2017</option>
                                            <option value="2017-03-01">März 2017</option>
                                            <option value="2017-04-01">April 2017</option>
                                            <option value="2017-05-01">Mai 2017</option>
                                            <option value="2017-06-01">Juni 2017</option>
                                            <option value="2017-07-01">Juli 2017</option>
                                            <option value="2017-08-01">August 2017</option>
                                            <option value="2017-09-01">September 2017</option>
                                            <option value="2017-10-01">Oktober 2017</option>
                                            <option value="2017-11-01">November 2017</option>
                                            <option value="2017-12-01">Dezember 2017</option>
                                            <option value="2018-01-01">Januar 2018</option>
                                            <option value="2018-02-01">Februar 2018</option>
                                        </select></form>
                                    <div class="DayPicker-Weekdays" role="rowgroup">
                                        <div class="DayPicker-WeekdaysRow" role="columnheader">
                                            <div class="DayPicker-Weekday"><abbr title="Montag">Mo</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Dienstag">Di</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Mittwoch">Mi</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Donnerstag">Do</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Freitag">Fr</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Samstag">Sa</abbr></div>
                                            <div class="DayPicker-Weekday"><abbr title="Sonntag">So</abbr></div>
                                        </div>
                                    </div>
                                    <div class="DayPicker-Body" role="grid">
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--bookable"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--bookable"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--bookable"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--bookable"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--bookable"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside DayPicker-Day--bookable"></div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="So. 1. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">1</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mo. 2. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">2</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Di. 3. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">3</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mi. 4. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">4</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Do. 5. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">5</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Fr. 6. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">6</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Sa. 7. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">7</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="So. 8. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">8</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mo. 9. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">9</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Di. 10. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">10</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mi. 11. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">11</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Do. 12. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">12</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Fr. 13. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">13</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Sa. 14. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">14</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="So. 15. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">15</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mo. 16. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">16</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Di. 17. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">17</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Mi. 18. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">18</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Do. 19. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">19</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Fr. 20. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">20</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day DayPicker-Day--bookable" role="gridcell"
                                                 aria-label="Sa. 21. Jan. 2017" aria-disabled="false"
                                                 aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">21</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="So. 22. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">22</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Mo. 23. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">23</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Di. 24. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">24</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Mi. 25. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">25</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Do. 26. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">26</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Fr. 27. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">27</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Sa. 28. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">28</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="So. 29. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">29</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="DayPicker-Week" role="gridcell">
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Mo. 30. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">30</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DayPicker-Day" role="gridcell" aria-label="Di. 31. Jan. 2017"
                                                 aria-disabled="false" aria-selected="false">
                                                <div class="DayPicker-Day__Wrapper hint--top"
                                                     data-hint="Abreise nicht möglich">
                                                    <div class="DayPicker-Day__Body">
                                                        <div class="DayPicker-Day__Date">31</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside"></div>
                                            <div role="gridcell" aria-disabled="true"
                                                 class="DayPicker-Day DayPicker-Day--outside"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" title="Nächster Monat"
                                    class="DayPicker-Navigation--next Bs--unstyled">
                                <svg class="Bs-Icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="http://www.hotelhgv.it/erweitertes-widget/#Bs-arrow-right"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="Bs-DayPicker-Legend">
                        <div class="Bs-Legend-Item Bs-Legend-Item--arrivalPossible">
                            <div class="Bs-Legend-Color DayPicker-Day--bookable"></div>
                            <span>Anreise möglich</span></div>
                        <div class="Bs-Legend-Item Bs-Legend-Item--departureNotPossible">
                            <div class="Bs-Legend-Color DayPicker-Day--warning"></div>
                            <span>Abreise nicht möglich</span></div>
                        <div class="Bs-Legend-Item Bs-Legend-Item--datesSelected">
                            <div class="Bs-Legend-Color DayPicker-Day--selected">
                                <div class="DayPicker-Day__Wrapper"></div>
                            </div>
                            <span>Auswahl</span></div>
                    </div>
                    <div class="Bs-Infos">
                        <div class="Bs-Info"><span>Bitte wählen Sie Ihren Abreisetag</span></div>
                    </div>
                </div>

                <!--  Generated calendar html end -->


            </div>
        </div>



        <div class="col-md-4 col-xs-12" id="all_rooms">

            <div class="jumbotron" id="room_1_data">
                
                <div class="calendar_accordion">


                    <h3 >Zimmer 1</h3>
                    <div>

                <div class="col-xs-6 margin-bottom">
                   
                        <div class="form-group">
                          <label for="room_1_adults_count">Erwachsene</label>
                          <select id="room_1_adults_count" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                    
                </div>

                <div class="col-xs-6 margin-bottom">
                    
                        <div class="form-group">
                          <label for="room_1_children_count">Kinder</label>
                          <select id="room_1_children_count" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                    
                </div>


                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_1_children_1_age">Alter des Kindes</label>
                          <select id="room_1_children_1_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
                
                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_1_children_2_age">Alter des Kindes</label>
                          <select id="room_1_children_2_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_1_children_3_age">Alter des Kindes</label>
                          <select id="room_1_children_3_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_1_children_4_age">Alter des Kindes</label>
                          <select id="room_1_children_4_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
            </div>


                    <h3 >Zimmer 2</h3>
                    <div>

                <div class="col-xs-6 margin-bottom">

                        <div class="form-group">
                          <label for="room_2_adults_count">Erwachsene</label>
                          <select id="room_2_adults_count" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>

                </div>

                <div class="col-xs-6 margin-bottom">

                        <div class="form-group">
                          <label for="room_2_children_count">Kinder</label>
                          <select id="room_2_children_count" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>

                </div>


                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_2_children_1_age">Alter des Kindes</label>
                          <select id="room_2_children_1_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_2_children_2_age">Alter des Kindes</label>
                          <select id="room_2_children_2_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_2_children_2_age">Alter des Kindes</label>
                          <select id="room_2_children_2_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_2_children_2_age">Alter des Kindes</label>
                          <select id="room_2_children_2_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
            </div>


                     <h3 >Zimmer 3</h3>
                    <div>

                <div class="col-xs-6 margin-bottom">

                        <div class="form-group">
                          <label for="room_3_adults_count">Erwachsene</label>
                          <select id="room_3_adults_count" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>

                </div>

                <div class="col-xs-6 margin-bottom">

                        <div class="form-group">
                          <label for="room_3_children_count">Kinder</label>
                          <select id="room_3_children_count" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div>

                </div>


                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_3_children_1_age">Alter des Kindes</label>
                          <select id="room_3_children_1_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_3_children_2_age">Alter des Kindes</label>
                          <select id="room_3_children_2_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_3_children_2_age">Alter des Kindes</label>
                          <select id="room_3_children_2_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                          <label for="room_3_children_2_age">Alter des Kindes</label>
                          <select id="room_3_children_2_age" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </div>
                </div>
            </div>



            </div>

                <a href="javascript:void(0)" class="is-focused" id="add_room"><i class="glyphicon glyphicon-plus"></i> Zimmer hinzufügen</a>
                    <a href="javascript:void(0)" class="btn btn-default btn-primary btn-lg btn-block btn-raised primary_bg">Buchen</a>



            </div>
            
            
        </div>
        
        </div>
</div>
        
        








    <div class="container-fluid widget_tab " id="rooms">


        <div class="jumbotron col-xs-12 no-padding room" id="room_1">

            <div class="col-sm-12 col-md-6  col-lg-4 img-container">
                <img src="img/room.jpg" class="img-responsive" >
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
                <div class="col-xs-12">
                    <h2 class="room_name">Double Deluxe Room</h2>
                    <div class="room_icons">
                        <i class="glyphicon glyphicon-grain"></i>
                        <i class="glyphicon glyphicon-bed"></i>
                        <i class="glyphicon glyphicon-picture"></i>
                        <i class="glyphicon glyphicon-glass"></i>
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        <i class="glyphicon glyphicon-modal-window"></i>
                    </div>
                    <div class="room_description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet molestie tellus.
                        Phasellus a commodo nisi, id laoreet nisi. Nullam orci purus, ornare ac diam eu, hendrerit aliquet arcu.
                        Duis quis semper urna. Nunc viverra mi non egestas luctus. Nullam a tristique nibh. Maecenas eu lacinia velit.
                        Nulla molestie congue enim eu placerat. 
                    </div>
                        <a href="javascript:void(0)" class="btn btn-raised btn-lg info_btn" >Buchen</a>


                </div>
            </div>
            <div class="col-xs-12 room_board">
               
                <div class="accordion">
                    <h3 >Bed and Breakfast</h3>
                    <div>
                        <div class="col-sm-9">First content panel
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet molestie tellus.
                    Phasellus a commodo nisi, id laoreet nisi. Nullam orci purus, ornare ac diam eu, hendrerit aliquet arcu.
                    Duis quis semper urna. Nunc viverra mi non egestas luctus. Nullam a tristique nibh. Maecenas eu lacinia velit.
                    Nulla molestie congue enim eu placerat. 
                        </div>
                        <div class="col-sm-3">
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 323€</a>
                        </div>
                    </div>
                    <h3>Half Board</h3>
                    <div>
                        <div>First content panel
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 450€</a>
                        </div>
                    </div>
                    <h3>Full Board</h3>
                    <div>
                        <div>First content panel
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 513€</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="jumbotron col-xs-12 no-padding room" id="room_2">

            <div class="col-sm-3 img-container">
                <img src="img/bath.jpg" class="img-responsive" >
            </div>
            <div class="col-sm-9">
                <div class="col-xs-12">
                    <h2 class="room_name">Suite Premium</h2>
                    <div class="room_icons">
                        <i class="glyphicon glyphicon-grain"></i>
                        <i class="glyphicon glyphicon-bed"></i>
                        <i class="glyphicon glyphicon-picture"></i>
                        <i class="glyphicon glyphicon-glass"></i>
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        <i class="glyphicon glyphicon-modal-window"></i>
                    </div>
                    <div class="room_description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet molestie tellus.
                        Phasellus a commodo nisi, id laoreet nisi. Nullam orci purus, ornare ac diam eu, hendrerit aliquet arcu.
                        Duis quis semper urna. Nunc viverra mi non egestas luctus. Nullam a tristique nibh. Maecenas eu lacinia velit.
                        Nulla molestie congue enim eu placerat. 
                    </div>
                        <a href="javascript:void(0)" class="btn btn-raised btn-lg info_btn" >Buchen</a>


                </div>
            </div>
            <div class="col-xs-12 room_board">
               
                <div class="accordion">
                    <h3 >Bed and Breakfast</h3>
                    <div>
                        <div class="col-sm-9">First content panel
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet molestie tellus.
                    Phasellus a commodo nisi, id laoreet nisi. Nullam orci purus, ornare ac diam eu, hendrerit aliquet arcu.
                    Duis quis semper urna. Nunc viverra mi non egestas luctus. Nullam a tristique nibh. Maecenas eu lacinia velit.
                    Nulla molestie congue enim eu placerat. 
                        </div>
                        <div class="col-sm-3">
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 323€</a>
                        </div>
                    </div>
                    <h3>Half Board</h3>
                    <div>
                        <div>First content panel
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 450€</a>
                        </div>
                    </div>
                    <h3>Full Board</h3>
                    <div>
                        <div>First content panel
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 513€</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="jumbotron col-xs-12 no-padding room" id="room_3">

            <div class="col-sm-3 img-container">
                <img src="img/bath.jpg" class="img-responsive" >
            </div>
            <div class="col-sm-9">
                <div class="col-xs-12">
                    <h2 class="room_name">Suite Premium</h2>
                    <div class="room_icons">
                        <i class="glyphicon glyphicon-grain"></i>
                        <i class="glyphicon glyphicon-bed"></i>
                        <i class="glyphicon glyphicon-picture"></i>
                        <i class="glyphicon glyphicon-glass"></i>
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        <i class="glyphicon glyphicon-modal-window"></i>
                    </div>
                    <div class="room_description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet molestie tellus.
                        Phasellus a commodo nisi, id laoreet nisi. Nullam orci purus, ornare ac diam eu, hendrerit aliquet arcu.
                        Duis quis semper urna. Nunc viverra mi non egestas luctus. Nullam a tristique nibh. Maecenas eu lacinia velit.
                        Nulla molestie congue enim eu placerat. 
                    </div>
                        <a href="javascript:void(0)" class="btn btn-raised btn-lg info_btn" >Buchen</a>


                </div>
            </div>
            <div class="col-xs-12 room_board">
               
                <div class="accordion">
                    <h3 >Bed and Breakfast</h3>
                    <div>
                        <div class="col-sm-9">First content panel
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet molestie tellus.
                    Phasellus a commodo nisi, id laoreet nisi. Nullam orci purus, ornare ac diam eu, hendrerit aliquet arcu.
                    Duis quis semper urna. Nunc viverra mi non egestas luctus. Nullam a tristique nibh. Maecenas eu lacinia velit.
                    Nulla molestie congue enim eu placerat. 
                        </div>
                        <div class="col-sm-3">
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 323€</a>
                        </div>
                    </div>
                    <h3>Half Board</h3>
                    <div>
                        <div>First content panel
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 450€</a>
                        </div>
                    </div>
                    <h3>Full Board</h3>
                    <div>
                        <div>First content panel
                            <a href="javascript:void(0)" class="btn btn-primary btn-raised btn-lg book_btn primary_bg" >Buchen um 513€</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>















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
    
    $("select").dropdown({ "autoinit" : ".select" });

    $( ".accordion" ).accordion({
        collapsible: true,
        active: false,
        heightStyle: "content"
    });

     $( ".calendar_accordion" ).accordion({
        collapsible: true,
        active: 0,
        heightStyle: "content"
    });


</script>


</body>

</html>
