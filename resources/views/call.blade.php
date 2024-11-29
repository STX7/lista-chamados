<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <h4>Abertura de ordem de serviço</h4><br>
            <form action="{{ route('call.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 row">
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Solicitante (obrigatório)
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" style="width: 100%">
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Departamento (obrigatório)
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" style="width: 100%">
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Setor (obrigatório)
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Qual o problema? (obrigatório)
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Descrição do problema (obrigatório)
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Endereço
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Número de telefone para contato
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            E-mail para contato
                        </label>
                        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div><br>
                    <button type = "submit" class="inline-flex items-center px-4 py-2 dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150 back-input">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
