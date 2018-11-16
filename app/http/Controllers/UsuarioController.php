<?php

namespace GreenMarket\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use GreenMarket\Http\Requests\UserCreate;
use GreenMarket\User;

use Session;
use Redirect;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {
        $users = User::paginate(5);
        if($request->ajax()){
            return response()->json(view('usuario.users',compact('users'))->render());
        }
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct(){
        //$this->middleware('auth');   
		//Esta linea hace que se deba registrar antes de ingresar a cualquier metodo
    }  
	 
    public function create()
    {
        return view('usuario.create');
    }		
	
	public function register()
    {		
        return view('usuario.register');
    }
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreate $request)
    {
        \GreenMarket\User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
			'role' => $request['role'],
        ]);
        Session::flash('message','Usuario Creado Correctamente');
        return view('usuario.create');
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
		$user = User::find($id);
        return view('usuario.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
		$user->name = $request['name'];
		$user->email =  $request['email'];
		$user->password = $request['password'];
		$user->role = $request['role'];
        $user->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return view('usuario.edit',compact('user'));
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
		$user = User::find($id);
		$user->delete();
        Session::flash('message','Usuario Eliminado Correctamente');
		
        $users = User::paginate(5);        
        return view('usuario.index',compact('users'));
    }
}
