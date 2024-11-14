<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class FavoritosController extends Controller
{
    public function index()
    {
        // Pegue os personagens favoritados do usuário autenticado
        $user = Auth::user(); // Pega o usuário autenticado
        $characters = $user->characters()->get(); // Carrega todos os personagens relacionados ao usuário

        // Passa os personagens para a view
        return view('favorites.charFavorites', compact('characters')); // Agora a variável $characters é passada corretamente
    }
}