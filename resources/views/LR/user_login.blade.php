@push('user_login')
<!--sign in modal of user -->
<div class="modal" tabindex="-1" role="dialog" id="modalUserSignIn" data-backdrop="static">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
          <div class= "modal-title">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
          <div class="container-fluid">
            <h3>Login</h3>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#">User Login</a></li>
              <li><a href="#" data-toggle = "modal" data-target = "#modalHostSignIn" data-dismiss="modal">Host Login</a></li>
            </ul>
          </div>
        </div>

      <div class="modal-body">
       <form action='{{ URL::to("user/login") }}' method="post">
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
    <div class="modal-footer">
      <div>
        <div class="row">
          <div class="col-md-6 text-left">
            Not have an Account? <label class="lblSign" data-toggle="modal" data-target="#modalUserSignUp" data-dismiss="modal" >Sign up</label>
          </div>
          <div class="col-sm-6 text-right">
            <input type="submit" name="ulogin" id="ulogin" class="btn btn-primary" value="Login">
            <input type="button" name="uLcancle" id="Lucancel" value="Cancel" class="btn btn-danger" data-dismiss = "modal">
          </div>
        </div>
      </div>
      <div class="text-left">
      <button type="button" name="uloginByGoogle" id="uloginByGoogle"  class="btn btn-danger " ><i class="fa fa-google"></i>&nbsp;&nbsp;&nbsp;Login by Google</button>
      <button type="button" name="uloginByFacebook" id="uloginByFacebook" class="btn btn-primary"><i class="fa fa-facebook-f"></i>&nbsp;&nbsp;&nbsp;Login by Facebook</button>
    </div>
    </div>
     </form>
  </div>
 </div>
</div>
</div>
<!-- sign in modal of user end -->
@endpush
