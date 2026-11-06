<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {

        $url = env('URL_SERVER_API');
        $alumnos = $this->fetchDataFromApi($url . '/alumnos');

        return view('alumno.index', compact('alumnos'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $alumnos = $this->fetchDataFromApi($url . '/alumnos/' . $id);

        return view('alumno.show', compact('alumnos'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $modulos = Http::get($url .'/modulos')->json();

        return view('alumno.create',compact('modulos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'fecha_nac' => 'required|date',
            'expediente' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'modulo_id' => 'required|integer|min:1',
        ]);

        $url = env('URL_SERVER_API');

        $file = $request->file('imagen');

        $response = Http::attach(
            'imagen',file_get_contents($file->getRealPath()),
            $file->getClientOriginalName())->post(env('URL_SERVER_API') . '/alumnos',[
            'nombre' => $request->nombre, 
            'apellidos' => $request->apellidos, 
            'fecha_nac' => $request->fecha_nac, 
            'expediente' => $request->expediente, 
            'modulo_id' => $request->modulo_id
            ]);

        return redirect()->route('alumno.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $modulos = Http::get($url .'/modulos')->json();
        $alumno = $this->fetchDataFromApi($url . '/alumnos/' . $id);

        return view('alumno.edit', compact('alumno','modulos'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/alumnos/' . $id, $request->all());

        return redirect()->route('alumno.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/alumnos/' . $id);
        return redirect()->route('alumno.index');
    }
}
