@extends('layout')

@section('formularioLogin')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" style="margin:0 auto" method=post action="usuarioAnadido">
    {{ csrf_field()}}
    <div class="form-group" align="center">
        <label>Email:</label>
        <input type="email"  placeholder="Email" name="correo"><br>
    </div>
    <div class="form-group" align="center">
        <label>Password:</label>
        <input type="password"   placeholder="Contraseña" name="contrasena"><br>
    </div>
    <div class="form-group" align="center">
        <button type="submit" class="btn btn-default">Entrar</button>
    </div>
</form>

@endsection


