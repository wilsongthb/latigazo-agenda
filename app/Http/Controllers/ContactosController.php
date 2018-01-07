<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Contactos::get());

        if(request()->get('buscar')){
            $buscar = request()->buscar;
            $contactos = Contactos::
                where('nombre', 'LIKE', "%$buscar%")
                ->orWhere('paterno', 'LIKE', "%$buscar%")
                ->orWhere('materno', 'LIKE', "%$buscar%")
                // ->toSql();
                ->get();
            dd($contactos, "%$buscar%");
        }
        // if($)
        // $contactos = Contactos::get();
        // $contactos = Contactos::get();

        // $contactos = Contactos
        //     ::where('nombre', 'LIKE', "'%$buscar%'")
        //     // ->toSql();
        //     // dd($contactos, $buscar);
        //     ->get();

        
        
        return view('contactos', [
            'contactos' => $contactos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fila = new Contactos;

        $fila->nombre = $request->nombre;
        $fila->paterno = $request->paterno;
        $fila->materno = $request->materno;
        $fila->cargo = $request->cargo;
        $fila->correo = $request->correo;
        $fila->oficina = $request->oficina;
        $fila->telefono = $request->telefono;
        $fila->celular = $request->celular;
        $fila->ip = $request->ip;

        // dd($request->ip());

        $fila->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd(Contactos::find($id));
        return view('contactos_detalle', [
            'contacto' => Contactos::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('contactos_editar', [
            'contacto' => Contactos::find($id)
        ]);
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
        $fila = Contactos::find($id);

        $fila->nombre = $request->nombre;
        $fila->paterno = $request->paterno;
        $fila->materno = $request->materno;
        $fila->cargo = $request->cargo;
        $fila->correo = $request->correo;
        $fila->oficina = $request->oficina;
        $fila->telefono = $request->telefono;
        $fila->celular = $request->celular;
        $fila->ip = $request->ip;

        $fila->save();
        // return redirect()->back();
        return redirect('contactos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contactos::destroy($id);
        return redirect()->back();
    }
}
