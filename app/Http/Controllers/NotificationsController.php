<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notification ;

class NotificationsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    { \Auth::user()->compteur= 0 ;
      \Auth::user()->save();
      $notifications=Notification::where('id_2',\Auth::user()->id)->orderBy('created_at','desc')->get();
      return view('notifications',compact('notifications'));

    }
}
