<?php

namespace GreenMarket\Http\Controllers;

use Illuminate\Http\Request;
use GreenMarket\Producto;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Log;
use GreenMarket\Http\Requests\createProductRequest;

use Session;
use Redirect;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = Producto::paginate(5);
        if($request->ajax()){
            return response()->json(view('producto.index',compact('productos'))->render());
        }
        return view('producto.index',compact('productos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createProductRequest $request)
    {
        //
		Log::error('Error');
		$file = $request->file('imagen');		
		$name = $request['name'];
		$path = $request->imagen->storeAs('public/img', $name.'.png');		
		$categoria = 0;
		if($request['categoria'] == 'F'){
			$categoria = 1;
		}
		else{
			$categoria = 2;
		}
		$producto = new Producto;
		$producto->name = $request->name;
		$producto->categoria = $categoria;
		$producto->descripcion = $request->descripcion;
		$producto->unidad_venta = $request->unidad_venta;
		$producto->precio = $request->precio;
		$producto->imagen = 'storage/img/'.$name.'.png';		
		
		$producto->save();
		
		Session::flash('message','Producto Creado Correctamente');
		return view('producto.create');				
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
		$producto = Producto::find($id);
        return view('producto.edit',compact('producto'));
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
        $producto = Producto::find($id);
		$producto->name = $request['name'];
		$producto->descripcion =  $request['descripcion'];
		$producto->precio = $request['precio'];
		$producto->unidad_venta = $request['unidad_venta'];
        $producto->save();
        Session::flash('message','Producto Actualizado Correctamente');
        return view('producto.edit',compact('producto'));
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
		$user = Producto::find($id);
		$user->delete();
        Session::flash('message','Producto Eliminado Correctamente');
		
        $users = Producto::paginate(5);        
        return view('producto.index',compact('users'));
    }
}
