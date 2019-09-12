@extends('layout.master')

@section('title','GBS | detaille d une Matiere')
@section('cssHeader')

    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/c3.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/c3.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />


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

    <?php
 try
{
    $bdd = new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', '');

}
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        } 

$req1="SELECT nom, prenom,email,id from enseignants e,responsables r where e.id=r.enseignants_id and r.idResp=$matiere->responsables_id" ;

                    $reponse1 = $bdd->prepare($req1); 
                    $reponse1->execute();
                     $row1=$reponse1->fetch();
?>
<body class="materialdesign">


    <div class="wrapper-pro">
        <div class="project-details-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="project-details-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="project-details-title">
                                            <h2><span class="profile-details-name-nn">Detail du</span> module</h2>
                                        </div>
                                        <ul id="adminpro-demo2" class="comment-action-st collapse">
                                            <li><a href="#">Add</a>
                                            </li>
                                            <li><a href="#">Report</a>
                                            </li>
                                            <li><a href="#">Hide Profile</a>
                                            </li>
                                            <li><a href="#">Turn on Profile</a>
                                            </li>
                                            <li><a href="#">Turn off Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div class="admin-comment-month project-details-action">
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo2">...</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>nom:</strong></span>
                                                    </div>
                                                </div>
    
           
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="btn-group project-list-ad"><span class="label label-sm label-warning">{{$matiere->nomMat}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Responsable :</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><a href="#"> <?php echo $row1['nom']; ?> <?php echo $row1['prenom']; ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>seance cours:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->heurCour}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>seance TD:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                       {{$matiere->heurTD}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>seance TP:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->heurTP}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Coefition:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->cofficient}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Created:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->created_at}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Email:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $row1['email']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Enseignants:</strong></span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-img">
                                                      @foreach($listEns as $ens)
 
                       
                                                        <a href="{{ url('enseignant/'.$ens->id.'/details')}}"><img src="{{asset($ens-> photo)}}" alt="" title="{{$ens->nom}} {{$ens->prenom}}" />
                                                        </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="project-pregress-details">
                                            <span><strong>Completed:</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="skill-content-3 project-details-progress">
                                            <div class="skill">
                                                <div class="progress">
                                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 45%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>45%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-details-tab">
                                            <ul class="nav nav-tabs res-pd-less-sm">
                                                <li class="active"><a data-toggle="tab" href="#home">Les Groupes</a>
                                                </li>
                                                <li><a data-toggle="tab" href="#menu1">Les Examans</a>
                                                </li>
                                                <li><a data-toggle="tab" href="#menu2">Les Exclusion</a>
                                                </li>
                                            </ul>
        <div class="tab-content res-tab-content-project">
            <div id="home" class="tab-pane fade in active animated zoomInLeft">
                     <div class="project-details-completeness">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>COUR</th>
                                    <th>TD</th>
                                    <th>TP</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Groupes as $groupe)
                                  <form action="{{url($matiere->id.'/groupes/'. $groupe->id) }}" method="GET" enctype="multipart/form-data">
                        {{ csrf_field() }}
                                <tr>
                                    <td >

                                        <span class="label label-primary" ><i class="fa fa-check"></i> {{$groupe->id}} </span>
                                    </td>
                                    <td>
                                        {{$groupe->nomGroup}}
                                    </td>
                                    <td>
                                       <div class="form-group-inner">
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                   <select data-placeholder="Choose a Country..." name="cour" class="chosen-select" tabindex="-1">
                                                    <<?php $tmp=0 ?>
                                                    @foreach($EnsG as $ens)
                                                     @if($ens->group_id==$groupe->id && $ens->type=="cour")
                                                     <option value=" {{$ens->id}} "> {{$ens->f}} {{$ens->id}} {{$ens->prenom}}</option>
                                                <<?php $tmp=1 ?>
                                                    @endif
                                                    @endforeach
                                                    @if($tmp==0)
                                                     <option value=""><div>selcet ensiagnat</div></option>@endif
                                                     @foreach($listEns as $ens)
                                                    <option value=" {{$ens->id}} ">{{$ens->nom}} {{$ens->prenom}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                   <select data-placeholder="Choose a Country..." name="TD" class="chosen-select" tabindex="-1">
                                                   <<?php $tmp=0 ?>
                                                    @foreach($EnsG as $ens)
                                                     @if($ens->group_id==$groupe->id && $ens->type=="TD")
                                                     <option value=" {{$ens->id}} "> {{$ens->f}} {{$ens->id}} {{$ens->prenom}}</option>
                                                <<?php $tmp=1 ?>
                                                    @endif
                                                    @endforeach
                                                    @if($tmp==0)
                                                     <option value="">selcet ensiagnat</option>@endif
                                                     @foreach($listEns as $ens)
                                                    <option value=" {{$ens->id}} ">{{$ens->nom}} {{$ens->prenom}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                       <div class="form-group-inner">
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                   <select data-placeholder="Choose a Country..." name="TP" class="chosen-select" tabindex="-1">
                                                     <<?php $tmp=0 ?>
                                                    @foreach($EnsG as $ens)
                                                     @if($ens->group_id==$groupe->id && $ens->type=="TP")
                                                     <option value=" {{$ens->id}} "> {{$ens->f}} {{$ens->id}} {{$ens->prenom}}</option>
                                                <<?php $tmp=1 ?>
                                                    @endif
                                                    @endforeach
                                                    @if($tmp==0)
                                                     <option value="">selcet ensiagnat</option>@endif
                                                     @foreach($listEns as $ens)
                                                    <option value=" {{$ens->id}} ">{{$ens->nom}} {{$ens->prenom}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                             <button type="submit" class=" btn btn-sm btn-success"><i class="fa fa-check"></i> 
                                </button>
                                           
                                        </div>
                                    </td>
                                </tr>
                            </form>
                                @endforeach
                            </tbody>
                        </table>
                     </div>
            </div>
            <div id="menu1" class="tab-pane fade animated bounceInUp">
                <div class="project-details-completeness">
                    <form action="{{url('examen/'.$matiere->id.'/create')}}"> {{csrf_field()}}
              {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-custon-four btn-success">Creer Un Examan</button>
                    </form> 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>TYPE</th>
                                <th>TITRE</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($examens as $examen)
                        <tr>
                            <td>
                            <span class="label label-primary"><i class="fa fa-check"></i> {{$examen->type}}</span>
                            </td>
                            <td>{{$examen->titre}}</td>
                            
<td>
 <!--a href="{{ url('examen/'.$examen->id.'/edit')}}" >
                          <i class="fa fa-edit"></i>
 </a>
 <a href="{{ url('examen/'.$examen->id)}}" role="button"  data-toggle="modal"><i class="fa fa-trash-o"></i>
 </a-->
        <div class="hidden-sm hidden-xs action-buttons">
            <a class="green" href="{{ url('examen/'.$examen->id.'/details')}}">
                                         <i class="ace-icon fa fa-pencil bigger-130"></i>   </a>
        <a href="download/{{$examen->sujet}}"  download="" class="blue"><span><i class="fa fa-cloud-download bigger-130"></i></span></a>                                    

                                         <a class="green" href="{{ url('examen/'.$examen->id.'/edit')}}">
                                         <i class="ace-icon fa fa-pencil bigger-130"></i>   </a>
                                         <a class="red" href="{{ url('examen/'.$examen->id)}}">
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
                                         <a href="{{ url('examen/'.$examen->id.'/edit')}}" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green">
                                         <i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a>
                                         </li>
                                         <li> <a href="{{ url('examen/'.$examen->id)}}" class="tooltip-error" data-rel="tooltip" title="Delete">
                                         <span class="red">
                                         <i class="ace-icon fa fa-trash-o bigger-120"></i></span></a>
                                         @method('DELETE')
                                         @csrf
                                         </li> 
                                         </ul>
                                         </div>
                                         </div>
                                         </td>          
</td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade animated bounceInUp">
                <div class="project-details-completeness">
                    <div class="project-details-tab">
                        <ul class="nav nav-tabs res-pd-less-sm">
                            <li class="active"><a data-toggle="tab" href="#menu3">TD</a>
                            </li>
                            <li><a data-toggle="tab" href="#menu4">TP</a>
                            </li>
                                                
                        </ul>
                         <div class="tab-content res-tab-content-project">
                        <div id="menu3" class="tab-pane fade in active animated zoomInLeft">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="clearfix">
                                            <div class="pull-right tableTools-container">
                                            </div>
                                        </div>
                                        <div class="table-header">
                                                                Results for "Latest Registered Domains"
                                        </div>

                                                            <!-- div.table-responsive -->

                                                            <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="center">
                                                            <label class="pos-rel">
                                                            <input type="checkbox" class="ace" /><span class="lbl"></span>
                                                            </label>
                                                        </th>
                                                        <th>matricule</th>
                                                        <th>nom</th>
                                                        <th class="hidden-480">prenom</th>
                                                        <th> <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                        date naissance
                                                        </th>
                                                        <th class="hidden-480">etat</th>
                                                        <th class="hidden-480">groupe</th>
                                                        <th>exclure</th>
                                                    </tr>
                                                 </thead>
                                                 <tbody>
                                                    @foreach($exclusTD as $ETD)
                                                     <tr>
                                                         <td class="center">
                                                         <label class="pos-rel"> 
                                                         <input type="checkbox" class="ace" /><span class="lbl"></span>
                                                         </label>
                                                         </td>
                                                         <td>
                                                         <a href="#">{{$ETD->id}}</a>
                                                         </td>
                                                         <td>{{$ETD->nom}}</td>
                                                         <td class="hidden-480">{{$ETD->prenom}}</td>
                                                         <td>{{$ETD->dateN}}</td>
                                                         <td class="hidden-480">
                                                         <span class="label label-sm label-warning">{{$ETD->etat}}</span></td>
                                                         <td class="hidden-480">
                                                         <span class="label label-sm label-warning">{{$ETD->groupes_id}}</span></td>
                                                         <td>                          <div class="hidden-sm hidden-xs action-buttons">
                                                         <a class="blue" href="#">
                                                         <i class="ace-icon fa fa-search-plus bigger-130"></i></a>
                                                         <a class="green" href="#">
                                                         <i class="ace-icon fa fa-pencil bigger-130"></i>   </a><a class="red" href="#">
                                                         <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                         </a>
                                                         </div>
                                                         <div class="hidden-md hidden-lg">
                                                         <div class="inline pos-rel">
                                                         <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                         <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                         </button>
                                                         <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close"><li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>                           <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green">
                                                         <i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a>
                                                         </li>
                                                         <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                         <span class="red">
                                                         <i class="ace-icon fa fa-trash-o bigger-120"></i></span></a>
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
                                     </div>
                                </div>
                                <div class="project-details-completeness">
                                </div>
                        </div>
                        <div id="menu4" class="tab-pane fade animated bounceInUp">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results for "Latest Registered Domains"
                                                            </div>

                                                            <!-- div.table-responsive -->

                                                            <!-- div.dataTables_borderWrap -->
                                                            <div>
                                                               <table id="dynamic-table1" class="table table-striped table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="center">
                                                                            <label class="pos-rel">
                                                                            <input type="checkbox" class="ace" /><span class="lbl"></span>
                                                                            </label>
                                                                        </th>
                                                                        <th>matricule</th>
                                                                        <th>nom</th>
                                                                        <th class="hidden-480">prenom</th>
                                                                        <th> <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                                        date naissance
                                                                        </th>
                                                                        <th class="hidden-480">etat</th>
                                                                        <th class="hidden-480">groupe</th>
                                                                        <th>exclure</th>
                                                                    </tr>
                                                                 </thead>
                                                                 <tbody>
                                                                    @foreach($exclusTP as $ETP)
                                                                     <tr>
                                                                         <td class="center">
                                                                         <label class="pos-rel"> 
                                                                         <input type="checkbox" class="ace" /><span class="lbl"></span>
                                                                         </label>
                                                                         </td>
                                                                         <td>
                                                                         <a href="#">{{$ETP->id}}</a>
                                                                         </td>
                                                                         <td>{{$ETP->nom}}</td>
                                                                         <td class="hidden-480">{{$ETP->prenom}}</td>
                                                                         <td>{{$ETP->dateN}}</td>
                                                                         <td class="hidden-480">
                                                                         <span class="label label-sm label-warning">{{$ETP->etat}}</span></td>
                                                                         <td class="hidden-480">
                                                                         <span class="label label-sm label-warning">{{$ETP->groupes_id}}</span></td>
                                                                         <td>                          <div class="hidden-sm hidden-xs action-buttons">
                                                                         <a class="blue" href="#">
                                                                         <i class="ace-icon fa fa-search-plus bigger-130"></i></a>
                                                                         <a class="green" href="#">
                                                                         <i class="ace-icon fa fa-pencil bigger-130"></i>   </a><a class="red" href="#">
                                                                         <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                         </a>
                                                                         </div>
                                                                         <div class="hidden-md hidden-lg">
                                                                         <div class="inline pos-rel">
                                                                         <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                         <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                         </button>
                                                                         <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close"><li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>                           <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green">
                                                                         <i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a>
                                                                         </li>
                                                                         <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                         <span class="red">
                                                                         <i class="ace-icon fa fa-trash-o bigger-120"></i></span></a>
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
                                                        </div>
                                                    </div>

                                                    <div class="project-details-completeness">
                                                        
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
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="project-details-descri project-details-mg-t-30 shadow-reset">
                                <h2>Project Description</h2>
                                <p>There are many variations of the passages of Lorem on the Ipsum available, but the majority have suffered alteration in some form, by injected humour, or one of randomised words.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
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
    <script src="{{asset('frontEnd')}}/js/detailsModule.js"></script>
    <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
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
     @endsection
