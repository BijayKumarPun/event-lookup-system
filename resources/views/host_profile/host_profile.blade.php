@extends('master_all_pages.host_profilemaster')
@extends('master_layout.master_layout')
@extends('master_link_images.linkmaster')
@extends('LR.host_login')
@extends('LR.user_login')
@extends('LR.host_register')
@extends('LR.user_register')
@section('nav_left')
<link rel="stylesheet" href="Content/navbar-fixed-left.min.css">
@endsection
<!-- host section -->
@section('host')
<div  style="margin-top:60px;" id="hostDiv">


      <!-- host profile left nav -->
      <div  id="host_profile_left_nav">
         <!-- will be displayed using ajax -->
      </div>
      <!-- host profile left nav end  -->


    <div class="container-fluid" id="hostbody">

       <!-- host middle affix navabar -->
       <div id="host_middle_affix_nav">
          <!-- will be loaded using ajax -->
       </div>
       <!-- host middle affix navbar end  -->

        <!-- successfull event upload notification -->
        <div id="success">

        </div>
        <!-- create an event (ajax request) -->
        <div id="eventDiv">
        </div>
        <!-- create an event end  -->


       <!--event list -->
       <div style="background:#e6e6ff; padding:10px;color:black">

         <div id="host_all_events">
           <!-- //will be loaded using ajax -->
         </div>

       </div>
       <!--event list end-->

    </div>


</div>
@endsection
