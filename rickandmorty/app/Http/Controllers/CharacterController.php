<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    public function index()
    {
        // Fazendo a requisição para a API
        $response = Http::get('https://rickandmortyapi.com/api/character');

        // Verificando se a requisição foi bem-sucedida
        if ($response->successful()) {
            // Decodifica a resposta JSON automaticamente
            $characters = $response->json()['results'];

            // Retorna a view com os personagens
            return view('index', compact('characters')); // Passando os personagens para a view
        } else {
            // Caso haja um erro, exibe uma mensagem de erro
            return "Erro ao obter dados da API.";
        }
    }



    public function favorites()
{
    $user = Auth::user();
    
    // Verifica se o usuário está autenticado
    if (!$user) {
        return redirect('/login')->with('error', 'Você precisa estar logado para ver os favoritos.');
    }

    $characters = $user->characters;
    return view('favorites.charFavorites', compact('characters'));
}
    public function characters($id)
    {
        // Fazendo a requisição para a API com o ID fornecido
        $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");
    
        // Verificando se a requisição foi bem-sucedida
        if ($response->successful()) {
            // Decodifica a resposta JSON automaticamente
            $character = $response->json();
    
            // Retorna uma view com o personagem
            return view('chars.characters', compact('character'));
        } else {
            // Caso haja um erro, exibe uma mensagem de erro
            return "Erro ao obter dados da API.";
        }

        
    }
    

    public function saveCharacter($id)
{
    // Fazendo a requisição para a API para pegar os dados do personagem
    $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");
    

    if ($response->successful()) {
        
        $characterData = $response->json();

        // Verifica se o personagem já existe no banco de dados
        $character = Character::firstOrCreate(
            ['url' => $characterData['url']],
            [
                'name' => $characterData['name'],
                'species' => $characterData['species'],
                'image' => $characterData['image'],
            ]
        );
        
        // Verifique se o usuário autenticado está sendo obtido corretamente
        $user = Auth::user();
        $characters = $user->characters()->get();

        return redirect('/')->with('success', 'Personagem salvo com sucesso!');
    }

    return "Erro ao obter dados da API.";
}

}

