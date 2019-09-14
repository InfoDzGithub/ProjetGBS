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
     <div class="tab-content">
        <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
            <div class="page-content">
             <div class="page-header">
                <h1>
                    Calendrier des seance 
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        glicer pour cree une seance
                    </small>
                </h1>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="space"></div>

                            <div id="calendar"></div>
                        </div>

                        <div class="col-sm-3">
                            <div class="widget-box transparent">
                                <div class="widget-header">
                                    <h4>Groupes</h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <div id="external-events">

                                            
                                             @foreach($GEM as $gem)
                                             @foreach($EM as $em)
                                             @if($gem->Ens_mod_id == $em->id)
                                             @foreach($groupes as $group)
                                             @if($group->id==$gem->group_id)
                                             @foreach($modules as $module)
                                             @if($module->id ==$em->Matieres_id)
                                             @if($module->color =='box box-1') 
                                             <div class="external-event label-success" data-class="label-success">
                                                <i class="ace-icon fa fa-arrows"></i>

                                              
                                            </div>
                                            @endif
                                            @if($module->color =='box box-10') 

                                            <div class="external-event label-danger" data-class="label-danger">
                                                <i class="ace-icon fa fa-arrows"></i>

                                                {{$gem->id}} - {{$gem->type}} {{$module->nomMat}} {{$group->nomGroup}}
                                            </div>
                                            @endif
                                            @if($module->color =='box box-2')
                                            <div class="external-event label-purple" data-class="label-purple">
                                                <i class="ace-icon fa fa-arrows"></i>
                                                {{$gem->id}} - {{$gem->type}} {{$module->nomMat}} {{$group->nomGroup}}
                                            </div>
                                            @endif
                                            @if($module->color =='box box-14' ||$module->color =='box box-13'||$module->color =='box box-4')
                                            <div class="external-event label-yellow" data-class="label-yellow">
                                                <i class="ace-icon fa fa-arrows"></i>
                                                {{$gem->id}} - {{$gem->type}} {{$module->nomMat}} {{$group->nomGroup}}
                                            </div>
                                            @endif
                                            @if($module->color =='box box-5')
                                            <div class="external-event label-pink" data-class="label-pink">
                                                <i class="ace-icon fa fa-arrows"></i>
                                                 {{$gem->id}} - {{$gem->type}} {{$module->nomMat}} {{$group->nomGroup}}
                                            </div>
                                            @endif
                                            @if($module->color =='box box-3')
                                            <div class="external-event label-info" data-class="label-info">
                                                <i class="ace-icon fa fa-arrows"></i>
                                                 {{$gem->id}} - {{$gem->type}} {{$module->nomMat}} {{$group->nomGroup}}
                                            </div>
                                            @endif
                                            @if($module->color =='box box-12' || $module->color =='box box-11')
                                            <div class="external-event label-grey" data-class="label-grey">
                                                <i class="ace-icon fa fa-arrows" ></i>
                                                 {{$gem->id}} - {{$gem->type}} {{$module->nomMat}} {{$group->nomGroup}}
                                            </div>
                                            @endif
                                            @endif
                                            @endforeach
                                            @endif
                                            @endforeach
                                            @endif
                                            @endforeach
                                            @endforeach

                                            <label>
                                                <input type="checkbox" class="ace ace-checkbox" id="drop-remove" />
                                                <span class="lbl"> Remove after drop</span>
                                            </label>
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
    <div id="sendmail" class="tab-pane animated zoomInDown fade shadow-reset custom-inbox-message">
            <div class="datatable-dashv1-list custom-datatable-overright">
                <div class="row">
                    <div class="col-xs-12">
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
                                    <th>Domain</th>
                                    <th>Price</th>
                                    <th class="hidden-480">Clicks</th>

                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                        Update
                                    </th>
                                    <th class="hidden-480">Status</th>

                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
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
                                        <a href="#">ace.com</a>
                                    </td>
                                    <td>$45</td>
                                    <td class="hidden-480">3,330</td>
                                    <td>Feb 12</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <button class="btn btn-xs btn-success">
                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-info">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                            </button>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
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

                                <tr class="detail-row">
                                    <td colspan="8">
                                        <div class="table-detail">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="text-center">
                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                        <br />
                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                            <div class="inline position-relative">
                                                                <a class="user-title-label" href="#">
                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                    &nbsp;
                                                                    <span class="white">Alex M. Doe</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="space visible-xs"></div>

                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Username </div>

                                                            <div class="profile-info-value">
                                                                <span>alexdoe</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Location </div>

                                                            <div class="profile-info-value">
                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                <span>Netherlands, Amsterdam</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Age </div>

                                                            <div class="profile-info-value">
                                                                <span>38</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Joined </div>

                                                            <div class="profile-info-value">
                                                                <span>2010/06/20</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Last Online </div>

                                                            <div class="profile-info-value">
                                                                <span>3 hours ago</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
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
                                        <a href="#">base.com</a>
                                    </td>
                                    <td>$35</td>
                                    <td class="hidden-480">2,595</td>
                                    <td>Feb 18</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">Registered</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <button class="btn btn-xs btn-success">
                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-info">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                            </button>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
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

                                <tr class="detail-row">
                                    <td colspan="8">
                                        <div class="table-detail">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="text-center">
                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                        <br />
                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                            <div class="inline position-relative">
                                                                <a class="user-title-label" href="#">
                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                    &nbsp;
                                                                    <span class="white">Alex M. Doe</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="space visible-xs"></div>

                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Username </div>

                                                            <div class="profile-info-value">
                                                                <span>alexdoe</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Location </div>

                                                            <div class="profile-info-value">
                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                <span>Netherlands, Amsterdam</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Age </div>

                                                            <div class="profile-info-value">
                                                                <span>38</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Joined </div>

                                                            <div class="profile-info-value">
                                                                <span>2010/06/20</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Last Online </div>

                                                            <div class="profile-info-value">
                                                                <span>3 hours ago</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
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
                                        <a href="#">max.com</a>
                                    </td>
                                    <td>$60</td>
                                    <td class="hidden-480">4,400</td>
                                    <td>Mar 11</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-warning">Expiring</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <button class="btn btn-xs btn-success">
                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-info">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                            </button>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
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

                                <tr class="detail-row">
                                    <td colspan="8">
                                        <div class="table-detail">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="text-center">
                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                        <br />
                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                            <div class="inline position-relative">
                                                                <a class="user-title-label" href="#">
                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                    &nbsp;
                                                                    <span class="white">Alex M. Doe</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="space visible-xs"></div>

                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Username </div>

                                                            <div class="profile-info-value">
                                                                <span>alexdoe</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Location </div>

                                                            <div class="profile-info-value">
                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                <span>Netherlands, Amsterdam</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Age </div>

                                                            <div class="profile-info-value">
                                                                <span>38</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Joined </div>

                                                            <div class="profile-info-value">
                                                                <span>2010/06/20</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Last Online </div>

                                                            <div class="profile-info-value">
                                                                <span>3 hours ago</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
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
                                        <a href="#">best.com</a>
                                    </td>
                                    <td>$75</td>
                                    <td class="hidden-480">6,500</td>
                                    <td>Apr 03</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <button class="btn btn-xs btn-success">
                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-info">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                            </button>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
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

                                <tr class="detail-row">
                                    <td colspan="8">
                                        <div class="table-detail">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="text-center">
                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                        <br />
                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                            <div class="inline position-relative">
                                                                <a class="user-title-label" href="#">
                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                    &nbsp;
                                                                    <span class="white">Alex M. Doe</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="space visible-xs"></div>

                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Username </div>

                                                            <div class="profile-info-value">
                                                                <span>alexdoe</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Location </div>

                                                            <div class="profile-info-value">
                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                <span>Netherlands, Amsterdam</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Age </div>

                                                            <div class="profile-info-value">
                                                                <span>38</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Joined </div>

                                                            <div class="profile-info-value">
                                                                <span>2010/06/20</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Last Online </div>

                                                            <div class="profile-info-value">
                                                                <span>3 hours ago</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
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
                                        <a href="#">pro.com</a>
                                    </td>
                                    <td>$55</td>
                                    <td class="hidden-480">4,250</td>
                                    <td>Jan 21</td>

                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">Registered</span>
                                    </td>

                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <button class="btn btn-xs btn-success">
                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-info">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>

                                            <button class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-flag bigger-120"></i>
                                            </button>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
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

                                <tr class="detail-row open">
                                    <td colspan="8">
                                        <div class="table-detail">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="text-center">
                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                        <br />
                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                            <div class="inline position-relative">
                                                                <a class="user-title-label" href="#">
                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                    &nbsp;
                                                                    <span class="white">Alex M. Doe</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="space visible-xs"></div>

                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Username </div>

                                                            <div class="profile-info-value">
                                                                <span>alexdoe</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Location </div>

                                                            <div class="profile-info-value">
                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                <span>Netherlands, Amsterdam</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Age </div>

                                                            <div class="profile-info-value">
                                                                <span>38</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Joined </div>

                                                            <div class="profile-info-value">
                                                                <span>2010/06/20</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Last Online </div>

                                                            <div class="profile-info-value">
                                                                <span>3 hours ago</span>
                                                            </div>
                                                        </div>

                                                        <div class="profile-info-row">
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
                            </tbody>
                        </table>
                    </div><!-- /.span -->
                </div>
            </div>
        </div>
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
        <script type="text/javascript">
            jQuery(function($) {

/* initialize the external events
    -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });
        
    });




    /* initialize the calendar
    -----------------------------------------------------------------*/

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();


    var calendar = $('#calendar').fullCalendar({
        //isRTL: true,
        //firstDay: 1,// >> change first day of week 
        
        buttonHtml: {
            prev: '<i class="ace-icon fa fa-chevron-left"></i>',
            next: '<i class="ace-icon fa fa-chevron-right"></i>'
        },
    
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: [
         /* {
            title: 'All Day Event',
            start: new Date(2019, 07, 18),
            className: 'label-important'
          },
          {
            title: 'Long Event',
            start: moment().subtract(5, 'days').format('YYYY-MM-DD'),
            end: moment().subtract(1, 'days').format('YYYY-MM-DD'),
            className: 'label-success'
          },*/
          <?php 
          foreach ($seances as $s) {
              # code...
            $date = $s->date."";
            $time = $s->time."";
            $day=date('H',strtotime($time));
            $mm = date('m',strtotime($date)) -1;

             echo "{
            title: "."'".$s->GEM_id."-".$s->id."-".$s->type." ".$s->nomMat."".$s->nomGroup."'"." ,
            start: new Date(".date('Y',strtotime($date)).", ".$mm.", ".date('d',strtotime($date)).", ".date('H',strtotime($time)).", ".date('i',strtotime($time))."),
            allDay: false,
            className: 'label-info'
          },";
          }
         ?>
          /*{
            title: "<?php echo "jjj" ?> ",
            start: new Date(y, m, d-3, 16, 0),
            allDay: false,
            className: 'label-info'
          }*/
          
        ]
        ,
        
        /**eventResize: function(event, delta, revertFunc) {

            alert(event.title + " end is now " + event.end.format());

            if (!confirm("is this okay?")) {
                revertFunc();
            }

        },*/
        
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date) { // this function is called when something is dropped
        
            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');
            var $extraEventClass = $(this).attr('data-class');
            
            
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            
            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = false;
            if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
            
            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
            
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
            
        }
        ,
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            
            bootbox.prompt("New Event Title:", function(title) {
                if (title !== null) {
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay,
                            className: 'label-info'
                        },
                        true // make the event "stick"
                    );
                }
            });
            

            calendar.fullCalendar('unselect');
        }
        ,
        eventClick: function(calEvent, jsEvent, view) {

            //display a modal
            var d=calEvent.title.split('-');
            var datee=new Date(calEvent.start);
            var modal = 
            '<div class="modal fade">\
              <div class="modal-dialog">\
               <div class="modal-content">\
                 <div class="modal-body">\
                   <button type="button" class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>\
                   <form action="{{url('seance')}}" method="GET" enctype="multipart/form-data">\
                        {{ csrf_field() }}\
                   <input type="hidden" value="'+d[0] +'" name="GEM">\
                   <input type="hidden" value="'+d[1] +'" name="idS">\
                      <label>'+calEvent.title+' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>\
                      <label>Le: </label>\
                      <input class="middle"  type="date" name="date" value="'+datee.toISOString().substr(0,10)+'"  />\
                       <label>à : </label>\
                      <input class="middle"  type="time" name="time"  />\
                      <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button>\
                   </form>\
                 </div>\
                 <div class="modal-footer">\
                  <button type="button" class="btn btn-sm btn-success "data-dismiss="modal" data-toggle="tab"  href="#sendmail"> <span class="inbox-icon"></span><i class="ace-icon fa fa-check"></i> Marquer Absence</button>\
                    <button type="button" class="btn btn-sm btn-danger" data-action="delete"><i class="ace-icon fa fa-trash-o"></i> Delete </button>\
                    <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                 </div>\
              </div>\
             </div>\
            </div>';
        
        
            var modal = $(modal).appendTo('body');
            
            modal.find('button[data-action=delete]').on('click', function() {
                calendar.fullCalendar('removeEvents' , function(ev){
                    return (ev._id == calEvent._id);
                })
                modal.modal("hide");
            });
            
            modal.modal('show').on('hidden', function(){
                modal.remove();
            });


            //console.log(calEvent.id);
            //console.log(jsEvent);
            //console.log(view);

            // change the border color just for fun
            //$(this).css('border-color', 'red');

        }
        
    });


})
        </script>


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

