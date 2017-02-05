<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Message as Message ;
use App\User;
use App\Notification;
use Carbon;
class ContactsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index($id)
    {  $user=User::findOrFail($id);
      $messages=Message::whereIn('id_1',[$id,\Auth::user()->id])
               ->whereIn('id_2',[$id,\Auth::user()->id])->orderBy('created_at','desc')->get();
      return view('contact',compact('messages'))->with('user',$user);


    }
    public function store(Request  $request)
    {
    $input=Request::all();

    $message=Message::create($input);
    $message->save();

    $notification= new Notification;
    $notification->type = "message";
    $notification->nom= \Auth::user()->nom;
    $notification->prenom= \Auth::user()->prenom;
    $notification->id_1=\Auth::user()->id;
    $notification->id_2=$message->id_2;
    $notification->notif=' Vous a envoyé un message à '. Carbon\Carbon::now() . '.';
    $notification ->save();
     User::findOrFail($message->id_2)->increment('compteur', 1);

    User::findOrFail($message->id_2)->save();
     return redirect()->route('contact',$message->id_2);
    }
}
