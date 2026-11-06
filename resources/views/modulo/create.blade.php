@extends('layouts.app')

@section('content')

<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Registrar Módulo</h4>
                        <p class="mb-0 mt-1 small opacity-75">Añada un nuevo módulo de formación</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('modulo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-floating mb-4">
                                <input type="text" 
                                    class="form-control" 
                                    id="codigo" 
                                    name="codigo" 
                                    placeholder="Código del módulo" 
                                    required>
                                <label for="codigo" class="text-secondary">Código del Módulo</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="text" 
                                    class="form-control" 
                                    id="nombre" 
                                    name="nombre" 
                                    placeholder="Nombre del módulo" 
                                    required>
                                <label for="nombre" class="text-secondary">Nombre del Módulo</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="profesor_id" id="modulo_profesor_id" class="form-select" required>
                                    <option value="" selected disabled>Seleccione un Profesor...</option>
                                    @foreach ($profesores as $profesor)
                                        <option value="{{ $profesor['id'] }}">{{ $profesor['nombre'] }}</option>
                                    @endforeach
                                </select>
                                <label for="modulo_profesor_id" class="text-secondary">Profesor Asociado</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-5">
                                <a href="/" class="btn btn-outline-secondary px-4 py-2 fw-medium rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">
                                    Guardar Módulo
                                </button>
                            </div>
                            
                        </form>
                    </div>
                    <a href="{{ route('modulo.index') }}" class="btn text-white fw-bold px-4 py-2 shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #39A900;">
                        Revisar Registros
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection