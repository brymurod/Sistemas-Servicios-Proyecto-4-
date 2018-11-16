<?php

namespace GreenMarket\Http\Controllers;

use Illuminate\Http\Request;

use GreenMarket\Headers_Information;
use Session;
use Redirect;

use GreenMarket\Http\Requests;
use GreenMarket\Http\Requests\Update_HeaderRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$headers_information = Headers_Information::All();
		$header = Headers_Information::find(1);
        return view('admin',compact('headers_information','header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update_HeaderRequest $request, $id)
    {
        //		
		$headers = Headers_Information::find(1);
		$headers->fill($request->all());	
		$headers->h1 = $request['h1'];
		$headers->h2 = $request['h2'];
		$headers->h3 = $request['h3'];
        $headers->h4 = $request['h4'];
        $headers->h5 = $request['h5'];
        $headers->h6 = $request['h6'];
        $headers->save();
	
        Session::flash('message','Datos Editados Correctamente');
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
        //
		$this->headers_information->delete();
        \Storage::delete($this->headers_information->path);
        Session::flash('message','Eliminada Correctamente');
        return Redirect::to('/');
    }
}
