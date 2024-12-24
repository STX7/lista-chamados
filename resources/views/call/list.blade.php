<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ordem de serviço') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Campo pesquisa-->
            <div class="relative flex w-full max-w-xs flex-col gap-1 text-slate-700 dark:text-slate-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-slate-700/50 dark:text-slate-300/50">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="search" class="w-full rounded-xl border border-slate-300 bg-slate-100 py-2 pl-10 pr-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75 dark:border-slate-700 dark:bg-slate-800/50 dark:focus-visible:outline-blue-600" name="search" placeholder="Search" aria-label="search"/>
            </div><br>

            <!--Tabela-->
            <div class="bg-white dark:bg-gray-800  shadow-sm sm:rounded-lg">
                <div
                    class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700">
                    <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                        <thead
                            class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                            <tr>
                                <th scope="col" class="p-4">Ordem de serviço</th>
                                <th scope="col" class="p-4">Departamento</th>
                                <th scope="col" class="p-4">Data</th>
                                <th scope="col" class="p-4">Status</th>
                                <th scope="col" class="p-4">Ações</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                            @foreach ($calls as $item)
                                @if ($item->status == 0)
                                    <tr>
                                        <td class="p-4">
                                            <div class="flex w-max items-center gap-2">
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-neutral-900 dark:text-white">{{ $item->problem }}</span>
                                                    <span
                                                        class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">{{ $item->description }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4 text-neutral-900 dark:text-white">{{ $item->department }}</td>
                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}</td>
                                        <td class="p-4"><button disabled type="button"
                                                class="cursor-pointer whitespace-nowrap rounded-xl bg-amber-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-amber-500 dark:text-white dark:focus-visible:outline-amber-500">
                                                Aviso</button>
                                        </td>
                                        <a href="{{ route('call.edit',$item->id) }}">
                                        <td class="p-4"><button type="button"
                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Editar</button>
                                        </td>
                                        </a>
                                    </tr>
                                @endif
                                @if ($item->status == 1)
                                    <tr>
                                        <td class="p-4">
                                            <div class="flex w-max items-center gap-2">
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-neutral-900 dark:text-white">{{ $item->problem }}</span>
                                                    <span
                                                        class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">{{ $item->description }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4 text-neutral-900 dark:text-white">{{ $item->department }}</td>
                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}</td>
                                        <td class="p-4"><button disabled type="button"
                                                class="cursor-pointer whitespace-nowrap rounded-xl bg-green-600 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-600 dark:text-white dark:focus-visible:outline-green-600">
                                                Regular</button>
                                        </td>

                                        <td class="p-4"><a href="{{ route('call.edit',$item->id) }}"><button type="button"
                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Editar</button>
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
                                                        class="text-neutral-900 dark:text-white">{{ $item->problem }}</span>
                                                    <span
                                                        class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">{{ $item->description }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4 text-neutral-900 dark:text-white">{{ $item->department }}</td>
                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}
                                        </td>
                                        <td class="p-4"><button disabled type="button"
                                                class="cursor-pointer whitespace-nowrap rounded-xl bg-red-600 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-600 dark:text-white dark:focus-visible:outline-red-600">Não
                                                Vencido</button>
                                        </td>
                                        <a href="{{ route('call.edit',$item->id) }}">
                                        <td class="p-4"><button type="button"
                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Editar</button>
                                        </td>
                                    </a>
                                    </tr>
                                @endif
                                @if ($item->status == 3)
                                    <tr>
                                        <td class="p-4">
                                            <div class="flex w-max items-center gap-2">
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-neutral-900 dark:text-white">{{ $item->problem }}</span>
                                                    <span
                                                        class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">{{ $item->description }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4 text-neutral-900 dark:text-white">{{ $item->department }}</td>
                                        <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}
                                        </td>
                                        <td class="p-4"><button disabled type="button" class="cursor-pointer whitespace-nowrap rounded-xl bg-sky-600 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-sky-600 dark:text-white dark:focus-visible:outline-sky-600">
                                            Inativo</button>
                                        </td>
                                        <a href="{{ route('call.edit',$item->id) }}">
                                        <td class="p-4"><button type="button"
                                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Editar</button>
                                        </td>
                                    </a>
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
</x-app-layout>
