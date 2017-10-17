<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


        <!-- Styles -->
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand glyphicon glyphicon-globe" href="index">ZubIndustic</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="presupuestoForm">Pedir presupuesto</a></li>
                    <li><a href="contactForm">Contacto</a></li>
                    <li><a href="loginForm"><span class="glyphicon glyphicon-log-in"></span>Log in</a></li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <section>
        @yield('content')
        @yield('formularioLogin')
        @yield('formularioContacto')
        @yield('formularioPresupuesto')
        @yield('userAdded')
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class= "col-lg-12 col-md-12 mx-auto" >
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://github.com/inigo10rodri/ZubIndustic">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://facebook.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>


