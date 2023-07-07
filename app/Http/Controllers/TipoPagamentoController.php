<?php

namespace App\Http\Controllers;
use App\Models\TipoPagamento;
use Illuminate\Http\Request;

class TipoPagamentoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $tipopagamentos = TipoPagamento::orderBy('id','desc')->paginate(9);
        return view('tipopagamentos.index', compact('tipopagamentos'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('tipopagamentos.create');
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
            'descr_tipo_pagamento' => 'required',
        ]);
        
        TipoPagamento::create($request->post());

        return redirect()->route('tipopagamentos.index')->with('success','Tipo Pagamento criado com sucesso!');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\TipoPagamento  $tipopagamento
    * @return \Illuminate\Http\Response
    */
    public function show(TipoPagamento $tipopagamento)
    {
        return view('tipopagamentos.show',compact('tipopagamento'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\TipoPagamento  $tipopagamento
    * @return \Illuminate\Http\Response
    */
    public function edit(TipoPagamento $tipopagamento)
    {
        return view('tipopagamentos.edit',compact('tipopagamento'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\TipoPagamento  $tipopagamento
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, TipoPagamento $tipopagamento)
    {
        $request->validate([
            'descr_tipo_pagamento' => 'required',
        ]);
        
        $tipopagamento->fill($request->post())->save();
        
        return redirect()->route('tipopagamentos.index')->with('success','Tipo Pagamento atualizado com sucesso!');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\TipoPagamento  $tipopagamento
    * @return \Illuminate\Http\Response
    */
    public function destroy(TipoPagamento $tipopagamento)
    {
        $tipopagamento->delete();
        return redirect()->route('tipopagamentos.index')->with('success','Tipo Pagamento: '. $tipopagamento->descr_tipo_pagamento .' excluído com sucesso!');
    }
}
