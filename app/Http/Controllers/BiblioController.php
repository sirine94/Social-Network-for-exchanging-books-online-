<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class BiblioController extends Controller
{
 public function index($id)
 {
   $books=Book::where('publicateur',$id)->get();
   return view('biblio.index',compact('books'));
 }
 public function show($idu,$idb)
 {
   $book=Book::findOrFail($idb);

   return view('biblio.show',compact('book'));
 }

}
