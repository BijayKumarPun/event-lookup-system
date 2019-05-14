<div>
  <nav class="navbar navbar-inverse navbar-fixed-left" id="host_left_navbar_style" style="background:#344156;border:none;"> <!-- background:#344156;-->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#leftnavbar" aria-expanded="false" aria-controls="leftnavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">eLookup</a> -->
      </div>
      <div id="leftnavbar" class="navbar-collapse collapse">
        @if($host->all())
         <ul class="nav navbar-nav" >
          <center>
          <li><a href="#"><img src="images/nepsoft.png" alt="Profile Picture" style="height:200px; max-width:200px; overflow:hidden;" class="img-rounded center-block img-responsive"></a></li>
          <li><h3 id="hostDisplayName"><a href="#" style="color:white;">{{ $host->horganization_name}}</a></h3></li></center>
          <li><a style="margin-left:35px;" href="#">Home</a></li>
          <li><a style="margin-left:35px;" href="#">Events</a></li>
          <li><a style="margin-left:35px;" href="#">Reviews</a></li>
          <li><a style="margin-left:35px;" href="#">About</a></li>
          <li><a style="margin-left:35px;" href="#">Setting</a></li>
          <li><a style="margin-left:35px;" href="#"><button class="btn btn-primary" id="btnHostPromote">Promote</button></a></li>
          <!-- <li class="dropdown" style="color:black">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
           </li> -->
        </ul>
        @endif
      </div>
    </div>
  </nav>
</div>
