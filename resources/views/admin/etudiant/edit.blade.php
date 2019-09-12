@extends('layout.master')

@section('title','GBS | details un etudiant')
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

 <?php
 try
{
    $bdd = new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', '');

}
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        } 
   

$req1="SELECT idGroup,nomGroup,annee,filiere,idPromot from groupes g,promots p where g.promots_id=p.idPromot and g.idGroup=$etudiant->groupes_id" ;

                    $reponse1 = $bdd->prepare($req1); 
                    $reponse1->execute();
                     $row1=$reponse1->fetch();


?>
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

                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane ">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 center">
                                                <span class="profile-picture">
                                                    <img class="editable img-responsive" alt="Alex's Avatar" src="{{asset($etudiant->photo)}}" />
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
                                                    <span class="middle">{{$etudiant->nom}} {{$etudiant->prenom}}</span>

                                                    <span class="label label-purple arrowed-in-right">
                                                        <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                        online
                                                    </span>
                                                </h4>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                         
                                                        <div class="profile-info-name">Date de naissance  </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$etudiant->dateN}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">

                                                        <div class="profile-info-name">Email </div>

                                                        <div class="profile-info-value">
                                                            
                                                            <span>{{$etudiant->email}}</span>
                                                            
                                                        </div>
                                                    </div>

                                                   

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Address </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$etudiant->address}}</span>
                                                        </div>
                                                    </div>
                                                     <div class="profile-info-row">

                                                        <div class="profile-info-name">Filiere </div>

                                                        <div class="profile-info-value">
                                                            
                                                            <span><?php echo $row1['filiere']; ?></span>
                                                            
                                                        </div>
                                                    </div>

                                                     <div class="profile-info-row">
                                                        <div class="profile-info-name"> Groupe </div>

                                                        <div class="profile-info-value">
                                                            <span><?php echo $row1['nomGroup']; ?></span>
                                                        </div>
                                                    </div>
                                                     <div class="profile-info-row">
                                                        <div class="profile-info-name"> Promot </div>

                                                        <div class="profile-info-value">
                                                            <span><?php echo $row1['annee']; ?></span>
                                                        </div>
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


                                          
                                    </div>
                                    
                   
                                     <!-- /#home -->
                                    <div id="feed"  class="tab-pane in active">
                                       
                                        <!--debu-->
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 center">
                                                <span class="profile-picture">
                                                    <img 
                                                    style="height: 250px; width: 190px;"
                                                    class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{asset($etudiant->photo)}}" name="img"/>
                                                </span>

                                                <div class="space space-4"></div>
                                            </div><!-- /.col -->
                                            
                                            <div class="col-xs-12 col-sm-9">
       <!--/****************************/-->  
<form class="well form-horizontal" action=" {{url('etudiant/'. $etudiant->id) }} " method="POST"  id="contact_form"> 
        {{ csrf_field() }} 
         <!--@csrf_field and {{ method_field('PUT') }}-->
    <fieldset>

                        <!--nom-->
                    <div class="form-group ">
                        <div class="col-lg-4">ojoj
                                       <input name="img" type="file" >
                                    </div>
                        <label class="col-md-3 control-label">Nom</label>  
                        <div class="col-md-9 inputGroupContainer ">
                          <div class="input-group"  style="width: 40%">
                            <input  name="nom" class="form-control" value="{{$etudiant->nom}}" type="text">
                           
                          </div>
                        </div>
                    </div>
                    <!--prenom-->
                     <br><br>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Prénom</label>  
                        <div class="col-md-9 inputGroupContainer">
                          <div class="input-group"  style="width: 40%">
                            <input  name="prenom" value="{{$etudiant->prenom}}" class="form-control"  type="text">
                            
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
                              <input name="date_naissance" type="text" class="form-control pull-right" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="datepicker" value="{{$etudiant->dateN}}">
                            </div>
                      </div>
                      </div>
                    </div>
                    <br><br>
                     <!--email-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">E-Mail</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group"  style="width: 40%">
                                <input name="email" type="email" class="form-control" value="{{$etudiant->email}}">
                                
                            </div>
                          </div>
                    </div>
                    
                    <br><br>
                    
                    <!--?php  //$idPro="<script> document.write(promotId) </script>";?-->
                   <!--address-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Address</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group"  style="width: 40%">
                                <input name="address" type="text" class="form-control" value="{{$etudiant->address}}">
                                
                            </div>
                          </div>
                    </div>
                    
                    <br><br>
                    <!--filiere-->
                    <!--div class="form-group">
                        <label class="col-md-3 control-label">Filiere</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group"  style="width: 40%">
                              <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                  <select name="promot" id="promot" class="form-control input-lg dynamic" data-dependent="groupe" onchange="getSelectedValue()">
        
                                             
                                @foreach($promots as $promot)

                                    <option value="{{$promot->idPromot}}">
                                       {{$promot->filiere}}  {{$promot->annee}}
                                      </option>
                                       
                                    @endforeach
                                  </select>

                              </div>
                          </div>
                    </div-->
                    
                    
                    <br><br>
                        
                    <div class="form-group">
                        <label class="col-md-3 control-label">Groupe</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group "  style="width: 40%">
     
                      <select name="groupe" id="groupe" class="form-control" >
                        <option value="{{$etudiant->groupes_id}}">
                        <?php echo $row1['filiere']; ?>
                        <?php echo $row1['annee']; ?>
                        <?php echo $row1['nomGroup']; ?></option>
                            
                         <?php   $rq="SELECT nomGroup,idGroup,filiere,annee from groupes g,promots p where g.promots_id=p.idPromot";

                    $rp = $bdd->prepare($rq); 
                    $rp->execute();
                     while($et=$rp->fetch()) {  ?>
                                    <option value="<?php echo $et['idGroup']; ?>">
                                       <?php echo $et['filiere']; ?>
                                       <?php echo $et['annee']; ?>
                                       <?php echo $et['nomGroup']; ?>  
                                      </option>
                                       
                           <?php } ?>         
                      
                             
                           </select>
                            </div>
                          </div>
                    </div>
                    
                    <br><br>
                    
                    <!--form name="form" action="{{url('etudiant/groupList') }}" method="get">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Address</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="input-group"  style="width: 40%">
                                <input name="prm" type="text" class="form-control" id="prmID">
                                
                            </div>
                          </div>
                    </div>
                    </form-->
                    
                    <br><br>
                        {{ csrf_field() }}
                     
                     
    </fieldset>
                   <div class="row" style="padding-top: 30px; margin-left: 35%;">
              <a href="{{ url('etudiant/'.$etudiant->id.'/details')}}" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler</a>
               <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Modifier</button> 
                  </div>
</form>







                                             </div><!-- /.col -->
                                        </div>
                                        <!--fin-->

                                        <div class="space-12"></div>

                                        
                                    </div>
                                     <!-- /#feed -->




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

     
<!--script>
function getSelectedValue()
{
  var promotId=document.getElementById("promot").value;
 //document.getElementById("prmID").value = promotId;
 $
  
  
   
 //alert(promotId);
}
</script-->
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

<!--script>
$('#promot').on('change',function(e)
{
 console.log(e);
 var cat_id=e.target.value;
 //ajax
 /*$.get('/ajax-subcat' +cat_id,function(data){
   //success data
    $('#groupe').empty();
    $.each(data,function(index,subcatObj)
        {
$('#groupe').append('<option value="'+subcatObj.id+'">'subcatObj.name'</option>');
        });
  });*/
  $.ajax({
      type:'get',
      url:'/ajax-subcat',
      data:{cat_id:cat_id}
      success:function(data){
        $('#groupe').empty();
    $.each(data,function(index,subcatObj)
        {
$('#groupe').append('<option value="'+subcatObj.id+'">'subcatObj.name'</option>');
        });
  });
      }
});
</script-->
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