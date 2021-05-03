@extends('template.template');

@section('content') 
<form action="{{url ('produtos/add')}}" method="POST">
{{csrf_field()}}
    <input type="text" placeholder="Nome do produto" name="nome" id="nome">
    <input type="text" placeholder="Preço do produto" name="preco" id="´preco">
    <button type="submit" value="cadastrar">Cadastrar</button>
</form>

<table>
    <thead>
        <tr>
            <th scope="col">Produto</th>
            <th scope="col">Preço</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($produto as $prod)
        <tr>
            <td>{{$prod->nome}}</td>
            <td>{{$prod->preco}}</td>
            <td>
                <a href="produtos/{{$prod->id}}/editar"><button>Editar</button></a>
                <button>Deletar</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection