@extends('_layouts.app') @section('page_title', 'Book a book | Connection')
<nav>
    <h1>Book a book</h1><a href="#TODO"><span>retour à la page de connection</span>#TODO image flèche arrière</a>
</nav>
@section('main_content')
<h2>Formulaire d'inscription</h2>
<form action="#TODO" method="#TODO">
    <label for="name">Nom&nbsp;:</label>
    <input type="text" name="name" id="name" />
    <label for="firstname">Prénom&nbsp;:</label>
    <input type="text" name="firstname" id="firstname" />
    <label for="email">Email&nbsp;:</label>
    <input type="email" name="email" id="email" />
    <label for="password">Mot de passe&nbsp;:</label>
    <input type="password" name="password" id="password" />
    <label for="password">Répétez votre mot de passe&nbsp;:</label>
    <input type="password" name="password" id="password" />
    <button type="submit">S'inscrire</button>
</form>
<p>Un email vous sera envoyé afin de valider votre inscription</p>
@endsection