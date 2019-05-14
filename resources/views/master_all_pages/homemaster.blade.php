<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    @stack('meta_style')
    <title>Home</title>

          <style type="text/css">
          /* map style */
          #mapdiv {
            height: 400px;
                }
                /* categories style added */
                /* equal card height */
                .row-equal > div[class*='col-'] {
                    display: flex;
                    flex: 1 0 auto;
                }

                .row-equal .card {
                   width: 100%;
                }

                /* ensure equal card height inside carousel */
                .carousel-inner>.row-equal.active,
                .carousel-inner>.row-equal.next,
                .carousel-inner>.row-equal.prev {
                    display: flex;
                }

                /* prevent flicker during transition */
                .carousel-inner>.row-equal.active.left,
                .carousel-inner>.row-equal.active.right {
                    opacity: 0.5;
                    display: flex;
                }


                /* control image height */
                .card-img-top-250 {
                    max-height: 250px;
                    overflow:hidden;
                }
               .categories{
                height:400px;
                overflow:hidden;
               }
               @media (max-width: 767px) {
                 .categories{
                   height:700px;
                   overflow:hidden;
                 }
               }

               /* home social link style */
               .socialLeft{
                 position:fixed;
                 top:180px;
               }
               .socialLeft li{
                 list-style-type: none;
                 padding:15px 15px 15px 10px;
                 position: relative;
                 overflow: hidden;
                 transition: .6s;
               }
               .socialLeft li a{
                 text-decoration-style: none;
                 color:white;
               }
               .socialLeft li i{
                 font-size:20px;

               }
               .socialLeft li:hover{
                 padding-left: 20px;

               }
               .socialLeft li:nth-child(1){
                 background:#3b5998;
               }
               .socialLeft li:nth-child(2){
                 background:#00acde;
               }
               .socialLeft li:nth-child(3){
                 background:#dd4b39;
               }
               .socialLeft li:nth-child(4){
                 background:#007bb6;
               }
               .socialLeft li:nth-child(5) {
                 background: #cb2017;
               }
               .socialLeft li:nth-child(6){
                 background:gray;
               }

         </style>

   </head>


  <body style="background:#344156;">
    @stack('master_nav_section')
    @stack('host_login')
    @stack('user_login')
    @stack('host_register')
    @stack('user_register')

    @yield('home')
    @stack('footer_master')
    @stack('js')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="Scripts/v4bootstrap.min.js"></script>
      <!-- map and location track using ajax -->
      <script type="text/javascript">
        $(function(){
          $.get('{{URL::to("getMap")}}',function(data){
             $("#homeMap").empty().append(data);
             getLocation();
          });
        });

        // location track

        $(function() {
          $.get('{{URL::to("getLocation")}}', function(data) {
            $("#currentLocation").empty().append(data);
            refresh();
            function refresh()
            {
            	setTimeout( function() {
          	  $('#currentLocation').load('{{URL::to("getLocation")}}');
          	  refresh();
          	}, 5000);
          }
          });
        });
      </script>
      <!-- map and location track using ajax end  -->


      <script type="text/javascript">
      //evnts categeries load using ajax

      $(function(){

        //verification Notification
        $(".flashClose").click(function() {
          $(".flashMessage").hide('slow');
        });

        //live music ajax
        $.get('{{URL::to("getLiveMusic")}}',function(data){
          $("#live_music").empty().append(data);
        });

        //concerts ajax
        $.get('{{URL::to("getConcerts")}}',function(data){
          $("#concerts").empty().append(data);
        });

        //party ajax
        $.get('{{URL::to("getParty")}}',function(data){
          $("#party").empty().append(data);
        });

        //movies ajax
        $.get('{{URL::to("getMovies")}}',function(data){
          $("#movies").empty().append(data);
        });

        //adventure ajax
        $.get('{{URL::to("getAdventure")}}',function(data){
          $("#adventure").empty().append(data);
        });

        //sports ajax
        $.get('{{URL::to("getSports")}}',function(data){
          $("#sports").empty().append(data);
        });

        //eductional ajax
        $.get('{{URL::to("getEductional")}}',function(data){
          $("#eductional").empty().append(data);
        });

        //art_and_literature ajax
        $.get('{{URL::to("getArtAndLiterature")}}',function(data){
          $("#art_and_literature").empty().append(data);
        });

        //exhibition_and_seminar ajax
        $.get('{{URL::to("getExhibitionAndSeminar")}}',function(data){
          $("#exhibition_and_seminar").empty().append(data);
        });

        //business_and_social ajax
        $.get('{{URL::to("getBusinessAndSocial")}}',function(data){
          $("#business_and_social").empty().append(data);
        });

        //others ajax
        $.get('{{URL::to("getOthers")}}',function(data){
          $("#others").empty().append(data);
        });

        });
      </script>



        <!-- map function-->
        <script type="text/javascript">

        	var mapstraction;
        	var geocoder;

            	function geocode_return(geocoded_location) {

            		// display the map centered on a latitude and longitude (Google zoom levels)
            		mapstraction.setCenterAndZoom(geocoded_location.point, 15);

            		// create a marker positioned at a lat/lon
            		var geocode_marker = new mxn.Marker(geocoded_location.point);

            		var address = geocoded_location.locality + ", " + geocoded_location.region;
            		geocode_marker.setInfoBubble(address);

            		// display marker
            		mapstraction.addMarker(geocode_marker);

            		// open the marker
            		geocode_marker.openBubble();
            	}

              function  getLocation() {
               if(navigator.geolocation){
                 navigator.geolocation.getCurrentPosition(initialize);
               }
               else{
                 x.innerHTML = "Browser  not supporting";
               }
             }

            	function initialize(position) {

            		// create mxn object
            		mapstraction = new mxn.Mapstraction('mapdiv','googlev3');
            		mapstraction.addControls({
            			pan: true,
            			zoom: 'small',
            			map_type: true
            		});

              		var latlon = new mxn.LatLonPoint(position.coords.latitude, position.coords.longitude);
              		mapstraction.setMapType(mxn.Mapstraction.MAP);
              		mapstraction.setCenterAndZoom(latlon, 16);
                	mapstraction.mousePosition('position','latitude','longitude','place');
              		geocoder = new mxn.Geocoder('googlev3',geocode_return);

              		// add a marker
              		var marker = new mxn.Marker(latlon);
              		mapstraction.addMarker(marker,true);

              	}

        	function user_submit() {
        		var address = {};
        		address = document.getElementById('address').value;
        	  geocoder.geocode(address);

        	}

        	function changetohybrid(){
        		mapstraction.setMapType(mxn.Mapstraction.HYBRID);
        	}
          // map end

        </script>



  <!-- <script type="text/javascript">
  var x = document.getElementById('output');
 function  getLocation() {
   if(navigator.geolocation){
     navigator.geolocation.getCurrentPosition(showPosition);
   }
   else{
     x.innerHTML = "Browser  not supporting";
   }
 }


  function  showPosition(position) {
    var map = new mxn.Mapstraction('map', 'openlayers');
    var latlon = new mxn.LatLonPoint(position.coords.latitude, position.coords.longitude);

    map.setCenterAndZoom(latlon, 10);


  }
  </script> -->

  </body>
</html>
