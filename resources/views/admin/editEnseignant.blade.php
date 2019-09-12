@extends('layout.master')

@section('title','GBS | Details d un Enseignant')
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
@endsection
@section('asidebar')


                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                           
                        </li>
                        <li class="nav-item"><a href="profil.html" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Profil</span> </a>
                           
                        </li>
                        
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pencil-square-o"></i> <span class="mini-dn">Compte utilisateur</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="listeRCodage.html" class="dropdown-item">Responsables de codage</a>
                                <a href="listeadmin.html" class="dropdown-item">Admin</a>
                                <a href="{{url('enseignant')}}" class="dropdown-item">Enseignants</a>

                            </div>
                        </li>
                         <li class="nav-item"><a href="{{url('matiere')}}" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"> <i class="fa fa-group"></i>  <span class="mini-dn">Groupe</span> </a></li>
                        <li class="nav-item"><a href="{{url('matiere')}}" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-newspaper-o"></i> <span class="mini-dn">Matiere</span> </a></li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-list"></i>  <span class="mini-dn">Promo</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            @foreach($ps as $p)
                                <a href="{{url('promot/'. $p->idPromot.'/index') }}" class="dropdown-item">
                                {{$p->filiere}} {{$p->annee}} 
                                </a>
                                
                            @endforeach
                                <a href="{{url('promot/create')}}" class="dropdown-item">nouvel promo</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="paramtre.html" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon  fa-wrench"></i> <span class="mini-dn">paramtre</span> </a>
                            
                        </li>
                    </ul>
     @endsection 
@section('content')   
 <style>
#photo {
    border-radius: 50%;
    width: 70px;height: 70px;
    }
    ul.a {
    list-style-type: square;
}


</style>
<div class="tab-content">
    <div class="row">
        <div class="col-lg-12">
            <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                <div class="clearfix">
                    <div class="hr dotted"></div>
                    <div >
                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-18">
                                    <li >
                                        <a data-toggle="tab" href="#home">
                                            <i class="green ace-icon fa fa-user bigger-120"></i>
                                            Profile
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a data-toggle="tab" href="#feed">
                                            <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                            Modifier
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#friends">
                                            <i class="blue ace-icon fa fa-users bigger-120"></i>
                                            Friends
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#pictures">
                                            <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                            Pictures
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane ">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 center">
                                                <span class="profile-picture">
                                                    <img class="editable img-responsive" alt="Alex's Avatar" src="{{asset($membre->photo)}}" />
                                                </span>

                                                <div class="space space-4"></div>

                                                <a href="#" class="btn btn-sm btn-block btn-success">
                                                    <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                                                    <span class="bigger-110">Add as a friend</span>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-block btn-primary">
                                                    <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                                                    <span class="bigger-110">Send a message</span>
                                                </a>
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-9">
                                                <h4 class="blue">
                                                    <span class="middle">{{$membre->nom}} {{$membre->prenom}}</span>

                                                    <span class="label label-purple arrowed-in-right">
                                                        <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                        online
                                                    </span>
                                                </h4>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                         
                                                        <div class="profile-info-name">Date de naissance  </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$membre->date_N}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">

                                                        <div class="profile-info-name">Email </div>

                                                        <div class="profile-info-value">
                                                            
                                                            <span>{{$membre->email}}</span>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Age </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$age}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Grade </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$membre->grade}}</span>
                                                        </div>
                                                    </div>

                    <div class="profile-info-row">
                    @if($membre->role== 'responsable' )
                                <div class="profile-info-name"> Responsable sur : </div>

                                <div class="profile-info-value">
                                @foreach($matieres as $matiere)
                                    <span>{{$matiere->nomMat}}</span><br>

                                @endforeach    
                                     
                                </div>
                    @endif
                    </div>
                    <div class="profile-info-row">
                    @if($membre->role== 'enseignant' )
                                <div class="profile-info-name"> Enseigne : </div>

                                <div class="profile-info-value">
                                @foreach($matieres as $matiere)
                                    <span>{{$matiere->nomMat}}</span><br>

                                @endforeach    
                                     
                                </div>
                    @endif
                    </div>
                                                </div>

                                                <div class="hr hr-8 dotted"></div>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Website </div>

                                                        <div class="profile-info-value">
                                                            <a href="#" target="_blank">www.alexdoe.com</a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">
                                                            <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                        </div>

                                                        <div class="profile-info-value">
                                                            <a href="#">Find me on Facebook</a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">
                                                            <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                        </div>

                                                        <div class="profile-info-value">
                                                            <a href="#">Follow me on Twitter</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->

                                        <div class="space-20"></div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="widget-box transparent">
                                                    <div class="widget-header widget-header-small">
                                                        <h4 class="widget-title smaller">
                                                            <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                            Little About Me
                                                        </h4>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <p>
                                                                My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                                            </p>
                                                            <p>
                                                                Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                                            </p>
                                                            <p>
                                                                The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                                            </p>
                                                            <p>
                                                                Thanks for visiting my profile.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                          
                                        </div>
                                    </div><!-- /#home -->
                                    <div id="feed" class="tab-pane in active">
                                       
                                        <!--debu-->
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 center">
                                                <span class="profile-picture">
                                                    <img 
                                                    style="height: 250px; width: 190px;"
                                                    class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{asset($membre->photo)}}" />
                                                </span>

                                                <div class="space space-4"></div>
                                            </div><!-- /.col -->
                                            
                                            <div class="col-xs-12 col-sm-9">
       <!--/****************************/-->  
        <form class="well form-horizontal" action=" {{url('enseignant/'. $membre->id) }} " method="POST"  id="contact_form"> 
        {{ csrf_field() }} 
         
<fieldset>
                        <!--nom-->
                    <div class="form-group ">
                        <label class="col-md-3 control-label">Nom</label>  
                        <div class="col-md-9 inputGroupContainer ">
                          <div class="input-group"  style="width: 40%">
                            <input  name="nom" class="form-control" value="{{$membre->nom}}" type="text">
                            
                          </div>
                        </div>
                    </div>
                    <!--prenom-->
                     <br><br>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Prénom</label>  
                        <div class="col-md-9 inputGroupContainer">
                          <div class="input-group"  style="width: 40%">
                            <input  name="prenom" value="{{$membre->prenom}}" class="form-control"  type="text">
                            
                          </div>
                        </div>
                    </div>
                    <br><br>
                    <!--dateN-->
                    <div class="row">
                      <div class="col-md-7">
                      <div class="form-group">
                            <label class="col-md-6 control-label">Date_Naissance</label>  
                            <div class="col-md-6 inputGroupContainer input-group Date">
                              <input name="date_naissance" type="text" class="form-control pull-right" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="datepicker" value="{{$membre->date_N}}">
                            </div>
                      </div>
                      </div>
                    </div>
                    <br><br>
                    <!--sexe-->
                    <div class="row">
                      <div class="col-md-7">
                      <div class="form-group">
                              <label class="col-md-6 control-label">Sexe</label>  
                                <div class="col-md-6 input-group">

                                <div class="row">
                                
                                <div class="col-lg-12">

                                    <div class="i-checks pull-left">
                                     @if($membre->sexe=='Homme')
                                       <label>

                                       <input type="radio" value="Femme" name="sexe"> <i></i> Femme 
                                       </label>
                                       @endif
                                    @if($membre->sexe=='Femme')
                                       <label>

                                       <input type="radio" value="Homme" name="sexe"> <i></i> Homme 
                                       </label>
                                       @endif
                                    </div>
                                </div>
                                
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="i-checks pull-left">
                                       <label>
                                       <input type="radio" checked="" value="{{$membre->sexe}}" name="sexe"> <i></i>{{$membre->sexe}}
                                       </label>
                                    </div>
                                </div>
                                </div>
                              </div>
                        </div>
                      </div>
                      
                    </div>
                    <!--grade-->
                    <br><br>
                    <div class="form-group"> 
                          <label class="col-md-3 control-label">Grade</label>
                            <div class="col-md-9 selectContainer">
                              <div class="input-group" style="width: 40%">
                                  <select name="grade" class="form-control selectpicker">
                                    <option>{{$membre->grade}}</option>
                                    <option>MAA</option>
                                    <option>MAB</option>
                                    <option >MCA</option>
                                    <option >MCB</option>
                                    <option>Doctorant</option>
                                    <option >Professeur</option>
                                  </select>
                                  
                              </div>
                            </div>
                    </div>
                    <br><br>
                    

                      
                     <!--email-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">E-Mail</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group"  style="width: 40%">
                                <input name="email" type="email" class="form-control" value="{{$membre->email}}">
                                
                            </div>
                          </div>
                    </div>
                    
                    <br><br>
                    

                      
                     <!--numTel-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">N° Téléphone</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="col-md-6 input-group" style="width: 40%">
                                <input name="num_tel" type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{$membre->num_tel}}">
                              </div>
                          </div>
                    </div>
                     <br><br>
                     
                    <!--role-->
                    <div class="row">
                      <div class="col-md-7">
                      <div class="form-group">
                              <label class="col-md-6 control-label">Role</label>  
                                <div class="col-md-6 input-group">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="i-checks pull-left">
                                    @if($membre->role=='responsable')
                                       <label>
                                             <input type="radio"  value="enseignant" name="role"> <i></i> enseignant nrml
                                        </label>
                                    @endif
                                     @if($membre->role=='enseignant')
                                       <label>
                                             <input type="radio"  value="responsable" name="role"> <i></i> responsable
                                        </label>
                                    @endif
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="i-checks pull-left">
                                      <label>
                                             <input type="radio" checked="" value="{{$membre->role}}" name="role"> <i></i> {{$membre->role}}</label>
                                    </div>
                                </div>
                                </div>
                              </div>
                        </div>
                      </div>
                      
                    </div>
              </fieldset>
                   <div class="row" style="padding-top: 30px; margin-left: 35%;">
              <a href="{{ url('enseignant/'.$membre->id.'/details')}}" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler</a>
               <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Modifier</button> 
                  </div>
                  </form>







                                            </div><!-- /.col -->
                                        </div>
                                        <!--fin-->

                                        <div class="space-12"></div>

                                        
                                    </div>
                                     <!-- /#feed -->

                                        
                                    <div id="friends" class="tab-pane">
                                        <div class="profile-users clearfix">
                                            @foreach($membres as $membre)
                                          
                                          
                 <div class="itemdiv memberdiv">
                 
                        <div class="inline pos-rel col-md-3 element-animate">
                            <div class="user ">
                                                      
                                                    
                                <img src="{{asset($membre->photo)}}" alt="Image"  title="{{$membre->name}} {{$membre->prenom}}" class="img-thumbnail img-responsive img-circle" id="photo" 
                                  >                            
                            </div>
                            
                            <div class="body">
                                                        <div class="name">
                                                            <a href="{{ url('enseignant/'.$membre->id.'/details')}}">
                                                                <span class="user-status status-online"></span>
                                                                {{$membre->nom}}{{$membre->prenom}}
                                                            </a>
                                                        </div>
                            </div>
                  
                            <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">{{$membre->role}}</div>

                                                            <div class="time">
                                                                <i class="fa fa-envelope middle bigger-120 orange"></i>
                                                                <span class="green"> {{$membre->email}} </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools ">
                                                               <a href="{{ url('enseignant/'.$membre->id.'/details')}}">
                                                                    <i class="glyphicon glyphicon-user
                                                                    blue bigger-120"></i>
                                                                    <span class="green">Profile </span>
                                                                </a>
                                                            </div>
                                                        </div>
                            </div>
                        </div>

                  </div>
           
                                             @endforeach
                                            
                                        </div>

                                        <div class="hr hr10 hr-double"></div>

                                        <ul class="pager pull-right">
                                            <li class="previous disabled">
                                                <a href="#">&larr; Prev</a>
                                            </li>

                                            <li class="next">
                                                <a href="#">Next &rarr;</a>
                                            </li>
                                        </ul>
                                    </div>
                                   <!-- /#friends -->

                                    <div id="pictures" class="tab-pane">
                                        <ul class="ace-thumbnails">
                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-1.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-2.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-3.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-4.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-5.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-6.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-1.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-2.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /#pictures -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page-content ENDS -->
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
@section('scriptHeader')
 <script src="assets/js/jquery-2.1.4.min.js"></script>

        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('frontEnd')}}/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="{{asset('frontEnd')}}/assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="{{asset('frontEnd')}}/assets/js/jquery-ui.custom.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.gritter.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/bootbox.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.easypiechart.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/bootstrap-datepicker.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.hotkeys.index.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/bootstrap-wysiwyg.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/select2.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/spinbox.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/bootstrap-editable.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/ace-editable.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.maskedinput.min.js"></script>

        <!-- ace scripts -->
        <script src="{{asset('frontEnd')}}/assets/js/ace-elements.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
           //iciii
        </script>
         <script src="{{asset('frontEnd')}}/js/editJs.js"></script>
<!--user profil 1 scripte -->





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
@endsection