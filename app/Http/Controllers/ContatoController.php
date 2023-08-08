<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContatoFormRequest;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    protected $model;

    public function __construct(Contato $contato)
    {
        $this->model = $contato;
    }

    public function index(Request $request)
    {
        $contatos = $this->model
                ->getContatos(
                    search: $request->seach ?? ''
                );

        return view('contatos.index',compact('contatos'));
    }  

    public function show($id)
    {
        //$contato = Contato::where('id', $id)->first();
        if (!$contato =$this->model->find($id))

            return redirect()->route('contatos.index');
        
        return view('contatos.show', compact('contato'));
   }

   public function create()
    {
        return view('contatos.create');
    }

    public function store(StoreUpdateContatoFormRequest $request)

    {

        $data = $request->all();

        $contatos = Contato::create($data);
        
        return redirect()->route('contatos.index');
    }

    public function edit($id)
    {
        if (!$contato = Contato::find($id))

        return redirect()->route('contatos.index');

        return view('contatos.edit', compact('contato'));
    }

    public function update(StoreUpdateContatoFormRequest $request, $id)
    {
        if (!$contato = Contato::find($id))
            return redirect()->route('contatos.index');

         $data =$request->only('name', 'ramal');   

         $contato->update($data);

        return redirect()->route('contatos.index');
    }

   public function destroy($id)
    {
        if (!$contato = Contato::find($id))
                return redirect()->Route('contatos.index');

        $contato->delete();
        
        return redirect()->Route('contatos.index');
    }

            
}



