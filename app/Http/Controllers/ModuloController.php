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
        return view('modulo.create');
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
        $modulo = $this->fetchDataFromApi($url . '/modulos/' . $id);

        return view('modulo.edit', compact('modulo'));
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
