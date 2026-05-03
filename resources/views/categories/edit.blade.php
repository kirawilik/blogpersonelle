<h1>Modifier catégorie</h1>

<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="titre" value="{{ $category->titre }}">

    <button>Update</button>
</form>