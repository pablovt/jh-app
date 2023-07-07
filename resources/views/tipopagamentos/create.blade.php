@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ ('Criar Tipo de Pagamento') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a class="btn btn-primary float-right" href="{{ route('tipopagamentos.index') }}" enctype="multipart/form-data"> Voltar</a>
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
                    <form action="{{ route('tipopagamentos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Descrição Tipo Pagamento:</strong>
                                    <input type="text" name="descr_tipo_pagamento" class="form-control" placeholder="Tipo de pagamento">
                                    @error('descr_tipo_pagamento')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
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


<!---
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Adicionar Tipo Pagamento</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tipopagamentos.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('tipopagamentos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descr. Tipo Pagamento:</strong>
                        <input type="text" name="descr_tipo_pagamento" class="form-control" placeholder="Tipo de pagamento">
                        @error('descr_tipo_pagamento')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>
--->