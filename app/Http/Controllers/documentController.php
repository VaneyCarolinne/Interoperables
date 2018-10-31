<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class documentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() //esto vailida si el usuario esta logueado para mostrar lo demas
    {
        $this->middleware('auth');
    }

    public function index() /// nos devuelve todos los documentos
    {
    	return 'hola, este es el controlador index';
    }

    public function create() /// nos devuelve la vista del formularion para insertar documento
    {
    	return view('master');
    }

    public function search() /// nos devuelve la vista del formularion para buscar documento
    {
      return view('master');
    }

    public function all() /// nos devuelve la vista del formularion para buscar documento
    {
      return view('master');
    }

    public function store() /// recibe el request de create y guarda la informacion en la base de datos
    {

    }

}
