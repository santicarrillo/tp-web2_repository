<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
<base href="{BASE_URL}">
    <meta charset="UTF-8">
    <base href="<?php echo BASE_URL ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Formula 1</title>
</head>

<body>
    <!-- main header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Formula 1 - Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="escuderia">Pilotos por Escuderias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="pilotobyescuderia">Pilotos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about">Calendario 2023</a>
                        </li>
                    </ul>
                        <div class="d-flex" role="search">
                            {if !isset($smarty.session.USER_ID)}
                                <a class="btn btn-secondary" href="login">Ingresar</a>
                            {else}
                                <a class="btn btn-secondary" href="logout">Cerrar sesion ({$smarty.session.USER_EMAIL})</a>
                            {/if}
                        </div>
                </div>
            </div>
            </nav>
    </header>

    <!-- inicio main container -->
    <main class="container mt-3">
        