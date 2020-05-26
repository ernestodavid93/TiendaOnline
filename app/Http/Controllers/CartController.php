<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Contracts\Session\Session;

class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart',array());
    }
    //Show cart
    public function show()
    {
        $cart = \Session::get('cart'); 
        $total = $this->total();
        $subtotal = $this->subtotal();
        return view ('Store.cart', compact('cart', 'total', 'subtotal'));
    }
    //Add item

    public function add(Producto $producto)
    {
        $cart = \Session::get('cart');
        $producto->cantidad=1;
        $cart[$producto->slug] = $producto;
        \Session::put('cart', $cart);
        

            $id= $producto->id;
            $p = Producto::where('id', '=', $id)->first();
            
            $prod = session('cart' . $id);
    
            if (!empty($prod)) { //si existe id
    
                $prod ->cantidad++;
    
            }

        return redirect()->route('cart-show');

    }
    //Delete item

    public function delete(Producto $producto)
    {
        $cart = \Session::get('cart');
        unset($cart[$producto->slug]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');


    }
    //Update item
    public function update(Producto $producto, $cantidad)
    {
        $cart = \Session::get('cart');
        $cart[$producto->slug]->cantidad = $cantidad;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
        
    } 
    //Trash cart
    public function trash()
    {
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }
    //Total
    private function total(){

        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precio * $item->cantidad;
        }

        return $total;

    }

    private function subtotal(){

        $cart = \Session::get('cart');
        $subtotal = 0;

        
        foreach($cart as $item){
            $subtotal+= $item->precio * $item->cantidad;
            
        }


        return $subtotal;

    }
}

