<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        $nom = 'Mendrika';
        return view('welcome',['nom' => $nom]);
    }

    public function getAllArticle(){
        $articles = Article::all();
        
        return view('article',['articles' => $articles]);
    }

    public function formAddArticle (){
        return view('addArticle');
    }
    public function postArticle(Request $request) {
        $article = new Article();
        $article->design = $request->input('design');
        $article->stock = $request->input('stock');
        $article->save();

        return redirect()->route('article');


        

    }
}
