@extends('layouts.app')

@section('content')

<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Registrar Nueva Profesor</h4>
                        <p class="mb-0 mt-1 small opacity-75">Complete los datos solicitados a continuación</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('profesor.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control focus-ring"
                                    id="nombre"
                                    name="nombre"
                                    placeholder="Nombre del profesor"
                                    required>
                                <label for="nombre" class="text-secondary">Nombre del profesor</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control focus-ring"
                                    id="apellido"
                                    name="apellido"
                                    placeholder="Apellido del profesor"
                                    required>
                                <label for="apellido" class="text-secondary">Apellido del profesor</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number"
                                    class="form-control focus-ring"
                                    id="telefono"
                                    name="telefono"
                                    placeholder="Telefono del profesor"
                                    required>
                                <label for="telefono" class="text-secondary">Telefono del profesor</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number"
                                    class="form-control focus-ring"
                                    id="cedula"
                                    name="cedula"
                                    placeholder="Cedula del profesor"
                                    required>
                                <label for="cedula" class="text-secondary">Cedula del profesor</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Guardar Registro
                                </button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('profesor.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                        Revisar Registros
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection