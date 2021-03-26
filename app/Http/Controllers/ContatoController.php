<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contatos = Contato::all();

        return view('contatos.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nome'=>'required',
            'sobrenome'=>'required',
            'email'=>'required'
        ]);
        $contato = new Contato([
            'nome' => $request->get('nome'),
            'sobrenome' => $request->get('sobrenome'),
            'email' => $request->get('email'),
            'funcao' => $request->get('funcao'),
            'cidade' => $request->get('cidade'),
            'pais' => $request->get('pais')
        ]);
        $contato->save();
        return redirect('/contatos')->with('sucesso', 'Contato salvo com sucesso!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contato = Contato::find($id);

        return view('contatos.edit', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nome'=>'reuired',
            'sonrenome'=>'required',
            'email'=>'required'
        ]);
        $contato = Contato::find($id);
        $contato->nome = $request->get('nome');
        $contato->sobrenome = $request->get('sobrenome');
        $contato->email = $request->get('email');
        $contato->funcao = $request->get('funcao');
        $contato->cidade = $request->get('cidade');
        $contato->pais = $request->get('pais');
        $contato->save;

        return redirect('/contatos')->with('sucesso', 'Contato atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contato = Contato::find($id);
        $contato->delete();

        return redirect('/contatos')->with('sucesso', "Contato delete!.");
    }
}
