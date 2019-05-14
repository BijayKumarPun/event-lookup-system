
<!-- event panel -->
@if($host->all())
<div class="panel panel-primary" enctype="multipart/form-data" style="background:#fffa" id="event_panel">
<div class="panel-heading">
  <div class="panel-title">
    <h3 style="margin:0px;"><i class="fa fa-calendar"></i><span>&nbsp;&nbsp;</span>Create An Event</h3>
  </div>
</div>
<div class="panel-body">
    <label for="event_title">Event Title</label>
            <input type="hidden" name="hid" value="" >
            <input type="text" name="event-title" id="event_title" value="" placeholder="Title of the Event" class=" form-control"  >
            <br/>
            <div class="form-inline ">
                      <label >Country: </label>
                      <select class="form-control custom-control-inline"  name="ecountry"  id="ecountry" >
                                     <option>None</option>
                                     <option>Nepal</option>
                                     <option>India</option>
                                     <option>Bangaladesh</option>
                                     <option>China</option>
                      </select>
                      <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <label>District: </label>
                        <select class="form-control custom-control-inline" name="edistrict"  id="edistrict" >
                                         <option>None</option>
                                         <option>Syangja</option>
                                         <option>Kaski</option>
                                         <option>Tanahun</option>
                        </select>
                         <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <label for="event_steet">Street: </label>
                        <input type="text" name="estreet" id="estreet" value="" placeholder="Street" class="form-control" >
                </div>


            </br>
            <div class="form-inline">
              <label for="selectCategories">Select Categories:</label>
              <select class="form-control custom-form-inline" id="ecategory"  name="selectCategories"  >
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
              <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <label for="event_price"> Ticket Price:</label>
            <input type="number" name="eticket_price" id="eticket_price" value="" placeholder="Ticket Price" class="form-control custom-form-inline"  >
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <label for="">Available Tickets:</label>
            <input type="number" name="eavailable_tickets" id="eavailable_tickets"  placeholder="Available Tickets" class="form-control custom-form-inline" >
            </div>
             </br>
            <label for="event_artist">Artists </label>
            <input type="text" name="eartists" id="eartists" placeholder="Name of all Artists" class="form-control" >
            <label for="event_description">Description</label>
            <textarea type="textarea" name="edescription" id="edescription" placeholder="Enter short description" class="form-control" ></textarea>
            <label for="event_url">Link URL </label>
            <input type="text" name="elink_url" id="elink_url" placeholder="Place your link here" class="form-control" >
            <label>Venue</label>
            <input type="text" name="evenue" id="evenue" class="form-control" placeholder="Venue" >
            </br>
             <div class="form-inline">
                   <label>Start Date:</label>
                   <input type="date" name="estart_date" id="estart_date" value="" class="form-control custom-form-inline" >
                   <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                   <label>End Date:</label>
                   <input type="date" name="eend_date" id="eend_date" value="" class="form-control custom-form-inline" >
                   <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                   <label>Start Time:</label>
                   <input type="time" name="estart_time" id="estart_time" value="" class="form-control custom-form-inline" >
            </div>
            </br>

            <!-- image upload -->
            <label for="">Your Event Picture</label>
            <div>
                <div class="col-sm-5">
                      <form action="{{URL::to('event/ePhotoUpload')}}" method="post" id="eImage">
                        {{csrf_field()}}
                      <div class="input-group" style="width:70%">
                      <input type="file" name="ephoto" id="ephoto" class="btn btn-warning" value="" required>
                      <div class="input-group-btn">
                          <input type="submit" name="" class="btn btn-success" value="Upload">
                      </div>
                      </div>
                    </form>
                 </div>

                <div class="col-sm-4">
                    <input type="text" name="event_picture_name" id="eUploadedImage" placeholder="Please upload your event photo" class="form-control" value="" disabled>
                </div>
                <div class="col-sm-3" id="eINotification">
                </div>
             </div>
          </br></br></br>


           <div class="alert alert-success" >
             <i class="fa fa-map-marker">&nbsp;</i>Select your location.
           </div>

            <!-- map -->
            <div style="margin:40px;color:black">
            <center>
            <div class="row">
              <div id="mapdiv" alt="Please open your location"></div>
            </div>
            </br>
            <div class="form-inline">
              <div class="input-group">
              <input type="text" name="address"  id="address"  placeholder="Where you want to go ?"  class="form-control custom-control-inline" style="border:1px solid blue">
              <div class="input-group-btn">
                <button onclick="user_submit(); return false;" class="btn btn-primary" name="geocode" value="Go"><i class="glyphicon glyphicon-send"></i></button>
              </div>
              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <button  type="button" name="currentlocation" id="currentlocation" value="Get My Current Location" onclick="getLocation()" class=" form-control btn btn-primary"><i class="fa fa-map-marker" aria-hidden="true">&nbsp;&nbsp;Get My Current Location</i></button>
              &nbsp;&nbsp;
             <p id="position" style="margin:0px;" class="form-control custom-control-inline btn btn-success "></p>
              &nbsp;&nbsp;
             <p id="place" style="margin:0px;color:green;border:1px solid green" class="form-control custom-control-inline btn btn-outline-success">...</p>
             <p id="latitude"  hidden></p>
             <p id="longitude" hidden></p>

             <p id="ehuid" hidden>{{$host->huid}}</p>
            </div>
            </center>
            </div>
            <!-- map end -->

            <div class=" text-right">
              <input type="submit" name="eregister" id="eregister" class="btn btn-primary" value="Create an Event">
              <input type="button" name="ecancel" id="ecancel" class="btn btn-danger " value="Cancel">
              <input type="button" name="ereset" id="ereset" value="Reset" class="btn btn-warning">
            </div>

          
</div>
<div class="panel-footer text-right" style="background:#fffa">
  <div class="row">
    <div class="col-md-6 text-left">
      <label for="" style="color:red">Your all information should be correct !!</label>
    </div>
      <div class="col-md-6 text-right">
        <label for=""><i>Event hosted by : <a href="#">{{$host->hemail}}</i></a></label>
      </div>
     </div>
    </div>

</div>
</div>
@endif
<!-- event panel end -->
