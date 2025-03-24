<div class="py-6 mx-auto max-w-7xl">
    <x-notifications />

    <form wire:submit.prevent="createProgram" class="p-6 space-y-4 bg-white rounded-lg shadow-md">
        <div>
            <label class="block font-medium text-gray-700">Nombre del Programa</label>
            <input type="text" wire:model="name" class="w-full border-gray-300 rounded-md" required />
            @error('name')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700">Duración (semanas)</label>
                <input type="number" wire:model="duration" class="w-full border-gray-300 rounded-md" required />
                @error('duration')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700">Días por semana</label>
                <input type="number" wire:model="days_per_week" class="w-full border-gray-300 rounded-md" required />
                @error('days_per_week')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded-md">Crear Programa</button>
    </form>

    <div class="mt-6">
        <h2 class="text-lg font-semibold">Programas Disponibles</h2>
        <ul class="mt-4 space-y-2">
            @foreach ($programs as $program)
                <li class="p-4 bg-gray-100 rounded-md cursor-pointer" wire:click="selectProgram({{ $program->id }})">
                    {{ $program->name }} ({{ $program->duration }} semanas, {{ $program->days_per_week }} días/semana)
                </li>
            @endforeach
        </ul>
    </div>

    @if ($selectedProgram)
        <div class="mt-6 p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-lg font-semibold">{{ $selectedProgram->name }}</h2>
            <div class="mt-4">
                <label class="block text-gray-700">Día de Entrenamiento</label>
                <input type="text" wire:model="day" class="w-full border-gray-300 rounded-md" />
                <button type="button" wire:click="addDay"
                    class="mt-2 px-4 py-2 text-white bg-blue-500 rounded-md">Añadir Día</button>
            </div>

            <div class="mt-4">
                <h3 class="text-md font-semibold">Días Programados</h3>
                <ul class="mt-2 space-y-2">
                    @foreach ($selectedProgram->weeklySchedules as $schedule)
                        <li class="p-4 bg-gray-200 rounded-md cursor-pointer"
                            wire:click="selectSchedule({{ $schedule->id }})">
                            {{ $schedule->day }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
