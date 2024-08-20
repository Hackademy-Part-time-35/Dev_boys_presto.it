<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto</title>
    @vite (['resource/css/app.css', 'resource/js/app.js'])
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

</head>
<body>
    <x-navbar />

        <div class="min-vh-100 container-fluid mt-5 pt-5">

            {{$slot}}

        </div>

    <div class=" mt-5 col-12 p-5">
        <x-footer /> 
    </div>    
</body>
</html>