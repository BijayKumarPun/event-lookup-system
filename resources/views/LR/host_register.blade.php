@push('host_register')
<!-- hoster's register modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalHostSignUp" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
          </button>
          <h3>Create An Host Account</h3>
        </div>
      </div>
      <div class="modal-body">
        <form action="{{ URL::to('host/register') }}"  onsubmit="return validateHostForm()" id="hfrmData" name="hfrmData" method="post" >
          {{csrf_field()}}
          <label for="organizationName">Organization Name</label>
          <input type="text" name="horganizationName" id="horganizationName" placeholder="Organization Name" class="form-control"value="" required>
          <label for="email">Email</label>
          <input type="email" name="horganizationEmail" id="horganizationEmail" placeholder="Email" class="form-control"value="" required>
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
          <input type="text" name="hpassword"  id="hpassword" style="width:30%" placeholder="Password"  class="form-control custom-control-inline"value="" required>
          <span>&nbsp;</span>
          <label for="userConformPassword">Conform Password</label>
          <input type="text" name="hCPassword" id="hCPassword" style="width:30%" class="form-control custom-control-inline"  class="form-control" placeholder="Conform Password" required>
          </div>
          </br>
          <input type="submit" name="hregister" id="hregister" value="Register" class="btn btn-primary">
          <input type="button" name="hcancel" id="hcancel" value="Cancel"  data-dismiss="modal"class="btn btn-danger">
          </div>
        </form>
      <div class="modal-footer">
        Already have an Account? <label  class="lblSign"data-toggle="modal"  data-target="#modalHostSignIn" data-dismiss="modal">Sign in</label>
      </div>
      </div>
    </div>
  </div>
  @endpush
