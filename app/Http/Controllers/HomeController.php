<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function getMap(){
   return view('map.map');

  }

  public function getLocation() {
     return view('map.current_location');
  }
}
