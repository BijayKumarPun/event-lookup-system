<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    @stack('meta_style')
    @yield('nav_left')
      <style>
      /* map style */
      #mapdiv {
        height: 400px;
            }
      /*******************************
            host profile nav
       *******************************/
       /* #affix2.affix{
          top:60px;
          width: 100%;
          z-index: 9999 !important;
        } */

          /* host profile left sidebar css */
          #host_left_navbar_style li a{


          }
          #host_middle_navbar_style li a{
            color:white;
          }
          #host_middle_navbar_style li>a:hover{
            color:black;
          }
           #host_left_navbar_style li a{
            padding:10px;

          }



          /* left nav class */
          .navbar-fixed-left{
            margin-top: 60px;
          }

      </style>

  </head>
  <body style="background:#344156;">
    @stack('master_nav_section')
    @stack('host_login')
    @stack('user_login')
    @stack('host_register')
    @stack('user_register')

    @yield('host')
    @stack('js')
    <script type="text/javascript">

     $(function() {

        $.ajaxSetup({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            //event notification close
            $(" #success .flashClose").click(function() {
              $(".flashMessage").hide('slow');
            });


           // event panel show using ajax
           $("#host_middle_affix_nav").on('click','#createAnEvent',function(){
          $.get('{{URL::to("getEvent")}}',function(data){
             $("#eventDiv").empty().append(data);
              getLocation();
          });
        });
        // event panel show using ajax end

         // event panel js
         $("#eventDiv").on('click','#ecancel',function(){
           $("#event_panel").hide('slow');
         });
         //event panel show off end

         //host left nav show using ajax
         $.get('{{URL::to("host_left_navbar")}}',function(data){
           $('#host_profile_left_nav').empty().append(data);
         });

         //host middle nav show using ajax
         $.get('{{URL::to("host_middle_navbar")}}',function(data){
           $('#host_middle_affix_nav').empty().append(data);
         });

         //host all events show using ajax
         $.get('{{URL::to("host_all_events")}}',function(data){
           $('#host_all_events').empty().append(data);
         });



         //upload event photo
         $("#eventDiv").on("submit","#eImage",function(e){
            e.preventDefault();
            $.ajax({
             url: "{{URL::to('event/ePhotoUpload')}}",
             type:"POST",
             contentType: false,
             cache: false,
             processData:false,
             data:new FormData($("#eImage")[0]),

        success: function(data) {
            $("#ephoto").val('');
            $("#eINotification").html("<p style='color:green; border:1px solid green;padding:5px'>Image succecssfully uploaded !!</p>");
            $("#eUploadedImage").val(data);
        },
        error: function(data) {
             console.log(data);
             alert(" Ajax connection error");

        }
      });
    });

  //   $(document).ajaxStart(function(){
  //   $("#wait").css("display", "block");
  //    });
  // $(document).ajaxComplete(function(){
  //   $("#wait").css("display", "none");
  // });
         // submit event form
         $('#eventDiv').on('click',"#eregister",function(e) {

           e.preventDefault();

           //event data
            var event_title = $('#event_title').val();
            var event_country = $("#ecountry").val();
            var event_district = $('#edistrict').val();
            var event_street = $("#estreet").val();
            var event_category = $('#ecategory').val();
            var event_tickect_price = $("#eticket_price").val();
            var event_available_tickets = $("#eavailable_tickets").val();
            var event_artists = $("#eartists").val();
            var event_description = $("#edescription").val();
            var event_link_url = $("#elink_url").val();
            var event_venue = $("#evenue").val();
            var event_start_date = $("#estart_date").val();
            var event_end_date = $("#eend_date").val();
            var event_start_time = $("#estart_time").val();
            var event_photo = $("#eUploadedImage").val();
            var event_latitude = $("#latitude").text();
            var event_longitude = $("#longitude").text();
            var event_place = $("#place").text();
            var event_huid = $("#ehuid").text();


            // testing purpose
            if(event_title !== "") {
              if(event_country !== "None") {
                if(event_district !== "None") {
                  if(event_street !== "") {
                    if(event_category !== "None") {
                      if(event_tickect_price !== "") {
                        if(event_available_tickets !== "") {
                          if(event_artists !== "") {
                            if(event_description !== "") {
                              if(event_venue !== "") {
                                if(event_start_date !== "") {
                                  if(event_end_date !== "") {
                                    if(event_start_time !== "") {
                                      if(event_photo !== "") {
                                        if(event_place !== "...") {

                                          $("#eregister").prop('disabled', true);
                                          $.ajax({

                                              url : '{{URL::to("host/eventPost")}}',
                                                type : 'POST',
                                                data : {
                                                        eventHUid :event_huid,
                                                         eventTitle : event_title,
                                                         eventCountry : event_country,
                                                         eventDistrict : event_district,
                                                         eventStreet : event_street,
                                                         eventCategory : event_category,
                                                         eventTicketPrice : event_tickect_price,
                                                         eventAvailableTickets : event_available_tickets,
                                                         eventArtists : event_artists,
                                                         eventDescription : event_description,
                                                         eventLinkUrl : event_link_url,
                                                         eventVenue : event_venue,
                                                         eventStartDate : event_start_date,
                                                         eventEndDate : event_end_date,
                                                         eventStartTime : event_start_time,
                                                         eventPhoto : event_photo,
                                                         eventLatitude : event_latitude,
                                                         eventLongitude : event_longitude,
                                                         eventPlace : event_place,

                                                },
                                                success: function(response) {
                                                // alert("Congratulation!! Your event has been succecssfully uploaded. ")
                                                alert("Congratulation!! Your event has been succecssfully uploaded, please wait until verified !!");
                                                $("#event_panel").hide("slow");

                                               },
                                               error: function(response){
                                                alert("Sorry!!, Some error happed");
                                                console.log(response);
                                             }

                                          }); // ajax connectin end


                                        }
                                        else{ //event_place check
                                          alert("Please Select Your Place Location");
                                        }
                                      }
                                      else{ //event_photo check
                                        document.getElementById('eUploadedImage').style.borderColor = "red";
                                        document.getElementById('eUploadedImage').focus();
                                        alert("Please upload your event picture !!");
                                      }
                                    }
                                    else{ // event_start_time check
                                      document.getElementById('estart_date').style.borderColor = "red";
                                      document.getElementById('estart_date').focus();
                                    }
                                  }
                                  else{ // event_end_date check
                                    document.getElementById('eend_date').style.borderColor = "red";
                                    document.getElementById('eend_date').focus();
                                  }
                                }
                                else{ //event_start_date check
                                  document.getElementById('estart_date').style.borderColor = "red";
                                  document.getElementById('estart_date').focus();
                                }
                              }
                              else{ //event_venue check
                                document.getElementById('evenue').style.borderColor = "red";
                                document.getElementById('evenue').focus();
                              }
                            }
                            else{ //event_description check
                              document.getElementById('edescription').style.borderColor = "red";
                              document.getElementById('edescription').focus();
                            }
                          }
                          else{ //event_artists check
                            document.getElementById('eartists').style.borderColor = "red";
                            document.getElementById('eartists').focus();
                          }
                        }
                        else{ // event_available_tickets check
                          document.getElementById('eavailable_tickets').style.borderColor = "red";
                          document.getElementById('eavailable_tickets').focus();
                        }
                      }
                      else{ //event_tickect_price check
                        document.getElementById('eticket_price').style.borderColor = "red";
                        document.getElementById('eticket_price').focus();
                      }
                    }
                    else{ //event_category check
                      document.getElementById('ecategory').style.borderColor = "red";
                      document.getElementById('ecategory').focus();
                    }
                  }
                  else{ //event_street check
                    document.getElementById('estreet').style.borderColor = "red";
                    document.getElementById('estreet').focus();
                  }
                }
                else{ //event district check
                  document.getElementById('edistrict').style.borderColor = "red";
                  document.getElementById('edistrict').focus();
                }
              }
              else{ // event_country check
                document.getElementById('ecountry').style.borderColor = "red";
                document.getElementById('ecountry').focus();
              }
            }
            else{ // event_title check
               document.getElementById('event_title').style.borderColor = "red";
               document.getElementById('event_title').focus();
            }

         });

      });//ready main function end

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
           $("#address").val('');
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

  </body>
</html>
