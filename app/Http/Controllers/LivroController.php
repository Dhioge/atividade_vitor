<?php

namespace Atividade\Http\Controllers;

use Atividade\Livro;
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
        $livros = Livro::all();
        return view('livro.index',["Livro"=>$livros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livro.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livro = new Livro;
        $livro->nome = $request->nome;
        $livro->save();
        return redirect(route('livro_index'))->with('msg', 'Livro cadastrada com sucesso!');;
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
         return view('livro.edit',['Livro'=>$livro]);
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
        $livro = Livro::find($request->id);
        $livro->nome = $request->nome;
        $livro->update();
        return redirect(route('livro_index'))->with('msg', 'Livro atualizada com sucesso!');;
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
        return redirect(route('livro_index'))->with('msg', 'Livro excluida com sucesso!');;
    }
}
