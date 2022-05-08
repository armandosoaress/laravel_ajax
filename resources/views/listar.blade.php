@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">autor</th>
      <th scope="col">preço</th>
      <th scope="col">Deletar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
  
 
@foreach($livros as $livro)

<tr>
      <th scope="row">{{$livro->id}}</th>
      <td>{{$livro->livro}}</td>
      <td>{{$livro->autor}}</td>
      <td>{{$livro->preco}}</td>
      <td>  <button type="button" class="btn btn-success"><a href="editar/{{$livro->id}}">Editar</a></button>
    </td>
      
      <td>
   
        <form action="/deletar/{{$livro->id}}" method="post">
          @csrf
          @method('delete')
<button type="submit" class="btn btn-danger">Deletar</button>
        
        </form></td>
    </tr>





@endforeach
</tbody>
</table>


@endsection

