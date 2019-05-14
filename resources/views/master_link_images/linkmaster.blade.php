<!-- push css,slack and meta -->
@push('meta_style')
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
<style >
#fauser:hover {
     background:#286090;
 }
 #fabell:hover {
     background:#286090;
     cursor:pointer;
 }
 #nearby:hover{
   background:#286090;
   cursor:pointer;
 }
 #signin:hover{
   background:#286090;
   cursor:pointer;
 }
 a:hover{
   text-decoration-line: none;
 }
 /* blicking */
 #online{
height:2rem;
width:2rem;

border-radius: 4rem;

opacity: 0.0;

-webkit-animation: pulsate 1000ms ease-out;
-webkit-animation-iteration-count: infinite;

-webkit-transition: background-color 300ms linear;
-moz-transition: background-color 300ms linear;
-o-transition: background-color 300ms linear;
-ms-transition: background-color 300ms linear;
transition: background-color 300ms linear;
}

@-webkit-keyframes pulsate {
0% {opacity: 0.1;}
40% {opacity: 1.0;}
60% {opacity: 1.0;}
100% {opacity: 0.1;}
}
</style>
@endpush

<!-- push js  -->
@push('js')
<script type="text/javascript" src="Scripts/331jquery.min.js"></script>
<script type="text/javascript" src="Scripts/337bootstrap.min.js"></script>
<script type="text/javascript">$
$(function(){
  //verification Notification
  $(".flashClose").click(function() {
    $(".flashMessage").hide('slow');
  });
});

</script>
@endpush
