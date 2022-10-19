<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;
use Session;
class ProducerController extends Controller
{
     public function AuthLogin(){
        
        if(Session::get('login_admin')){
            return redirect()->to('add');
         
        }else{
            return redirect()->to('/');
        }
        
       
    }
    public function index(){
    	$this->AuthLogin();
    	$producers = Producer::orderBy('producerID','DESC')->get();
    	return view('admin.producers.list',compact('producers'));
    }
    public function add(){
        $this->AuthLogin();
    	return view('admin.producers.add');
    }
    public function save(Request $req){
    	$data = $req->all();
    	$producer = new Producer();
    	$producer->producerName = $data['producerName'];
    	$producer->save();
    	Session::flash('message', 'Add Producers Successfully'); 
    	return redirect()->to('producers-list');
    	
    }
    public function update($id,Request $req){

    	$data = $req->all();
    	$producer = Producer::find($id);
    	$producer->producerName = $data['producerName'];
    	$producer->save();
    	Session::flash('message', 'Updated Producers Successfully'); 
    	return redirect()->to('producers-list');
    }
    public function edit($id){
        $this->AuthLogin();
    	$producer = Producer::find($id);
    	return view('admin.producers.edit',compact('producer'));
    }
    public function delete($id){
        $this->AuthLogin();
    	$producer = Producer::find($id)->delete();
    	Session::flash('message', 'Delete Producers Successfully'); 
    	return redirect()->back();
    }
}
