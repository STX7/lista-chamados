<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abertura de Chamado</title>
    @vite('resources/app.css', 'resources/style.css', 'resources/style.css.map', 'resources/style.scss','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css','resources/js/app.js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Acessar
                        sistema</a>
                @endauth
            </div>
        @endif
    </div>

    <div class="container">
        <p class="text-center fw-bolder fs-3">Abertura de chamado</p>
    </div>

    <div class="container">
        <form action="{{ route('call.update',$call) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        <div class="card card-body-mudancas">
            <div class="card-body container">

                    <fieldset class="row">

                        <div class="mb-3 col-lg-12">
                            <label for="nome" class="form-label">Nome do solicitante</label>
                            <input type="text" class="form-control" id="nome" name="name" value="{{ $call->name }}">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="telefone_princ" class="form-label">Departamento</label>
                            <input type="text" class="form-control" id="telefone_princ" name="department" value="{{ $call->department }}">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="telefone_princ" class="form-label">Setor</label>
                            <input type="text" class="form-control" id="telefone_princ" name="sector" value="{{ $call->sector }}">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="telefone_princ" class="form-label">Qual o problema</label>
                            <input type="text" class="form-control" id="telefone_princ" name="problem" value="{{ $call->problem }}">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="telefone_princ" class="form-label">Descreva o problema</label>
                            <input type="text" class="form-control" id="telefone_princ" name="description" value="{{ $call->description }}">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="telefone_princ" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="telefone_princ" name="address" value="{{ $call->address }}">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="telefone_princ" class="form-label">Telefone para contato</label>
                            <input type="text" class="form-control" id="telefone_princ" name="contact" value="{{ $call->contact }}">
                        </div>
                        <div class="mb-3 col-lg-3">
                            <label for="telefone_princ" class="form-label">status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                            @if ($call->status == 0)
                                    <option value="1">Finalizado</option>
                                    <option value="2">Apagado</option>
                                    <option value="0" selected>Pendente</option>
                            @endif
                            @if ($call->status == 1)
                                    <option value="1" selected>Finalizado</option>
                                    <option value="2">Apagado</option>
                                    <option value="0">Pendente</option>
                            @endif
                            @if ($call->status == 2)
                                    <option value="1">Finalizado</option>
                                    <option value="2" selected>Apagado</option>
                                    <option value="0">Pendente</option>
                            @endif
                        </select>
                        </div>
                        <div class="mb-3 col-lg-3">
                            <button type="submit">Enviar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
