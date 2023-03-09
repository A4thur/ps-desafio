<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteRequest;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class SiteController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        return view('site.index', compact('produtos', 'categorias'));
    }
    public function produtofiltrado(SiteRequest $request)
    {
        $categoriaselect = Categoria::where('categoria', $request['categorias'])->first();
        $produtos = [];
        if (isset($categoriaselect))
            $produtos = Produto::where('categoria_id', $categoriaselect->id)->get();
        else
            $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias', 'categoriaselect'));
    }
    public function produtobuscado(SiteRequest $request)
    {
        $produtos = Produto::where('nome', 'LIKE', "%{$request['search']}%")->get();
        $categorias = Categoria::all();
        return view('site.index', compact('produtos', 'categorias'));
    }
    public function sobrenos()
    {
        return view('site.sobrenos');
    }
    public function comprarproduto($id)
    {
        $produto = Produto::find($id);
        return view('site.produto', compact('produto'));
    }
}
