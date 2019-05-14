
@push('master_nav_section')
 <!-- nav section  -->
<nav  class="navbar navbar-fixed-top"  style="background:#286090">
<div class="container-fluid" id="master-navbar" >
<div class="row" >
  <div class="col-md-3 col-sm-4">
      <center>
       <button type="button" class="navbar-toggle" data-toggle="collapse" id="master_navbar" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">

         <span class="icon-bar" style="background:white"></span>
         <span class="icon-bar" style="background:white"></span>
         <span class="icon-bar" style="background:white"></span>
       </button>
      </center>
     <h1 style="margin-top:10px;color:white;"  data-toggle="tooltip" data-placement="bottom" title="eLookup system">
        <i class="fa fa-bars" style="font-size:30px;cursor:pointer;" data-toggle="modal" data-target="#nav_left_modal"></i>
        <span>&nbsp;&nbsp;&nbsp;<span>
        <a style="cursor:pointer; color:white" href="{{URL::to('/')}}">eLookup</a>
        <!-- <a style="cursor:pointer; color:white" href="{{URL::to('/')}}">
          <img src="images/lookupPic.png" class=" img-circle" style="height:100px;" alt="">
        </a> -->
      </h1>
      </center>
   </div>

  <div class="collapse navbar-collapse" id="mynavbar">
  <div class="col-md-5 col-sm-3 ">
    <center>
    <form>
    <div class="input-group" style="margin-top:10px;width:70%">
    <input type="text" class="form-control" placeholder="search" style="border:1px solid red " name="search">
    <div class="input-group-btn">
      <button class="btn btn-danger form-control" type="submit" style="width:150%;"><i class="glyphicon glyphicon-search"></i></button>
    </div>
    </div>
    </form>
    </center>
    </div>
  <div class="col-md-4  col-sm-5 col-xs-12" >
    <center>
    <ul class="nav navbar-nav navbar-right " >

      @if(session('hemail')) <!-- if host exist -->
      <li class="bg_change"><a style="color:#114427"><i  id="online" class="fa fa-circle" style="color:red"></i>&nbsp;<label>Online</label></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle"  id="nearby" data-toggle="dropdown" style="cursor:pointer;color:black; background:" role="button" aria-haspopup="true" aria-expanded="false">Nearby<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Events</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Hotels/Restaurants</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Discounts</a></li>
        </ul>
      </li>
      <li><a id="fabell" class="bg_change"><span><i class="fa fa-bell-o"  style="font-size:25px;color:black" ></i><span class="badge" style="background:red">0</span></span></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" id="fauser" data-toggle="dropdown" style="font-size:25px;color:black"role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="" href='{{URL::to("hostProfile")}}'>Profile</a></li>
            <li role="separator" class="divider"></li>
          <li><a href="#">Setting</a></li>
          <li role="separator" class="divider"></li>
          <li><a href='{{ URL::to("signout") }}'>Sign Out</a></li>
        </ul>
      </li>

     @elseif(session('uemail')) <!-- if user exist -->
     <li class="bg_change"><a style="color:#114427"><i  id="online" class="fa fa-circle" style="color:green"></i>&nbsp;<label>Online</label></a></li>
     <li class="dropdown">
       <a href="#" class="dropdown-toggle"  id="nearby" data-toggle="dropdown" style="cursor:pointer;color:black; background:" role="button" aria-haspopup="true" aria-expanded="false">Nearby<span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="#">Events</a></li>
         <li role="separator" class="divider"></li>
         <li><a href="#">Hotels/Restaurants</a></li>
         <li role="separator" class="divider"></li>
         <li><a href="#">Discounts</a></li>
       </ul>
     </li>
     <li><a id="fabell" class="bg_change"><span><i class="fa fa-bell-o"  style="font-size:25px;color:black" ></i><span class="badge" style="background:red">0</span></span></a></li>
     <li class="dropdown">
       <a href="#" class="dropdown-toggle" id="fauser" data-toggle="dropdown" style="font-size:25px;color:black"role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a class="" href='{{URL::to("userProfile")}}'>Profile</a></li>
           <li role="separator" class="divider"></li>
         <li><a href="#">Setting</a></li>
         <li role="separator" class="divider"></li>
         <li><a href='{{ URL::to("signout") }}'>Sign Out</a></li>
       </ul>
     </li>

    @else   <!-- if no user/host exist -->
    <li class="bg_change"><a href="#"  name="signin"  id="signin" style="cursor:pointer;color:red;" data-toggle="modal" data-target="#modalUserSignIn">SIGN IN</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle"  id="nearby" data-toggle="dropdown" style="cursor:pointer;color:black; background:" role="button" aria-haspopup="true" aria-expanded="false">Nearby<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Events</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Hotels/Restaurants</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Discounts</a></li>
      </ul>
    </li>
    <li><a id="fabell" class="bg_change"><span><i class="fa fa-bell-o"  style="font-size:25px;color:black" ></i><span class="badge" style="background:red">0</span></span></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" id="fauser" data-toggle="dropdown" style="font-size:25px;color:black"role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a class="btn disabled" href="" >Profile</a></li>
          <li role="separator" class="divider"></li>
        <li><a  class="btn disabled" href="">Setting</a></li>
        <li role="separator" class="divider"></li>
        <li><a  class="btn disabled" href="">Sign Out</a></li>
      </ul>
    </li>
    @endif
    </ul>

  </center>
</div>
</div>
</div>
</div>
</nav>

<!-- nav section left side var  -->
<!-- Modal -->
<div class="modal left fade" id="nav_left_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#286090">
        <h3 style="margin:0px;color:white;"  data-toggle="tooltip" data-placement="bottom" title="eLookup System">
           <i class="fa fa-bars" style="font-size:20px; cursor:pointer;" data-dismiss="modal"></i>
           <span>&nbsp;&nbsp;&nbsp;<span>
           eLookup
         </h3>
      </div>
      <div class="modal-body" id="leftbar" style="background:#e6e6ff">
           <li> <h5><span class="glyphicon glyphicon-home"></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Home<h5></li>
           <li><h5><span class="glyphicon glyphicon-fire" style="color:red;"></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Trending</h5></li>
           <li><h5><span class="fa fa-history"></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>History</h5></li>
       <hr/>
       <h5>Search By</h5>
       <li>Current Location</li>
       <li>Your Interest</li>
      <hr/>
      <h5>Categories</h5>
      <a href="#live_music"><li>Live Music </li></a>
      <a href="#concerts"><li>Concerts</li></a>
      <a href="#party"><li>Party</li></a>
      <a href="#movies"><li>Movies</li></a>
      <a href="#adventure"><li>Adventure</li></a>
      <a href="#sports"><li>Sports</li></a>
      <a href="#eductional"><li>Eductional</li></a>
      <a href="#art_and_literature"><li>Art & Literature</li></a>
      <a href="#exhibition_and_seminar"><li>Exhibition & Seminar</li></a>
      <a href="#business"><li>Business & Social</li></a>
      <a href="#others"><li>Others</li></a>
      <hr/>
      @if(session('hemail'))
      <h5 ><a  style="color:red; cursor:pointer;"href='{{URL::to("signout")}}'>SIGN OUT</a></h5>
      @elseif(session('uemail'))
      <h5 ><a style="color:red; cursor:pointer;" href='{{URL::to("signout")}}'>SIGN OUT</a></h5>
      @else
      <h5 style="color:red; cursor:pointer;"  data-toggle="modal" data-target="#modalUserSignIn" data-dismiss="modal">SIGN IN</h5>
      @endif
      <hr/>
      <li><span class="glyphicon glyphicon-cog" ></span><span>&nbsp;&nbsp;&nbsp;</span>Setting</li>
      <li><span class="glyphicon glyphicon-question-sign" ></span><span>&nbsp;&nbsp;&nbsp;</span>Report history</li>
      <li><span class="glyphicon glyphicon-exclamation-sign" ></span><span>&nbsp;&nbsp;&nbsp;</span>Help</li>
      <li><span class="glyphicon glyphicon-comment"></span><span>&nbsp;&nbsp;&nbsp;</span>Send feedback</li>
      <hr/>
      <p>&copy 2018 eLookup, NepSoft</p>
      </div>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->
@endpush

@push('footer_master')

<!-- master footer -->
<div class="container-fluid" style="background:#192335; color:white">
  <!-- footer middle section -->
  <div class="row">
    <div class="col-md-4 text-center">  </div>
    <div class="col-md-4 text-center">
      <h4>Sign up for free<span>&nbsp;&nbsp;</span><button type="button" name="button" class="btn btn-danger">Sign Up !</button></h4>
    </div>
    <div class="col-md-4">
      <h4>Felling bored ?<span>&nbsp;&nbsp;</span><button type="button" name="button" class="btn btn-success"><a href="{{URL::to('game')}}" style="color:white">Play Game<a></button></h4>
    </div>
  </div>
  <!-- footer middle section end  -->
</div>

<!-- master footer end -->


@endpush
