<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class EventController extends Controller
{

   // get event function
    public function getEvent() {
      return view('event.create_event');
    }

    // event post function
    public function eventPost(Request $request , $id) {


    }

    // session test
    public function session(Request $request){

      $session = $request->session()->get('hemail');
      return $session;
    }

}
