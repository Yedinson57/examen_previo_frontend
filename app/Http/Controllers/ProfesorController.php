<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProfesorController extends Controller
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
        $profesores = $this->fetchDataFromApi($url . '/profesores');

        return view('profesor.index', compact('profesores'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $profesores = $this->fetchDataFromApi($url . '/profesores/' . $id);

        return view('profesor.show', compact('profesores'));
    }

    public function create()
    {
        return view('profesor.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/profesores', $request->all());

        return redirect()->route('profesor.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $profesor = $this->fetchDataFromApi($url . '/profesores/' . $id);
        return view('profesor.edit', compact('profesor'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/profesores/' . $id, $request->all());

        return redirect()->route('profesor.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/profesores/' . $id);
        return redirect()->route('profesor.index');
    }
}
