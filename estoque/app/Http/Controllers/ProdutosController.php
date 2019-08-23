<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutosModel;


class ProdutosController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $produtos = \App\ProdutosModel::all();
        return view('produtos.buscarProdutos', ['produtos' => $produtos]);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('produtos.criarProdutos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $produto = new \App\ProdutosModel;
            $produto->product_name = $request->get('product_name');
            $produto->product_value_total = $request->get('product_value_total');
            $produto->product_value_unitario = $request->get('product_value_unitario');
            $produto->product_quantidade = $request->get('product_quantidade');
        $produto->save();
        
        return redirect('/buscar/produtos')->with('success', 'Escola Cadastrada Com Sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $alterarProduto = \App\ProdutosModel::find($id);

        return view('produtos.alterarProduto', ['alterarProduto' => $alterarProduto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        $produto =  \App\ProdutosModel::find($id);
        $request->validate([
            'product_name' => 'required|max:255',
            'product_value_total' => 'required|max:255',
            'product_value_unitario' => 'required|max:255',
            'product_quantidade' => 'required|max:255'

        ]);

            $produto->product_name = $request->get('product_name');
            $produto->product_value_total = $request->get('product_value_total');
            $produto->product_value_unitario = $request->get('product_value_unitario');
            $produto->product_quantidade = $request->get('product_quantidade');
        $produto->save();

        return redirect('/buscar/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
       
        $produto = \App\ProdutosModel::find($id)->delete();

        return redirect('/buscar/produtos')->with('success', 'Dados Deletados Com Sucesso!');
    }
}
