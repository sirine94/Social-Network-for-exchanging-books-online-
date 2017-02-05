<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Relation;
use App\User;
class RelationsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function create($id)
 {
   $relation= new Relation;
   $relation->id_1=\Auth::user()->id;
   $relation->id_2=$id;
   $relation->nom_2 = User::findOrFail($id)->nom;
  $relation->prenom_2 = User::findOrFail($id)->prenom;
   $relation->save();

 return redirect()->route('journal.index',$id);

 }
 public function delete($id)
 {
   Relation::where('id_1',\Auth::user()->id)->where('id_2',$id)->delete();
   return redirect()->route('journal.index',$id);
 }
 public function index()
 {
   $relations=Relation::where('id_1',\Auth::user()->id)->get();
   return view('relations',compact('relations'));
 }
}
