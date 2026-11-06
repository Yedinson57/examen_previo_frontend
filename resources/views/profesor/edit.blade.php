@extends('layouts.app')

@section('content')

<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Actualizar Profesor</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique los parámetros del profesor seleccionado</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('profesor.update', $profesor['id']) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="nombre" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Nombre del Profesor</label>
                                <input type="text" 
                                    id="nombre"
                                    name="nombre" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Ingrese el nombre oficial"
                                    value="{{ old('nombre', $profesor['nombre']) }}" 
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="apellido" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Apellido del Profesor</label>
                                <input type="text" 
                                    id="apellido"
                                    name="apellido" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Ingrese el apellido oficial"
                                    value="{{ old('apellido', $profesor['apellido']) }}" 
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="telefono" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Telefono del Profesor</label>
                                <input type="number" 
                                    id="telefono"
                                    name="telefono" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Ingrese el telefono oficial"
                                    value="{{ old('telefono', $profesor['telefono']) }}" 
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="cedula" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Cedula del Profesor</label>
                                <input type="number" 
                                    id="cedula"
                                    name="cedula" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Ingrese el cedula oficial"
                                    value="{{ old('cedula', $profesor['cedula']) }}" 
                                    required>
                            </div>

                            <hr class="my-4 opacity-25">

                            <div class="d-flex justify-content-center align-items-center gap-2 mt-4">
                                <a href="{{ url()->previous() }}" class="btn btn-light border fw-bold px-4 py-2 rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3 shadow-sm" style="background-color: #39A900;">
                                    Actualizar Profesor
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection