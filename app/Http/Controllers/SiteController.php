<?php

namespace App\Http\Controllers;

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
}
