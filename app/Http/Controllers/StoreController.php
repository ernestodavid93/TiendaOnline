<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;

class StoreController extends Controller
{
    public function index()
    {

        $productos = Producto::all();
        //dd($productos);
        return view("Store.index", compact('productos'));
    }

    public function show($slug)
    {
        $producto = Producto::where('slug', $slug)->first();
        //dd($produto);
        return view('Store.show', compact('producto'));
    }
}
