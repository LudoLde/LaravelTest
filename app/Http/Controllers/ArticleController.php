<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
   public function add () {       
 
    $post = new Article();

    $post->nom = 'titi';
    $post->prenom = 'bob';
    $post->pseudo = 'toto';

    $post->save();

    return Article::all();

   }

   public function show (): View {       


    $articles = Article::all();

    return view('article.accueil', [
      'articles' => $articles
    ]);

   }

   public function update () {       
 
    $post = Article::find(5);

    $post->nom ='Peta';
    $post->prenom = 'Malerke';
    $post->save();

    return Article::all();

   }
}
