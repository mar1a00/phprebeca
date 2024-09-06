<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina inicial</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Adiciona uma altura mínima para a centralização vertical */
        .min-vh-100 {
            min-height: 100vh;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="text-center">
        <h2 class="mb-4">Listar as Contas</h2>

        <div class="btn-group-vertical">
            <a href="{{ route('conta.create') }}" class="btn btn-success mb-2">Cadastrar</a>
            <a href="{{ route('conta.show') }}" class="btn btn-info mb-2">Visualizar</a>
            <a href="{{ route('conta.edit') }}" class="btn btn-warning mb-2">Editar</a>
            {{-- <a href="{{ route('conta.destroy') }}" class="btn btn-danger mb-2">Apagar</a> --}}
        </div>
    </div>

    <!-- Scripts do Bootstrap (opcional, para funcionalidades adicionais) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootst

