<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ModuloController extends Controller
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
        $modulos = $this->fetchDataFromApi($url . '/modulos');

        return view('modulo.index', compact('modulos'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $modulos = $this->fetchDataFromApi($url . '/modulos/' . $id);

        return view('modulo.show', compact('modulos'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $profesores = Http::get($url .'/profesores')->json();

        return view('modulo.create',compact('profesores'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/modulos', $request->all());
        return redirect()->route('modulo.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $profesores = Http::get($url .'/profesores')->json();
        $modulo = $this->fetchDataFromApi($url . '/modulos/' . $id);

        return view('modulo.edit', compact('modulo','profesores'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/modulos/' . $id, $request->all());

        return redirect()->route('modulo.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/modulos/' . $id);
        return redirect()->route('modulo.index');
    }
}
