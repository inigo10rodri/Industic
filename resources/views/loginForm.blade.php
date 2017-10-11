    <link rel="stylesheet" href="css/bootstrap.min.css">
    <form class="navbar-form checkbox-inline form-inline" method=post action="/loginForm">
        {{ csrf_field()}}
        <label><span class="glyphicon glyphicon-user"></span>Email:</label>
        <input type="email"  placeholder="Email" name="email"><br>
        <label><span class="glyphicon glyphicon-lock"></span>Password:</label>
        <input type="password"   placeholder="Contraseña" name="password"><br>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div><br>
        <button type="submit" class="btn btn-default">Entrar</button>
    </form>
    <script src="js/bootstrap.min.js"></script>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
