@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
 
<form action="/update/{{$livros->id}}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" value='{{$livros->livro}}' name='livro' class="form-control" id=""  placeholder="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Autor</label>
    <input type="text" name='autor' value='{{$livros->autor}}' class="form-control" id="" placeholder="Autor">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Preço</label>
    <input type="text" value='{{$livros->preco}}' name='preco' class="form-control" id="" placeholder="Preço">
  </div>

 <p></p>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>





@endsection

