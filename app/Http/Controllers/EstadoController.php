<?php

namespace App\Http\Controllers;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $estados = Estado::orderBy('id','desc')->paginate(9);
        return view('estados.index', compact('estados'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('estados.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
        ]);
        
        Estado::create($request->post());

        return redirect()->route('estados.index')->with('success','Estado criado com sucesso!');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\estado  $estado
    * @return \Illuminate\Http\Response
    */
    public function show(Estado $estado)
    {
        return view('estados.show',compact('estado'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Estado  $estado
    * @return \Illuminate\Http\Response
    */
    public function edit(Estado $estado)
    {
        return view('estados.edit',compact('estado'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\estado  $estado
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Estado $estado)
    {
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
        ]);
        
        $estado->fill($request->post())->save();

        return redirect()->route('estados.index')->with('success','Estado atualizado com sucesso!');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Estado  $estado
    * @return \Illuminate\Http\Response
    */
    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estados.index')->with('success','Estado  '. $estado->nome .' excluído com sucesso!');
    }
}
