<?php

namespace GreenMarket\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;

use GreenMarket\Headers_Information;

use GreenMarket\Http\Requests;
use GreenMarket\Http\Requests\LoginRequest;
use GreenMarket\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
	public function index()
    {
        $headers_information = Headers_Information::All();
        return view('index',compact('headers_information'));
    }
	
	public function __construct(){
		$this->middleware('auth',['only' => 'admin']);
	}
	public function main_page(){
        return view('index');
	}
	
	public function order(){
		if(Auth::check()){
			return view('order');
			//return "Entro aqui eso quiere decir que hay";
		}
		//return "Entro alla eso quiere decir que no hay";
		return view('login');
	}
	
	public function login(){
        return view('login');
	}
	
	public function contacto(){
        return view('contacto');
	}		

    public function find(Route $route){
        $this->headers_information = Headers_Information::find($route->getParameter('h1'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->headers_information->fill($request->all());
        $this->headers_information->save();

        Session::flash('message','Editado Correctamente');
        return Redirect::to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->headers_information->delete();
        \Storage::delete($this->headers_information->path);
        Session::flash('message','Eliminada Correctamente');
        return Redirect::to('/');
    }
}
