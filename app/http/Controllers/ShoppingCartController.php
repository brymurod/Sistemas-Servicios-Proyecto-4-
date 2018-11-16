<?php

namespace GreenMarket\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Illuminate\Support\Facades\Mail;
use Session;
use Redirect;
use GreenMarket\Producto;
use Cart;

class ShoppingCartController extends Controller
{
    //
	//
	public function index()
    {                
		/*Cart::destroy();
		Cart::add('192ao12', 'Product 1', 3, 9.99);
		Cart::add('1239ad0', 'Product 2', 3, 5.95, ['size' => 'large']);
		Cart::add('192ao13', 'Product 3', 3, 9.99);*/
		return view('shop_cart');			
    }
	public function add(Request $request){				
		if (\Request::ajax())
		{		
			if (\Request::input('id'))
			{
				
				$id = \Request::input('id');				
				$name = \Request::input('name');	
				$precio = \Request::input('precio');					
				$quantity = \Request::input('quantity');
				$username = '';
				if(Auth::check()){						
					$username = Auth::user()->name;
				}								
				
				$producto = Producto::Find($id);												
				
				Cart::instance($username)->add($id, $name, $quantity, $precio, ['unidad' => $producto->unidad_venta]);
				
				return \Response::json(['id' => $id, 'name' => $name, 'quantity' => $quantity]);
			}
			return \Response::json(['name' => 'Negativo', 'state' => 'CA']);
		}	
		return \Response::json(['name' => 'Negativo', 'state' => 'CA']);
	}
	public function store($parameter){				
		$username = '';		
			
		if(Auth::check()){						
			$username = Auth::user()->name;
			$email = Auth::user()->email;
			
			$timezone = 'America/Costa_Rica';
			date_default_timezone_set($timezone);
			$date = date('Y-m-d h:i:s a', time());			
			Cart::instance($username)->store($date);					
			
			$collection = Cart::instance($username)->content()->each(function ($item, $key) {
				return $item->name .$item->price;
			});
						
			
			Mail::send('correo.form',['date' => $date, 'user' =>$username,'email' => $email, 'details' => Cart::instance($username)->content() ], function($msj){
            $msj->subject('Orden');
            $msj->to(Auth::user()->email);
			});
			//Session::flash('message','Mensahe enviado correctamente');
			return Redirect::to('/');
		}			
		return 'No user';
	}
}
