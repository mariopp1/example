<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        //return "Bienevenidos a la página de cursos con el controlador";
        return view('cursos.index'); 
    }

    public function create(){
        //return "Bienevenidos a la página para crear cursos desde el controlador";
        return view('cursos.create');
    }

    public function show($curso){
        //return "Bienevenidos al curso $curso desde el controlador";
        return view('cursos.show', ['curso' => $curso]);
    }
}
