<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
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
    <div class="container text-center bg-white p-4 rounded shadow-sm">
        <a href="{{ route('conta.index') }}" class="btn btn-primary mb-3">Listar</a>

        <h2 class="mb-4">Editar a Conta</h2>
    </div>

    <!-- Scripts do Bootstrap (opcional, para funcionalidades adicionais) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
