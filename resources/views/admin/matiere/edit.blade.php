@extends('layout.master')

@section('title','GBS | Modifier une Matiere')

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
?>
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="sparkline12-list shadow-reset mg-t-30">
                <div class="sparkline12-hd">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Modification d'une Matiere</h1>
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
                                        <H2>Nouvelle Matiere</H2>
                                        <hr width="30%" size="3">
                                    </div>
                                </div>
                            </div>
                            
             <form class="well form-horizontal" action=" {{url('matiere/'. $matiere->id) }} " method="POST"  id="contact_form"> 
        {{ csrf_field() }} 
         
<fieldset>                  
                             <!--nom matiere-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Nom Matiere</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input  name="nom" class="form-control" value="{{$matiere->nomMat}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <!--cour-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Seance Cour</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input  name="cour" class="form-control" value="{{$matiere->heurCour}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <!--td-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Seance TD</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input  name="td" class="form-control" value="{{$matiere->heurTD}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <!--tp-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Seance TP</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input  name="tp" class="form-control" value="{{$matiere->heurTP}}" type="text">
                                    </div>
                                </div>
                            </div>
                            <!--coeff-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Coefficient</label>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="input-group">
                                  <span class="input-group-addon">  <i class="fa fa-list-ol"></i></span>
                                        <select name="coefficient" class="form-control select">
                                          <option selected>{{$matiere->cofficient}}</option>

                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                        </select>
                                    </div>
                                </div></div>
                            </div> 
                           <!--resp-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="login2 pull-right pull-right-pro">Responsable</label>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                  <select name="responsable" class="form-control selectpicker">
        <?php 
            $req1="SELECT nom, prenom from enseignants e,responsables r where e.id=r.enseignants_id and r.idResp=$matiere->responsables_id" ;

                    $reponse1 = $bdd->prepare($req1); 
                    $reponse1->execute();
                     $row1=$reponse1->fetch();
?>  
                     <option value="{{$matiere->responsables_id}}"> <?php echo $row1['nom']; ?> <?php echo $row1['prenom']; ?></option>                        
                                @foreach($responsables as $responsable)

                                    <option value="{{$responsable->idResp}}">
                                
<?php 
            $req="SELECT nom, prenom from enseignants e,responsables r where e.id=r.enseignants_id and r.idResp=$responsable->idResp" ;
                    $reponse = $bdd->prepare($req); 
                    $reponse->execute();
                     $row=$reponse->fetch();
            
            
                     //$row2=$reponse2->fetch();
?>
                                     
            <?php echo $row['nom']; ?> <?php echo $row['prenom']; ?>        
                                      </option>
                                    @endforeach
                                  </select>

                              </div>
                                    </div>
                                </div>
                            </div>
                            
                           <!--enseignant-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="login2 pull-right pull-right-pro">Enseignant</label>
                                    </div>
                                    <div class="col-lg-4">
                                    <select name="membre[]" class="form-control select2" multiple="multiple" >

                              
                                       @foreach($listEns as $ens)
                                      <option value="{{$ens->id}}" selected>
                                        {{$ens->nom}} {{$ens->prenom}}
                                      </option>
                                       @endforeach
                                       @foreach($membres as $membre)
                                      <option value="{{$membre->id}}" >
                                        {{$membre->nom}} {{$membre->prenom}}
                                      </option>
                                       @endforeach
                                    </select>   
                                    
                                    </div>
                                </div>
                            </div>
                            
                           
                            <div style="padding-top: 30px; margin-left: 35%;">
                                <a href="#" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler
                                </a>
                                <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider
                                </button> 
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <hr width="75%" size="3">
                                </div>
                            </div>

                        
                        </fieldset></form>
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
