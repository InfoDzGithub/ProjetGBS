@extends('layout.master')
@section('title','GBS | marquer Absence')
@section('cssHeader')
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.2.0 | Adminpro - Admin Template</title>
    <meta name="description" content="with draggable and editable events" />
        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery.gritter.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/select2.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-editable.min.css" />
         <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/chosen.min.css" />


    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-duallistbox.min.css" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-multiselect.min.css" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/select2.min.css" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-datetimepicker.min.css" />
     <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/select2.min.css" />


        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-rtl.min.css" />

        <script src="{{asset('frontEnd')}}/assets/js/ace-extra.min.js"></script>
   

@endsection 
@section('content')
 
 <div class="tab-content">
    {{$aff}}
                <div class="row">
                    <div class="col-lg-12">
                         <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                         <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="center col-xs-4">
                                    <a href="#modal-wizard" data-toggle="modal" class="pink"> 
                                        @if($aff>=1)
                                    <button class="btn btn-app btn disabled btn-success ">
                                        @elseif($aff==0)
                                        <button class="btn btn-app btn  btn-success ">
                                            @endif
                                        <img src="{{asset('frontEnd')}}/img/affect.png" style="width: 90px;height: 70px;"><br>
                                        Afection 1
                                    </button>
                                    </a>
                                </div>
                                <div class="center col-xs-4">
                                    <a href="#modal-wizard" data-toggle="modal" class="pink"> 
                                    @if($aff>=3)
                                    <button class="btn btn-app btn disabled btn-success ">
                                        @elseif($aff==2)
                                        <button class="btn btn-app btn  btn-success ">
                                           @else
                                            <button class="btn btn-app btn disabled btn-light ">
                                            @endif
                                        <img src="{{asset('frontEnd')}}/img/affect.png" style="width: 90px;height: 70px;"><br>
                                        Afection 2
                                    </button>
                                    </a>
                                </div>
                                
                                <div class="center col-xs-4">
                                    <a href="#modal-wizard" data-toggle="modal" class="pink"> 
                                    @if($aff>=5)
                                    <button class="btn btn-app btn disabled btn-success ">
                                        @elseif($aff==4)
                                        <button class="btn btn-app btn  btn-success ">
                                            @else
                                            <button class="btn btn-app btn disabled btn-light ">
                                            @endif
                                        <img src="{{asset('frontEnd')}}/img/affectation.png" style="width: 90px;height: 70px;"><br>
                                        Afection 3
                                    </button>
                                    </a>
                                </div>
                                
                                <div id="modal-wizard" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{url('affecter/'.$idEx)}}" method="POST" enctype="multipart/form-data">
                                              {{ csrf_field() }}
                                                <div id="modal-wizard-container">
                                                    <div class="modal-header">
                                                        <ul class="steps">
                                                            <li data-step="1" class="active">
                                                                <span class="step">1</span>
                                                                <span class="title">Choix des enseignat</span>
                                                            </li>

                                                            <li data-step="2">
                                                                <span class="step">2</span>
                                                                <span class="title">afectation des paquet</span>
                                                            </li>

                                                            <li data-step="3">
                                                                <span class="step">3</span>
                                                                <span class="title">date de fin</span>
                                                            </li>

                                                            <li data-step="4">
                                                                <span class="step">4</span>
                                                                <span class="title">validation</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="modal-body step-content">
                                                        <div class="step-pane active" data-step="1">
                                                            <div class="center">
                                                                <h4 class="blue">Step 1</h4>
                                                                <div class="page-content">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <!-- PAGE CONTENT BEGINS
                                                                            <form class="form-horizontal" role="form">

                                                                                <div class="form-group">


                                                                                    <div class="col-sm-12">
                                                                                        <select multiple="multiple" size="10" name="duallistbox_demo1[]" id="duallist">
                                                                                            @foreach($ens as $E)
                                                                                            <option value="{{$E->idE}}">{{$E->nom}} {{$E->prenom}}</option>
                                                                                            @endforeach
                                                                                           
                                                                                        </select>

                                                                                        <div class="hr hr-16 hr-dotted"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </form> -->


                                                                            <!-- PAGE CONTENT ENDS -->
                                                                        </div><!-- /.col -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.page-content -->




                                                            </div>
                                                        </div>

                                                        <div class="step-pane" data-step="2">
                                                            <div class="center">
                                                                <h4 class="blue">Step 2</h4>
                                                            </div>
                                                            @foreach($ens as $E)
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div>
                                                                        <span class="bigger-110">{{$E->nom}} {{$E->prenom}}</span> 
                                                                        <input type="hidden" value="{{$E->idE}}" name="{{$E->idE}}">
                                                                        <div class="space-2"></div><br>
                                                                        <select multiple="multiple" name="paquet{{$E->idE}}[]" class="chosen-select form-control" id="form-field-select-4" data-placeholder="choissez un paquet...">
                                                                              @foreach($paquet as $P)
                                                                            <option value="{{$P->id}}">paquet{{$P->id}} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div><br><br>@endforeach

                                                        </div>

                                                        <div class="step-pane" data-step="3">
                                                            <div class="center">
                                                                <h4 class="blue">Step 3</h4>
                                                                <div class="row">
                                                                    <div class="col-xs-8 col-sm-11">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-calendar bigger-110"></i>
                                                                            </span>

                                                                            <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1"  />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="step-pane" data-step="4">
                                                            <div class="center">
                                                                <h4 class="blue">Step 4</h4>
                                                                <button type="submit" class="btn btn-success btn-sm" >Finish
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer wizard-actions">
                                                    <button type="button" class="btn btn-sm btn-prev">
                                                        <i class="ace-icon fa fa-arrow-left"></i>
                                                        Prev
                                                    </button>

                                                    <button type="button" class="btn btn-success btn-sm btn-next" data-last="">
                                                        Next
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
                                                        <i class="ace-icon fa fa-times"></i>
                                                        Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row --> 
                        </div>
                        <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                            <div >
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="name" >code</th>
                                                <th data-field="complete">Correction 1</th>
                                                <th data-field="price">Correction 2</th>
                                                <th data-field="price">Correction 3</th>
                                                <th data-field="action">note finale</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($etd as $E)
                                            <tr>
                                                <td></td>
                                                <td class="datatable-ct">{{$E->code}}</td>
                                                <td class="datatable-ct">{{$E->noteC1}}</td>
                                                <td class="datatable-ct">{{$E->noteC2}} </td>
                                                <td class="datatable-ct">{{$E->noteC3}}</td>
                                                <td class="datatable-ct">{{$E->note}}</td>
                                            </tr>
                                            @endforeach
                                           
                                            
                                        </tbody>
                                    </table>
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
<script src="{{asset('frontEnd')}}/assets/js/jquery-2.1.4.min.js"></script>

    <script src="{{asset('frontEnd')}}/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('frontEnd')}}/assets/js/moment.min.js"></script>
    <script src="{{asset('frontEnd')}}/assets/js/daterangepicker.min.js"></script>
    <script src="{{asset('frontEnd')}}/assets/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        jQuery(function($) {

            $('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            })
                //show datepicker when clicking on the icon
                .next().on(ace.click_event, function(){
                    $(this).prev().focus();
                });

                //or change it into a date range picker
                $('.input-daterange').datepicker({autoclose:true});


                //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
                $('input[name=date-range-picker]').daterangepicker({
                    'applyClass' : 'btn-sm btn-success',
                    'cancelClass' : 'btn-sm btn-default',
                    locale: {
                        applyLabel: 'Apply',
                        cancelLabel: 'Cancel',
                    }
                })
                .prev().on(ace.click_event, function(){
                    $(this).next().focus();
                });





            });
        </script>

        <script src="{{asset('frontEnd')}}/assets/js/jquery-2.1.4.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.bootstrap-duallistbox.min.js"></script>
        <script type="text/javascript">
            jQuery(function($){
                var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-purple label-lg">Filtered</span>'});
                var container1 = demo1.bootstrapDualListbox('getContainer');
                container1.find('.btn').addClass('btn-white btn-info btn-bold');
                var a=dualListbox.elements.select2.find('option').length;
                /**var setRatingColors = function() {
                    $(this).find('.star-on-png,.star-half-png').addClass('orange2').removeClass('grey');
                    $(this).find('.star-off-png').removeClass('orange2').addClass('grey');
                }*/
                $('.rating').raty({
                    'cancel' : true,
                    'half': true,
                    'starType' : 'i'
                    /**,
                    
                    'click': function() {
                        setRatingColors.call(this);
                    },
                    'mouseover': function() {
                        setRatingColors.call(this);
                    },
                    'mouseout': function() {
                        setRatingColors.call(this);
                    }*/
                })//.find('i:not(.star-raty)').addClass('grey');

            });
        </script>


        <script src="{{asset('frontEnd')}}/assets/js/jquery-2.1.4.min.js"></script>

        
        <script src="{{asset('frontEnd')}}/assets/js/chosen.jquery.min.js"></script>
        
        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                if(!ace.vars['touch']) {
                    $('.chosen-select').chosen({allow_single_deselect:true}); 
                    //resize the chosen on window resize

                    $(window)
                    .off('resize.chosen')
                    .on('resize.chosen', function() {
                        $('.chosen-select').each(function() {
                           var $this = $(this);
                           $this.next().css({'width': $this.parent().width()});
                       })
                    }).trigger('resize.chosen');
                    //resize chosen on sidebar collapse/expand
                    $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                        if(event_name != 'sidebar_collapsed') return;
                        $('.chosen-select').each(function() {
                           var $this = $(this);
                           $this.next().css({'width': $this.parent().width()});
                       })
                    });




                    $('#form-field-select-4').addClass('tag-input-style');

                }



            });
        </script>





        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="{{asset('frontEnd')}}/assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('frontEnd')}}/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{asset('frontEnd')}}/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="{{asset('frontEnd')}}/assets/js/wizard.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/jquery.validate.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/jquery-additional-methods.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/bootbox.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/jquery.maskedinput.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/select2.min.js"></script>

<!-- ace scripts -->
<script src="{{asset('frontEnd')}}/assets/js/ace-elements.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {

        $('#validation-form').validate({
                    errorElement: 'div',
                    errorClass: 'help-block',
                    focusInvalid: false,
                    ignore: "",
                    rules: {
                        email: {
                            required: true,
                            email:true
                        },
                        password: {
                            required: true,
                            minlength: 5
                        },
                        password2: {
                            required: true,
                            minlength: 5,
                            equalTo: "#password"
                        },
                        name: {
                            required: true
                        },
                        phone: {
                            required: true,
                            phone: 'required'
                        },
                        url: {
                            required: true,
                            url: true
                        },
                        comment: {
                            required: true
                        },
                        state: {
                            required: true
                        },
                        platform: {
                            required: true
                        },
                        subscription: {
                            required: true
                        },
                        gender: {
                            required: true,
                        },
                        agree: {
                            required: true,
                        }
                    },

                    messages: {
                        email: {
                            required: "Please provide a valid email.",
                            email: "Please provide a valid email."
                        },
                        password: {
                            required: "Please specify a password.",
                            minlength: "Please specify a secure password."
                        },
                        state: "Please choose state",
                        subscription: "Please choose at least one option",
                        gender: "Please choose gender",
                        agree: "Please accept our policy"
                    },


                    highlight: function (e) {
                        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                    },

                    success: function (e) {
                        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                        $(e).remove();
                    },

                    errorPlacement: function (error, element) {
                        if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                            var controls = element.closest('div[class*="col-"]');
                            if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                            else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                        }
                        else if(element.is('.select2')) {
                            error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                        }
                        else if(element.is('.chosen-select')) {
                            error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                        }
                        else error.insertAfter(element.parent());
                    },

                    submitHandler: function (form) {
                    },
                    invalidHandler: function (form) {
                    }
                });




$('#modal-wizard-container').ace_wizard();
$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


                /**
                $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
                    $(this).closest('form').validate().element($(this));
                });
                
                $('#mychosen').chosen().on('change', function(ev) {
                    $(this).closest('form').validate().element($(this));
                });
                */
                
                
                $(document).one('ajaxloadstart.page', function(e) {
                    //in ajax mode, remove remaining elements before leaving page
                    $('[class*=select2]').remove();
                });
            })
        </script>













    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/wow/wow.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="js/flot/Chart.min.js"></script>
    <script src="js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
@endsection