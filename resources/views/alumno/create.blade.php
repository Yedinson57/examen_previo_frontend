@extends('layouts.app')

@section('content')

<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Registrar Alumno</h4>
                        <p class="mb-0 mt-1 small opacity-75">Añada un nuevo Alumno/p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('alumno.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-floating mb-4">
                                <input type="text" 
                                    class="form-control" 
                                    id="nombre" 
                                    name="nombre" 
                                    placeholder="Nombre del Alumno" 
                                    required>
                                <label for="nombre" class="text-secondary">Nombre del Alumno</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="text" 
                                    class="form-control" 
                                    id="apellidos" 
                                    name="apellidos" 
                                    placeholder="Apellidos del Alumno" 
                                    required>
                                <label for="apellidos" class="text-secondary">Apellidos del Alumno</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="date" 
                                    class="form-control" 
                                    id="fecha_nac" 
                                    name="fecha_nac" 
                                    placeholder="Fecha de nacimiento del Alumno" 
                                    required>
                                <label for="fecha_nac" class="text-secondary">Fecha de nacimiento</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="text" 
                                    class="form-control" 
                                    id="expediente" 
                                    name="expediente" 
                                    placeholder="Expediente del Alumno" 
                                    required>
                                <label for="expediente" class="text-secondary">Expediente del Alumno</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="modulo_id" id="alumno_modulo_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione un modulo...</option>
                                    @foreach ($modulos as $modulo)
                                        <option value="{{ $modulo['id'] }}">{{ $modulo['nombre'] }}</option>
                                    @endforeach
                                </select>
                                <label for="alumno_modulo_id" class="text-secondary">Modulo Asociado</label>
                            </div>

                            <label class="form-label">Imagen</label>
                            <input type="file" name="imagen" class="form-control" accept="image/*">

                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Guardar Alumno
                                </button>
                            </div>
                            
                        </form>
                    </div>
                    <a href="{{ route('alumno.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                        Revisar Registros
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection