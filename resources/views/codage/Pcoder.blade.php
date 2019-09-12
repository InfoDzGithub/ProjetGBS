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
     <!-- touchspin CSS
        ============================================ -->
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
                 
        <div id="sendmail" class="tab-pane fade in animated zoomInDown fade shadow-reset custom-inbox-message active">
            <div class="datatable-dashv1-list custom-datatable-overright">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert-title">
                                <h2>module</h2>
                                <span>à codé</sapn>
                            </div>
                        <div class="admin-pro-accordion-wrap mg-b-15 shadow-reset">
                            
                            <div class="panel-group adminpro-custon-design" id="accordion">
                                @foreach($examn as $Ex)
                                <div class="panel panel-default" >
                                    <div class="panel-heading accordion-head" style="background-color: #8cc5ecba;box-shadow: 0 0 15px 0px #0095f9;text-shadow: 0 0 4px #0a9fff;color: #0964b5;">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$Ex->id}}">
                                            {{$Ex->type}}</a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$Ex->id}}" class="panel-collapse panel-ic collapse in">
                                        <div class="panel-body admin-panel-content animated bounce" style="background-color: #87c1ea1c;box-shadow: 0px 11px 6px 2px #f2f8fd;">
                                            <div class="col-lg-3">
                                                <div class="box box-8">
                                                    <div class="cover">
                                                        <img src="{{asset('frontEnd')}}/img/newPaq.png" alt="">
                                                    </div>
                                                    <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl{{$Ex->id}}">
                                                        <button class="But">
                                                            <div></div>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            @foreach($paquet as $P)
                                            @if($P->idEx==$Ex->id)
                                           
                                             <div class="col-lg-2">
                                                <div class="box box-6">
                                                    <a href="{{ url('paquet/'.$P->idP.'/'.$Ex->id)}}">
                                                    <div class="cover" style="position:relative; height:150px">
                                                         <div style="position:absolute;z-index:1">
                                                            <img src="{{asset('frontEnd')}}/img/paquet.png" alt="" style="width: 190px;height: 160px;">
                                                        </div>
                                                         <div style="position:absolute;top: 80px;width: 160px;height: 100px;z-index: 3;font-size:150%;">
                                                            <center><b style="text-shadow: -6px -5px 4px #404040ad;">{{$P->idP}}</b></center>
                                                        </div> 
                                                    </div>
                                                    
                                                    <button type="button" class="But" data-dismiss="modal" data-toggle="tab" href="#sendmail"><div></div></button>
                                                </div></a>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div id="PrimaryModalhdbgcl{{$Ex->id}}" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-1">
                                                <h4 class="modal-title">add new paquet</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <form action="{{url('paquet/'.$Ex->id)}}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                            <div class="modal-body">
                                                            <i class="fa fa-check modal-check-pro"></i>
                                                <h2>creation du paquet!</h2>
                                                <hr/>
                                                <p>le nombre feille dans un paquet </p><br>
                                                <p><input class="form-control" type="number" value="30" name="nbr"></p><br>
                                               
                                          
                                        </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a data-dismiss="modal" href="#">Cancel</a>
                                                <button type="submit" class=" btn btn-lg btn-primary">Process</button> 
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
 
                    </div><!-- /.span -->
                </div><!-- /.row -->
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
 <!-- touchspin JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/touchspin/touchspin-active.js"></script>
@endsection