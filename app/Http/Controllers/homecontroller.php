<?php

namespace App\Http\Controllers;
use Nikhil\Nikhilroy;
use Illuminate\Http\Request;
use App\Models\postmodel;
use App\Models\categorys;
use Illuminate\Support\Carbon;

class homecontroller extends Controller
{
 
  public function index(){
     $userr = postmodel::orderBy('created_at', 'desc')->latest()->get();
  $cat = categorys::all();
/*  if(Carbon::now()->format('H') >= 11 && Carbon::now()->format('H') <= 18){ return 'kalu'; 
    
  }
  else { 
  
  }*/
   return view('home', ['user' => $userr,
   'cats' => $cat]);
  

   
  }
}
