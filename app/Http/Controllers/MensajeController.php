<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    //Función para mostrar el formulario donde se crearan los mensajes
    public function create()
    {
        return view('mensajes.create');
    }

    //Función para almacenar los mensajes que son enviados por los usuarios
    public function store()
    {
        
        $mensaje = new Mensaje();
        // Creation of the values that we will save
        $mensaje->nombre = request('nombre');
        $mensaje->correo = request('correo');
        $mensaje->mensaje = request('mensaje');

        //Save the values in DB
        $mensaje->save();

        
        return redirect('/mensajes/crear')->with('mensaje','Tu mensaje se ha enviado con éxito, pronto nos pondremos en contacto con usted.');
    }
}
