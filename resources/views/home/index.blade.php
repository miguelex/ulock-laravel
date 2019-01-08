@extends('layouts.master')

@section('contenido')

<div class="container">
        <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
                <li data-target="#slider-principal" data-slide-to="1"></li>
                <li data-target="#slider-principal" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset("assets/img/slide_01.jpg")}}" class="d-block img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h3 class="text-uppercase">@lang('header.proximamante')</h3>-->
                    </div>
                </div>
                <!--.carousel-item-->
                <div class="carousel-item">
                    <img src="{{ asset("assets/img/slide_02.jpg")}}" class="d-block img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h3 class="text-uppercase">@lang('header.proximamante')</h3>-->
                    </div>
                </div>
                <!--.carousel-item-->
                <div class="carousel-item">
                    <img src="{{ asset("assets/img/slide_03.jpg")}}" class="d-block img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                        <!--<h3 class="text-uppercase">@lang('header.proximamante')</h3>-->
                    </div>
                </div>
                <!--.carousel-item-->
            </div>
            <!--.carousel-inner-->

            <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a href="#slider-principal" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>

        </div>
        <!--#slider-principal-->
    </div>
@endsection