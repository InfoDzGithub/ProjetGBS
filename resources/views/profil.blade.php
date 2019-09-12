 @extends('layout.master')

@section('title','GBS | Ajouter un Enseignant')
 @section('linkcss')
 <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

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

        <script src="{{asset('frontEnd')}}/assets/js/ace-extra.min.js"></script>
         @endsection
        @section('content')
 <div class="tab-content">
        <div class="row">
            <div class="col-lg-12"> <!--profile utlisateur debut-->
                <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active"><div class="row">
                    <div class="col-lg-9">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="clearfix">
                            <div class="pull-left alert alert-success no-margin alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>

                                <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
                                Click on the image below or on profile fields to edit them ...
                            </div>
                        </div>
                        <div class="hr dotted"></div>

                        <div>
                            <div id="user-profile-1" class="user-profile row">
                                <div class="col-xs-12 col-sm-3 center">
                                    <div>
                                        <span class="profile-picture">
                                            <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="{{asset($userr->photo)}}" />
                                        </span>

                                        <div class="space-4"></div>

                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                            <div class="inline position-relative">
                                                <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                    &nbsp;
                                                    <span class="white">{{$userr->nom}} {{$userr->prenom}} </span>
                                                </a>

                                                <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                                    <li class="dropdown-header"> Change Status </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-circle green"></i>
                                                            &nbsp;
                                                            <span class="green">Available</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-circle red"></i>
                                                            &nbsp;
                                                            <span class="red">Busy</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-circle grey"></i>
                                                            &nbsp;
                                                            <span class="grey">Invisible</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-6"></div>

                                    <div class="profile-contact-info">
                                        <div class="profile-contact-links align-left">
                                            <a href="#" class="btn btn-link">
                                                <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                                                Add as a friend
                                            </a>

                                            <a href="#" class="btn btn-link">
                                                <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                                Send a message
                                            </a>

                                            <a href="#" class="btn btn-link">
                                                <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                                {{$userr->email}}
                                            </a>
                                        </div>

                                        <div class="space-6"></div>

                                        <div class="profile-social-links align-center">
                                            <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
                                                <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                                            </a>

                                            <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
                                                <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                                            </a>

                                            <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
                                                <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="hr hr12 dotted"></div>

                                    <div class="clearfix">
                                        <div class="grid2">
                                            <span class="bigger-175 blue">25</span>

                                            <br />
                                            Followers
                                        </div>

                                        <div class="grid2">
                                            <span class="bigger-175 blue">12</span>

                                            <br />
                                            Following
                                        </div>
                                    </div>

                                    <div class="hr hr16 dotted"></div>
                                </div>

                                <div class="col-xs-12 col-sm-9">
                                    <div class="center">
                                        <span class="btn btn-app btn-sm btn-light no-hover">
                                            <span class="line-height-1 bigger-170 blue"> 1,411 </span>

                                            <br />
                                            <span class="line-height-1 smaller-90"> Views </span>
                                        </span>

                                        <span class="btn btn-app btn-sm btn-yellow no-hover">
                                            <span class="line-height-1 bigger-170"> 32 </span>

                                            <br />
                                            <span class="line-height-1 smaller-90"> Followers </span>
                                        </span>

                                        <span class="btn btn-app btn-sm btn-pink no-hover">
                                            <span class="line-height-1 bigger-170"> 4 </span>

                                            <br />
                                            <span class="line-height-1 smaller-90"> Projects </span>
                                        </span>

                                        <span class="btn btn-app btn-sm btn-grey no-hover">
                                            <span class="line-height-1 bigger-170"> 23 </span>

                                            <br />
                                            <span class="line-height-1 smaller-90"> Reviews </span>
                                        </span>

                                        <span class="btn btn-app btn-sm btn-success no-hover">
                                            <span class="line-height-1 bigger-170"> 7 </span>

                                            <br />
                                            <span class="line-height-1 smaller-90"> Albums </span>
                                        </span>

                                        <span class="btn btn-app btn-sm btn-primary no-hover">
                                            <span class="line-height-1 bigger-170"> 55 </span>

                                            <br />
                                            <span class="line-height-1 smaller-90"> Contacts </span>
                                        </span>
                                    </div>

                                    <div class="space-12"></div>

                                    <div class="profile-user-info profile-user-info-striped">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Username </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="username">{{$userr->name}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Location </div>

                                            <div class="profile-info-value">
                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                <span class="editable" id="country">algerie</span>
                                                <span class="editable" id="city">tlemcen</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> numero telphone </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="age">{{$userr->num_tel}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> date naissance </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="signup">{{$userr->date_N}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Last Online </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="login">3 hours ago</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> About Me </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="about">Editable as WYSIWYG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-20"></div>

                                    <div class="widget-box transparent">
                                        <div class="widget-header widget-header-small">
                                            <h4 class="widget-title blue smaller">
                                                <i class="ace-icon fa fa-rss orange"></i>
                                                Recent Activities
                                            </h4>

                                            <div class="widget-toolbar action-buttons">
                                                <a href="#" data-action="reload">
                                                    <i class="ace-icon fa fa-refresh blue"></i>
                                                </a>
                                                &nbsp;
                                                <a href="#" class="pink">
                                                    <i class="ace-icon fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main padding-8">
                                                <div id="profile-feed-1" class="profile-feed">
                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <img class="pull-left" alt="Alex Doe's avatar" src="{{asset('frontEnd')}}/assets/images/avatars/avatar5.png" />
                                                            <a class="user" href="#"> Alex Doe </a>
                                                            changed his profile photo.
                                                            <a href="#">Take a look</a>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                an hour ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <img class="pull-left" alt="Susan Smith's avatar" src="{{asset('frontEnd')}}/assets/images/avatars/avatar1.png" />
                                                            <a class="user" href="profil_user_d.html"> Susan Smith </a>

                                                            is now friends with Alex Doe.
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                2 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                                            <a class="user" href="profil_user_d.html"> Alex Doe </a>
                                                            joined
                                                            <a href="#">Country Music</a>

                                                            group.
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                5 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                                            <a class="user" href="profil_user_d.html"> Alex Doe </a>
                                                            uploaded a new photo.
                                                            <a href="#">Take a look</a>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                5 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <img class="pull-left" alt="David Palms's avatar" src="{{asset('frontEnd')}}/assets/images/avatars/avatar4.png" />
                                                            <a class="user" href="profil_user_d.html"> David Palms </a>

                                                            left a comment on Alex's wall.
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                8 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                                            <a class="user" href="profil_user_d.html"> Alex Doe </a>
                                                            published a new blog post.
                                                            <a href="#">Read now</a>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                11 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <img class="pull-left" alt="Alex Doe's avatar" src="{{asset('frontEnd')}}/assets/images/avatars/avatar5.png" />
                                                            <a class="user" href="profil_user_d.html"> Alex Doe </a>

                                                            upgraded his skills.
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                12 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                            <a class="user" href="profil_user_d.html"> Alex Doe </a>

                                                            logged in.
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                12 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                                            <a class="user" href="profil_user_d.html"> Alex Doe </a>

                                                            logged out.
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                16 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-activity clearfix">
                                                        <div>
                                                            <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                            <a class="user" href="profil_user_d.html"> Alex Doe </a>

                                                            logged in.
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                16 hours ago
                                                            </div>
                                                        </div>

                                                        <div class="tools action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                            </a>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hr hr2 hr-double"></div>

                                    <div class="space-6"></div>

                                    <div class="center">
                                        <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                                            <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                            <span class="bigger-110">View more activities</span>

                                            <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--ddebut contact en ligne-->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="sparkline7-list profile-online-mg-t-30 shadow-reset">
                                <div class="sparkline-hd">
                                    <div class="main-spark7-hd">
                                        <h1>Contact List</h1>
                                        <div class="sparkline7-outline-icon">
                                            <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline7-graph" style="display: block;height: 860px;">
                                    <div class="user-profile-contact user-profile-scrollbar">
                                        <ul class="profile-contact-menu">
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/5.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/1.jpg" alt="" /> <span>Fire Foxy</span> <span class="contact-profile-online-f">31m</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/2.jpg" alt="" /> <span>Jhon Royita</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/3.jpg" alt="" /> <span>Selim Reza</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/4.jpg" alt="" /> <span>Navil khan</span> <span class="contact-profile-online-f">4h</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/6.jpg" alt="" /> <span>Suhag Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/1.jpg" alt="" /> <span>Abir Shek</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/3.jpg" alt="" /> <span>Omi Poyel</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/4.jpg" alt="" /> <span>Emrul Khan</span> <span class="contact-profile-online-f">4h</span>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/4.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f">4h</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/6.jpg" alt="" /> <span>Emrul Khan</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/3.jpg" alt="" /> <span>Suhag Joy</span> <span class="contact-profile-online-f"><i class="fa fa-circle contact-profile-online"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{asset('frontEnd')}}/img/notification/4.jpg" alt="" /> <span>Sakila Joy</span> <span class="contact-profile-online-f">4h</span>
                                                </a>
                                            </li>
                                           
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div><!--fin contact en ligne-->
               </div><!--profile utlisateur fin-->
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

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
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
            jQuery(function($) {
            
                //editables on first profile page
                $.fn.editable.defaults.mode = 'inline';
                $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
                $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                                            '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
                
                //editables 
                
                //text editable
                $('#username')
                .editable({
                    type: 'text',
                    name: 'username'        
                });
            
            
                
                //select2 editable
                var countries = [];
                $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
                    countries.push({id: k, text: v});
                });
            
                var cities = [];
                cities["CA"] = [];
                $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
                    cities["CA"].push({id: v, text: v});
                });
                cities["IN"] = [];
                $.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
                    cities["IN"].push({id: v, text: v});
                });
                cities["NL"] = [];
                $.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
                    cities["NL"].push({id: v, text: v});
                });
                cities["TR"] = [];
                $.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
                    cities["TR"].push({id: v, text: v});
                });
                cities["US"] = [];
                $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
                    cities["US"].push({id: v, text: v});
                });
                
                var currentValue = "NL";
                $('#country').editable({
                    type: 'select2',
                    value : 'NL',
                    //onblur:'ignore',
                    source: countries,
                    select2: {
                        'width': 140
                    },      
                    success: function(response, newValue) {
                        if(currentValue == newValue) return;
                        currentValue = newValue;
                        
                        var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
                        
                        //the destroy method is causing errors in x-editable v1.4.6+
                        //it worked fine in v1.4.5
                        /**         
                        $('#city').editable('destroy').editable({
                            type: 'select2',
                            source: new_source
                        }).editable('setValue', null);
                        */
                        
                        //so we remove it altogether and create a new element
                        var city = $('#city').removeAttr('id').get(0);
                        $(city).clone().attr('id', 'city').text('Select City').editable({
                            type: 'select2',
                            value : null,
                            //onblur:'ignore',
                            source: new_source,
                            select2: {
                                'width': 140
                            }
                        }).insertAfter(city);//insert it after previous instance
                        $(city).remove();//remove previous instance
                        
                    }
                });
            
                $('#city').editable({
                    type: 'select2',
                    value : 'Amsterdam',
                    //onblur:'ignore',
                    source: cities[currentValue],
                    select2: {
                        'width': 140
                    }
                });
            
            
                
                //custom date editable
                $('#signup').editable({
                    type: 'adate',
                    date: {
                        //datepicker plugin options
                            format: 'yyyy/mm/dd',
                        viewformat: 'yyyy/mm/dd',
                         weekStart: 1
                         
                        //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                        //,format: 'yyyy-mm-dd',
                        //viewformat: 'yyyy-mm-dd'
                    }
                })
            
                $('#age').editable({
                    type: 'spinner',
                    name : 'age',
                    spinner : {
                        min : 16,
                        max : 99,
                        step: 1,
                        on_sides: true
                        //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
                    }
                });
                
            
                $('#login').editable({
                    type: 'slider',
                    name : 'login',
                    
                    slider : {
                         min : 1,
                          max: 50,
                        width: 100
                        //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
                    },
                    success: function(response, newValue) {
                        if(parseInt(newValue) == 1)
                            $(this).html(newValue + " hour ago");
                        else $(this).html(newValue + " hours ago");
                    }
                });
            
                $('#about').editable({
                    mode: 'inline',
                    type: 'wysiwyg',
                    name : 'about',
            
                    wysiwyg : {
                        //css : {'max-width':'300px'}
                    },
                    success: function(response, newValue) {
                    }
                });
                
                
                
                // *** editable avatar *** //
                try {//ie8 throws some harmless exceptions, so let's catch'em
            
                    //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                    //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                    try {
                        document.createElement('IMG').appendChild(document.createElement('B'));
                    } catch(e) {
                        Image.prototype.appendChild = function(el){}
                    }
            
                    var last_gritter
                    $('#avatar').editable({
                        type: 'image',
                        name: 'avatar',
                        value: null,
                        //onblur: 'ignore',  //don't reset or hide editable onblur?!
                        image: {
                            //specify ace file input plugin's options here
                            btn_choose: 'Change Avatar',
                            droppable: true,
                            maxSize: 110000,//~100Kb
            
                            //and a few extra ones here
                            name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                            on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                                if(last_gritter) $.gritter.remove(last_gritter);
                                if(error_type == 1) {//file format error
                                    last_gritter = $.gritter.add({
                                        title: 'File is not an image!',
                                        text: 'Please choose a jpg|gif|png image!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                } else if(error_type == 2) {//file size rror
                                    last_gritter = $.gritter.add({
                                        title: 'File too big!',
                                        text: 'Image size should not exceed 100Kb!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                }
                                else {//other error
                                }
                            },
                            on_success : function() {
                                $.gritter.removeAll();
                            }
                        },
                        url: function(params) {
                            // ***UPDATE AVATAR HERE*** //
                            //for a working upload example you can replace the contents of this function with 
                            //examples/profile-avatar-update.js
            
                            var deferred = new $.Deferred
            
                            var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                            if(!value || value.length == 0) {
                                deferred.resolve();
                                return deferred.promise();
                            }
            
            
                            //dummy upload
                            setTimeout(function(){
                                if("FileReader" in window) {
                                    //for browsers that have a thumbnail of selected image
                                    var thumb = $('#avatar').next().find('img').data('thumb');
                                    if(thumb) $('#avatar').get(0).src = thumb;
                                }
                                
                                deferred.resolve({'status':'OK'});
            
                                if(last_gritter) $.gritter.remove(last_gritter);
                                last_gritter = $.gritter.add({
                                    title: 'Avatar Updated!',
                                    text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                    class_name: 'gritter-info gritter-center'
                                });
                                
                             } , parseInt(Math.random() * 800 + 800))
            
                            return deferred.promise();
                            
                            // ***END OF UPDATE AVATAR HERE*** //
                        },
                        
                        success: function(response, newValue) {
                        }
                    })
                }catch(e) {}
                
                /**
                //let's display edit mode by default?
                var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
                if(blank_image) {
                    $('#avatar').editable('show').on('hidden', function(e, reason) {
                        if(reason == 'onblur') {
                            $('#avatar').editable('show');
                            return;
                        }
                        $('#avatar').off('hidden');
                    })
                }
                */
            
                //another option is using modals
                $('#avatar2').on('click', function(){
                    var modal = 
                    '<div class="modal fade">\
                      <div class="modal-dialog">\
                       <div class="modal-content">\
                        <div class="modal-header">\
                            <button type="button" class="close" data-dismiss="modal">&times;</button>\
                            <h4 class="blue">Change Avatar</h4>\
                        </div>\
                        \
                        <form class="no-margin">\
                         <div class="modal-body">\
                            <div class="space-4"></div>\
                            <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                         </div>\
                        \
                         <div class="modal-footer center">\
                            <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                            <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                         </div>\
                        </form>\
                      </div>\
                     </div>\
                    </div>';
                    
                    
                    var modal = $(modal);
                    modal.modal("show").on("hidden", function(){
                        modal.remove();
                    });
            
                    var working = false;
            
                    var form = modal.find('form:eq(0)');
                    var file = form.find('input[type=file]').eq(0);
                    file.ace_file_input({
                        style:'well',
                        btn_choose:'Click to choose new avatar',
                        btn_change:null,
                        no_icon:'ace-icon fa fa-picture-o',
                        thumbnail:'small',
                        before_remove: function() {
                            //don't remove/reset files while being uploaded
                            return !working;
                        },
                        allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                        allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                    });
            
                    form.on('submit', function(){
                        if(!file.data('ace_input_files')) return false;
                        
                        file.ace_file_input('disable');
                        form.find('button').attr('disabled', 'disabled');
                        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
                        
                        var deferred = new $.Deferred;
                        working = true;
                        deferred.done(function() {
                            form.find('button').removeAttr('disabled');
                            form.find('input[type=file]').ace_file_input('enable');
                            form.find('.modal-body > :last-child').remove();
                            
                            modal.modal("hide");
            
                            var thumb = file.next().find('img').data('thumb');
                            if(thumb) $('#avatar2').get(0).src = thumb;
            
                            working = false;
                        });
                        
                        
                        setTimeout(function(){
                            deferred.resolve();
                        } , parseInt(Math.random() * 800 + 800));
            
                        return false;
                    });
                            
                });
            
                
            
                //////////////////////////////
                $('#profile-feed-1').ace_scroll({
                    height: '250px',
                    mouseWheelLock: true,
                    alwaysVisible : true
                });
            
                $('a[ data-original-title]').tooltip();
            
                $('.easy-pie-chart.percentage').each(function(){
                var barColor = $(this).data('color') || '#555';
                var trackColor = '#E2E2E2';
                var size = parseInt($(this).data('size')) || 72;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size/10),
                    animate:false,
                    size: size
                }).css('color', barColor);
                });
              
                ///////////////////////////////////////////
            
                //right & left position
                //show the user info on right or left depending on its position
                $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
                    var $this = $(this);
                    var $parent = $this.closest('.tab-pane');
            
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $this.offset();
                    var w2 = $this.width();
            
                    var place = 'left';
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
                    
                    $this.find('.popover').removeClass('right left').addClass(place);
                }).on('click', function(e) {
                    e.preventDefault();
                });
            
            
                ///////////////////////////////////////////
                $('#user-profile-3')
                .find('input[type=file]').ace_file_input({
                    style:'well',
                    btn_choose:'Change avatar',
                    btn_change:null,
                    no_icon:'ace-icon fa fa-picture-o',
                    thumbnail:'large',
                    droppable:true,
                    
                    allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                })
                .end().find('button[type=reset]').on(ace.click_event, function(){
                    $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                })
                .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
                    $(this).prev().focus();
                })
                $('.input-mask-phone').mask('(999) 999-9999');
            
                $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
            
            
                ////////////////////
                //change profile
                $('[data-toggle="buttons"] .btn').on('click', function(e){
                    var target = $(this).find('input[type=radio]');
                    var which = parseInt(target.val());
                    $('.user-profile').parent().addClass('hide');
                    $('#user-profile-'+which).parent().removeClass('hide');
                });
                
                
                
                /////////////////////////////////////
                $(document).one('ajaxloadstart.page', function(e) {
                    //in ajax mode, remove remaining elements before leaving page
                    try {
                        $('.editable').editable('destroy');
                    } catch(e) {}
                    $('[class*=select2]').remove();
                });
            });
        </script>
        @endsection