@extends('layout.master')
@section('title','GBS | marquer Absence')
@section('cssHeader')

        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery.gritter.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/select2.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-editable.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-rtl.min.css" />

       <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fullcalendar.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->
            <script src="{{asset('frontEnd')}}/assets/js/ace-extra.min.js"></script>

        <!-- ace settings handler -->
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
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style.css">
    <script src="{{asset('frontEnd')}}/js/vendor/modernizr-2.8.3.min.js"></script>

@endsection
@section('asidebar')


                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                           
                        </li>
                        <li class="nav-item"><a href="{{url('enseignant/{id}/details')}}" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Profil</span> </a>
                           
                        </li>

                        <li class="nav-item"><a href="MAbsence.html" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-calendar-check-o"></i> <span class="mini-dn">Marquer absence</span> </a>
                          
                        </li>
                        
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pencil-square-o"></i> <span class="mini-dn">correction</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            @foreach($ps as $p)
                                <a href="{{url('MarquerAbsence/. $p->idPromot.') }}" class="dropdown-item">
                                {{$p->filiere}} {{$p->annee}} 
                                </a>
                                
                            @endforeach
                               
                            </div>
                        </li>

                        <li class="nav-item"><a href="paramtre.html" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon  fa-wrench"></i> <span class="mini-dn">paramtre</span> </a>
                            
                        </li>
                    </ul>
     @endsection 
    
     @section('content')
     <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd" style="background-color: rgba(73, 164, 225, 0.63);box-shadow: -1px 1px 20px 13px #7abde9de;">
                                    <div class="main-sparkline12-hd">
                                        <h1 style="color: white;text-shadow: -1px -2px 10px #efe1e1;"> la seance du {{$seance->date}} à {{$seance->time}}</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="sparkline12-graph" style="box-shadow: 0 0 14px 9px #fffffff2;" >

                                     <div class="tab-content">
                                         <div class="form-group-inner">
                                            <div class="row">
                                                <img src="{{asset('frontEnd')}}/img/absent1.png">
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <hr style="box-shadow: 0 0 4px 0px #00ffc8;" width="75%" size="3">
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <H2 ><span style="text-shadow: 0 0 6px #000000;color: #c1dcef;"> {{$type}} {{$module->nomMat}} {{$groupe->nomGroup}}</span></H2>
                                                     <hr style="box-shadow: 0 0 4px 0px #00ffc8;" width="30%" size="3">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="sendmail" class="tab-pane animated zoomInDown shadow-reset custom-inbox-message active">
                                                <div class="datatable-dashv1-list custom-datatable-overright">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            
                                                         
                                                             <form action="{{url('marrquer_absence/'.$groupe->nomGroup.'/'.$seance->id)}}" method="GET" enctype="multipart/form-data">
                                                            <table id="simple-table" class="table  table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="center">
                                                                            <label class="pos-rel">
                                                                                <input type="checkbox" class="ace" />
                                                                                <span class="lbl"></span>
                                                                            </label>
                                                                        </th>
                                                                        <th class="detail-col">Details</th>
                                                                        <th>mtricule</th>
                                                                        <th>nom</th>
                                                                        <th class="hidden-480">prenom</th>

                                                                        <th>
                                                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                                           date naissance
                                                                        </th>
                                                                        <th class="center">Groupe</th>
                                                                        <th class="center"> absent</th>

                                                                        <th>justifiaction</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    @foreach($etudiants as $etd)
                                                                    <?php  $var=1 ?>
                                                                    @foreach($exclus as $excl)
                                                                    @if ($excl->id==$etd->id)
                                                                    <tr style="background-color: white; background-color: #da939363; color: #3a3535; box-shadow: 0px 0px 20px 2px #e80d0d87; text-shadow: 0px -1px 5px #fd0000;">
                                                                        <td class="center">
                                                                            <label class="pos-rel">
                                                                                <input type="checkbox" class="ace" />
                                                                                <span class="lbl"></span>
                                                                            </label>
                                                                        </td>

                                                                        <td class="center">
                                                                            <div class="action-buttons">
                                                                                <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                                                    <span class="sr-only">Details</span>
                                                                                </a>
                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            <a href="#">{{$etd->id}}</a>
                                                                        </td>
                                                                        <td>{{$etd->nom}}</td>
                                                                        <td class="hidden-480">{{$etd->prenom}}</td>
                                                                        <td>{{$etd->dateN}}</td>

                                                                        <td class="center">
                                                                            <span class="label label-sm label-warning" style=" box-shadow: -1px 5px 10px 5px #f8944e;"> {{$etd->groupes_id}} </span>
                                                                        </td>
                                                                        <td class="center">
                                                                            <label class="pos-rel">
                                                                                <input type="checkbox" disabled class="ace" name="{{$etd->id}}" />
                                                                                <span class="lbl" ></span>
                                                                            </label>
                                                                        </td>

                                                                        <td class="center">
                                                                            <label class="pos-rel" >
                                                                                <button class="btn btn-xs btn-primary disabled">
                                                                                     <a href="#" role="button" class="btn btn-primary disabled" data-toggle="modal">
                                                                                    <i class="fa fa-check modal-check-pro"></i>inserte justification</a>
                                                                                </button>
                                                                                
                                                                             </label>
                                                                        </td>
                                                                    </tr>
                                                                

                                                                    <tr class="detail-row" style="background-color: #ea6161; color: #943b3b; box-shadow: -1px -3px 16px 4px #9e29299c; text-shadow: -3px -2px 7px #3c0303f7;">
                                                                        <td colspan="9">
                                                                            <div class="table-detail">
                                                                                <div class="row">
                                                                                    <div class="col-xs-12 col-sm-2">
                                                                                        <div class="text-center">
                                                                                            <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="{{asset($etd->photo)}}" style="height: 145px; width: 153px;"/>
                                                                                            <br />
                                                                                            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                                                <div class="inline position-relative">
                                                                                                    <a class="user-title-label" href="#">
                                                                                                        <i class="ace-icon fa fa-circle light-green"></i>
                                                                                                        &nbsp;
                                                                                                        <span class="white">imakhlaf lynda</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xs-12 col-sm-7">
                                                                                        <div class="space visible-xs"></div>

                                                                                        <div class="profile-user-info profile-user-info-striped">

                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name"> nom </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>{{$etd->nom}}</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name"> prenom </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>{{$etd->prenom}}</span>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name">adress </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                                    <span>{{$etd->address}}</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name">date naissance </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span> {{$etd->dateN}}</span>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name"> etat </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>N</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name"> groupe </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span> {{$etd->groupes_id}}</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name"> email </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span> {{$etd->email}}</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name"> About Me </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>Bio</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xs-12 col-sm-3">
                                                                                        <div class="space visible-xs"></div>
                                                                                        <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                                        <div class="space-6"></div>

                                                                                        <form>
                                                                                            <fieldset>
                                                                                                <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                                            </fieldset>

                                                                                            <div class="hr hr-dotted"></div>

                                                                                            <div class="clearfix">
                                                                                                <label class="pull-left">
                                                                                                    <input type="checkbox" class="ace" />
                                                                                                    <span class="lbl"> Email me a copy</span>
                                                                                                </label>

                                                                                                <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                                                    Submit
                                                                                                    <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr> 
                                                                    <?php  $var=0 ?>
                                                                    @endif
                                                                    @endforeach
                                                                     @if ($var==1)
                                                                     <tr>
                                                                      <td class="center">
                                                                            <label class="pos-rel">
                                                                                <input type="checkbox" class="ace" />
                                                                                <span class="lbl"></span>
                                                                            </label>
                                                                        </td>

                                                                        <td class="center">
                                                                            <div class="action-buttons">
                                                                                <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                                                    <span class="sr-only">Details</span>
                                                                                </a>
                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            <a href="#">{{$etd->id}}</a>
                                                                        </td>
                                                                        <td>{{$etd->nom}}</td>
                                                                        <td class="hidden-480">{{$etd->prenom}}</td>
                                                                        <td>{{$etd->dateN}}</td>

                                                                        <td class="center">
                                                                            <span class="label label-sm label-warning" style=" box-shadow: -1px 5px 10px 5px #f8944e;"> {{$etd->groupes_id}} </span>
                                                                        </td>
                                                                        <td class="center">
                                                                            <label class="pos-rel">
                                                                                <input type="checkbox" class="ace" name="{{$etd->id}}" />
                                                                                <span class="lbl" style=" background-color: #38a5ce;box-shadow: 0px 0px 13px 0px #32a3ce;"></span>
                                                                            </label>
                                                                        </td>

                                                                        <td class="center">
                                                                            <label class="pos-rel" style="box-shadow: 0px -1px 20px 1px #03a9f4;">
                                                                                <button class="btn btn-xs btn-primary">
                                                                                     <a href="#supprimer{{ $etd->id }}Modal" role="button" class="btn btn-primary" data-toggle="modal">
                                                                                    <i class="fa fa-check modal-check-pro"></i>inserte justification</a>
                                                                                </button>
                                                                                <div id="supprimer{{ $etd->id }}Modal" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">

                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header header-color-modal bg-color-1">
                                                                                                <h4 class="modal-title">Insert justification in the seance</h4>
                                                                                                <div class="modal-close-area modal-close-df">
                                                                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                                                                </div>
                                                                                            </div>
                                                                                             <form action="{{ url('justification/'.$etd->id)}}" method="POST" enctype="multipart/form-data">
                                                                                                 {{ csrf_field() }}
                                                                                                    <div class="modal-body">
                                                                                                        <i class="fa fa-check modal-check-pro"></i>
                                                                                                        <h2>Justification!</h2>
                                                                                                        <br><br><br>
                                                                                                        <label> <select data-placeholder="Choose a Country..." name="grade" class="chosen-select" tabindex="-1">
                                                                                                             @foreach($seances as $S)
                                                                                                             @foreach($absence as $A)
                                                                                                             @if($S->id==$A->idS && $A->idE==$etd->id)
                                                                                                            <option value="{{$S->id}}">{{$type}} {{$module->nomMat}} {{$groupe->nomGroup}}   le {{$S->date}} à {{$S->time}} </option>
                                                                                                            @endif
                                                                                                             @endforeach
                                                                                                              @endforeach
                                                                                                        </select></label>
                                                                                                        <br><br>
                                                                                                        <label><input type="file" name="img"/></label>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                                                                                        <button type="submit" class="btn btn-primary">Oui</button>
                                                                                                    </div>
                                                                                                </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                             </label>
                                                                        </td>
                                                                    </tr>
                                                                

                                                                    <tr class="detail-row" >
                                                                        <td colspan="9">
                                                                            <div class="table-detail">
                                                                                <div class="row">
                                                                                    <div class="col-xs-12 col-sm-2">
                                                                                        <div class="text-center">
                                                                                            <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="{{asset($etd->photo)}}" style="height: 145px; width: 153px;"/>
                                                                                            <br />
                                                                                            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                                                <div class="inline position-relative">
                                                                                                    <a class="user-title-label" href="#">
                                                                                                        <i class="ace-icon fa fa-circle light-green"></i>
                                                                                                        &nbsp;
                                                                                                        <span class="white">imakhlaf lynda</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xs-12 col-sm-7">
                                                                                        <div class="space visible-xs"></div>

                                                                                        <div class="profile-user-info profile-user-info-striped">

                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name"> nom </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>{{$etd->nom}}</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name"> prenom </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>{{$etd->prenom}}</span>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name">adress </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                                                    <span>{{$etd->address}}</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name">date naissance </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span> {{$etd->dateN}}</span>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name"> etat </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>N</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name"> groupe </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span> {{$etd->groupes_id}}</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="profile-info-row">
                                                                                                <div class="profile-info-name"> email </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span> {{$etd->email}}</span>
                                                                                                </div>
                                                                                                <div class="profile-info-name"> About Me </div>

                                                                                                <div class="profile-info-value">
                                                                                                    <span>Bio</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-xs-12 col-sm-3">
                                                                                        <div class="space visible-xs"></div>
                                                                                        <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                                        <div class="space-6"></div>

                                                                                        <form>
                                                                                            <fieldset>
                                                                                                <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                                            </fieldset>

                                                                                            <div class="hr hr-dotted"></div>

                                                                                            <div class="clearfix">
                                                                                                <label class="pull-left">
                                                                                                    <input type="checkbox" class="ace" />
                                                                                                    <span class="lbl"> Email me a copy</span>
                                                                                                </label>

                                                                                                <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                                                    Submit
                                                                                                    <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endif

                                                                    
                                                                    @endforeach

                                                                   
                                                                </tbody>
                                                            </table>
                                                            <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button>
                                                            </form>
                                                        </div><!-- /.span -->
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

 <script src="{{asset('frontEnd')}}/assets/js/jquery-2.1.4.min.js"></script>

        
        <script src="{{asset('frontEnd')}}/assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="{{asset('frontEnd')}}/assets/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.print.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.colVis.min.js"></script>


        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                //initiate dataTables plugin
                
            
                $('.show-details-btn').on('click', function(e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                
              
            
            })
        </script>




<script src="{{asset('frontEnd')}}/assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('frontEnd')}}/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
<!--        <script src="assets/js/bootstrap.min.js"></script>-->
 <script src="{{asset('frontEnd')}}/assets/js/bootstrap.min.js"></script>
        <!-- page specific plugin scripts -->
        <script src="{{asset('frontEnd')}}/assets/js/jquery-ui.custom.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/moment.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/fullcalendar.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/bootbox.js"></script>

        <!-- ace scripts -->
        <script src="{{asset('frontEnd')}}/assets/js/ace-elements.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
      


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

