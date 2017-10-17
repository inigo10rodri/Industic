@extends('layout')

@section('content')

    <header class="masthead "  style="background-image: url('imagenes/industrial.jpg');margin-top: 0px; width: 1285px;height: 169px">
        <div class="header-content" >
            <div class="header-content-inner">
                <h1 align="center" style="color: whitesmoke">ZubIndustic</h1>
                <hr>
                <div class="form-group" align="center">
                    <input type="text"  placeholder="Search" >
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
                <h4 align="center" style="color: white">ZubIndustic ofrece un medio de comunicación para las empresas que fabrican o distribuyen productos industriales y que deseen acceder a nuevos mercados en internet. Añada su empresa gratis y gestione los datos de manera sencilla y rápida.</h4>
            </div>
        </div>
    </header>
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 align="center">Productos</h2>
                        <li>Torno</li>
                        <li>Carro motorizado</li>
                        <li>Rolltrailer</li>
                </div>
            </div>
        </div>
    </section>
    <section  style="background-color: orange">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto text-center">
                    <h2 align="center">Directorios</h2>
                        <a><li>Maquinas de proceso industrial</li></a>
                        <a><li>Servicios</li></a>
                        <a><li>Componentes</li></a>
                        <a><li>Suministros</li></a>
                        <a><li>Instalaciones</li></a>
                        <a><li>Equipamiento</li></a>
                </div>
            </div>
        </div>
    </section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Fotos -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="imagenes/ULMA.jpg" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img src="imagenes/sisma.jpg" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img src="imagenes/sacine.jpg" alt="" class="img-responsive">
            </div>
        </div>
        <!-- Control derecha izquierda -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection