@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ ('Estados') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a class="btn btn-success float-right" href="{{ route('estados.create') }}"> Criar Estado</a>
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
                                    <th>Sigla</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($estados as $estado)
                                <tr>
                                    <td>{{ $estado->nome }}</td>
                                    <td>{{ $estado->sigla }}</td>
                                    <td>
                                        <form action="{{ route('estados.destroy',$estado->id) }}" method="Post">
                                            <a class="btn btn-primary" href="{{ route('estados.edit',$estado->id) }}"><i class="fa fa-edit"></i> Editar</a>
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
                        {{ $estados->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection