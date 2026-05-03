<h2>Dashboard</h2>

<a href="{{ route('articles.create') }}">Créer un article</a>

@foreach($articles as $article)
<div style="border:1px solid black; margin:10px; padding:10px;">
    
    <h3>{{ $article->titre }}</h3>

    <p>Status : {{ $article->status }}</p>

    <p>Catégorie : {{ $article->category->titre }}</p>

    <a href="{{ route('articles.edit', $article->id) }}">Modifier</a>

    <form method="POST" action="{{ route('articles.destroy', $article->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>

</div>
@endforeach