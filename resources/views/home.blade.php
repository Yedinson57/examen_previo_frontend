@extends('layouts.app')

@section('content')

<div class="container-fluid px-0 mb-5 rounded-3 overflow-hidden shadow-sm">
    <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1200&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Sena Tecnologico">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mt-4">
                    <h1 class="display-4 fw-bold text-uppercase" style="color: #39A900; text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Examen Home</h1>
                    <p class="fs-4 fw-medium text-white" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Bienvenido</p>
                    <a href="/profesor/create" class="btn btn-light fw-bold px-4 py-2 mt-2">Comenzar Registro</a>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1200&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Formacion Profesional">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mt-4">
                    <h1 class="display-4 fw-bold text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Conoce Ofertas Educativas</h1>
                    <p class="fs-4 fw-medium text-white-50" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Explora las diversas ofertas educativas que tiene Sena disponibles.</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80" class="d-block w-100 h-100 object-fit-cover" alt="Gestion de Aprendices">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mt-4">
                    <h1 class="display-4 fw-bold text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Seguimiento de Programas</h1>
                    <p class="fs-4 fw-medium text-white-50" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Consulta los nuevos programas que se encuentran disponibles.</p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <div class="position-relative" style="height: 500px;">
                    <div class="w-100 h-100 bg-dark opacity-50 position-absolute top-0 start-0 z-1"></div>
                    <img src="https://www.las2orillas.co/wp-content/uploads/2023/08/Servicio-Nacional-de-Aprendizaje-SENA.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gestion de Aprendices">
                </div>
                <div class="carousel-caption d-none d-md-block z-2 mt-4">
                    <h1 class="display-4 fw-bold text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Seguimiento de Anuncios</h1>
                    <p class="fs-4 fw-medium text-white-50" style="text-shadow: 1px 1px 3px rgba(0,0,0,0.8);">Consulta en tiempo anuncios sobre la institución.</p>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev z-3" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next z-3" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

@endsection