<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class articoli extends Controller
{
    public $article = [
        0 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizioneprova', 'categoria' => 'categoria'],
        1 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizioneprova', 'categoria' => 'categoria'],
        2 => ['titolo' => 'titoloprova', 'descrizione' => 'descrizioneprova', 'categoria' => 'categoria'],
    ];

    public function articoli()
    {
        return $this->article;
    }

    public function saveToDatabase()
    {
        $article = new Article;
        
        Article::create([
            0 => ['title' => 'titoloprova', 'description' => 'descrizioneprova', 'categoria' => 'categoria'],
            1 => ['title' => 'titoloprova', 'description' => 'descrizioneprova', 'categoria' => 'categoria'],
            2 => ['title' => 'titoloprova', 'description' => 'descrizioneprova', 'categoria' => 'categoria'],
        ]
        ); 
        
        $article->save();
       
    }

    public function index(){
        

        $articles=Article::all();
        return view('articoli',['articles' =>$articles]);
    }

    public function show($id){
        $articles=Article::find($id);
        return view('dettaglio', ['articoli' => $articles]);
    }

    public function byCategory($category){
        $articlesByCategories = Article::where('category', $category)->get();

        return view('articlesBycategory', ['articles'=>$articlesByCategories]);
    }

    public function create(){
        
        $titolo = 'MY BlOG';
        return view('form',['titolo'=>$titolo]);
    }
    
    
    public function store(ArticleRequest $request){
        
        $validated = $request->validated();
        
        $article = Article::create($validated);
        
        if($request->hasFile('image')){
            
            $path = 'public/images';
            $name = $article['id'].'copertina'.'.'.$request->file('image')->extension();
            $file = $request->file('image')->storeAs($path,$name);
            $image = $path . '/' . $name;
            $article->image= $image;
            $article->save(); 
        }
        
        return redirect()->back()->with('success','Articolo inserito correttamente');
    }
}