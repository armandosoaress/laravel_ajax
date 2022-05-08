@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="enviarlivrosparaobanco" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name='livro' class="form-control" id=""  placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Autor</label>
    <input type="text" name='autor' class="form-control" id="" placeholder="Autor">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço</label>
    <input type="text" name='preco' class="form-control" id="" placeholder="Preço">
  </div>

 <p></p>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


@endsection

