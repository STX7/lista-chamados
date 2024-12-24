<x-app-layout>
    <!--
    <div class="col-12">
        <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article
                class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <div class="flex flex-col gap-4 p-6">
                    <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white"
                        aria-describedby="featureDescription">Certificados (anual): {{ $certificatesY }}</h3>
                </div>
            </article>
        </div>
        <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article
                class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <div class="flex flex-col gap-4 p-6">
                    <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white"
                        aria-describedby="featureDescription">Chamados (anual): {{ $callsY }}</h3>
                </div>
            </article>
        </div>
        <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article
                class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <div class="flex flex-col gap-4 p-6">
                    <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white"
                        aria-describedby="featureDescription">Certificados (mensal): {{ $certificatesM }}</h3>
                </div>
            </article>
        </div>
        <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <article
                class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                <div class="flex flex-col gap-4 p-6">
                    <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white"
                        aria-describedby="featureDescription">Chamados (mensal): {{ $callsM }}</h3>
                </div>
            </article>
        </div>
    </div>
    <br>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="col-12 flex">
            <div class="col-6" style="width: 50%">
                <canvas id="myChart"></canvas>
            </div>
            <div class="col-6" style="width: 50%">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
                type: 'line',
                data: {

                    datasets: [{
                        label: 'Chamados',
                        data: {!! $dataB !!},

                        borderWidth: 3,
                        borderColor: '#FF6384',
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            const ctx2 = document.getElementById('myChart2');
            new Chart(ctx2, {
                type: 'line',
                data: {

                    datasets: [{
                        label: 'Certificados',
                        data: {!! $dataA !!},
                        borderWidth: 3
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
-->
</x-app-layout>
