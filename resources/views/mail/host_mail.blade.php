<table>
  <tr>
  <th><h1>eLookup<h1></th>
  </tr>
  <tr>
    <h3>Email Verification</h3>
    <div>
    <b><h5>Your Unique ID: </h5></b>&nbsp;&nbsp; {{ $huid }}
    </div>
    <p>Send Via {{ $hemail }}</p>
   <hr/>
   <h2>Verify Email</h2>
   <a href="{{URL::to('verifymail')}}/{{$hemail}}/{{$huid}}">Verify</a>
  </tr>
</table>
