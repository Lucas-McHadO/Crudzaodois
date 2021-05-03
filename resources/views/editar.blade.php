@if(Request::is('*/editar'))
<form action="{{url('/produtos/atualizar')}}/{{$produto->id}}" method="post">
@csrf
<label>Nome do Produto</label>
<input type="text" name="nome" value="{{$produto->nome}}">
<br>
<label>Preço do Produto</label>
<input type="text" name="preco" value="{{$produto->preco}}">
<br>
<button type="submit" >Atualizar</button>
</form>
@endif