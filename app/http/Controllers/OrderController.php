<?php

namespace GreenMarket\Http\Controllers;

use Illuminate\Http\Request;
use GreenMarket\Producto;

use Auth;
use Session;
use Redirect;

use Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd($request->get('name'));
        //		
		if(Auth::check()){						
			$products = Producto::where('categoria', 1)->paginate(2);
			return view('order_frutas',compact('products'));			
		}
		return view('login');
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
	
	public function search_Frutas(Request $request)
    {
        //return $request->productoName;
		$products = Producto::where('name', 'like', '%' . $request->productoName . '%')->paginate(2);
		//return $products->count();
		return view('order_frutas',compact('products'));			
    }
	
	public function search_Verduras(Request $request)
    {
        //return $request->productoName;
		$products = Producto::where('name', 'like', '%' . $request->productoName . '%')->paginate(2);
		//return $products->count();
		return view('order_verduras',compact('products'));			
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
		if(Auth::check()){			
			if($id == 'frutas'){
				$products = Producto::where('categoria', 1)->paginate(3);
				return view('order_frutas',compact('products'));
			}
			else{
				$products = Producto::where('categoria', 2)->paginate(3);
				return view('order_verduras',compact('products'));
			}
		}
		return view('login');
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
    public function update(Request $request, $id)
    {
        //
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
    }
}
