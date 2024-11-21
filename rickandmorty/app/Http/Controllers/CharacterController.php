<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Character;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class CharacterController extends Controller
{
    public function index(Request $request)
{
    // Fazendo a requisição para a API
    $response = Http::get('https://rickandmortyapi.com/api/character');

    // Verificando se a requisição foi bem-sucedida
    if ($response->successful()) {
        // Decodifica a resposta JSON automaticamente
        $characters = $response->json()['results'];

        // pesquisa
        if ($request->has('query') && !empty($request->input('query'))) {
            $query = strtolower($request->input('query')); // Pega a pesquisa e converte para minúsculas
            // Filtra os personagens baseados no nome
            $characters = collect($characters)->filter(function ($character) use ($query) {
                return strpos(strtolower($character['name']), $query) !== false;
            })->values()->all();
        }

        // Retorna a view com os personagens (filtrados ou todos)
        return view('index', compact('characters'));
    } else {
        // Caso haja um erro, exibe uma mensagem de erro
        return "Erro ao obter dados da API.";
    }
}

    public function search(Request $request)
    {
        $query = $request->input('query'); // Termo pesquisado
    
        // Buscar personagens com o nome correspondente
        $characters = Character::where('name', 'LIKE', "%{$query}%")->get(); // Isso retorna uma coleção de objetos Eloquent
    
        return view('index', compact('characters')); // Retornando para a view
    }

    public function loadMoreCharacters(Request $request)
    {
 
        $page = $request->input('page', 1);
        

        $response = Http::get('https://rickandmortyapi.com/api/character', [
            'page' => $page,  // Passa o número da página
        ]);
    
        // Verifica se a requisição foi bem-sucedida
        if ($response->successful()) {
          
            $characters = $response->json()['results'];
    
            return response()->json($characters);
        } else {
            return response()->json(['error' => 'Erro ao carregar personagens.'], 500);
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

        // Verifique se o usuário está autenticado
        

        if ($user = Auth::user()) {
            // Associa o personagem ao usuário (se ainda não estiver associado)
            $user->characters()->syncWithoutDetaching([$character->id]);
        } else {
            return redirect('/login')->with('error', 'Você precisa estar logado.');
        }

        return redirect('/')->with('success', 'Personagem salvo com sucesso!');
    }

    return "Erro ao obter dados da API.";
}


    
}

