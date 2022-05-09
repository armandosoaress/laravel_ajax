@extends('layouts.main')

@section('titulo','inicio')

@section('corpo')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>


<script>
$(function(){
$('form[name="livroscad"]').submit(function(event){
  event.preventDefault();
  $.ajax({
    url:"{{route('enviarlivrosparabanco') }}",
    type:"POST",
    data:$(this).serialize(),
    dataType:'json',
    success:function (response){
      console.log(response);
    }
       });     
      listar();
    });
  
})
function listar() {
  $.ajax({url: "/", 
    success: function(result){
    $("body").html(result);
   
  }
});
}


</script>

<div id="div1"></div>

<form  name='livroscad'>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nome do livro</label>
    <input type="text" name='livro' class="form-control" id="livro"  placeholder="nome do livro">
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
  <button   type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<div></div>

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

