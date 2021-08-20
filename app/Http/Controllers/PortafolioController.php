<?php

namespace App\Http\Controllers;

use App\Portafolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortafolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolios = Portafolio::get();
        //
        return view('admins.portafolio.index', compact('portafolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.portafolio.create');
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
        $data = $request->validate([
            'titulo' => 'required',
            'imagen' => 'required|image',
            'descripcion' => 'required',
            'url' => 'required'
        ]);

        $ruta_imagen = $request['imagen']->store( 'upload-paginas', 'public' );

        DB::table('portafolios')->insert([
            'titulo' => $data['titulo'],
            'imagen' => $ruta_imagen,
            'descripcion' => $data['descripcion'],
            'url' => $data['url'],
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('/admin/portafolio?register_portfolio=1');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portafolio $portafolio)
    {
        //
        return view('admins.portafolio.edit', compact('portafolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portafolio $portafolio)
    {
        //
        $data = $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required'
        ]);

        $portafolio->titulo = $data['titulo'];
        $portafolio->descripcion = $data['descripcion'];
        $portafolio->url = $data['url'];

        if(request('imagen')) {
            $ruta_imagen = $request['imagen']->store( 'upload-paginas', 'public' );

            $portafolio->imagen = $ruta_imagen;
        }

        $portafolio->save();

        return redirect('/admin/portafolio?register_portfolio=2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
        //
        $portafolio->delete();

        return redirect('/admin/portafolio?register_portfolio=3');
    }
}
