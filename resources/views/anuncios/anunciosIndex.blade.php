@extends ('layouts\app')

@section('title')
Pesquisa
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h5 class="panel-title">Resultado da Pesquisa:</h5>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-secondary">
                        <thead class="thead thead-dark">
                            <tr>
                                <th>Título</th>
                                <th>Data</th>
                                <th>Tipo de Contrato</th>
                                <th>Ver Mais</th>
                                <th>Reportar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $add)
                            <tr>
                                <td align="center">{{$add->titulo}}</td>
                                <td align="center">{{$add->created_at}}</td>
                                <td align="center">{{$add->tipo}}</td>
                                <form method="get" action="{{ url('verMais', [$add->id]) }}">
                                    @csrf
                                    <td align="center"> <button type="submit" class="btn btn-outline-success">Ver Mais</button> </td>
                                </form>
                                <form method="get" action="{{ url('report', [$add->id]) }}">
                                    @csrf
                                    <td align="center"> <button type="submit" class="btn btn-outline-danger">Report</button> </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($message=Session::get('report'))
                <div class="alert alert-info">
                    <p>{{$message}}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>




@endsection