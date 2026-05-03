<h1>Ajouter catégorie</h1>

<form method="POST" action="{{ route('categories.store') }}">
    @csrf

    <input type="text" name="titre" placeholder="Titre">

    <button>Save</button>
</form>