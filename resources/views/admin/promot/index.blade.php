@extends('layout.master')
@section('title','GBS | Ajouter une Matiere')
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
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fullcalendar.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fonts.googleapis.com.css" />

        <!--******************* ace styles
         --><link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

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
        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    <!-- favicon
        <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        ============================================ -->
   
    
@endsection
@section('content')
<div class="admintab-area">
    <div class="container-fluid">
        
        <div class="row">
            
            <div class="col-lg-12">
                <div class="admintab-wrap mg-b-40">
                    <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1 tab-menu-right">
                        <li class="active"><a data-toggle="tab" href="#TabProject2"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>Liste Etudiants</a>
                        </li>
                        <li><a data-toggle="tab" href="#TabDetails2"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>Liste Modules</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content">
                        <div id="TabProject2" class="tab-pane in active animated flipInY custon-tab-style1" >
                           <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste <span class="table-project-n">des Etudiants</span>:</h1>
                            <div class="sparkline13-outline-icon">
                               <div class="button-style-four btn-mg-b-10">
                                   <form action="{{ url('etudiant/create')}}">
                                       <button type="submit" class="btn btn-custon-four btn-success">Ajouter de nouveaux etudiants</button>
                                   </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>

                            <table id="simple-table" class="tablel table-bordered table-hover" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th class="detail-col"><a href="#"></a> Details</th>
                                        <th >Matricule</th>
                                        <th data-editable="true">Nom</th>
                                        <th data-editable="true">Prenom</th>
                                        <th data-editable="true" >Date_naissance</th>
                                        <th data-editable="true">Email</th>
                                        <th data-editable="true">Groupe</th>
                                        <!--th data-editable="true" class="hidden-480">Promot</th-->
                                        
                                        <th class="hidden-480" >Etat</th>

                                        <th class="hidden-480"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($etudiants as $etudiant)
                                    <tr>
                                        <td class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td>

                                        <td class="center">
                                            <div class="action-buttons">
                                                <a href="#" class="green bigger-140 show-details-btnn"  title="Show Details">
                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                    <span class="sr-only">Details</span>
                                                </a>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#">4848454548</a>
                                        </td>
                                        <td>{{$etudiant->nom}}</td>
                                        <td>{{$etudiant->prenom}}</td>
                                        <td>{{$etudiant->dateN}}</td>
                                        <td>{{$etudiant->email}}</td>
                                        <td>{{$etudiant->groupes_id}}</td>
                                        <!--<td class="hidden-480">{{$etudiant->filiere}} {{$etudiant->annee}}</td--->
                                        <td class="hidden-480">
                                        @if($etudiant->etat=='N')
                                            <span class="label label-sm label-info">{{$etudiant->etat}}</span>
                                        
                                        @endif
                                         @if($etudiant->etat=='D')
                                            <span class="label label-sm label-sucess">{{$etudiant->etat}}</span>
                                        @endif
                                        @if($etudiant->etat=='R')
                                            <span class="label label-sm label-warning">{{$etudiant->etat}}</span>
                                        @endif
                                    </td>

                                        <td class="col-Lg-4">
                                            <table>
                                                <tr>
                                                    <td>
                                                         <button class="btn btn-xs btn-success">
                                                            <a href="{{ url('etudiant/'.$etudiant->id.'/details')}}" role="button" class="btn btn-success" data-toggle="modal">
                                                            <i class="ace-icon fa fa-check bigger-120"></i></a>
                                                        </button>
                                                    </td>
                                                     <td>
                                                         <button class="btn btn-xs btn-info">
                                                            <a href="{{ url('etudiant/'.$etudiant->id.'/edit')}}" role="button" class="btn btn-info" data-toggle="modal">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i></a>
                                                        </button>
                                                    </td>
                                                     <td>
                                                        <form action="{{ url('etudiant/'.$etudiant->id)}}" method="post">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                         <button class="btn btn-xs btn-danger">
                                                             <a href="#supprimer{{ $etudiant->code }}Modal" role="button" class="btn btn-danger" data-toggle="modal">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i></a>
                                                        </button>
                                                        <div id="supprimer{{ $etudiant->code }}Modal" class="modal modal-adminpro-general FullColor-popup-DangerModal PrimaryModal-bgcolor fade" role="dialog">

                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-close-area modal-close-df">
                                                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                                                        <h2>Danger!</h2>
                                                                        <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
                                                                    </div>
                                                                     <div class="modal-footer">
                                                                      <form class="form-inline" action="{{ url('$etudiant->id')}}"  method="POST">
                                                                         @method('DELETE')
                                                                         @csrf
                                                                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                                                          <button type="submit" class="btn btn-danger">Oui</button>
                                                                      </form>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </td>
                                                    
                                                </tr>
                                            </table>
                                               


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
                                        <td colspan="9">
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
                                                                        <span class="white">Nom prenom</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-7">
                                                        <div class="space visible-xs"></div>

                                                        <div class="profile-user-info profile-user-info-striped">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Nom </div>

                                                                <div class="profile-info-value">
                                                                    <span>nom</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> prenom </div>

                                                                <div class="profile-info-value">
                                                                    
                                                                    <span>prenom</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> ville </div>

                                                                <div class="profile-info-value">
                                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                    <span>tlemcen</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Age </div>

                                                                <div class="profile-info-value">
                                                                    <span>22</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> date naissance </div>

                                                                <div class="profile-info-value">
                                                                    <span>1996/08/18</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> groupe </div>

                                                                <div class="profile-info-value">
                                                                    <span>B5</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Etat </div>

                                                                <div class="profile-info-value">
                                                                    <span>N</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-3">
                                                        <div class="space visible-xs"></div>
                                                        <h4 class="header blue lighter less-margin">Send a message to nom</h4>

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
@endforeach
                                   

                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>


                          <!-- <div class="row">
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
                                        <th>Matricule</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th class="hidden-480">Groupe</th>
                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                            Update
                                        </th>
                                        <th class="hidden-480">Etat</th>

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
                                                <a href="#" class="green bigger-140 show-details-btnn" title="Show Details">
                                                    <i class="ace-icon fa fa-angle-double-down"></i>
                                                    <span class="sr-only">Details</span>
                                                </a>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#">4848454548</a>
                                        </td>
                                        <td>nom</td>
                                        <td>prenom</td>
                                        <td class="hidden-480">B5</td>
                                        <td>Feb 12</td>

                                        <td class="hidden-480">
                                            <span class="label label-sm label-warning">N</span>
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
                                        <td colspan="9">
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
                                                                        <span class="white">Nom prenom</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-7">
                                                        <div class="space visible-xs"></div>

                                                        <div class="profile-user-info profile-user-info-striped">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Nom </div>

                                                                <div class="profile-info-value">
                                                                    <span>nom</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> prenom </div>

                                                                <div class="profile-info-value">
                                                                    
                                                                    <span>prenom</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> ville </div>

                                                                <div class="profile-info-value">
                                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                    <span>tlemcen</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Age </div>

                                                                <div class="profile-info-value">
                                                                    <span>22</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> date naissance </div>

                                                                <div class="profile-info-value">
                                                                    <span>1996/08/18</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> groupe </div>

                                                                <div class="profile-info-value">
                                                                    <span>B5</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Etat </div>

                                                                <div class="profile-info-value">
                                                                    <span>N</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-3">
                                                        <div class="space visible-xs"></div>
                                                        <h4 class="header blue lighter less-margin">Send a message to nom</h4>

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
                        </div>
                    </div>-->
                        </div>
                        <div id="TabDetails2" class="tab-pane animated flipInY custon-tab-style1">
                             
                            <div class="sparkline7-graph">
                                <div class="income-order-visit-user-area">
                                    
                                    <div class="container-fluid">

                                        <div class="row">
                                             @foreach($modules as $module)
                                            <div class="col-lg-2">
                                                <div class="{{$module->color}}">
                                                    <a href="{{ url('matiere/'.$module->id.'/details')}}">
                                                    <div class="cover" style="position:relative; height:200px">
                                                         <div style="position:absolute;z-index:1">
                                                            <img src="{{asset($module->photo)}}" alt="" style="width: 160px;height: 224px;">
                                                        </div>
                                                         <div style="position:absolute;top: 100px;width: 160px;height: 100px;z-index: 3;font-size:150%;">
                                                            <center><b style="text-shadow: -6px -5px 4px #404040ad;">{{$module->nomMat}}</b></center>
                                                        </div> 
                                                    </div>
                                                    
                                                    <button type="button" class="But" data-dismiss="modal" data-toggle="tab" ><div></div></button>
                                                </div></a>
                                            </div>
                                            @endforeach
                                            
                                        
                                            


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="button-style-four btn-mg-b-10">
                                               <form action="{{url('matiere/create')}}">
                                                   <button type="submit" class="btn btn-custon-four btn-success pull-right">Ajouter une nouvel matier</button>
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
                
            
                $('.show-details-btnn').on('click', function(e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                
              
            
            })
        </script>
    
@endsection