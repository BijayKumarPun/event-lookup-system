@extends('master_all_pages.homemaster')
@extends('master_layout.master_layout')
@extends('master_link_images.linkmaster')
@extends('LR.host_login')
@extends('LR.user_login')
@extends('LR.host_register')
@extends('LR.user_register')
@section('home')

<!-- home navbar  -->
    <div  style="margin-top:4%; color:white;" id="homeDiv" > <!--all  #344156; div -->
    <div style="height:25px;background:#286090"></div>  <!-- nav color #ccccfff-->
    <center>
     <div>
    <div class="container-fluid" style="color:black;background:#286090" id="nearby_navbar">
    <div class="row">
      <div class="col-md-3 col-sm-4">
          <h4 align="center"> <i class="fa fa-calendar"><span>&nbsp;&nbsp;<label>Events</label></i></h4>
      </div>
      <div class="col-md-5 col-sm-4">
      <h4 align="center">  <i class="fa fa-hotel"><span>&nbsp;&nbsp;</span><label> Nearby Hotels/Restaurants</label></i></h4>
      </div>
      <div class="col-md-4 col-sm-4">
      <h4 align="center"><i class="fa fa-bell"><span>&nbsp;&nbsp;</span><label>Discounts</label></i></h4>
      </div>
    </div>
    </div>
 </div>
 </center>
<!-- home navbar end  -->

<!-- social link buttons -->
<div class="socialLeft">
  <li><a href="https://www.facebook.com/nepsoftnepal"><i class="fa fa-facebook"></i></a></li>
        <li><a ><i class="fa fa-twitter"></i></a></li>
        <li><a><i class="fa fa-google-plus"></i></a></li>
        <li><a><i class="fa fa-linkedin"></i></a></li>
        <li><a><i class="fa fa-pinterest"></i></a></li>
        <li><a><i class="fa fa-envelope"></i></a></li>

 </div>
<!-- social link buttons end  -->

<!-- first section -->
 <div class="container-fluid" style="margin:30px 30px 30px 50px">
   <div class="row">
     <!-- first slideslow  first column of first section -->
     <div class="col-md-5 col-sm-5 col-xs-12 ">
       <div class="panel panel-default" >
        <div class="carousel slide " id="myslide" data-ride="carousel">
           <!-- indicators dot nov -->
           <ol class="carousel-indicators">
             <li data-target="#myslide" data-slide-to="0" class="active"></li>
             <li data-target="#myslide" data-slide-to="1"></li>
           </ol>
           <!-- wrapper for slides -->
           <div class="carousel-inner testheight" role="listbox"  >
             <!-- item lists -->
             <div class="item active">
               <img src="images\mounteverest.jpg" class=" img-rounded imgheight" alt="mounteverest">
               <div class="carousel-caption">
                 <a href="#" style="color:white"><h3>Mount Everest </h3></a>
               </div>
             </div>
             <!-- item lists -->
             <div class="item">
               <img src="images\mounteverest.jpg"  class="img-responsive imgheight" alt="mounteverest">
               <div class="carousel-caption">
                  <a href="#" style="color:white"><h3>Concert in pokhara</h3></a>
               </div>
             </div>

           <!-- controls or next and prev buttons -->
          <a  class="left carousel-control "href="#myslide" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hiden="true"></span>
           <span class="sr-only">Previous</span>
          </a>
          <a  class="right carousel-control "href="#myslide" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hiden="true"></span>
           <span class="sr-only">Next</span>
          </a>
        </div>
       </div>
     </div>
   </div>
  <!--  first slideslow or first column of first section end -->

     <!-- Second section second column -->
     <div class="col-md-7 col-sm-7 col-xs-12" style="color:black" >
      <div class="row">
        <!-- Second column of first section -->
        <div class="col-md-6">
          <div class="panel panel-secondary">
            <div class="panel-heading"></div>
              <div class="panel-body">
              <label for="selectDistrict">Select a City</label>
              <select class=" form-control" id="searchDistrict" name="selectDistrict">
                <option>None</option>
                <option>Kathmandu</option>
                <option>Pokhara</option>
                <option>Syangja</option>
                <option>Tanahun</option>
                <option>Myagdi</option>
                <option>Baglung</option>
                <option>Biratnagar</option>
                <option>Bhairawa</option>
                <option>Butwal</option>
              </select>
            </br>
              <label for="selectCategories">Select Categories</label>
              <select class="form-control" name="selectCategories">
                <option>None</option>
                <option>Live Music</option>
                <option>Concerts</option>
                <option>Party</option>
                <option>Movies</option>
                <option>Adventure</option>
                <option>Sports</option>
                <option>Eductional</option>
                <option>Art & Literature</option>
                <option>Exhibition & Seminar</option>
                <option>Business & Social</option>
                <option>Others</option>
              </select>
            </br>
            <label for="selectDate">Select Date</label>
            <div class="form-inline">
              <input type="date" name="fromDate" value="From" class="form-control custom-form-inline" style="width:45%">
              <label class="custom-control-inline" style="margin-left:2px; margin-right:2px;"> to </label>
              <input type="date" name="toDate" value="To" class="form-control custom-control-inline" style="width:45%">
             </div>
              </br>
             <input type="button" name="find" value="Find" class="form-control btn btn-danger  ">
             <input type="button" id="find_by_location"  name="find_by_location" value="Findby Location" class="form-control btn btn-secondary">
         </div>
        </div>
         </div><!--Second column of first section end -->

           <!--Third column of first section -->
          <div class="col-md-6">
          <div class="panel panel-danger">
           <div class="panel-heading">
            Latest Updates
           </div>
           <div class="panel-body">

           </div>
          </div>
       </div><!--Third column of first section end -->
      </div ><!-- row -->
    </div><!-- second section ended -->
    </div><!-- first section row end -->
  </div><!-- first row container fluid end -->

  <div style="margin-left:20px;">
  <div id="currentLocation">
    <!-- location will be loaded --> <!-- ajax request -->
  </div>

  <div id="homeMap">
    <!-- map will be loaded --> <!-- ajax request -->
  </div>


<!-- second section of home  -->
<section class="container-fluid" style="margin:0px 30px 0px 30px;">
  <center>
<div  class="text-left alert alert-danger">
 <label for="">All Events /</label>
</div>
</center>
</section>
<!-- second section of home end  -->


<!-- Event Categories -->
<div style="margin:20px 40px 40px 40px">
<!-- Live Music -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Live Music</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div  id="live_music" class="categories">
  <!-- live music show using ajax  -->
</div>
<!-- Live Music end  -->

<!-- Concerts -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Concerts</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="concerts" >

</div>
<!-- Concerts end  -->


<!-- party -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Party</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="party">

</div>
<!-- party end -->


<!-- Movies -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Movies</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="movies">

</div>
<!-- Movies end -->


<!-- Adventure -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Adventure</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="adventure">

</div>
<!-- Adventure end -->


<!-- Sports -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Sports</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="sports">

</div>
<!-- Sports end -->


<!-- Eductional -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Eductional</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="eductional">

</div>
<!-- Eductional end -->


<!-- Art and Literature -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Art and Literature</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="art_and_literature">

</div>
<!-- Art and Literature end -->


<!-- Exhibition and Seminar -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Exhibition and Seminar</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="exhibition_and_seminar">

</div>
<!-- Exhibition and  Seminar end -->


<!-- Business and Social -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Business and Social</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="business_and_social">

</div>
<!-- Business and Social end -->


<!-- Others -->
<div style="height:3px; background:gray"></div>
<div class="row" style="margin-top:5px; ">
  <div class="col-md-6 text-left"><label><h3 style="margin-top:2px;">Others</h3></label></div>
  <div class="col-md-6 text-right"><label>View All</label></div>
</div>
<div class="categories" id="others">

</div>
<!--Others end -->
</div>
</div>
<!-- Event Categories end  -->

</div><!-- home div end -->
@endsection
