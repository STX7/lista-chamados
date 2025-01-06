<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form onsubmit="buttonSubmit.disabled=true; return true;" method="POST" action="{{ route('call.update',$call) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base/7 font-semibold text-gray-900">Editar ordem de serviço</h2>

                                @if (session('error'))
                                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                                    <span class="font-medium">Erro ao alterar!</span> Recarregue a página e tente novamente.
                                  </div>
                                @endif
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="first-name"
                                            class="block text-sm/6 font-medium text-gray-900">Nome</label>
                                        <div class="mt-2">
                                            <input type="text" name="name" id="first-name" value="{{$call->name}}"
                                                autocomplete="given-name"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="last-name"
                                            class="block text-sm/6 font-medium text-gray-900">Telefone/Celular</label>
                                        <div class="mt-2">
                                            <input type="text" name="number" id="last-name" value="{{$call->number}}"
                                                autocomplete="family-name"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="email"
                                            class="block text-sm/6 font-medium text-gray-900">Email</label>
                                        <div class="mt-2">
                                            <input id="email" name="email" type="email" value="{{$call->email}}"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="country"
                                            class="block text-sm/6 font-medium text-gray-900">Órgão/Secretaria</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="country" name="department" autocomplete="country-name"
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option value="Saúde" @if ($call->department == "Saúde") selected @endif>Saúde</option>
                                                <option value="Educação" @if ($call->department == "Educação") selected @endif>Educação</option>
                                                <option value="Social" @if ($call->department == "Social") selected @endif>Social</option>
                                                <option value="Meio Ambiente" @if ($call->department == "Meio Ambiente") selected @endif>Meio Ambiente</option>
                                                <option value="Cultura" @if ($call->department == "Cultura") selected @endif>Cultura</option>
                                                <option value="Administração" @if ($call->department == "Administração") selected @endif>Administração</option>
                                                <option value="Infraestrutura" @if ($call->department == "Infraestrutura") selected @endif>Infraestrutura</option>
                                                <option value="Transporte" @if ($call->department == "Transporte") selected @endif>Transporte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="country" class="block text-sm/6 font-medium text-gray-900">Dentro
                                            da prefeitura?</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="country" name="properties" autocomplete="country-name"
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">

                                                @if ($call->properties == 0)
                                                <option value="0" selected>Sim</option>
                                                <option value="1">Não</option>
                                                @else
                                                <option value="0">Sim</option>
                                                <option value="1" selected>Não</option>
                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="country" class="block text-sm/6 font-medium text-gray-900">Status</label>
                                        <div class="mt-2 grid grid-cols-1">
                                            <select id="country" name="status"
                                                class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                <option value="0" @if ($call->status == 0) selected @endif >Aviso</option>
                                                <option value="1" @if ($call->status == 1) selected @endif >Finalizado</option>
                                                <option value="2" @if ($call->status == 2) selected @endif >Espera</option>
                                                <option value="3" @if ($call->status == 3) selected @endif >Inativo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Departamento/Setor</label>
                                        <div class="mt-2">
                                            <input type="text" name="sector" id="street-address" value="{{$call->sector}}"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Qual o problema?</label>
                                        <div class="mt-2">
                                            <input type="text" name="problem" id="street-address" value="{{$call->problem}}"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="street-address"
                                            class="block text-sm/6 font-medium text-gray-900">Descrição do
                                            problema</label>
                                        <div class="mt-2">
                                            <input type="text" name="description" id="street-address" value="{{$call->description}}"
                                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="reset"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                Resetar
                            </button>
                            <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
