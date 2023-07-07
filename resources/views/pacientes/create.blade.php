@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ ('Criar Paciente') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a class="btn btn-primary float-right" href="{{ route('pacientes.index') }}" enctype="multipart/form-data"> Voltar</a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

@if(session('status'))
<div class="container-fluid">
    <div class="col-sm-12">
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    </div>
</div>
@endif

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body p-0">
                    <form action="{{ route('pacientes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>Nome:</strong>
                                    <input type="text" autocomplete="off" name="nome" class="form-control" placeholder="Nome paciente">
                                    @error('nome')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <strong>Celular:</strong>
                                    <input type="text" autocomplete="off" name="celular" class="form-control" placeholder="Nome paciente">
                                    @error('nome')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <strong>Sexo:</strong>
                                    <select class="form-control">
                                        <option value="">-- Selecione --</option>
                                        @foreach ($pacientes as $data)
                                        <option value="{{$data}}">
                                            {{$data}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>                
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection