<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Beneficiario;
use App\Central;
use App\Sensor;
use App\SensorDato;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\Auth;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('control.beneficiario.list',$data);
    }
    

    public function test(){
        
        return response()->json(["hola","mundo"]);
    }

}
