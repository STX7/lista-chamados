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
            @if (session('success'))
            <div class="relative w-full overflow-hidden rounded-xl border border-green-600 bg-white text-slate-700 dark:bg-slate-900 dark:text-slate-300" role="alert">
                <div class="flex w-full items-center gap-2 bg-green-600/10 p-4">
                    <div class="bg-green-600/15 text-green-600 rounded-full p-1" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-2">
                        <h3 class="text-sm font-semibold text-green-600">Cadastrado com sucesso</h3>
                    </div>
                </div>
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-warning relative w-full overflow-hidden rounded-xl border border-red-600 bg-white text-slate-700 dark:bg-slate-900 dark:text-slate-300" role="alert">
                <div class="flex w-full items-center gap-2 bg-red-600/10 p-4">
                    <div class="bg-red-600/15 text-red-600 rounded-full p-1" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-2">
                        <h3 class="text-sm font-semibold text-red-600">Erro ao cadastrar</h3>
                    </div>
                </div>
            </div>
            @endif
            <form onSubmit="document.getElementById('submit').disabled=true;" action="{{ route('call.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 row">
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Solicitante (obrigatório)
                        </label>
                        <input name="name" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" style="width: 100%">
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Departamento (obrigatório)
                        </label>
                        <input name="department" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" style="width: 100%">
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Setor (obrigatório)
                        </label>
                        <input name="sector" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Qual o problema? (obrigatório)
                        </label>
                        <input name="problem" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Descrição do problema (obrigatório)
                        </label>
                        <input name="description" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Endereço
                        </label>
                        <input name="address" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Número de telefone para contato
                        </label>
                        <input name="number" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div>
                    <div class="col-12">
                        <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            E-mail para contato
                        </label>
                        <input name="email" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho" >
                    </div><br>
                    <input type="submit" name="submit" value="Enviar" id="submit" class="inline-flex items-center px-4 py-2 dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150 back-input">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
