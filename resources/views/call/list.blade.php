<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ordem de serviço') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                            <!-- Campo pesquisa-->
                            <form onsubmit="buttonSubmit.disabled=true; return true;" method="POST" action="{{ route('call.search') }}" enctype="multipart/form-data">
                                @method('PUT')
                                    @csrf
                            <div class="relative flex w-full max-w-xs gap-1 text-slate-700">

                                <div class="sm:col-span-2"><input type="search" name="search" class="w-full rounded-xl border border-slate-300 bg-slate-100 py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75" name="search" placeholder="Pesquisar" aria-label="Pequisar"/></div>

                                <div class="sm:col-span-2">
                                    <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Pesquisar
                                </button></div>

                            </div>
                        </form>
                            <br>

                            <!--Tabela-->
                            <div class="bg-white shadow-sm sm:rounded-lg">
                                <div
                                    class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300">
                                    <table class="w-full text-left text-sm text-neutral-600">
                                        <thead
                                            class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900">
                                            <tr>
                                                <th scope="col" class="p-4">Ordem de serviço</th>
                                                <th scope="col" class="p-4">Departamento</th>
                                                <th scope="col" class="p-4">Data</th>
                                                <th scope="col" class="p-4">Status</th>
                                                <th scope="col" class="p-4">Ações</th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-neutral-300">
                                            @foreach ($calls as $item)
                                                @if ($item->status == 0)
                                                    <tr>
                                                        <td class="p-4">
                                                            <div class="flex w-max items-center gap-2">
                                                                <div class="flex flex-col">
                                                                    <span
                                                                        class="text-neutral-900">{{ $item->problem }}</span>
                                                                    <span
                                                                        class="text-sm text-neutral-600 opacity-85">{{ $item->description }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 text-neutral-900">{{ $item->department }}</td>
                                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}</td>
                                                        <td class="p-4"><span class="rounded-md w-fit border border-amber-500 bg-amber-500 px-2 py-1 text-xs font-medium text-black">Aviso</span>
                                                        </td>

                                                        <td class="p-4">
                                                            <a href="{{ route('call.edit',$item->id) }}">
                                                            <button type="button"
                                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0">Editar</button>
                                                            </a>
                                                            </td>

                                                    </tr>
                                                @endif
                                                @if ($item->status == 1)
                                                    <tr>
                                                        <td class="p-4">
                                                            <div class="flex w-max items-center gap-2">
                                                                <div class="flex flex-col">
                                                                    <span
                                                                        class="text-neutral-900 ">{{ $item->problem }}</span>
                                                                    <span
                                                                        class="text-sm text-neutral-600 opacity-85 ">{{ $item->description }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 text-neutral-900">{{ $item->department }}</td>
                                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}</td>
                                                        <td class="p-4"><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Finalizado</span>
                                                        </td>

                                                        <td class="p-4">
                                                            <a href="{{ route('call.edit',$item->id) }}"><button type="button"
                                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0">Editar</button>
                                                            </a>
                                                            </td>

                                                    </tr>
                                                @endif
                                                @if ($item->status == 2)
                                                    <tr>
                                                        <td class="p-4">
                                                            <div class="flex w-max items-center gap-2">
                                                                <div class="flex flex-col">
                                                                    <span
                                                                        class="text-neutral-900 ">{{ $item->problem }}</span>
                                                                    <span
                                                                        class="text-sm text-neutral-600 opacity-85 ">{{ $item->description }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 text-neutral-900 ">{{ $item->department }}</td>
                                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}
                                                        </td>
                                                        <td class="p-4"><span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Espera</span>
                                                        </td>

                                                        <td class="p-4">
                                                            <a href="{{ route('call.edit',$item->id) }}">
                                                            <button type="button"
                                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0">Editar</button>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @endif
                                                @if ($item->status == 3)
                                                    <tr>
                                                        <td class="p-4">
                                                            <div class="flex w-max items-center gap-2">
                                                                <div class="flex flex-col">
                                                                    <span
                                                                        class="text-neutral-900 ">{{ $item->problem }}</span>
                                                                    <span
                                                                        class="text-sm text-neutral-600 opacity-85 ">{{ $item->description }}</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-4 text-neutral-900">{{ $item->department }}</td>
                                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}
                                                        </td>
                                                        <td class="p-4"><span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Inativo</span>
                                                        </td>

                                                        <td class="p-4">
                                                            <a href="{{ route('call.edit',$item->id) }}">
                                                            <button type="button"
                                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0">Editar</button>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $calls->links() }}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
