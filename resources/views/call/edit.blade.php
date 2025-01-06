<x-app-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <div class="px-4 sm:px-0">
                            <form onsubmit="buttonSubmit.disabled=true; return true;" method="POST" action="{{ route('call.final',$call) }}" enctype="multipart/form-data">
                                @method('PUT')
                                    @csrf
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">

                                <dt class="text-sm/6 font-medium text-gray-900">
                                    <h3 class="text-base/7 font-semibold text-gray-900">Ordem de serviço</h3>
                                    <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Informações da ordem de serviço</p>
                                </dt>
                                <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <a href="{{ route('call.show',$call->id)}}">
                                    <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Editar
                                    </button>
                                    </a>

                                    <input type="text" hidden value="{{$call->id}}" name="id">
                                    <input type="text" hidden value="1" name="status">

                                    @if ($call->status == 1)

                                    @else
                                        <button type="submit"
                                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Finalizar
                                        </button>
                                    @endif

                                </dd>
                            </div>
                        </form>
                        </div>

                        <div class="mt-6 border-t border-gray-100">
                            <dl class="divide-y divide-gray-100">
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Nome</dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $call->name }}
                                    </dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Telefone/Celular</dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $call->number }}
                                    </dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Email</dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $call->email }}
                                    </dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Órgão/Secretaria</dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ $call->department }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Departamento/Setor</dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $call->sector }}
                                    </dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Localidade</dt>

                                    @if ($call->properties == 0)
                                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">Fora de
                                            prefeitura</dd>
                                    @else
                                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">Dentro da
                                            prefeitura</dd>
                                    @endif
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Problema</dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $call->problem }}
                                    </dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Descrição do problema</dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ $call->description }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm/6 font-medium text-gray-900">Data de abertura da ordem de serviço
                                    </dt>
                                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ date('H:m - d/M/Y ', strtotime($call->created_at)) }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
