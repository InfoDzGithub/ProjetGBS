@extends('layout.master')
@section('title','GBS | Ajouter un Enseignant')
@section('linkcss')
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.2.0 | Adminpro - Admin Template</title>
    <meta name="description" content="with draggable and editable events" />
    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/animate.css">
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/modals.css">
    <!-- normalize CSS
        ============================================ -->

    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/normalize.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/form/all-type-forms.css">
    <!-- touchspin CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/datapicker/datepicker3.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/form/themesaller-forms.css">
    <!-- colorpicker CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/colorpicker/colorpicker.css">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/select2/select2.min.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/chosen/bootstrap-chosen.css">
    <!-- ionRangeSlider CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/vendor/modernizr-2.8.3.min.js"></script>

 <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css">
@endsection
@section('content')
  <div class="tab-content">
                          
                <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                    <div >
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="transition-world-list shadow-reset">
                                    <div class="sparkline7-list">
                                        <div class="sparkline7-hd" style="background-color: #8cc5ecba;box-shadow: 0 0 15px 0px #0095f9;text-shadow: 0 0 4px #0a9fff;color: #0964b5;">
                                            <div class="main-spark7-hd" >
                                                <h1>module  <span class="res-ds-n">enseigné</span></h1>
                                                <div class="sparkline7-outline-icon">
                                                    <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline7-graph"style="background-color: #87c1ea1c;box-shadow: 0px 11px 6px 2px #f2f8fd;"><br><br>
                                            <div class="income-order-visit-user-area">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        
                                                          @foreach($modules as $module)
                                            <div class="col-lg-2">
                                                <div class="{{$module->color}}">
                                                    <a href="{{ url('matiercoder/'.$module->id)}}">
                                                    <div class="cover" style="position:relative; height:200px">
                                                         <div style="position:absolute;z-index:1">
                                                            <img src="{{asset($module->photo)}}" alt="" style="width: 160px;height: 224px;">
                                                        </div>
                                                         <div style="position:absolute;top: 100px;width: 160px;height: 100px;z-index: 3;font-size:150%;">
                                                            <center><b style="text-shadow: -6px -5px 4px #404040ad;">{{$module->nomMat}}</b></center>
                                                        </div> 
                                                    </div>
                                                    
                                                    <button type="button" class="But" data-dismiss="modal" data-toggle="tab" href="#sendmail"><div></div></button>
                                                </div></a>
                                            </div>
                                            @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                

            </div>
@endsection
@section('ChatBox')

    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('linkJS')
 <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/wow/wow.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('frontEnd')}}/js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/peity/jquery.peity.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/flot/Chart.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/tableExport.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/data-table-active.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table-editable.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-editable.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/colResizable-1.5.source.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/main.js"></script>
    <script src="{{asset('frontEnd')}}/js/select2/select2.full.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/select2/select2-active.js"></script>
@endsection