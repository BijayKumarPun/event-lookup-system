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
         <h1 class="jumbotron">Image Upload</h1>
         <div class="col-md-4"> </div>
         <div class="col-md-4">
           @if(count($errors)>0)
            <div class="alert alert-danger">
              <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach

              </ul>

            </div>
           @endif
          @if($message = Session::get('success'))
          <div class="alert alert-success">
            <ul class="list-unstyled">
              <li>{{ $message }}</li>
            </ul>

          </div>
          <img src="/images/{{ Session::get('path') }}" width="250px;" alt="">
          @endif
            <form  action="{{ URL::to('imageupload') }}" method="post" enctype="multipart/form-data" id="picUpload">
              {{csrf_field()}}
              <label for="">Image Upload</label>
              <input type="file" name="image" id="image" value="" class="btn btn-warning">
            <!-- </br>
              <input type="text" name="" id="name" class="form-control" placeholder="Enter your name" value=""> -->
               </br>
              <input type="submit" name="imgsubmit"  id="imgsubmit" value="Upload" class="btn btn-primary">
            </form>
            <div class="imageview">

            </div>
         </div>
         <div class="col-md-4"> </div>
        </center>
    <script type="text/javascript" src="Scripts/331jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/337bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function(){
          $.ajaxSetup({
             headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
              });


          $("#picUpload").on("submit",function(e){
             e.preventDefault();
             $.ajax({
              url: "{{URL::to('imageupload')}}",
              type:"POST",
              contentType: false,
              cache: false,
              processData:false,
              data:new FormData($("#picUpload")[0]),

         success: function(data) {
             console.log(data);
             alert(data);
         },
         error: function(data) {
              console.log(data);
              alert(" Ajax connection error");

         }
       });
     });




     //testing
     $("#Register").on("click",function(e){
        e.preventDefault();
         var inputdate= $("#date").val();

        $.ajax({
         url: "{{URL::to('userRegister')}}",
         type:"POST",
         data:{date:inputdate},

    success: function(data) {
        console.log(data);
        alert(data);
    },
    error: function(data) {
         console.log(data);
         alert(" Ajax connection error");

    }
  });
});

  });
    </script>
  </body>
</html>
