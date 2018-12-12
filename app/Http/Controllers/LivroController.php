<?php

namespace Atividade\Http\Controllers;

use Atividade\Livro;
use Atividade\Autor;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $livro = Livro::select('autors.nome as nome_autor','livros.*')->join('autors','livros.autor_id','=','autors.id')->paginate(20);

        return view('livro.index',["livro"=>$livro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autor = Autor::all();
        return view('livro.create',["autor"=>$autor]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|unique:livros|max:255',
            'autor_id' => 'required',
            'quantidade' => 'required',
            'preco' => 'required|max:12',
        ]);

        $livro = new Livro;
        $livro->nome = $request->nome;
        $livro->autor_id = $request->autor_id;
        $livro->quantidade = $request->quantidade;
        $livro->preco = $request->preco;
        $livro->save();
        return redirect(route('livro_index'))->with('msg', 'Livro cadastrado com sucesso!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro,$id)
    {

         $livro = Livro::where('id',$id)->first();
         $autor = Autor::all();

         return view('livro.edit',['livro'=>$livro,'autor'=>$autor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'nome' => 'required|unique:livros|max:255',
            'autor_id' => 'required',
            'quantidade' => 'required',
            'preco' => 'required|max:12',
        ]);
        $livro = Livro::find($request->id);
        $livro->nome = $request->nome;
        $livro->update();
        return redirect(route('livro_index'))->with('msg', 'Livro atualizado com sucesso!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Livro::destroy($request->id_delete);
        return redirect(route('livro_index'))->with('msg', 'Livro excluido com sucesso!');;
    }
}
