@extends('layouts.app')

@section('content')
  @if(isset($produtos))
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Resultados</h3>
            </div>
            
            <div class="panel-body">
                <table class="table table-hover table-striped" id="myTable">
                    <thead class="">
                        <tr>
                            <th>Nome</th>
                            <th>Valor Total</th>
                            <th>Valor Unitário</th>
                            <th>Quantidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{ $produto->product_name }}</td>
                                <td>{{ $produto->product_value_total }}</td>
                                <td>{{ $produto->product_value_unitario }}</td>
                                <td>{{ $produto->product_quantidade }}</td>
                                <td><a href='{{ url("alterar/produtos/$produto->id") }}' ><button class="btn btn-warning" style="text-decoration: none; color: #fff;"><i class="fa fa-pencil" aria-hidden="true"></i>  Alterar</button></a>
                                <a href='{{ url("excluir/produtos/$produto->id") }}'><button class="btn btn-danger" style="text-decoration: none; color: #fff;"> <i class="fa fa-trash-o" aria-hidden="true"></i>  Excluir</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection