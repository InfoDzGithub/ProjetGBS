@extends('layout.master')

@section('title','GBS | Ajouter un examen')

@section('linkcss')

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
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/normalize.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/c3.min.css">
    <!-- style CSS-->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <!-- responsive CSS-->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    <!-- modernizr JS-->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css">
    <script src="{{asset('frontEnd')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    
@endsection



@section('content')
  <div class="tab-content">
                <div class="row">
                    <div class="col-lg-12">
                         <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                         <div class="row">
                            <div class="col-xs-12">
                                 <div class="form-group-inner">
                                  <div class="row">
                                    <hr width="75%" size="3">
                                    <h2 align="center">Résultats de (du)) {{$examen->type}} {{$examen->titre}} en {{$examen->nomMat}}</h2>
                                    <br><br>
                                     </div>
                                 </div>
                             </div>
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
                                                <th data-field="id">ID</th>
                                                <th data-field="name" >Nom</th>
                                                <th data-field="complete">Prenom</th>
                                                <th style="background-color: #40a79254;">Notes 1er correction</th>
                                                <th >Notes 2eme correction</th>
                                                <th >Notes 3eme correction</th>
                                                <th >Notes finale</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lists as $etd)
                                            <tr>
                                                <td> </td>
                                                <td>{{$etd->id}}</td>
                                                <td class="datatable-ct">{{$etd->nom}}</td>
                                                <td class="datatable-ct">{{$etd->prenom}}</td>
                                                
                                                <td class="datatable-ct">
                                                    @if($etd->noteC1==0)
                                                    non courigé
                                                    @else 
                                                    {{$etd->noteC1}}
                                                    @endif</td>
                                                
                                                <td class="datatable-ct" style="background-color: #b5d7d078;">
                                                    @if($etd->noteC2==0)
                                                    non courigé
                                                    @else 
                                                    {{$etd->noteC2}}
                                                    @endif</td>
                                                <td class="datatable-ct">@if($etd->noteC3==0)
                                                    non courigé
                                                    @else 
                                                    {{$etd->noteC3}}
                                                    @endif</td>
                                                <td class="datatable-ct">@if($etd->note==0)
                                                    correction pas encore terminé
                                                    @else 
                                                    {{$etd->note}}
                                                    @endif</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                 <div class="form-group-inner">
                                  <div class="row">
                                    <br><br>
                                    <hr width="75%" size="3">
                                    
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
<script src="{{asset('frontEnd')}}/assets/js/jquery-2.1.4.min.js"></script>

    <script src="{{asset('frontEnd')}}/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('frontEnd')}}/ssets/js/moment.min.js"></script>
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












@endsection