<!DOCTYPE html>
<html lang="en">
    <header>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-Ua-Compatible" content="ie=edge">
        <title>Presto-it</title>
    </header>

    <body>
        <div>
            <h1>Un utente ha chiesto di lavorare con noi</h1>
            <h2>Ecco i suoi dati:</h2>
            <p>Nome: {{$user->name}}</p>
            <p>Nome: {{$user->email}}</p>
            <p>Se vuoi renderlo/a revisor, Clicca qui</p>
            <a href=""> Rendi revisor</a>
        </div>
    </body>
</html>