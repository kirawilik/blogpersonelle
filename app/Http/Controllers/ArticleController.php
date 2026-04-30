<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
  
    public function index(Request $request)
    {
         $query = Article::where('status', 'public')
                ->with('category');

    if ($request->category_id) {
        $query->where('category_id', $request->category_id);
    }

    $articles = $query->get();

    $categories = Category::all();

    return view('articles.index', compact('articles', 'categories'));
    }

   
    public function create()
    {
        $this->checkBloguer();

        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->checkBloguer();

        $request->validate([
            'titre' => 'required|max:50',
            'content' => 'required',
            'status' => 'required|in:public,private',
            'category_id' => 'required|exists:categories,id'
        ]);

        Article::create([
            'titre' => $request->titre,
            'content' => $request->content,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('articles.dashboard');
    }

    public function show(Article $article)
    {
        if($article->status != 'public'){
            abort(403);
        }

        return view('articles.show', compact('article'));
    }

    public function dashboard()
    {
        $articles = Article::where('user_id', auth()->id())
                    ->with('category')
                    ->get();

        return view('articles.dashboard', compact('articles'));
    }

  
    public function edit(Article $article)
    {
        $this->checkBloguer();

        if($article->user_id != auth()->id()){
            abort(403);
        }

        $categories = Category::all();
        return view('articles.edit', compact('article','categories'));
    }

    public function update(Request $request, Article $article)
    {
        $this->checkBloguer();

        if($article->user_id != auth()->id()){
            abort(403);
        }

        $request->validate([
            'titre' => 'required|max:50',
            'content' => 'required|min:30',
            'status' => 'required|in:public,private',
            'category_id' => 'required|exists:categories,id'
        ]);

        $article->update([
            'titre' => $request->titre,
            'content' => $request->content,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('articles.dashboard');
    }

    
    public function destroy(Article $article)
    {
        $this->checkBloguer();

        if($article->user_id != auth()->id()){
            abort(403);
        }

        $article->delete();

        return redirect()->route('articles.dashboard');
    }

    private function checkBloguer()
    {
        if (!auth()->check() || auth()->user()->role !== 'bloguer') {
            abort(403);
        }
    }
}