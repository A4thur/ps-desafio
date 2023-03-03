<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Http\Requests\StoreProdutoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{
    private $produto;
    private $categoria;
    public function __construct(Produto $produto, Categoria $categoria)
    {
        $this->produto = $produto;
        $this->categoria = $categoria;
    }
    public function index()
    {
        $produtos = $this->produto->all();
        return view('produto.index', compact('produtos'));
    }


    public function create()
    {
        $categorias = $this->categoria->all();
        return view('produto.crud', compact('categorias'));
    }


    public function store(StoreProdutoRequest $request)
    {
        $data = $request->all();
        $data['imagem'] = $request->file('imagem')->store('produtos', 'public');
        $this->produto->create($data);
        return redirect()->route('produto.index')->with('Sucesso', 'Produto adicionado  com sucesso');
    }


    public function show($id)
    {
        $produtos = $this->produto->find($id);
        return response()->json($produtos);
    }


    public function edit($id)
    {
        $produto = $this->produto->find($id);
        $categorias = $this->categoria->all();
        return view('produto.crud', compact('produto', 'categorias'));
    }


    public function update(StoreProdutoRequest $request, $id)
    {
        $data = $request->all();
        $produtos = $this->produto->find($id);
        if ($request->hasFile('imagem')) {
            Storage::disk('public')->delete(substr($produtos->image, 9));
            $data['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }
        $produtos->update($data);
        return redirect()->route('produto.index')->with('Sucesso', 'Produto modificado com sucesso');
    }

    public function destroy($id)
    {
        $produtos = $this->produto->find($id);
        $produtos->delete();
        return redirect()->route('produto.index')->with('Sucesso', 'Produto deletado com sucesso');
    }
}
