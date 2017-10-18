<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function anadirUsuario(){
        //Validamos que el coreo solamente unico en la tabla.
        $this->validate(\request(),['correo' => "bail|required|string|unique:usuarios"]);
        $this->validate(\request(),['contrasena' => "bail|required|string"]);
        $correoUsuario = request()->get('correo');
        $contrasenaUsuario = request()->get('contrasena');
        $usuario = new Usuario();

        $usuario->correo=$correoUsuario;
        $usuario->contrasena=$contrasenaUsuario;

        $usuario->save();

        return(view('usuarioAnadido'));
    }
}
