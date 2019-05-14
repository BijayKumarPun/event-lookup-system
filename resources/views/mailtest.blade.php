<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="http://openlayers.org/api/OpenLayers.js"></script>
    <!-- <script src="http://mapstraction.com/mxn/build/latest/mxn.js?(openlayers)" type="text/javascript"></script> -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="../source/mxn.js?(googlev3,[geocoder])" type="text/javascript"></script>
    <link rel="stylesheet" href="Content/337bootstrap.min.css">
    <link rel="stylesheet" href="Content/mycss.css">
    <title></title>
  </head>
  <body>
       <center>
      <h1 class="jumbotron">Send your Email</h1>
      <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            @if(Session::has('success'))
            <p class="alert alert-success" id='flashMessage'>{{ Session::get('success') }}
            <span style="color:red; margin-left:250px; cursor:pointer" id="flashClose"><b>X</b></span></p>
            @endif
            <form class="" action="{{URL::to('mail')}}" method="post">
              {{csrf_field()}}
              <label for="">From</label>
              <input type="email" name="email"  class="form-control" value="" required>
              <label for="">Subject</label>
              <input type="text" name="subject" class="form-control" value="" required>
              <label for="">Message</label>
               <textarea name="message" rows="8" cols="80" class="form-control" required></textarea>
               </br>
              <input type="submit" class="btn btn-success" name="emailSubmit" value="Send">
            </form>
          </div>
          <div class="col-sm-3"></div>
        </div>
      </div>
    </center>
    <script type="text/javascript" src="Scripts/331jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/337bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function() {

              $("#flashClose").click(function() {
                $("#flashMessage").hide('slow');
              });
    });

    </script>
  </body>
</html>
