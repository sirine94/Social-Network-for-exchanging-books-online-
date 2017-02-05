<?php

namespace App\Http\Controllers;

use  Illuminate\Support\Facades\Request ;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Book;

class BibliothequeController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
 {
   $books=Book::where('publicateur',\Auth::user()->id)->get();
   return view('bibliotheque.index',compact('books'));
 }

public function show($id)
{
 $book=Book::findOrFail($id);

 return view('bibliotheque.show',compact('book'));
}

public function create()
{ $id=\Auth::user()->id;
 return view('bibliotheque.create')->with('id',$id);
}

public function store(\Illuminate\Http\Request   $request)
{ $this->validate($request, ['titre'=> 'required','auteur'=>'required','genre'=>'required']);
 $input=Request::all();

 $books=Book::create($input);
 $books->save();
return redirect()->route('bibliotheque.index');
}


public function edit($id)
{ $book=Book::findOrFail($id);
 return view('bibliotheque.edit',compact('book'))->with('id',\Auth::user()->id);
}
public function update($id,\Illuminate\Http\Request $request)
{
 $book=Book::findOrFail($id);
 $book->update($request->all());
 return redirect()->route('bibliotheque.index');
}
}
