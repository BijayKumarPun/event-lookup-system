<table>
  <tr>
  <th><h1>eLookup<h1></th>
  </tr>
    <h3><b>Event Verification</h3>
  </br>
    <div>
     <h4><b>Event hosted by : <i>{{ $hostEmail }}</i></h4>
     <h4>Contact : {{ $hostNumber }}</h4> </br>
        <tr><b>Host UID : </b> {{ $hostUID }}</tr>
        <tr><b>Event UID: </b> {{ $eventUID }}</tr>
        <tr><b>Event Title : </b> {{ $eventTitle }}</tr>
        <tr><b>Event Country : </b> {{ $eventCountry }}</tr>
        <tr><b>Event District : </b>  {{ $eventDistrict }}</tr>
        <tr><b>Event Street : </b> {{ $eventStreet }}</tr>
        <tr><b>Event Catetory : </b> {{ $eventCategory }}</tr>
        <tr><b>Event Ticket Price : </b> {{ $eventTicketPrice }}</tr>
        <tr><b>Event Available Tickets : </b> {{ $eventAvailableTickets }}</tr>
        <tr><b>Event Artists : </b> {{ $eventArtists }}</tr>
        <tr><b>Event Description : </b> {{ $eventDescription }}</tr>
        <tr><b>Event Link URL : </b> {{ $eventLinkUrl }}</tr>
        <tr><b>Event Venue : </b> {{ $eventVenue }}</tr>
        <tr><b>Event Start Date : </b> {{ $eventStartDate }}</tr>
        <tr><b>Event End Date : </b> {{ $eventEndDate }}</tr>
        <tr><b>Event Start Time : </b> {{ $eventStartTime }}</tr>
        <tr><b>Event Location : </b> {{ $eventLocation }}</tr>
        <tr><b>Event Photo : </b></tr> <img src="/images/{{$eventPhoto}}" alt=""  height=200px; class="img-rounded center-block">

      </br>
      <h2>Verify Event</h2>
      <button type="button" name="button"><a href="{{URL::to('eventVerify')}}/{{$hostUID}}/{{$eventUID}}">Verify</a></button>

    </div>
</table>
