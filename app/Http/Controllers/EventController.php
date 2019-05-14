<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\DB;
use App\Event;
use App\Host;
use Session;

class EventController extends Controller
{

  //constructor
  protected $mail;
  public function __construct(MailController $mail){
     $this->mail = $mail;
  }

    //getEvent
    public function getEvent(){
      if(Session::has('hemail')){
          $hostEmail = Session::get('hemail');
          $host = Host::where(['hemail'=>$hostEmail])->first();
          return view('event.create_event',compact('host'));
      } else{
        return redirect('/');
      }
    }

    //getLive Music
    public function getLiveMusic() {
    $liveMusic = Event::where('ecategory', "Live Music")
                            ->orderBy('euid', 'desc')
                            ->get();

      return view('categories.live_music',compact('liveMusic'));
    }

    //getConcerts
    public function getConcerts() {
      return view('categories.concerts');
    }

    //getParty
    public function getParty() {
      return view('categories.party');
    }

    //getMovies
    public function getMovies() {
      return view('categories.movies');
    }

    //getAdventure
    public function getAdventure() {
      return view('categories.adventure');
    }

    //getSports
    public function getSports() {
      return view('categories.sports');
    }

    //getEductional
    public function getEductional() {
      return view('categories.eductional');
    }

    //getArtAndLiterature
    public function getArtAndLiterature() {
      return view('categories.art_and_literature');
    }

    //getExhibitionAndSeminar
    public function getExhibitionAndSeminar() {
      return view('categories.exhibition_and_seminar');
    }

    //getBusinessAndSocial
    public function getBusinessAndSocial() {
      return view('categories.business_and_social');
    }

    //getOthers
    public function getOthers() {
      return view('categories.others');
    }


    //event post
    public function eventPost(Request $request){

      $event = new Event;
      $event->huid = $request->eventHUid;
      $event->euid = uniqid();
      $event->eevent_title = $request->eventTitle;
      $event->ecountry = $request->eventCountry;
      $event->edistrict = $request->eventDistrict;
      $event->estreet = $request->eventStreet;
      $event->ecategory = $request->eventCategory;
      $event->eticket_price = $request->eventTicketPrice;
      $event->eavailable_tickets = $request->eventAvailableTickets;
      $event->eartists = $request->eventArtists;
      $event->edescription = $request->eventDescription;
      $event->elink_url = $request->eventLinkUrl;
      $event->evenue = $request->eventVenue;
      $event->estart_date = $request->eventStartDate;
      $event->eend_date = $request->eventEndDate;
      $event->estart_time = $request->eventStartTime;
      $event->ephoto = $request->eventPhoto;
      $event->elatitude = $request->eventLatitude;
      $event->elongitude = $request->eventLongitude;
      $event->elocation = $request->eventPlace;
      $save = $event->save();

      if($save) {
       $hostUID = $event->huid;
       $host = Host::where(['huid'=>$hostUID])->first();
       if($host->all()){
         $hostNumber = $host->hphone_number;
         $hostEmail = $host->hemail;
       }
       $eventData = array($hostNumber,$event->huid, $hostEmail, $event->euid, $event->eevent_title,
                          $event->ecountry, $event->edistrict, $event->estreet,
                          $event->ecategory, $event->eticket_price, $event->eavailable_tickets,
                          $event->eartists, $event->edescription,
                          $event->elink_url, $event->evenue, $event->estart_date,
                          $event->eend_date, $event->estart_time,
                          $event->ephoto,$event->elocation);

       return $this->mail->EventVerification($eventData);
       }
       else{
         return "Some Error Happened !! Please try again.";
       }

    }


  public function ePhotoUpload(Request $request){

    $file = $request->file('ephoto');
    //you also need to keep file extension as well
    $name = uniqid().'.'.$file->getClientOriginalExtension();
    //using array instead of object
    $file->move(public_path('images'), $name);
    return $name;
  }


}
