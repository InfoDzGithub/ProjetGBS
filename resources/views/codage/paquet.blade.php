@extends('layout.master')
@section('title','GBS | Ajouter un Enseignant')
@section('linkcss')

  
    
<!--===  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">============================================================================================-->  
  
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/vendor/animate/animate (2).css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/vendor/select2/select2 (2).min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/main (2).css">
<!--===============================================================================================-->
<link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>

      <link rel="stylesheet" href="{{asset('frontEnd')}}/css/style (2).css">




@endsection
@section('content')
	<div class="tab-content">
	    <div class="row">
	        <div class="col-lg-12">
	            <div class="sparkline13-list shadow-reset"></div>
	              
	            <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">

	                <div >
	                    <h1>Paquet  <span class="res-ds-n">N105</span></h1>
	                    <div class="container-table100">
	                        <div class="wrap-table100">
	                            
	                            
	                            <div class="table100 ver2 m-b-110">
	                                <div class="table100-head">

	                                        
	                                    <table>
	                                        <thead>
	                                            <tr class="row100 head">
	                                                <th class="cell100 column3">--->Mat</th>
	                                                <th class="cell100 column2">Nom   </th>
	                                                <th class="cell100 column2">Prn  </th>
	                                                <th class="cell100 column4">Cod</th>
	                                                <th class="cell100 column2">  <span class="table-add glyphicon glyphicon-plus"></span></th>
	                                            </tr>
	                                        </thead>
	                                    </table>
	                                </div>

	                                <div class="table100-body js-pscroll">
	                                    <div id="table" class="table-editable">
	                                        <table class="table">
	                                            <tbody>
	                                            	<tr class="hide row100 body">
	                                                <td class="cell100 column2">
	                                                     <div class="col-lg-12" contenteditable="true">
	                                                       <select class="  form-control">
	                                                       	@foreach($etud as $Et)
	                                                        <option value="{{$Et->id}}">{{$Et->nom}} {{$Et->prenom}}</option>
	                                                        @endforeach
	                                                    </select>
	                                                    </div>
	                                                
	                                                </td>
	                                                <td class="cell100 column2">null</td>
	                                                <td class="cell100 column3">null</td>
	                                                <td class="cell100 column4"contenteditable="true">code ....</td>
	                                                <td class="cell100 column2">
	                                                    <span class="table-remove glyphicon glyphicon glyphicon-trash"></span>
	                                                </td>
	                                                
	                                            </tr>
	                                            <!-- This is our clonable table line -->
	                                            @foreach($etd as $E)
	                                            <tr>
	                                                <td class="cell100 column3">
	                                                     {{$E->idEt}}
	                                                </td>
	                                                <td class="cell100 column2">{{$E->nom}}</td>
	                                                <td class="cell100 column2">{{$E->prenom}}</td>
	                                                <td class="cell100 column4"contenteditable="true">{{$E->code}}</td>
	                                                <td class="cell100 column2">
	                                                    <span class="table-remove glyphicon glyphicon glyphicon-trash"></span>
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


<!--===============================================================================================-->  
    <script src="{{asset('frontEnd')}}/vendor/jquery/jquery-3.2.1.min (2).js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
    <script src="{{asset('frontEnd')}}/vendor/select2/select2 (2).min.js"></script>
<!--===============================================================================================-->
    <script src="{{asset('frontEnd')}}/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })
        });
            
        
    </script>
<!--===============================================================================================-->
    <script src="{{asset('frontEnd')}}/js/main (2).js"></script>

     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore.js'></script>

  

    <script  src="{{asset('frontEnd')}}/js/index (2).js"></script>





@endsection