<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
class FrontController extends Controller
{
   public function getData() 
   {
    $one_to_one = User::with('product')->get();
    
    $belong_to = Product::with('user')->first();
    // dd($belong_to);
     $all = Product::all();
     $sport = Product::where('category_id',1)->get();
     $technology = Product::where('category_id',2)->get();
     $business = Product::where('category_id',3)->get();
     $entertainment = Product::where('category_id',4)->get();
     return view('welcome',compact('all','sport','technology','business','entertainment'));

   }
   public function blog($id)
   { 
     $data = Product::all();
     $sport = Product::where('category_id',1)->get();
     $technology = Product::where('category_id',2)->get();
     $business = Product::where('category_id',3)->get();
     $blog = Product::where('id',$id)->first();
    // dd($blog);
     return view('single',compact('blog','data','sport','technology','business'));
   }
   public function contact(Request $request)
   {
       return view('contact');
   }
   public function single()
   {
       $single = Product::all();
       return view('blog',compact('single'));
   }
   
}