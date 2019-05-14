@push('host_login')
<!--sign in modal of host -->
<div class="modal"  tabindex="-1" role="dialog" id="modalHostSignIn" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
          <div class="container-fluid">
            <h3>Login</h3>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#">Host Login</a></li>
              <li><a href="#" data-toggle = "modal" data-target = "#modalUserSignIn" data-dismiss="modal" >User Login</a></li>
            </ul>
          </div>
      </div>
      <div class="modal-body">
       <form  id="hfrmLogin" action=" {{ URL::to('host/login')}}" method="post">
         {{csrf_field()}}
         <label for="username">Username</label>
         <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input type="text" name="hLUsername" id="hLUsername" placeholder="Username" class="form-control" value="">
       </div>
        </br>
         <label for="password">Password</label>
         <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="password" name="hLPassword" id="hLPassword" placeholder="Password" class="form-control" value="">
       </div>
      </div>
     <div class="modal-footer">
      <div>
        <div class="row">
          <div class="col-md-6 text-left">
            Not have an Account? <label class="lblSign" data-toggle="modal" data-target="#modalHostSignUp" data-dismiss="modal" >Sign Up</label>
          </div>
          <div class="col-sm-6 text-right">
            <input type="submit" name="hlogin" id="hlogin" class="btn btn-primary" value="Login">
            <input type="button" name="hLCancel"  id="hLCancel" data-dismiss="modal" class="btn btn-danger" value="Cancel">
          </div>
        </div>
      </div>
    </div>
    </form>
    </div>
  </div>
 </div>
</div>
</div>
<!-- sign in modalof host end -->
@endpush
