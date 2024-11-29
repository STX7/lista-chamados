<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ordem de serviço') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                            <tr>
                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <div class="flex flex-col">
                                            <span class="text-neutral-900 dark:text-white">{{ $item->problem }}</span>
                                            <span
                                                class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">{{ $item->description }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 text-neutral-900 dark:text-white">{{ $item->department }}</td>
                                <td class="p-4">{{ date('H:m - d/M/Y ', strtotime($item->created_at)) }}</td>
                                <td class="p-4"><button disabled type="button" class="cursor-pointer whitespace-nowrap rounded-xl bg-green-600 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-600 dark:text-white dark:focus-visible:outline-green-600">Resolvido</button>
                                </td>
                                <td class="p-4"><button type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button>
                                </td>

                            </tr>
                            @endforeach
                            <tr>
                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <img class="size-10 rounded-full object-cover"
                                            src="https://penguinui.s3.amazonaws.com/component-assets/avatar-1.webp"
                                            alt="user avatar" />
                                        <div class="flex flex-col">
                                            <span class="text-neutral-900 dark:text-white">Bob Johnson</span>
                                            <span
                                                class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">johnson.bob@penguinui.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">2338</td>
                                <td class="p-4">Aug 20, 2020</td>
                                <td class="p-4"><span
                                        class="inline-flex overflow-hidden rounded-md border border-green-500 px-1 py-0.5 text-xs font-medium text-green-500 bg-green-500/10">Active</span>
                                </td>
                                <td class="p-4"><button type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <img class="size-10 rounded-full object-cover"
                                            src="https://penguinui.s3.amazonaws.com/component-assets/avatar-2.webp"
                                            alt="user avatar" />
                                        <div class="flex flex-col">
                                            <span class="text-neutral-900 dark:text-white">Ryan Thompson</span>
                                            <span
                                                class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">ryan.thompson@penguinui.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">2346</td>
                                <td class="p-4">Feb 5, 2022</td>
                                <td class="p-4"><span
                                        class="inline-flex overflow-hidden rounded-md border border-red-500 px-1 py-0.5 text-xs font-medium text-red-500 bg-red-500/10">Canceled</span>
                                </td>
                                <td class="p-4"><button type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <img class="size-10 rounded-full object-cover"
                                            src="https://penguinui.s3.amazonaws.com/component-assets/avatar-4.webp"
                                            alt="user avatar" />
                                        <div class="flex flex-col">
                                            <span class="text-neutral-900 dark:text-white">Emily Rodriguez</span>
                                            <span
                                                class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">emily.rodriguez@penguinui.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">2349</td>
                                <td class="p-4">Jun 14, 2022</td>
                                <td class="p-4"><span
                                        class="inline-flex overflow-hidden rounded-md border border-green-500 px-1 py-0.5 text-xs font-medium text-green-500 bg-green-500/10">Active</span>
                                </td>
                                <td class="p-4"><button type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4">
                                    <div class="flex w-max items-center gap-2">
                                        <img class="size-10 rounded-full object-cover"
                                            src="https://penguinui.s3.amazonaws.com/component-assets/avatar-7.webp"
                                            alt="user avatar" />
                                        <div class="flex flex-col">
                                            <span class="text-neutral-900 dark:text-white">Alex Martinez</span>
                                            <span
                                                class="text-sm text-neutral-600 opacity-85 dark:text-neutral-300">alex.martinez@penguinui.com</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">2345</td>
                                <td class="p-4">Sep 17, 2018</td>
                                <td class="p-4"><span
                                        class="inline-flex overflow-hidden rounded-md border border-green-500 px-1 py-0.5 text-xs font-medium text-green-500 bg-green-500/10">Active</span>
                                </td>
                                <td class="p-4"><button type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Edit</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                {{ $calls->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
