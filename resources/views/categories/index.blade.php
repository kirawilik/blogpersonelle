<h1>Liste des catégories</h1>

<a href="{{ route('categories.create') }}">Ajouter</a>
<table border ="1">
<tr>
    <th>category</th>
</tr>
@foreach($categories as $cat)
<tr>
    <td>
    <p>{{ $cat->titre }}</p>
</td>
</tr>
    <a href="{{ route('categories.show', $cat->id) }}">Show</a>
    <a href="{{ route('categories.edit', $cat->id) }}">Edit</a>

    <form action="{{ route('categories.destroy', $cat->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
@endforeach