<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutoController extends Controller
{
    private $objproduto;
    
    public function __construct(){
        $this->objproduto= new Produtos();
    }

    public function index(){
        $produto=$this->objproduto->all();
        return view('index',compact('produto'));
    }

    public function cadastrar(Request $request){
        $produto= new Produtos();
        $produto = $produto ->create($request->all());
        return redirect('/produtos');
    }

    public function editar($id){
        $produto = Produtos::findOrFail($id);
        return view('editar',['produto'=>$produto]);
    }

    public function atualizar(Request $request, $id){
        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());
        return redirect('/produtos');
    }
}
