@extends('layout.master')

@section('title','GBS | Modifier un examen')

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
    $requette="SELECT nomMat from examens e,matieres m where 
    m.id=e.matieres_id and e.id=$examen->id" ;

                    $rep = $bdd->prepare($requette); 
                    $rep->execute();
                     $ligne=$rep->fetch();
                     
                   
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
                                        <H2>Modifier Examen</H2>
                                        <hr width="30%" size="3">
                                    </div>
                                </div>
                            </div>
                            
             <form class="well form-horizontal" action=" {{url('examen/'. $examen->id) }} " method="POST"  id="contact_form"> 
        {{ csrf_field() }} 
         
<fieldset>                  
                             <!--matiere-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">
                                          Matiere</label>
                                    </div>
                                    <div class="col-lg-4">
                                       
                                       <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                        <select name="matiere" class="form-control selectpicker">
                                       <option value="{{$examen->matieres_id}}"> <?php echo $ligne['nomMat']; ?> </option>
                                     @foreach($matieres as $matiere)

                                    <option value="{{$matiere->id}}">
                                       {{$matiere->nomMat}}
                                      </option>
                                    @endforeach
                                  </select>
                                    </div>
                                </div></div></div>
                          
                           <!--titre-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">
                                          titre</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input  name="titre" class="form-control" value="{{$examen->titre}}" type="text">
                                    </div>
                                </div>
                            </div>
                           
                            <!--date examen-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                      <label class="login2 pull-right pull-right-pro">Date Examen</label>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group data-custon-pick" id="data_1">
                                          <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="date_examen" class="form-control" value="{{$examen->date_examen}}">
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Type examen-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Type Examen</label>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="input-group">
                                  <span class="input-group-addon">  <i class="fa fa-list-ol"></i></span>
                                        <select  class="form-control select" name="type">
                                          <option selected>{{$examen->type}}</option>

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
                                        <input name="sujet" type="file" id="exampleInputFile" value="{{$examen->sujet}}">
                                    </div>
                                </div>
                            </div>
                            <div style="padding-top: 30px; margin-left: 35%;">
                                <a href="{{ url('matiere/'.$examen->matieres_id.'/details')}}" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler
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
