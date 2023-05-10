<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('title') - Biblioteca</title>
    <style>body{background-color: #DCDCDC;}</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
        <a class="navbar-brand" href="/">Biblioteca</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item ">
            <a class="nav-link" href="/people">Usuários <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/books">Livros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/loans">Empréstimos</a>
        </li>
        </ul>  
        </div>
    </nav>

    

    @yield('content')
</body>
</html>