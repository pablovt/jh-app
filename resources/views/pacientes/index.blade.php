@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ ('Pacientes') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a class="btn btn-success float-right" href="{{ route('pacientes.create') }}"> Criar Paciente</a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@if ($message = Session::get('success'))
<div class="container-fluid">
    <div class="col-sm-12">
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    </div>
</div>  
@endif
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Celular</th>
                                    <th>Idade</th>
                                    <th>Sexo</th>
                                    <th>Ativo</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($pacientes as $key=>$paciente)
                                <tr>
                                    <td>{{ $paciente->nome }}</td>
                                    <td>{{ $paciente->celular }}</td>
                                    <td>{{ $idades[$key] }}</td>
                                    <td>{{ $paciente->sexo }}</td>
                                    <td>{{ $paciente->ativo }}</td>
                                    <td>
                                        <form action="{{ route('estados.destroy',$paciente->id) }}" method="Post">
                                            <a class="btn btn-primary" href="{{ route('estados.edit',$paciente->id) }}"><i class="fa fa-edit"></i> Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer clearfix">
                        {{ $pacientes->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection