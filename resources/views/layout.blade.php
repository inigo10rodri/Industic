<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="css/bootstrap.min.css">


        <!-- Styles -->
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ZubIndustic</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="loginForm"><span class="glyphicon glyphicon-log-in"></span>Log in</a></li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <header class="masthead">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 class="h1" align="center">ZubIndustic</h1>
                <hr>
                <div class="form-group" align="center">
                    <input type="text" class="form-control " placeholder="Search">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
                <p align="center">ZubIndustic ofrece un medio de comunicación para las empresas que fabrican o distribuyen productos industriales y que deseen acceder a nuevos mercados en internet. Añada su empresa gratis y gestione los datos de manera sencilla y rápida.</p>

            </div>
        </div>
    </header>
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 align="center">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a class="btn btn-default btn-xl js-scroll-trigger" >Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="imagenes/ULMA.jpg"  class="img-responsive " width="800px" height="200px">
            </div>

            <div class="item">
                <img src="imagenes/sisma.jpg" class="img-responsive" width="800px" height="200px">
            </div>

            <div class="item">
                <img src="imagenes/sacine.jpeg" class="img align" width="800px" height="200px" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <footer>
        <div class="row">
            <div class= "col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center" >
                Aplicacion web © Iñigo Rodriguez
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>


