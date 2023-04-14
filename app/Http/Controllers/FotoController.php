<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['fotos']=Foto::paginate(3);
        return view('foto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foto.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Iluminate\Http\Request $request
     * @return \Iluminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        /* $datosFoto = request()->all(); */
        $datosFoto = request()->except('_token');
        
        if($request->hasFile('Foto')){
            $datosFoto['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        
        Foto::insert($datosFoto);
        return response()->json($datosFoto);
    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $foto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foto $foto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Foto::destroy($id);
        return redirect('empleado');
    }
}
