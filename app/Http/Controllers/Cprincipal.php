<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\models\Mempresas;

class Cprincipal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('principal/Vinicio');
    }
    public function fichas()
    {

        return view('empresas/Vfichas');

    }
}
