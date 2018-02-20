<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class QuestionController extends Controller
{

  public function index()
  {
    $questions = App\question::all();
     // dd($questions);
     // return $questions;

  	
    return view('question.index',compact("questions"));
  }

}
