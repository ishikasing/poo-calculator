<?php

namespace poo\calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalContoller extends Controller
{
   function add($a,$b){
  $result = $a + $b;
  return view('calculator::add',compact('result'));
   }

   function sub($a,$b){
    $result = $a - $b;
    return view('calculator::add',compact('result'));
   }

   function log(){
  return view('calculator::log');

   }
   function show(Request $req){
    dd($req->all());
   }
}
