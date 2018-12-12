<?php

namespace Atividade\Http\Controllers;

use Atividade\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
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
        $autores = Autor::paginate(20);
        return view('autor.index',["autor"=>$autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autor.create');

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
            'nome' => 'required|max:255',
            'data_de_nasc' => 'required',
        ]);
        $autor = new Autor;
        $autor->nome = $request->nome;
        $autor->data_de_nasc = $request->data_de_nasc;
        $autor->save();
        return redirect(route('autor_index'))->with('msg', 'autor cadastrada com sucesso!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show(autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(autor $autor,$id)
    {
         $autor = Autor::where('id',$id)->first();
         return view('autor.edit',['autor'=>$autor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autor $autor)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'data_de_nasc' => 'required',
        ]);
        $autor = Autor::find($request->id);
        $autor->nome = $request->nome;
        $autor->update();
        return redirect(route('autor_index'))->with('msg', 'autor autualizado com sucesso!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Autor::destroy($request->id_delete);
        return redirect(route('autor_index'))->with('msg', 'autor excluida com sucesso!');;
    }
}
