<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tabela_livro;

class funcoescrud extends Controller
{
  public function listar()
  {
    $livros = tabela_livro::all();
    return view('listar',
    [
         'livros'=> $livros
     ]);
  }
  public function cadastrarlivros()
  {
    return view('cadastrarlivros');
  }


  public function enviarlivrosparaobanco(request $request)
  {
      $tabela_livro=new tabela_livro;
         $tabela_livro->livro=$request->livro;
         $tabela_livro->autor=$request->autor;
         $tabela_livro->preco=$request->preco;
         $tabela_livro->save();
         return redirect('/')->with('msg','cadastrado com susseso');
 
      }  


      public function deletarlivros($id)
      {

        tabela_livro::findOrFail($id)->delete();
    
        return redirect('/')->with('msg','livro deletado com susseso');
       
          }  

          public function editarlivro($id)
          {
            $livros = tabela_livro::findOrFail($id);
            return view('editar',
             [
                  'livros'=> $livros,
                 
              ]);
          }
          public function update(Request $request)
          {
            $data=$request->all();
            tabela_livro::findOrFail( $request->id)->update($data);
            return redirect('/')->with('msg','Livro editado com susseso');
          }
          
    

          


  
}
