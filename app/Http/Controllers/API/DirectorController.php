<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $director)
    {
        //
    }

    public function import() {
        $peliculas = \App\Models\Movie::all();
        foreach($peliculas as $peliculas) {
            $directorStr = $peliculas->director;
            $espacio = strpos($directorStr, ' ');
            $nombre = substr($directorStr, 0, $espacio);
            $apellidos = substr($directorStr, $espacio + 1);

            if(!Director::existsDirector($nombre, $apellidos)){
            $director = Director::create([
                'nombre' => $nombre,
                'apellidos' => $apellidos,
            ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        //
    }
}
