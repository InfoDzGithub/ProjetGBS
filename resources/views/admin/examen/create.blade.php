@extends('layout.master')

@section('title','GBS | Ajouter un examen')

@section('linkcss')
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tabs | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 

    <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="{{asset('frontEnd')}}/assets/js/ace-extra.min.js"></script>

    
@endsection

@section('content')
     <?php
 try
{
    $bdd = new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', '');

}
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        } 
?>
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="sparkline12-list shadow-reset mg-t-30">
                <div class="sparkline12-hd">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Création d'un Examen</h1>
                            <div class="sparkline12-outline-icon">
                                <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="all-form-element-inner">
                                    <form action="{{url('examens/'.$idMatiere)}}" method="GET">
                                    {{ csrf_field() }}
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <img src="{{asset('frontEnd')}}/img/exmn.png">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <hr width="75%" size="3">
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <H2>Nouveau Examen</H2>
                                                    <hr width="30%" size="3">
                                                </div>
                                            </div>
                                        </div>
                                        <!--titre examen-->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                     <label class="login2 pull-right pull-right-pro">Titre</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" name="titre" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                         <!--nom matiere>
                                          <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="login2 pull-right pull-right-pro">Matiere</label>
                                                </div>
                                                <div class="col-lg-4">
                                                   <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                              <select name="matiere" class="form-control selectpicker">
                                              <option>Select matiere</option>
                                              @foreach($matieres as $matiere)

                                                <option value="{{$matiere->id}}">
                                             {{$matiere->nomMat}}
                    
                                                  </option>
                                                @endforeach
                                              </select>

                                          </div>
                                                </div>
                                            </div>
                                        </div-->
                                         <!--date examen--><div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                  <label class="login2 pull-right pull-right-pro">Date Examen</label>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group data-custon-pick" id="data_1">
                                                      <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" name="date_examen" class="form-control" value="10/04/2018">
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--typr-->
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                     <label class="login2 pull-right pull-right-pro">Type Examen</label>
                                                </div>
                                                <div class="col-lg-4">
                                    <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" name="type">
                                            <option >Select Type</option>
                                             <option >CC</option>
                                             <option >TEST</option>
                                            <option >EXAMAN</option>
                                            <option >RATRAPAGE</option>
                                                                                
                                    </select>
                                                  </div>
                                            </div></div>
                                       </div>
                                         <!--lien examen-->
                                        
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                     <label class="login2 pull-right pull-right-pro">Sujet</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input name="sujet" type="file" id="exampleInputFile" value="{{old('sujet')}}">
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <div style="padding-top: 30px; margin-left: 35%;">
                                            <a href="#" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler
                                            </a>
                                            <!--button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider
                                            </button-->
                                             <a href="#modal-table" role="button"  data-toggle="modal"> 
                                                <button class="btn btn-lg btn-primary" >
                                                    <i class="fa fa-check"></i> Valider
                                                </button> </a> 
                                        </div>
                                        <div id="modal-table" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header no-padding">
                                                        <div class="table-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                <span class="white">&times;</span>
                                                            </button>
                                                           Pour créer cet examen il faudra d'abord valider la liste des exclus
                                                        </div>
                                                    </div>

                                                    <div class="modal-body no-padding">
                                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th class="center">
                                                                        <label class="pos-rel">
                                                                            <input type="checkbox" class="ace" />
                                                                            <span class="lbl"></span>
                                                                        </label>
                                                                    </th>
                                                                    <th>matricule</th>
                                                                    <th>nom</th>

                                                                    <th>
                                                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                                        date naissance
                                                                    </th>
                                                                    <th class="hidden-480">groupe</th>
                                                                    <th class="hidden-480">seance type</th>

                                                                    <th>exclure</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                @foreach($exclus as $E)
                                                                <tr>
                                                                    <td class="center">
                                                                        <label class="pos-rel">
                                                                            <input type="checkbox" class="ace" />
                                                                            <span class="lbl"></span>
                                                                        </label>
                                                                    </td>

                                                                    <td>
                                                                        <a href="#">{{$E->id}}</a>
                                                                    </td>
                                                                    <td>{{$E->nom}} {{$E->prenom}}</td>
                                                                     <td>{{$E->dateN}}</td>
                                                                     
                                                                     <td class="hidden-480">
                                                                     <span class="label label-sm label-warning">{{$E->groupes_id}}</span></td>
                                                                     <td class="hidden-480">
                                                                     <span class="label label-sm label-warning">{{$E->type}}</span></td>

                                                                    <td>
                                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                                            <a class="blue" href="#">
                                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                            </a>

                                                                            <a class="green" href="#">
                                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                            </a>

                                                                            <a class="red" href="#">
                                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                            </a>
                                                                        </div>

                                                                        <div class="hidden-md hidden-lg">
                                                                            <div class="inline pos-rel">
                                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                </button>

                                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                    <li>
                                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                            <span class="blue">
                                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                            <span class="green">
                                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li>
                                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                            <span class="red">
                                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="modal-footer no-margin-top">
                                                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                                            <i class="ace-icon fa fa-times"></i>
                                                            Close
                                                        </button>
                                                        <button class="btn btn-sm btn-success pull-left" type="submit" >
                                                            <i class="ace-icon fa fa-times"></i>
                                                           Validé
                                                        </button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <hr width="75%" size="3">
                                            </div>
                                        </div>

                                    </form>
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
        <script src="{{asset('frontEnd')}}/assets/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.flash.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.html5.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.print.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.colVis.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/dataTables.select.min.js"></script>

        <!-- ace scripts -->
        <script src="{{asset('frontEnd')}}/assets/js/ace-elements.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                //initiate dataTables plugin
                var myTable = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                      { "bSortable": false },
                      null, null,null, null, null,
                      { "bSortable": false }
                    ],
                    "aaSorting": [],
                    
                    
                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"   ,
            
                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,
            
                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element
            
                    //"iDisplayLength": 50
            
            
                    select: {
                        style: 'multi'
                    }
                } );
            
                
                
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                
                new $.fn.dataTable.Buttons( myTable, {
                    buttons: [
                      {
                        "extend": "colvis",
                        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        columns: ':not(:first):not(:last)'
                      },
                      {
                        "extend": "copy",
                        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "csv",
                        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "excel",
                        "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "pdf",
                        "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "print",
                        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                      }       
                    ]
                } );
                myTable.buttons().container().appendTo( $('.tableTools-container') );
                
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                
                
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {
                    
                    defaultColvisAction(e, dt, button, config);
                    
                    
                    if($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                });
            
                ////
            
                setTimeout(function() {
                    $($('.tableTools-container')).find('a.dt-button').each(function() {
                        var div = $(this).find(' > div').first();
                        if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                        else $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                
                
                
                
                
                myTable.on( 'select', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
                    }
                } );
                myTable.on( 'deselect', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
                    }
                } );
            
            
            
            
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $('#dynamic-table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) myTable.row(row).select();
                        else  myTable.row(row).deselect();
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                    var row = $(this).closest('tr').get(0);
                    if(this.checked) myTable.row(row).deselect();
                    else myTable.row(row).select();
                });
            
            
            
                $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                
                
                
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
                    var $row = $(this).closest('tr');
                    if($row.is('.detail-row ')) return;
                    if(this.checked) $row.addClass(active_class);
                    else $row.removeClass(active_class);
                });
            
                
            
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
                
                
                
                
                /***************/
                $('.show-details-btn').on('click', function(e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/
                
                
                
                
                
                /**
                //add horizontal scrollbars to a simple table
                $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                  {
                    horizontal: true,
                    styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                    size: 2000,
                    mouseWheelLock: true
                  }
                ).css('padding-top', '12px');
                */
            
            
            })
        </script>
    
@endsection