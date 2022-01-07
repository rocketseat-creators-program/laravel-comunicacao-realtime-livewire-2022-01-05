<x-base-layout>
    <x-slot name='header'>Tarefas</x-slot>

    <div>
        <x-section>
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Adicionar nova
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Preencha todos os campos para adicionar uma nova tarefa.
                    </p>
                </div>

                <form method="POST" wire:submit.prevent='salvar'>
                    <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <label for="titulo" class="block text-sm font-medium text-gray-700">
                                Título
                            </label>
                            <div class="mt-1">
                                <input wire:model.lazy='tarefa.titulo' type="text" name="titulo" id="titulo"
                                    autocomplete="given-name"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">

                                @error('tarefa.titulo')<p>{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="descricao" class="block text-sm font-medium text-gray-700">
                                Descrição
                            </label>
                            <div class="mt-1">
                                <textarea wire:model.debounce.500ms='tarefa.descricao' id="descricao" name="descricao"
                                    rows="3"
                                    class="max-w-full shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                @error('tarefa.descricao')<p>{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="concluida" class="block text-sm font-medium text-gray-700">
                                Concluída?
                            </label>
                            <div class="mt-1">
                                <select wire:model.lazy='tarefa.concluida' id="concluida" name="concluida"
                                    autocomplete="country-name"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value='' selected>Selecione</option>
                                    <option value='0'>Não</option>
                                    <option value='1'>Sim</option>
                                </select>
                                @error('tarefa.concluida')<p>{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <div class="flex justify-end">
                                <button {{ $errors->any() ? 'disabled' : '' }} type="submit"
                                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </x-section>

        <x-section>
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Título
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descrição
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Concluída?
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Ações</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tarefas as $tarefa)
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $tarefa->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $tarefa->titulo }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 overflow-hidden">
                                    {{ $tarefa->descricao }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 overflow-hidden">
                                    {{ $tarefa->concluida ? 'Sim' : 'Não' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex gap-4">
                                    <a wire:click="editar({{ $tarefa->id }})" href="#"
                                        class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-section>
    </div>
</x-base-layout>
