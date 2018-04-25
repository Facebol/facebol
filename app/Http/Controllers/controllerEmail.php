<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Session;
use Alert;
use Exception;
use App\Http\Requests\RequestEmailUpdate;

class controllerEmail extends Controller
{
	public function __construct()
    {
		$this->middleware('panel');
		$this->middleware('admin');
    }
    public function index(){
  
		$emails = Email::orderBy('id','desc')->paginate('5');
		Session::flash('message','Datos Cargados Correctamente');
    	return view('panel.email.index',compact('emails'));

    }
	public function pagination($n)
    {
        $emails=Email::orderBy('id','desc')->paginate($n);
        Session::flash('title','Datos Cargados Correctamente');
		return view('panel.email.index',compact('emails'));
    }
    public function search(Request $request)
    {
        $emails=Email::where('email','LIKE',"%{$request->search}%")->get();
        Session::flash('title','Datos Buscados Correctamente');
        return view('panel.email.index',compact('emails'));
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

   	public function update(RequestEmailUpdate $request, $id){

		$email = Email::find($id);
   		$email->fill([
   			'email'=>$request->email,
		   ]);
		$email->save();
   		return redirect()->route('email.index');
	   } 
	public function destroy($id)
	{
		$email =Email::find($id);
		$email->delete();
		Alert::success('Exito!!','El registro se elimino correctamente');
		return redirect()->route('email.index');
	}
}
