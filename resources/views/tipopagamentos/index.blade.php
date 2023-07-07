@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ __('Tipo Pagamentos') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a class="btn btn-success float-right" href="{{ route('tipopagamentos.create') }}"> Criar Tipo Pagamento</a>
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
                                    <th>Descrição Tipo Pagamento</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tipopagamentos as $tipopagamento)
                                <tr>
                                    <td>{{ $tipopagamento->descr_tipo_pagamento }}</td>
                                    <td>
                                        <form action="{{ route('tipopagamentos.destroy',$tipopagamento->id) }}" method="Post">
                                            <a class="btn btn-primary" href="{{ route('tipopagamentos.edit',$tipopagamento->id) }}"><i class="fa fa-edit"></i> Editar</a>
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
                        {{ $tipopagamentos->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection






<!---
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example Tutorial</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('tipopagamentos.create') }}"> Criar Tipo Pagamento</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Descrição</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipopagamentos as $tipopagamento)
                <tr>
                    <td>{{ $tipopagamento->id }}</td>
                    <td>{{ $tipopagamento->descr_tipo_pagamento }}</td>
                    <td>
                        <form action="{{ route('tipopagamentos.destroy',$tipopagamento->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('tipopagamentos.edit',$tipopagamento->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!! $tipopagamentos->links() !!}
</div>
--->
