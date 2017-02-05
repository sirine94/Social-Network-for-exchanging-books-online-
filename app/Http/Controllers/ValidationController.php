<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;
use App\User;
use App\Notification;
use App\Echange;

class ValidationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index($id) //id:c'est l'identifiant d'oeuvre à échanger
    { $book=Book::where('id',$id)->first();
    //La partie Notification
    $notification = new Notification;
    $notification ->id_1 = \Auth::user()->id;
    $notification ->id_2 = $book ->publicateur ;
   $notification ->nom = \Auth::user()->nom;
   $notification ->prenom= \Auth::user()->prenom;

  if(is_null(Echange::where('id_2',\Auth::user()->id)->where('id_1', $book ->publicateur )->first()))
      { $notification ->type= 'echange';
      $notification ->notif = 'Veut Echanger oeuvre ' .
      Book::where('id',$id)->first()->titre . ' .  Veuillez valider ici votre réponse ' ;
      $notification->save();
      \Auth::user()->compteur = \Auth::user()->compteur +1 ;
      //La partie echanges
      $echange=new Echange;
      $echange ->id_1 = \Auth::user()->id;
      $echange ->id_2 = $book ->publicateur ;
      $echange->id_b=$id;
      $echange->save();
      $compteur = User::findOrFail($book->publicateur)->compteur;
      $compteur= $compteur +1;
      return redirect()->route('journal.index',$notification->id_2); }
     else {
       $id_book_premier=Echange::where('id_2',\Auth::user()->id)->where('id_1', $book ->publicateur )->first()->id_b ;
       $book_premier=Book::findOrFail($id_book_premier)->first();
         $notification ->type='confirmation';
         $notification->notif= 'Accepte ta demande et choisit Le livre '. Book::where('id',$id)->first()->titre .
         ' .L\'echange est effectué ';
         $notification ->save();
         $compteur = User::findOrFail($book->publicateur)->compteur;
         $compteur= $compteur +1;
         $echange=Echange::where('id_1', $book ->publicateur )->
          where('id_2',\Auth::user()->id)->
          orderBy('created_at','desc')->first()->delete();
        $book->etat= 'en cour d\'echange'; $book->save();
        $book_premier->etat='en cour d\'echange'; $book_premier->save();
             return redirect()->route('journal.index',$notification->id_2);
     }
    }
    public function accept($id)
    {
      $books=Book::where('publicateur',$id)->get();
      return view('biblio.accept',compact('books'));

    }

    public function refuse($id)
    {
      $echange=Echange::where('id_1',$id)->
       where('id_2',\Auth::user()->id)->
       orderBy('created_at','desc')->first()->delete();

             $notification = new Notification;
             $notification ->id_1 = \Auth::user()->id;
             $notification ->id_2 =1 $id ;
            $notification ->nom = \Auth::user()->nom;
            $notification ->prenom= \Auth::user()->prenom;
            $notification ->type= 'refus';
             $notification ->notif = 'Refuse d\'echanger avec toi le livre' .
             Book::where('id',$id)->first()->titre . ' .' ;
             $notification->save();
             $compteur = User::findOrFail($book->publicateur)->compteur;
             $compteur= $compteur +1;
             return redirect()->route('home');


    }
    public function termine($id)
    {
      $book=Book::findOrFail($id) ;
      $book->etat='';
      $book->save();

     return redirect()->route('bibliotheque.show',$id);
    }
}
