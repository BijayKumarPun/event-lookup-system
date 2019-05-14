<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mapstraction Examples - Google v3</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="../source/mxn.js?(googlev3,[geocoder])" type="text/javascript"></script>
   <style type="text/css">

	  #mapdiv {
	 	height: 400px;
	  }

   </style>

<script type="text/javascript">
//<![CDATA[

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

    	function initialize(position) {

    		// create mxn object
    		mapstraction = new mxn.Mapstraction('mapdiv','googlev3');
    		mapstraction.addControls({
    			pan: true,
    			zoom: 'small',
    			map_type: true
    		});

      		var latlon = new mxn.LatLonPoint(position.coords.latitude, position.coords.longitude);
          // position.coords.latitude, position.coords.longitude

      		mapstraction.setMapType(mxn.Mapstraction.MAP);
      		mapstraction.setCenterAndZoom(latlon, 16);
      		mapstraction.mousePosition('position');

      		geocoder = new mxn.Geocoder('googlev3',geocode_return);

      		// add a marker
      		var marker = new mxn.Marker(latlon);
      		mapstraction.addMarker(marker,true);

      	}

   function  getLocation() {
    if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(initialize);
    }
    else{
      x.innerHTML = "Browser  not supporting";
    }
  }


  //  function  showPosition(position) {
  //    var map = new mxn.Mapstraction('map', 'openlayers');
  //    // var latlon = new mxn.LatLonPoint(position.coords.latitude, position.coords.longitude);
  //    // var point = new mxn.LatLonPoint(position.coords.latitude, position.coords.longitude);
  //      var point = new mxn.LatLonPoint(51.50731, -0.12768);
  //
  //    var bb = new mxn.BoundingBox(position.coords.latitude, position.coords.longitude);
  //    map.setCenterAndZoom(latlon, 10);
  //
  //
  //  }



	function user_submit() {
		var address = {};
		address = document.getElementById('address').value;
		geocoder.geocode(address);
	}

	function changetohybrid(){
		mapstraction.setMapType(mxn.Mapstraction.HYBRID);
	}

//]]>
</script>

</head>
<body onload="getLocation();">
<center>
<div class="container-fluid" style="margin:30px;">
<div class="row">
  <div id="mapdiv"></div>
</div>
<div class="row">
  <input type="text" id="address" name="address" value="" size="35"/>
  <a href="#" onclick="user_submit(); return false;">Geocode</a>
</div>
<div class="row">
  <a href='#' onclick='changetohybrid();'>change to hybrid</a>
  <div id="position"></div>
</div>
</div>

</center>

</body>
</html>
