@extends('layout.master')

@section('title','GBS | Ajouter un Responsable de cogade')

     @section('content')
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="sparkline12-list shadow-reset mg-t-30">
                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Création d'un nouveu compteResponsable de codege</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                </div>
    <div class="sparkline12-graph">
        <div class="basic-login-form-ad">
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-form-element-inner">
                        <form action="{{url('ResponsablesCodage')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group-inner">
                                <div class="row">
                                    <img src="{{asset('frontEnd')}}/img/Enseignat.png">
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
                                        <H2>Nouvaux Responsable De Codage</H2>
                                        <hr width="30%" size="3">
                                    </div>
                                </div>
                            </div>
                            <!--nom-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Nom</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="nom" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <!--prenom-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                         <label class="login2 pull-right pull-right-pro">Prenom</label>
                                    </div>
                                    <div class="col-lg-4">
                                         <input type="text" name="prenom" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <!--sex Box star-->
                            <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Sexe </label>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="bt-df-checkbox pull-left">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="i-checks pull-left">
                           <label>
                           <input type="radio" value="Femme" name="sexe"> <i></i> femme 
                           </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="i-checks pull-left">    
                            <label>
                            <input type="radio" checked="" value="Homme" name="sexe"> <i></i> homme 
                            </label>
                        </div>
                    </div>
                </div>
            </div>
                                        </div>
                                    </div>
                            </div>
                            <!--Date naissance-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                      <label class="login2 pull-right pull-right-pro">Date Naissance</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group data-custon-pick" id="data_1">
                                          <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="dateN" class="form-control" value="10/04/2018">
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--numTel-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="login2 pull-right pull-right-pro">Num Tel</label>
                                    </div>
                                    <div class="col-lg-4">
                                       <input type="text" name="num_tel" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <!--user nae-->
                             <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="login2 pull-right pull-right-pro">Username</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" name="user" class="form-control" />
                                    </div>
                                </div>
                            </div>


                            <!--email-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="login2 pull-right pull-right-pro">Email</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                </div>
                            </div>
                           
                            
                            <!--password-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="login2 pull-right pull-right-pro">Password</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                </div>
                            </div>
                            <!--photo-->
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label class="login2 pull-right pull-right-pro">Photo</label>
                                    </div>
                                    <div class="col-lg-4">
                                       <input name="img" type="file" >
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
