<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $pacientes = Paciente::orderBy('id','desc')->paginate(9);
        $modelPaciente = new Paciente();
        foreach($pacientes as $paciente){
            $idades[] = $modelPaciente->calculaIdade($paciente->data_nascimento);
        }
        
        
        return view('pacientes.index', compact('pacientes', 'idades'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $pacientes = ["Masculino", "Feminino"];
        return view('pacientes.create', compact('pacientes'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
        ]);
        
        Paciente::create($request->post());

        return redirect()->route('pacientes.index')->with('success','Paciente criado com sucesso!');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\paciente  $paciente
    * @return \Illuminate\Http\Response
    */
    public function show(Paciente $paciente)
    {
        return view('pacientes.show',compact('paciente'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Paciente  $paciente
    * @return \Illuminate\Http\Response
    */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit',compact('paciente'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\paciente  $paciente
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
        ]);
        
        $paciente->fill($request->post())->save();

        return redirect()->route('pacientes.index')->with('success','Paciente atualizado com sucesso!');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Paciente  $paciente
    * @return \Illuminate\Http\Response
    */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success','Paciente  '. $paciente->nome .' excluído com sucesso!');
    }
}
