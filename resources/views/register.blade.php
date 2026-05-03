<!DOCTYPE html>

<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Créer un compte</h2>

<form method="POST" action="/register">
    @csrf


<input type="text" name="name" placeholder="Nom"><br><br>
<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Mot de passe"><br><br>

<button type="submit">Register</button>


</form>

@if ($errors->any()) <ul style="color:red">
@foreach ($errors->all() as $error) <li>{{ $error }}</li>
@endforeach </ul>
@endif

<a href="/login">deja un compte ? Login</a>

</body>
</html>
