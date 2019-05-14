<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LRController;
use App\Http\Controllers\EventController;
use Mail;
use Session;
use App\Host;
use App\Event;

class MailController extends Controller
{

  //only for testing purpose
  public function postMail(Request $request) {

      $data = array(
        'email' => $request->email,
        'subject'=>$request->subject,
        'bodyMessage'=>$request->message
          );
         Mail::send('mail.mail',$data,function($message) use ($data) {
            $message->from($data['email']);
            $message->to('sushilkc782@gmail.com');
            $message->subject($data['subject']);
           });

           Session::flash('success',"Your Email was sent!");
           return redirect('mail');


  }

  public function mailVerify($hemail,$huid) {

      $host = Host::where(['hemail'=>$hemail, 'huid'=>$huid])->first();
      if($host){
          $update = Host::where(['hemail'=>$hemail, 'huid'=>$huid])->update(['status'=>'1']);
            if($update){
              Session::flash('hostverified'," Congratulation, Your account has succecssfully activated !!");
              return redirect('/hostLogin');
            }
              else{
                return "Activation Error !!";
              }
        }
      else {
        return "Your Email is not valid !!";
      }
  }


  public function hostLoginVerification($huid,$hemail){

      //email send
      $hdata = array(
        'hemail' =>$hemail,
        'subject'=>"Account Verification",
         'huid'=>$huid,
          );
         Mail::send('mail.host_mail',$hdata,function($message) use ($hdata) {
            $message->to($hdata['hemail']);
            $message->subject($hdata['subject']);

           });
           Session::flash('hostverify',"Please check your email to verify your account !!");
           return redirect('hostLogin');
  }


  public function EventVerification($eventData) {
    $eventInfo = array(
       'hostNumber' => $eventData[0],
       'hostUID' => $eventData[1],
       'hostEmail' => $eventData[2],
       'eventUID' => $eventData[3],
       'eventTitle' => $eventData[4],
       'eventCountry' => $eventData[5],
       'eventDistrict' => $eventData[6],
       'eventStreet' => $eventData[7],
       'eventCategory' => $eventData[8],
       'eventTicketPrice' => $eventData[9],
       'eventAvailableTickets' => $eventData[10],
       'eventArtists' => $eventData[11],
       'eventDescription' => $eventData[12],
       'eventLinkUrl' => $eventData[13],
       'eventVenue' => $eventData[14],
       'eventStartDate' => $eventData[15],
       'eventEndDate' => $eventData[16],
       'eventStartTime' => $eventData[17],
       'eventPhoto' => $eventData[18],
       'eventLocation' => $eventData[19],
       );

    Mail::send('mail.event_verifyMail',$eventInfo,function($message) {
       $message->to('sushilkc782@gmail.com');
       $message->subject("Event Verification !!");

     });

      Session::flash('eventVerify',"Please check your email to verify your event !!");
      return "Success";
    // print_r($eventData[2]);
  }

  // Event Verify
   public function eventVerify($huid, $euid) {
     $host = Host::where(['huid'=>$huid])->first();
     if($host){
           $event = Event::where(['euid'=>$euid, 'huid'=>$huid])->first();
           if($event){

             $update = Event::where(['euid'=>$euid, 'huid'=>$huid])->update(['status'=>'1']);
               if($update){
                     Session::flash('eventverified'," Congratulation, Your event has succecssfully verified !!");
                     return redirect('/');
                    }
                     else{
                       return "Activation Error !!";
                     }

           }
           else{
             return "Not valid event and hoster";
               }
           }
     else {
       return "Not Valid Host !!";
     }


   }



}
