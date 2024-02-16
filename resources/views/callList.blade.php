<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p><h1><a href="{{ route('call.index') }}">Chamados</a></h1></p>
                    <p><a href="#">laudos</a></p>
                </div>
                <div class="table-responsive small">
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Problema</th>
                          <th scope="col">Descrição</th>
                          <th scope="col">Departamento</th>
                          <th scope="col">Setor</th>
                          <th scope="col">Endereço</th>
                          <th scope="col">Contato</th>
                          <th scope="col">Status</th>
                          <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($call as $item)
                            <tr>
                              <td>{{ $loop->index }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->problem }}</td>
                              <td>{{ $item->description }}</td>
                              <td>{{ $item->department }}</td>
                              <td>{{ $item->sector }}</td>
                              <td>{{ $item->address }}</td>
                              <td>{{ $item->contact }}</td>
                              <td>{{ $item->status }}</td>
                              <td><a href="{{ route('call.edit',$item->id) }}">Alterar</a></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  {{ $call->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
