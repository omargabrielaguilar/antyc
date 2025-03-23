<div class="py-6 mx-auto max-w-7xl">
    <x-notifications />
    <x-card>
        <x-slot name="title">{{ $isEditing ? 'Editar Ejercicio' : 'Nuevo Ejercicio' }}</x-slot>
        <form wire:submit.prevent="saveExercise">
            <div class="space-y-4">
                <x-input wire:model="name" label="Nombre del ejercicio" required />
                <x-input wire:model="tutorial" label="Tutorial (URL opcional)" type="url" />

                <div wire:ignore class="relative">
                    <label class="block text-sm font-medium text-gray-700">Músculos trabajados</label>
                    <select id="muscles-select" multiple>
                        @foreach ($muscles as $muscle)
                            <option value="{{ $muscle->id }}"
                                {{ in_array($muscle->id, $selectedMuscles ?? []) ? 'selected' : '' }}>
                                {{ $muscle->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <x-button primary type="submit">{{ $isEditing ? 'Actualizar' : 'Guardar' }}</x-button>
                @if ($isEditing)
                    <x-button secondary wire:click="resetForm">Cancelar</x-button>
                @endif
            </div>
        </form>
    </x-card>

    <x-card class="mt-6">
        <x-slot name="title">Lista de Ejercicios</x-slot>

        <div class="overflow-hidden rounded-lg shadow-md">
            <table class="w-full border border-gray-200">
                <thead class="text-white bg-gray-800">
                    <tr>
                        <th class="p-3 text-left">Nombre</th>
                        <th class="p-3 text-left">Tutorial</th>
                        <th class="p-3 text-left">Músculos</th>
                        <th class="p-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($exercises as $exercise)
                        <tr class="transition duration-200 hover:bg-gray-100">
                            <td class="p-3">{{ $exercise->name }}</td>
                            <td class="p-3">
                                @if ($exercise->tutorial)
                                    <a href="{{ $exercise->tutorial }}" target="_blank"
                                        class="text-blue-500 underline hover:text-blue-700">
                                        Ver tutorial
                                    </a>
                                @else
                                    <span class="text-gray-500">No disponible</span>
                                @endif
                            </td>
                            <td class="p-3 text-gray-700">
                                {{ $exercise->muscles->pluck('name')->join(', ') }}
                            </td>
                            <td class="p-3 space-x-2 text-center">
                                <x-button secondary wire:click="editExercise({{ $exercise->id }})">
                                    ✏️ Editar
                                </x-button>
                                <x-button danger wire:click="deleteExercise({{ $exercise->id }})"
                                    onclick="confirm('¿Seguro?') || event.stopImmediatePropagation()">
                                    🗑️ Eliminar
                                </x-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $exercises->links() }}
        </div>

    </x-card>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let select = new TomSelect("#muscles-select", {
            maxItems: 3,
            plugins: ['remove_button'],
            persist: false,
            create: false
        });

        select.on('change', function() {
            @this.set('selectedMuscles', select.getValue());
        });

        Livewire.on('updateMusclesSelect', (muscles) => {
            console.log("Muscles antes de procesar:", muscles);
            if (Array.isArray(muscles[0])) {
                muscles = muscles[0]; // Extraer el array interno
            }

            console.log("Muscles después de procesar:", muscles);

            select.clear();
            muscles.forEach(muscle => {
                select.addOption({
                    value: muscle,
                    text: muscle
                });
            });

            select.setValue(muscles);
        });

    });
</script>
