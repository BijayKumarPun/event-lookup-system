@extends('master_layout.master_layout')
@extends('master_all_pages.alt_host_registermaster')
@extends('master_link_images.linkmaster')

@section('alt_host_register')
<!-- alt_register_nav -->
<div class="container-fluid" style="background:#286090;">
  <div class="row">
    <div class="col-md-4">
      <a href="{{URL::to('/')}}"><h2  class="glyphicon glyphicon-home" style="margin:12px 12px;color:red"></h2></a>
    </div>
    <div class="col-md-4">
      <center>
        <h1 style="color:white;margin:12px 12px">LOOKUP</h1>
      </center>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<!--alt_host_nav end -->
</br>

<!-- alt_host_register body -->
 <div class="container-fluid" style="margin:5px;">
   <div class="row">
     <div class="col-md-5">
       <div style="color:white">
        <center> <h3>Why LOOKUP ?</h3></center>
       </br>
         <div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/CNcLyvotj5s?autoplay=0" allowfullscreen></iframe>
       </div>
     </div>
   </div>

     <div class="col-md-6">
       <div class="panel panel-primary">
         <div class="panel-heading">
           <div class="panel-title">
             <h4>Host Account Register </h4>
           </div>
         </div>
         <div class="panel-body">
           <form action="{{ URL::to('host/register') }}"  onsubmit="return validateHostForm()" id="hfrmData" name="hfrmData" method="post" >
             {{csrf_field()}}
             <label for="organizationName">Organization Name</label>
             <input type="text" name="horganizationName" id="horganizationName" placeholder="Organization Name" class="form-control"value="" required>
             <label for="email">Email</label>
             <input type="email" name="horganizationEmail" id="horganizationEmail" placeholder="Email should be unique (Fresh Email)" class="form-control"value="" required>
             <label for="phoenNumber">Phone Number</label>
             <input type="text" name="hphoneNumber" placeholder="Phone Number" id="hphoneNumber" class="form-control" value="" required>
             <label for="oType">Organization Type</label>
             <select class="form-control" name="horganizationType" id="horganizatioType" required>
               <option>None</option>
               <option >A</option>
               <option="">B</option>
               <option="">C</option>
             </select>
             </br>
             <div class="form-inline ">
             <label >Country: </label>
             <select class="form-control custom-control-inline"  name="hcountry" style="width:30%" id="hcountry" required>
                            <option>None</option>
                            <option>Nepal</option>
                            <option>India</option>
                            <option>Bangaladesh</option>
                            <option>China</option>
             </select>
             <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

             <label>District: </label>
             <select class="form-control custom-control-inline" name="hdistrict" style="width:30%" id="hdistrict" required>
                              <option>None</option>
                              <option>Syangja</option>
                              <option>Kaski</option>
                              <option>Tanahun</option>
             </select>
             </div>
             <label for="address">Address</label>
             <input type="text" name="haddress" placeholder="Address" id="haddress" class="form-control" value="" required></br>
             <div class="form-inline">
             <label for="userPassword">Password</label>
             <input type="password" name="hpassword"  id="hpassword" style="width:30%" placeholder="Password"  class="form-control custom-control-inline"value="" required>
             <span>&nbsp;</span>
             <label for="userConformPassword">Conform Password</label>
             <input type="password" name="hCPassword" style="width:30%" class="form-control custom-control-inline"  class="form-control" placeholder="Conform Password" required>
             </div>
             </div>
           <div class="panel-footer text-right">
             <div>
               <div class="row">
                 <div class="col-md-6 text-left">
                 <div style="margin:4px 4px">Already have an account ?<span>&nbsp;</span><label class="lblSign" ><a href="{{URL::to('hostLogin')}}">Sign In</a></label></div>
                 </div>
                 <div class="col-sm-6 text-right">
                   <input type="submit" name="hregister" id="hregister" value="Register" class="btn btn-primary">
                   <input type="button" name="hreset" id="hreset" value="Reset"  data-dismiss="modal"class="btn btn-danger">
                 </div>
               </div>
             </div>

           </div>
          </form>
       </div>
     </div>

     <div class="col-md-1"></div>
   </div>

   </div>
 </div>
<!-- alt_register_nav end -->
@endsection
