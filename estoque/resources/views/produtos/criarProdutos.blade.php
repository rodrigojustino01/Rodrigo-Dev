@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Produto</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/cria/produtos') }}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nome do Produto:</font></font></label>
                                    <input type="text" name="product_name" class="form-control" required="required" autocomplete="product_name" autocomplete="product_name" autofocus="autofocus" placeholder="Digite o Nome do Produto" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-md-1">
                                <div class="form-group">
                                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Valor Total:</font></font></label>
                                    <input type="number" name="product_value_total" class="form-control" required="required" value="">
                                </div>
                            </div>
                            <div class="col-md-4 px-md-1">
                                <div class="form-group">
                                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Valor Unitário:</font></font></label>
                                    <input type="number" name="product_value_unitario" class="form-control"  value="">
                                </div>
                            </div>
                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quantidade:</font></font></label>
                                    <input type="number" name="product_quantidade" class="form-control" required="required" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-plus-square"></i>  Cadastrar</button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection