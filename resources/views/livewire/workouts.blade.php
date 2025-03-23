<div class="max-w-3xl py-6 mx-auto">
    <x-notifications />
    <x-card>
        <x-slot name="title">Nuevo Entrenamiento</x-slot>

        <form wire:submit.prevent="saveWorkout">
            <div class="space-y-4">
                <x-datetime-picker wire:model="date" label="Fecha" required />

                <x-input wire:model="exercise" label="Ejercicio" required />

                <x-input wire:model="weight" label="Peso (kg, opcional)" type="number" />

                <x-input wire:model="sets" label="Series" type="number" required />

                <x-input wire:model="reps" label="Repeticiones (separadas por comas)" placeholder="Ej: 8,6,6,4,2"
                    required />

                <x-button primary type="submit">Guardar</x-button>
            </div>
        </form>
    </x-card>

    <x-card class="mt-6">
        <x-slot name="title">Historial de Entrenamientos</x-slot>

        <div class="overflow-x-auto">
            <table class="w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-2 border">Fecha</th>
                        <th class="p-2 border">Ejercicio</th>
                        <th class="p-2 border">Peso (kg)</th>
                        <th class="p-2 border">Series</th>
                        <th class="p-2 border">Repeticiones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($workouts as $workout)
                        <tr class="hover:bg-gray-50">
                            <td class="p-2 border">{{ $workout->date }}</td>
                            <td class="p-2 border">{{ $workout->exercise }}</td>
                            <td class="p-2 border">{{ $workout->weight ?? 'BW' }}</td>
                            <td class="p-2 border">{{ $workout->sets }}</td>
                            <td class="p-2 border">{{ implode(', ', $workout->reps) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-card>

</div>
