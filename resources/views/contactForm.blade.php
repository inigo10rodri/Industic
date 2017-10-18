@extends('layout')
@section('formularioContacto')

    <form class="form-horizontal" style="margin:0 auto" >
        <div class="form-group" align="center">
            <label>Email:</label>
            <input type="email"  placeholder="Email" name="correo">
        </div>
        <div class="form-group" align="center">
            <label>Nombre:</label>
            <input type="text"   placeholder="Nombre" name="nombre">
        </div>
        <div class="form-group" align="center">
            <label>Mensaje:</label>
            <input type="text"   placeholder="Mensaje" name="mensaje">
        </div>
        <div class="form-group" align="center">
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </form>

@endsection