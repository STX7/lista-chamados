<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex col-12">
                <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <article class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                        <div class="flex flex-col gap-4 p-6">
                            <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white" aria-describedby="featureDescription">Certificados (anual):  ???</h3>
                        </div>
                    </article>
                </div>
                <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <article class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                        <div class="flex flex-col gap-4 p-6">
                            <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white" aria-describedby="featureDescription">Chamados (anual): ???</h3>
                        </div>
                    </article>
                </div>
                <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <article class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                        <div class="flex flex-col gap-4 p-6">
                            <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white" aria-describedby="featureDescription">Certificados (mensal): ???</h3>
                        </div>
                    </article>
                </div>
                <div class="col-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <article class="group flex rounded-xl max-w-sm flex-col overflow-hidden border border-slate-300 bg-slate-100 text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300">
                        <div class="flex flex-col gap-4 p-6">
                            <h3 class="text-balance text-xl lg:text-2xl font-bold text-black dark:text-white" aria-describedby="featureDescription">Chamados (mensal): ???</h3>
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
                        labels: ['Janeiro',
                        'Fevereiro',
                        'Março',
                        'Abril',
                        'Maio',
                        'Junho',
                        'julho',
                        'Agosto',
                        'Setembro',
                        'Outubro',
                        'Novembro',
                        'Dezembro'],
                        datasets: [{
                          label: 'Chamados',
                          data: [12, 19, 3, 5, 2, 3],
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
                        labels: ['Janeiro',
                        'Fevereiro',
                        'Março',
                        'Abril',
                        'Maio',
                        'Junho',
                        'julho',
                        'Agosto',
                        'Setembro',
                        'Outubro',
                        'Novembro',
                        'Dezembro'],
                        datasets: [{
                          label: 'Certificados',
                          data: [5, 19, 3, 5, 2, 3, 5, 7, 2, 9, 5, 12],
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
        </div>
    </div>
</x-app-layout>
