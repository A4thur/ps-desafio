<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produto;


use App\Models\Categoria;

class CategoriaController extends Controller
{
    private $categoria;
    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }


    public function index()
    {
        $categorias = $this->categoria->all();
        return view('categoria.index', compact('categorias'));
    }


    public function create()
    {
        return view('categoria.crud');
    }


    public function store(StoreCategoriaRequest $request)
    {
        $data = $request->validated();
        $this->categoria->create($data);
        return redirect()->route('categoria.index')->with('Sucesso', 'Categoria criada com sucesso');
    }
    public function show($id)
    {
        $categoria = $this->categoria->find($id);
        return response()->json($categoria);
    }
    public function edit($id)
    {
        $categoria = $this->categoria->find($id);
        return view('categoria.crud', compact('categoria'));
    }

    public function update(UpdateCategoriaRequest $request, $id)
    {
        $data = $request->validated();
        $categoria = $this->categoria->find($id);
        $categoria->update($data);
        return redirect()->route('categoria.index')->with('Sucesso', 'Categoria modificada com sucesso');
    }

    public function destroy($id)
    {
        $categoria = $this->categoria->find($id);
        $categoria->delete();
        return redirect()->route('categoria.index')->with('Sucesso', 'Categoria deletada com sucesso');
    }
}
