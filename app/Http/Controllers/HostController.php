<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Host;
use Session;

class HostController extends Controller
{
    public function getHostLeftNav(Request $request) {

        if(Session::has('hemail')){
            $hostEmail = Session::get('hemail');
            $host = Host::where(['hemail'=>$hostEmail])->first();
            return view('host_profile.host_left_navbar',compact('host'));
        } else{
          return redirect('/');
        }
    }



    public function getHostMiddleNav() {
      return view('host_profile.host_middle_navbar');
    }

    public function getHostAllEvents() {
      return view('host_profile.host_all_events');
    }
}
