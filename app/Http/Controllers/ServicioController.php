<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $servicios = DB::table('tb-servicio')
        ->join('tb-conductor', 'tb-servicio.id_conductor', '=', 'tb-conductor.id_conductor')
        ->select('tb-servicio.*',"tb-conductor.Nomb_conductor")
        ->get();
        return view('servicio.index', ['servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = DB::table('tb-conductor')
        ->orderBy('Nomb_conductor')
        ->get();
        return view('servicio.add', ['servicios' => $servicios]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new servicio();       
        $servicio->Fecha=$request->date;
        $servicio->id_conductor=$request->code;
        $servicio->cliente=$request->name;
        $servicio->save();

       $servicios = DB::table('tb-servicio')
       ->join('tb-conductor', 'tb-servicio.id_conductor', '=', 'tb-conductor.id_conductor')
       ->select('tb-servicio.*',"tb-conductor.Nomb_conductor")
       ->get();
      
       return view('servicio.index', ['servicios' => $servicios]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = servicio::find($id);
        $servicio->delete();

        $servicios = DB::table('tb-servicio')
        ->join('tb-conductor', 'tb-servicio.id_conductor', '=', 'tb-conductor.id_conductor')
        ->select('tb-servicio.*',"tb-conductor.Nomb_conductor")
        ->get();
        return view('servicio.index', ['servicios' => $servicios]);

    }
}
