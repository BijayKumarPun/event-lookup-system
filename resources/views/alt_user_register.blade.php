@extends('master_layout.master_layout')
@extends('master_all_pages.alt_user_registermaster')
@extends('master_link_images.linkmaster')

@section('alt_user_register')
<!-- alt_nav -->
<div class="container-fluid" style="background:#286090">
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
<!--alt_nav end -->
</br>

<!-- alt user register -->
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
    <div>
      <center>
      </br>
        @if(count($errors)>0)
         @foreach($errors->all() as $error)
         <li class="list-unstyled  alert alert-danger" style="color:red">{{$error}}</li>
         @endforeach
        @endif
      </center>
    </div>
  </div>

    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="panel-title">
            <h4>User Account Register </h4>
          </div>
        </div>
        <div class="panel-body">
          <form action="{{ URL::to('user/register') }}" method="post">
          {{csrf_field()}}
          <label for="name">Name</label>
          <div class="form-inline">
          <input type="text" name="ufirstName" id="ufirstName"  style="width:30%" placeholder="First Name"  class="form-control custom-control-inline"value="" required>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <input type="text" name="umiddleName" id="umiddleName" style="width:30%"  placeholder="Middle Name"  class="form-control custom-control-inline"value="">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <input type="text" name="ulastName" id="ulastName" style="width:30%" placeholder="Last Name"  class="form-control custom-control-inline"value="" required>
          </div>
          <label for="email">Email</label>
          <input type="email" name="uemail" id="uemail" placeholder="Email should be unique (Fresh Email)"  class="form-control" value="" required>
          <label for="phonenumber">Phone Nubmer</label>
          <input type="text" name="uphoneNumber" id="uphoneNumber" placeholder="Phone Number"  class="form-control" value="" required>
        </br>
          <div class="form-inline">
          <label>Gender: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="form-group">
             <input name="ugender" type="radio" value="Male" id="urdoMale">
             <label for="radio120">Male</label>
          </div>
          <div class="form-group">
              <input name="ugender" value="Female" type="radio" id="urdoFemale">
              <label for="radio121">Female</label>
          </div>
          <div class="form-group">
              <input name="ugender" value="Other" type="radio" checked="checked" id="urodoOther">
              <label for="radio122">Other</label>
          </div>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <label for="dob">DOB: </label>
          <input type="date" name="udob" id="udob" class="form-control custom-form-inline" value="" required>
          </div>
          </br>
          <div class="form-inline ">
          <label >Country: </label>
          <select class="form-control custom-control-inline"  name="ucountry" id="ucountry" style="width:30%" id="country" required>
                         <option>None</option>
                         <option>Nepal</option>
                         <option>India</option>
                         <option>Bangaladesh</option>
                         <option>China</option>
          </select>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <label>District: </label>
          <select class="form-control custom-control-inline" name="udistrict" id="udistrict" style="width:30%" id="district" required>
                           <option>None</option>
                           <option>Syangja</option>
                           <option>Kaski</option>
                           <option>Tanahun</option>
          </select>
          </div>
          <label for="uadress">Address</label>
          <input type="text" name="uaddress" id="uaddress" class="form-control" value="" placeholder="address">
           </br>
          <div class="form-inline">
          <label for="userPassword">Password</label>
          <input type="password" name="upassword" id="upassword" style="width:30%" placeholder="Password"  class="form-control custom-control-inline"value="" required>
          <span>&nbsp;</span>
          <label for="userConformPassword">Conform Password</label>
          <input type="password" name="uCPassword" id="uCPassword" style="width:30%" class="form-control custom-control-inline"  class="form-control" placeholder="Conform Password" required>
          </div>

        </div>
        <div class="panel-footer text-right">
          <div>
            <div class="row">
              <div class="col-md-6 text-left">
              <div style="margin:4px 4px">Already have an account ?<span>&nbsp;</span><label class="lblSign" ><a href="{{URL::to('userLogin')}}">Sign In</a></label></div>
              </div>
              <div class="col-sm-6 text-right">
                <input type="submit" name="uregister" id="uregister" value="Register" class="btn btn-primary">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <input type="button" name="ureset"  id="ucancel" data-dismiss="modal" value="Reset" class="btn btn-danger">
              </div>
            </div>
          </div>
        </div>
       </form><!--form end -->
      </div>
    </div>

    <div class="col-md-1">
    </div>

   </div>
  </div>
<!-- alt user register end -->
@endsection
