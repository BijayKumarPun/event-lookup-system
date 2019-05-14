<!-- map -->
<div class="container-fluid" style="margin:40px;color:black">
<center>
<div class="row">
  <div id="mapdiv" alt="Please open your location"></div>
</div>
</br>
<div class="form-inline">
  <div class="input-group">
  <input type="text" name="address"  id="address"  placeholder="Where you want to go ?"  class="form-control custom-control-inline"value="" required>
  <div class="input-group-btn">
    <button onclick="user_submit(); return false;" class="btn btn-primary" name="geocode" value="Go"><i class="glyphicon glyphicon-send"></i></button>
  </div>
  </div>
&nbsp;&nbsp;&nbsp;&nbsp;
<button name="currentlocation" value="Get My Current Location" onclick="getLocation()" class=" form-control btn btn-primary"><i class="fa fa-map-marker" aria-hidden="true">&nbsp;&nbsp;Get My Current Location</i></button>
&nbsp;&nbsp;
 <button name=""onclick='changetohybrid();'  class="form-control custom-control-inline btn btn-warning" value="Change To Hybrid"><i style="color:black"  class="fa fa-globe"></i>&nbsp;&nbsp;Change To Hybrid</button>
 &nbsp;&nbsp;
 <p id="position" style="margin:0px;" class="form-control custom-control-inline btn btn-success "></p>
  &nbsp;&nbsp;
 <p id="place" style="margin:0px;color:green;border:1px solid green" class="form-control custom-control-inline btn btn-outline-success">...</p>
 <p id="latitude" hidden></p>
 <p id="longitude" hidden></p>
</div>
</center>
</div>
<!-- map end -->
