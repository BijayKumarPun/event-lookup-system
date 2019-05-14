<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation API with Google Maps API</title>
    <meta charset="UTF-8" />
  </head>
  <body>
    <script>
    function getAddress (latitude, longitude) {
     return new Promise(function (resolve, reject) {
      var request = new XMLHttpRequest();

      var method = 'GET';
      var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' + latitude + ',' + longitude + '&sensor=true';
      var async = true;

      request.open(method, url, async);
      request.onreadystatechange = function () {
          if (request.readyState == 4) {
              if (request.status == 200) {
                  var data = JSON.parse(request.responseText);
                  var address = data.results[0];
                  document.write(address);
                  resolve(address);
              }
              else {
                  reject(request.status);
              }
          }
      };
      request.send();
  });
};

      var successCallback = function(position){
        var x = position.coords.latitude;
        var y = position.coords.longitude;
        getAddress(x,y);
      };

      var errorCallback = function(error){
        var errorMessage = 'Unknown error';
        switch(error.code) {
          case 1:
            errorMessage = 'Permission denied';
            break;
          case 2:
            errorMessage = 'Position unavailable';
            break;
          case 3:
            errorMessage = 'Timeout';
            break;
        }
        document.write(errorMessage);
      };

      var options = {
        enableHighAccuracy: true,
        timeout: 1000,
        maximumAge: 0
      };

      navigator.geolocation.getCurrentPosition(successCallback,errorCallback,options);
    </script>
  </body>
</html>