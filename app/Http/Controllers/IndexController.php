<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producer;
use App\Models\Buy;
use Session;
class IndexController extends Controller
{
    
     public function index(){
    	$product = Product::orderBy('productID','DESC')->get();
    	return view('products',compact('product'));
    }
    public function thanks(){
    	
    	return view('thanks');
    }
    public function buy_foods(Request $req){
    	$data = $req->all();
    	$buy = new Buy();
    	$buy->productID = $data['productID'];
		$buy->customer_id = Session::get('customer_id');
		$buy->save();
		return redirect()->to('/thanks');


    }
}
