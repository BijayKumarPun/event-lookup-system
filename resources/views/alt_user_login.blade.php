@extends('master_layout.master_layout')
@extends('master_all_pages.alt_user_loginmaster')
@extends('master_link_images.linkmaster')

@section('alt_user_login')
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

<!-- alt user login -->
<div class="container">
  <div class="row">
    <div class="col-md-3">
    </div>

    <div class="col-md-6">
      <!-- error show -->
      <center>
      <div>
        @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <li class="alert alert-danger list-unstyled" style="color:red">{{$error}}</li>
        @endforeach
        @endif
      </div>
    </center>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="panel-title">
            <h4>User Account Login </h4>
          </div>
        </div>
        <div class="panel-body">
          <form  action='{{ URL::to("user/login") }}' method="post">
            {{csrf_field()}}
             <label for="username">Username</label>
             <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" name="uLUsername" id="uLUsername" placeholder="Username / Email" class="form-control" value="">
            </div>
            </br>
            <label for="password">Password</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" name="uLPassword" id="uLPassword" placeholder="Password" class="form-control" value="">
          </div>
        </div>

       <div class="panel-footer">
         <div>
           <div class="row">
             <div class="col-md-6">
             <div style="margin:4px 4px">Not have an Account? <label class="lblSign" ><a href="{{URL::to('userRegister')}}">Sign Up</a></label></div>
             </div>
             <div class="col-sm-6 text-right">
               <input type="submit" name="login" class="btn btn-primary" value="Login">
               <input type="button" name="ureset" value="Reset" class="btn btn-danger">
             </div>
           </div>
         </div>
         <input type="button" name="uloginByGoogle" id="uloginByGoogle" value="Login by Google" class="btn btn-danger " >
         <input type="button" name="uloginByFacebook" id="uloginByFacebook" value="Login by Facebook" class="btn btn-primary">
       </div>

       </form>
      </div>
    </div>

    <div class="col-md-3"></div>


 </div>
</div>
<!-- alt user login end -->
@endsection
