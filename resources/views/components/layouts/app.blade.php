<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body style="background-color: rgb(129, 129, 129)">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a href="" class="navbar-brand">Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bg-toggler="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="{{ route('clientes.index')}}" class="nav-link active">Clientes</a>
                        <a href="{{ route('funcionarios.index')}}" class="nav-link">Funcionários</a>
                        <a href="{{ route('produtos.index')}}" class="nav-link">Produtos</a>
                    </div>
    
                </div>
            </div>
        </nav>
        {{ $slot }}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
    </body>
</html>
