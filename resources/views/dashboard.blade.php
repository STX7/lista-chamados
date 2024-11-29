<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <!-- Content -->
                <div class="flex flex-col gap-4 p-6">
                    <!-- Header -->
                    <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                        <!-- Title & Rating -->
                        <div class="flex flex-col">
                            <h3 class="text-lg lg:text-xl font-bold text-black dark:text-white" aria-describedby="productDescription">Chamados atendidos</h3>
                            <!-- Rating -->
                        </div>
                        <span class="text-xl">Qtd.:?</span>
                    </div>
                    <p id="productDescription" class="mb-2 text-pretty text-sm">
                        Quantidade de chamados atendidos no ano todo
                    </p>
                    <!-- Button -->
                    <button type="button" class="flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-blue-700 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600 rounded-xl">
                        Ver mais
                    </button>
                </div>


            </article>
            <br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

teste

            </div>
        </div>
    </div>
</x-app-layout>
