<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ordem de serviço') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <main>
            <div class="isolate bg-white px-6 py-24 sm:py-10 lg:px-8">

                <div class="flex justify-center mx-auto max-w-2xl items-center">
                    <img class="d-flex justify-content-center" width="200" height="200"
                        src="{!! asset('img/logo-expand.png') !!}">
                </div>
                <div class="mx-auto max-w-2xl text-center items-center">
                    <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Requisição
                        de serviço</h2>
                    <p class="mt-2 text-lg/8 text-gray-600">Abertura de ordem de serviço para atendimento e suporte
                        técnico</p>
                </div>
                <form onSubmit="document.getElementById('submit').disabled=true;" action="{{ route('call.store') }}"
                    method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-10">
                    @csrf
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

                        @if (session('success'))
                        <div class="sm:col-span-2 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                            <span class="font-medium">Successo</span> A ordem de serviço foi criada.
                          </div>
                        @endif
                        @if (session('error'))
                        <div class="sm:col-span-2 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                            <span class="font-medium">Erro!!!</span> Algum erro no cadastro ou nas informações.
                          </div>
                        @endif
                        <div>
                            <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">Nome
                                (obrigatório)</label>
                            <div class="mt-2.5">
                                <input type="text" name="name" id="first-name"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Telefone/Celular
                                (obrigatório)</label>
                            <div class="mt-2.5">
                                <input type="text" name="number" id="last-name"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                            </div>
                        </div>
                        <div>
                            <label for="company" class="block text-sm/6 font-semibold text-gray-900">Órgão/Secretaria
                                (obrigatório)</label>
                            <div class="mt-2.5">
                                <select name="department" id=""
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                                    <option value="Saúde">Saúde</option>
                                    <option value="Educação">Educação</option>
                                    <option value="Social">Social</option>
                                    <option value="Meio Ambiente">Meio Ambiente</option>
                                    <option value="Cultura">Cultura</option>
                                    <option value="Administração">Administração</option>
                                    <option value="Infraestrutura">Infraestrutura</option>
                                    <option value="Transporte">Transporte</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="company" class="block text-sm/6 font-semibold text-gray-900">Prefeitura</label>
                            <div class="mt-2.5">
                                <select name="properties" id=""
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                                    <option value="0">Dentro da prefeitura</option>
                                    <option value="1" selected>Fora da prefeitura</option>
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="company" class="block text-sm/6 font-semibold text-gray-900">Departamento/Setor
                                (obrigatório)</label>
                            <div class="mt-2.5">
                                <input type="text" name="sector" id="company"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="problem" class="block text-sm/6 font-semibold text-gray-900">Qual o tipo de
                                problema? (obrigatório)</label>
                            <div class="mt-2.5">
                                <div
                                    class="flex rounded-md bg-white outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                                    <input type="text" name="problem" id="problem"
                                        class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description" class="block text-sm/6 font-semibold text-gray-900">Descreva o
                                problema (obrigatório)</label>
                            <div class="mt-2.5">
                                <input name="description" id="description" rows="4"
                                    class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mt-10">
                        <button type="submit"
                            class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
