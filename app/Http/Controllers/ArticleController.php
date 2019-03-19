<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',[
            'articles'=>$articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $article = new Article;
        $article->name=$request->input('name_article');
        $article->description=$request->input('description_article');
        $article->price=$request->input('price_article');
        $article->save();
        $picture = \App\Picture::store($request, $article->id);

        return redirect('articles/'.$article->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($article_id)
    {
        $article = Article::findOrFail($article_id);
        $article->pictures;
        return view("articles.show",[
            'article' => $article,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        $article=Article::findOrFail($article);
        return view('articles.edit',[
            'article'=>$article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$article)
    {
         $article=Article::findOrFail($article);
         $article->name=$request->input('name_article');
         $article->description=$request->input('description_article');
         $article->price=$request->input('price_article');
         $article->save();
         $picture = \App\Picture::store($request, $article->id);
         return redirect('articles/'.$article->id);
 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('articles/');
        //return back();
        
    }
}
