<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar ordem de serviço') }}
        </h2>
    </x-slot>
    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!--Tabela-->
            <div class="bg-white dark:bg-gray-800  shadow-sm sm:rounded-lg">
                <div class="w-full  mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    <h4>Abertura de ordem de serviço</h4><br>
                    <form onsubmit="buttonSubmit.disabled=true; return true; action="{{ route('call.update',$call) }}" method="PATCH" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-12 row">
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Solicitante (obrigatório)
                                </label>
                                <input value="{{ $call->name }}" name="name"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                    style="width: 100%">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Departamento (obrigatório)
                                </label>
                                <input value="{{ $call->department }}" name="department"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                    style="width: 100%" >
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Setor (obrigatório)
                                </label>
                                <input value="{{ $call->sector }}" name="sector"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Qual o problema? (obrigatório)
                                </label>
                                <input value="{{ $call->problem }}" name="problem"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Descrição do problema (obrigatório)
                                </label>
                                <input value="{{ $call->description }}" name="description"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Endereço
                                </label>
                                <input value="{{ $call->address }}" name="address"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Número de telefone para contato
                                </label>
                                <input value="{{ $call->number }}" name="number"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    E-mail para contato
                                </label>
                                <input value="{{ $call->email }}" name="email"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <div class="col-12">
                                <label class ="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Comentário
                                </label>
                                <input value="{{ $call->comment }}" name="comment"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm tamanho">
                            </div>
                            <br>
                            <button type="submit"
                                class="cursor-pointer whitespace-nowrap rounded-xl bg-green-600 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-600 dark:text-white dark:focus-visible:outline-green-600">
                                Alterar</button>
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
