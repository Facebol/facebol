<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
class controllerEmail extends Controller
{
    public function index(){
  
    	$email = Email::orderBy('id','desc')->paginate('5');
    	return view('panel.email.index',compact('email'));

    }

    public function create(){

    	return view('panel.email.create');

    }

   	public function store(Request $request){

   		Email::create([
   			'email'=>$request->email,
   		]);

   		return redirect()->route('email.index');

   	}

   	public function edit($id){

   		$email = Email::find($id);
   		return view('panel.email.edit',compact('email'));

   	}

   	public function update(Request $request, $id){

		$email = Email::find($id);
   		$email->fill([
   			'email'=>$request->email,
		   ]);
		$email->save();
   		return redirect()->route('email.index');
   	} 
}
