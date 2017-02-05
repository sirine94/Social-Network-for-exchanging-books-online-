<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Relation as Relation;

class journalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
{
     $user=User::findOrFail($id);
  
     return view('journal',compact('user'));
    }

}
