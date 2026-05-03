<h2>Articles publics</h2>
<form method="GET" action="{{ route('articles.index') }}">

    <select name="category_id">
        <option value="">-- Toutes les catégories --</option>

        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">
                {{ $cat->titre }}
            </option>
        @endforeach
    </select>

    <button type="submit">Filtrer</button>
</form>

@foreach($articles as $article)
<div style="border:1px solid black; margin:10px; padding:10px;">
    
    <h3>
        <a href="{{ url('/articles/'.$article->id) }}">
            {{ $article->titre }}
        </a>
    </h3>

    <p>Catégorie : {{ $article->category->titre }}</p>

</div>
@endforeach