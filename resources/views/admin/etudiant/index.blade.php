@extends('layout.master')

@section('title','GBS | Liste Des Etudiants')

@section('asidebar')


                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                           
                        </li>
                        <li class="nav-item"><a href="profil.html" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Profil</span> </a>
                           
                        </li>

                       <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-list"></i>  <span class="mini-dn">Promo</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            @foreach($ps as $p)
                                <a href="{{url('promot/'. $p->idPromot.'/index') }}" class="dropdown-item">
                                {{$p->filiere}}{{$p->annee}}</a>
                                 <form action="{{url('promot_groupes/'. $p->idPromot.'/index')}}">
                                <button type="submit" class="btn btn-info"><strong>Groupes</strong>
                            </button>
                              </form>                   
                             @endforeach
                                <a href="{{url('promot/create')}}" class="dropdown-item">nouvel promo</a>
                            </div>
                        </li>
                         






                        
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pencil-square-o"></i> <span class="mini-dn">Compte utilisateur</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="listeRCodage.html" class="dropdown-item">Responsables de codage</a>
                                <a href="listeadmin.html" class="dropdown-item">Admin</a>
                                <a href="{{url('enseignant')}}" class="dropdown-item">Enseignants</a>

                            </div>
                        </li>


                     

                         
                        <li class="nav-item"><a href="{{url('matiere')}}" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-newspaper-o"></i> <span class="mini-dn">Matiere</span> </a></li>
                    

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
               <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                          



                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                       <div class="sparkline13-outline-icon">
                                            
                                        </div>


                                    
                                        <h1>Liste <span class="table-project-n">des Etudiant</span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <div class="button-style-four btn-mg-b-10">
                                                <form action="{{url('etudiant/create')}}">
                                                   <button type="submit" class="btn btn-info">Ajouter des nouveaux Etudients
                                                   </button>
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

                                        <table code="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-code-table="savecode" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="nom">Nom</th>
                                                    <th data-field="prenom" data-editable="true">Prenom</th>
                                                    <th data-field="dateN" data-editable="true">Date_naissance</th>
                                                    <th data-field="email" data-editable="true">Email</th>
                                                    <th data-field="address" data-editable="true">Address</th>
                                                    <th data-field="groupe" data-editable="true">Groupe</th>
                                                    <th data-field="promot" data-editable="true">Promot</th>
                                                   <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                @foreach($etudiants as $etudiant)
                <tr>
               
                    <td></td>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->prenom}}</td>
                     <td>{{$etudiant->dateN}}</td>
                      <td>{{$etudiant->email}}</td>
                       <td>{{$etudiant->address}}</td>
                    <td>
                   
                       {{$etudiant->nomGroup}}
                    </td>
                    
                       <td>
                   
                       {{$etudiant->filiere}} {{$etudiant->annee}}
                    </td>
                     
                    
                   <td>
    <div class="btn-group">
        <form action="{{ url('etudiant/'.$etudiant->code)}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
               
              <a href="{{ url('etudiant/'.$etudiant->code.'/details')}}" class="btn btn-info">
                <i class="fa fa-eye"></i>
              </a>
                       
              <a href="{{ url('etudiant/'.$etudiant->code.'/edit')}}" class="btn btn-default">
                <i class="fa fa-edit"></i>
              </a>
                      
             <a href="#supprimer{{ $etudiant->code }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i>
              </a>
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
                                      <form class="form-inline" action="{{ url('$etudiant->code')}}"  method="POST">
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
    </div>
                    </td>                                  
                </tr>
                                                @endforeach
                                             </tbody>
                                        </table>
                                        
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
            <div code="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
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
