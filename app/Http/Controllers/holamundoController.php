<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resources\Views\holamundo;
//use Illuminate\Http\Response;

class holamundoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('holamundo');
    }

    public function show($id)
    {
        return 'Hola Mundo';
    }

    public function store(Request $request)
    {
        # code...
    }

    public function update(Request $request, $id)
    {
        # code...
    }

    public function destroy(Request $request, $id)
    {
        # code...
    }
}
