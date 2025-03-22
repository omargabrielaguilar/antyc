<x-app-layout>
    <x-slot name="header">
        <h1>Exercise List</h1>
    </x-slot>

    <div class="max-w-3xl py-6 mx-auto">
        <x-notifications />

        <x-card>
            <x-slot name="title">{{ $isEditing ? 'Editar Ejercicio' : 'Nuevo Ejercicio' }}</x-slot>

            <form wire:submit.prevent="saveExercise">
                <div class="space-y-4">
                    <x-input wire:model="name" label="Nombre del ejercicio" required />
                    <x-input wire:model="tutorial" label="Tutorial (URL opcional)" type="url" />

                    <x-button primary type="submit">{{ $isEditing ? 'Actualizar' : 'Guardar' }}</x-button>
                    @if ($isEditing)
                        <x-button secondary wire:click="resetForm">Cancelar</x-button>
                    @endif
                </div>
            </form>
        </x-card>

        <x-card class="mt-6">
            <x-slot name="title">Lista de Ejercicios</x-slot>

            <div class="overflow-x-auto">
                <table class="w-full border border-collapse border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-2 border">Nombre</th>
                            <th class="p-2 border">Tutorial</th>
                            <th class="p-2 border">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exercises as $exercise)
                            <tr class="hover:bg-gray-50">
                                <td class="p-2 border">{{ $exercise->name }}</td>
                                <td class="p-2 border">
                                    @if ($exercise->tutorial)
                                        <a href="{{ $exercise->tutorial }}" target="_blank"
                                            class="text-blue-500 underline">Ver tutorial</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="flex p-2 space-x-2 border">
                                    <x-button secondary wire:click="editExercise({{ $exercise->id }})">Editar</x-button>
                                    <x-button danger wire:click="deleteExercise({{ $exercise->id }})"
                                        onclick="confirm('¿Seguro?') || event.stopImmediatePropagation()">Eliminar</x-button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-card>
    </div>
</x-app-layout>
