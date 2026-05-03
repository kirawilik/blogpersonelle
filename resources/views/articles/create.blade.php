<h2>Créer un article</h2>

<form method="POST" action="{{ route('articles.store') }}">
@csrf

<input type="text" name="titre" placeholder="Titre"><br><br>

<textarea name="content" placeholder="Content"></textarea><br><br>

<select name="category_id">
@foreach($categories as $cat)
<option value="{{ $cat->id }}">{{ $cat->titre }}</option>
@endforeach
</select><br><br>

<select name="status">
<option value="public">Public</option>
<option value="private">private</option>
</select><br><br>

<button type="submit">Créer</button>

</form>