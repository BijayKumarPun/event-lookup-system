<table>
  <tr>
  <th><h1>eLookup<h1></th>
  </tr>
  <tr>
    <h3>You Have a New email via the Mail Form</h3>
    <div>
      {{ $bodyMessage }}
    </div>
    <p>Send Via {{ $email }}</p>
   <hr/>
   <h2>Verify Email</h2>
   <a href="{{URL::to('verifymail')}}/{{$email}}">Verify</a>
  </tr>
</table>
