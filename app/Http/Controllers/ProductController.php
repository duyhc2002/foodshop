<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producer;
use File;
use Session;
class ProductController extends Controller
{
     public function AuthLogin(){
        
        if(Session::get('login_admin')){
            return redirect()->to('add');
         
        }else{
            return redirect()->to('/');
        }
        
       
    }
    public function index()
    {
        $this->AuthLogin();
        $data = Product::get();
        $producers = Producer::all();
        return view('list', compact('data','producers'));
    }
    public function add()
    {
        $this->AuthLogin();
        $producers = Producer::orderBy('producerID','DESC')->get();
        return view('add',compact('producers'));
    }
    public function save(Request $request)
    {
        $product = new Product();
        
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
         $product->producerID = $request->producer;
        // $product->productImage1 = $request->image1;
         $get_image = $request->file('image1');
         $path = 'uploads/food/';
         if($get_image){

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
           
            $product->productImage1 = $new_image;
           
        }
       
        $product->save();

        return redirect()->back()->with('success', 'Product Added Seuccessfully');
    }
    public function edit($id)
    {
        $this->AuthLogin();
          $producers = Producer::all();
        $data = Product::where('productID','=', $id)->first();
        return view('edit',compact('data','producers'));
    }
    public function update($id,Request $request)
    {

        $product = Product::find($id);
       
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
        $product->producerID = $request->producer;
        // $product->productImage1 = $request->image1;
         $get_image = $request->file('image1');
         $path = 'uploads/food/';
         if($get_image){

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
           
            $product->productImage1 = $new_image;
           
        }
       
        $product->save();

        return redirect()->back()->with('success', 'Product Updated Seuccessfully');
    }
    public function delete($id)
    {
        $this->AuthLogin();
        Product::where('productID','=',$id)->delete();
        return redirect()->back()->with('success','Product Delete Successfully');
    }

    public function register(){

        return view('register');
    }

    public function index1(){

        return view('index1');
    }

    public function about(){

        return view('about');
    }

    public function blog(){

        return view('blog');
    }
    public function contact(){

        return view('contact');
    }
    public function Login(){

        return view('Login');
    }
    public function recipe(){

        return view('recipe');
    }

}