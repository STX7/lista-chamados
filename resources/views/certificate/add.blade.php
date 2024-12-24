<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar certificado') }}
        </h2>
    </x-slot>
    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  shadow-sm sm:rounded-lg">
                <div class="w-full  mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    <h4>Cadastro de certificado</h4><br>
                    <form onsubmit="buttonSubmit.disabled=true; return true;" action="{{ route('certificate.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12 row">
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Nome
                                </label>
                                <input value="" name="name"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                    style="width: 100%">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Razão Social
                                </label>
                                <input value="" name="surname"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                    style="width: 100%" >
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Número de Telefone/Celular
                                </label>
                                <input value="" name="number"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    CPF
                                </label>
                                <input value="" name="identification"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    CNPJ
                                </label>
                                <input value="" name="cnpj"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    E-mail
                                </label>
                                <input value="" name="email"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>

                            <div class="relative flex w-full max-w-xs flex-col gap-1 text-slate-700 dark:text-slate-300">
                                <label for="os" class="w-fit pl-0.5 text-sm">Status</label>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="absolute pointer-events-none right-4 top-8 h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                                <select id="os" name="status" class="w-full appearance-none rounded-xl border border-slate-300 bg-slate-100 px-4 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75 dark:border-slate-700 dark:bg-slate-800/50 dark:focus-visible:outline-blue-600">
                                    <option selected>Selecione uma opção</option>
                                    <option value="0">Aviso</option>
                                    <option value="1" selected>Regular</option>
                                    <option value="2">Vencido</option>
                                    <option value="3">Inativo</option>
                                </select>
                            </div>

                            <br>
                            <button type="submit"
                                class="cursor-pointer whitespace-nowrap rounded-xl bg-green-600 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-600 dark:text-white dark:focus-visible:outline-green-600">
                                Cadastrar</button>
                            <button type="reset"
                                class="cursor-pointer whitespace-nowrap rounded-xl bg-red-600 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-600 dark:text-white dark:focus-visible:outline-red-600">
                                Resetar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
