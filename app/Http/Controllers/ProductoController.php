<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Función para mostrar todos los productos
    public function index()
    {
        //Hacemos un request de la data usando eloquent
        $productos = Producto::all();
        //Retornamos hacia la vista todos los productos
        return view('productos.index',[
            'productos' => $productos
        ]);
    }

    //Función para mostrar un único producto
    public function show($id)
    {
        
    }
}
