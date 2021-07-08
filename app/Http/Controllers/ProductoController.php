<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    //Función para mostrar todos los productos
    public function adminIndex()
    {
        $productos = DB::table('productos')
        ->join('users', 'users.id', '=', 'productos.user_id')
        ->select('productos.*', 'users.name')
        ->get();

        return view('productos.admin',[
            'productos' => $productos
        ]);
    }

    //Función para mostrar un único producto
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return $producto;
    }

    public function store(Request $request)
    {   
        $producto = new Producto();
        // Creation of the values that we will save
        $producto->nombre = request('nombre');
        $producto->precio = request('precio');
        $producto->detalle = request('detalle');
        $producto->user_id = Auth::user()->id;
        //Subir la imagen al server
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $extension = $imagen->getClientOriginalExtension();
            $imgName = time().".".$extension;
            $imagen->move('uploads/img/productos',$imgName);
            $producto->url_imagen = $imgName;
        }
        
        $producto->save();

        return redirect('/productos/admin')->with('message','Se ha añadido el nuevo producto con éxito!');
    }
}
