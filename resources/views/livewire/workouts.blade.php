<div class="py-6 mx-auto max-w-7xl">
    <x-notifications />

    <form wire:submit.prevent="saveWorkout" class="p-6 space-y-4 bg-white rounded-lg shadow-md">
        <div>
            <x-datetime-picker wire:model="date" label="Fecha" required />
        </div>

        <div class="space-y-4">
            @foreach ($exercises as $index => $exercise)
                <div class="relative p-4 border rounded-md">
                    <label class="block font-medium text-gray-700">Ejercicio</label>
                    <select wire:model="exercises.{{ $index }}.exercise_id"
                        class="w-full border-gray-300 rounded-md">
                        <option value="">Seleccione un ejercicio</option>
                        @foreach ($availableExercises as $ex)
                            <option value="{{ $ex->id }}">{{ $ex->name }}</option>
                        @endforeach
                    </select>
                    @error("exercises.$index.exercise_id")
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror

                    <div class="grid grid-cols-3 gap-4 mt-2">
                        <div>
                            <label class="block text-gray-700">Peso (kg)</label>
                            <input type="number" wire:model="exercises.{{ $index }}.weight"
                                class="w-full border-gray-300 rounded-md">
                            @error("exercises.$index.weight")
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700">Sets</label>
                            <input type="number" wire:model="exercises.{{ $index }}.sets"
                                class="w-full border-gray-300 rounded-md">
                            @error("exercises.$index.sets")
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700">Repeticiones</label>
                            <input type="text" wire:model="exercises.{{ $index }}.repetitions"
                                class="w-full border-gray-300 rounded-md">
                            @error("exercises.$index.repetitions")
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700">RPE</label>
                            <input type="text" wire:model="exercises.{{ $index }}.rpe"
                                class="w-full border-gray-300 rounded-md">
                            @error("exercises.$index.rpe")
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="button" wire:click="removeExercise({{ $index }})"
                        class="absolute text-red-500 top-2 right-2">X</button>
                </div>
            @endforeach
        </div>

        <button type="button" wire:click="addExercise" class="px-4 py-2 text-white bg-blue-500 rounded-md">Añadir
            ejercicio</button>

        <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded-md">Guardar Entrenamiento</button>
    </form>
</div>
