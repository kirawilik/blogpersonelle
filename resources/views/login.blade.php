<!DOCTYPE html>

<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Connexion</h2>

<form method="POST" action="/login">
    @csrf


<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Mot de passe"><br><br>

<button type="submit">Login</button>


</form>

@if(session('error')) <p style="color:red">{{ session('error') }}</p>
@endif

@if(session('success')) <p style="color:green">{{ session('success') }}</p>
@endif

<a href="/register">Creer un compte</a>

</body>
</html>
