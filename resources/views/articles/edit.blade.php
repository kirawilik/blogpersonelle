<h2>Modifier article</h2>

<form method="POST" action="{{ route('articles.update', $article->id) }}">
@csrf
@method('PUT')

<input type="text" name="titre" value="{{ $article->titre }}"><br><br>

<textarea name="content">{{ $article->content }}</textarea><br><br>

<select name="category_id">
@foreach($categories as $cat)
<option value="{{ $cat->id }}" 
    {{ $cat->id == $article->category_id ? 'selected' : '' }}>
    {{ $cat->titre }}
</option>
@endforeach
</select><br><br>

<select name="status">
<option value="public" {{ $article->status == 'public' ? 'selected' : '' }}>Public</option>
<option value="prive" {{ $article->status == 'prive' ? 'selected' : '' }}>Privé</option>
</select><br><br>

<button type="submit">Modifier</button>

</form>