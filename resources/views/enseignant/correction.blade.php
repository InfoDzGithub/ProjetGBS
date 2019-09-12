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
 
<div  style="background-image: url('{{asset('frontEnd')}}/pp.jpg');">
                                       
            
</div>

   
  @endsection 
   