@extends('master_layout.master_layout')
@extends('master_all_pages.alt_host_loginmaster')
@extends('master_link_images.linkmaster')

@section('alt_host_login')

<!-- alt_register_nav -->
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
<!--alt_host_nav end -->
</br>

<!-- alt_host_register body -->
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
         <!-- host account Verification Notification  -->
           @if(Session::has('hostverify'))
           <li class="alert alert-danger list-unstyled flashMessage">{{ Session::get('hostverify') }}
           <span style="color:red; margin-left:200px; cursor:pointer" class="flashClose"><b>X</b></span></li>
           @endif
           @if(Session::has('hostverified'))
           <li class="alert alert-success list-unstyled flashMessage">{{ Session::get('hostverified') }}
           <span style="color:red; margin-left:100px; cursor:pointer" class="flashClose"><b>X</b></span></li>
           @endif

         <!--alt_host_login -->
       </center>
       <div class="panel panel-primary">
         <div class="panel-heading">
           <div class="panel-title">
             <h4>Host Account Login </h4>
           </div>
         </div>
         <div class="panel-body">
           <form  id="hfrmLogin" action='{{URL::to("host/login")}}' method="post">
             {{csrf_field()}}
             <label for="username">Username</label>
             <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <input type="email" name="hLUsername" id="hLUsername" placeholder="Username" class="form-control" value="">
           </div>
            </br>
             <label for="password">Password</label>
             <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" name="hLPassword" id="hLPassword" placeholder="Password" class="form-control" value="">
           </div>
         </div>

        <div class="panel-footer">
          <div>
            <div class="row">
              <div class="col-md-6">
              <div style="margin:4px 4px">Not have an Account? <label class="lblSign" ><a href="{{URL::to('hostRegister')}}">Sign Up</a></label></div>
              </div>
              <div class="col-sm-6 text-right">
                <input type="submit" name="hlogin" id="hlogin" class="btn btn-primary" value="Login">
                <input type="button" name="hreset" data-dismiss="modal" class="btn btn-danger" value="Reset">
              </div>
            </div>
          </div>
        </div>

        </form>
       </div>
     </div>

     <div class="col-md-3"></div>


  </div>
</div>
<!--alt_host_login end -->
@endsection
