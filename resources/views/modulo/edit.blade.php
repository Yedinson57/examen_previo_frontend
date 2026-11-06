@extends('layouts.app')

@section('content')

<div class="py-5 rounded-4" style="background-color: #f4f6f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    
                    <div class="card-header text-white text-center py-4" style="background-color: #39A900; border-bottom: none;">
                        <h4 class="mb-0 fw-bold">Actualizar Modulo</h4>
                        <p class="mb-0 mt-1 small opacity-75">Modifique la información base del complejo o sede</p>
                    </div>
                    
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form action="{{ route('modulo.update', $modulo['id']) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="codigo" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Código del Módulo</label>
                                <input type="text" 
                                    id="codigo"
                                    name="codigo" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Código del módulo"
                                    value="{{ old('codigo', $modulo['codigo']) }}" 
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="nombre" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Nombre del módulo</label>
                                <input type="text" 
                                    id="nombre"
                                    name="nombre" 
                                    class="form-control form-control-lg bg-light border-0 rounded-3 text-dark fw-medium" 
                                    placeholder="Ciudad o complejo regional"
                                    value="{{ old('nombre', $modulo['nombre']) }}" 
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="profesor_id" class="form-label text-muted small fw-bold text-uppercase tracking-wider">Profesor asociado</label>
                                <select name="profesor_id" id="profesor_id" class="form-select form-select-lg bg-light border-0 rounded-3 text-dark fw-medium" required>
                                    @foreach($profesores as $profesor)
                                    <option value="{{ $profesor['id'] }}" {{ old('profesor_id', $modulo['profesor_id']) == $profesor['id'] ? 'selected' : '' }}>
                                        {{ $profesor['nombre'] }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr class="my-4 opacity-25">

                            <div class="d-flex justify-content-center align-items-center gap-2 mt-4">
                                <a href="{{ url()->previous() }}" class="btn btn-light border fw-bold px-4 py-2 rounded-3">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-3 shadow-sm" style="background-color: #39A900;">
                                    Actualizar Centro
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