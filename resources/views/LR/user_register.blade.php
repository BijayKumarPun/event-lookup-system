@push('user_register')
<!-- user's register modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalUserSignUp" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <div class= "modal-title">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
  </button>
  <h2>Create An User Account</h2>
  </div>
   <div class="modal-body">
     <!-- errors -->
     @if(count($errors)>0)
      @foreach($errors->all() as $error)
      <li class="list-unstyled  alert alert-danger" style="color:red">{{$error}}</li>
      @endforeach
     @endif
<form action="{{URL::to('user/register')}}" method="post">
  {{csrf_field()}}
<label for="name">Name</label>
<div class="form-inline">
<input type="text" name="ufirstName" id="ufirstName"  style="width:30%" placeholder="First Name"  class="form-control custom-control-inline"value="" required>
<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
<input type="text" name="umiddleName" id="umiddleName" style="width:30%"  placeholder="Middle Name"  class="form-control custom-control-inline"value="">
<span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
<input type="text" name="ulastName" id="ulastName" style="width:30%" placeholder="Last Name"  class="form-control custom-control-inline"value="" required>
</div></br>
<label for="email">Email</label>
<input type="email" name="uemail" id="uemail" placeholder="Email"  class="form-control" value="" required></br>
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
<input type="date" name="udob" id="udob" class="form-control custom-form-inline" value="">
</div>
</br>
<div class="form-inline ">
<label >Country: </label>
<select class="form-control custom-control-inline"  name="ucountry" id="ucountry" style="width:30%" id="country">
               <option>None</option>
               <option>Nepal</option>
               <option>India</option>
               <option>Bangaladesh</option>
               <option>China</option>
</select>
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<label>District: </label>
<select class="form-control custom-control-inline" name="udistrict" id="udistrict" style="width:30%" id="district">
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
<div class="modal-footer">
    <div>
      <div class="row">
        <div class="col-md-6 text-left">
          Already have an Account ? <label class="lblSign" data-toggle="modal" data-target="#modalUserSignIn" data-dismiss="modal">Sign in</label>
        
        </div>
        <div class="col-sm-6 text-right">
          <input type="submit" name="uregister" id="uregister" value="Register" class="btn btn-primary" >
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <input type="button" name="ucancel"  id="ucancel" data-dismiss="modal" value="Cancel" class="btn btn-danger">
        </div>
      </div>
    </div>
</div>
</form><!--form end -->
</div>
</div>
</div>
</div>
@endpush
