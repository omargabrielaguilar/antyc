<x-app-layout>
    <x-slot name="header">
        <h1>Tu Registro de Entrenamiento</h1>
    </x-slot>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('workouts.store') }}" method="POST">
            @csrf
            <div>
                <label>Fecha:</label>
                <input type="date" name="date" required>
            </div>

            <div>
                <label>Ejercicio:</label>
                <input type="text" name="exercise" required>
            </div>

            <div>
                <label>Peso (kg, opcional):</label>
                <input type="number" name="weight">
            </div>

            <div>
                <label>Series:</label>
                <input type="number" name="sets" required>
            </div>

            <div>
                <label>Repeticiones (separadas por comas):</label>
                <input type="text" name="reps" placeholder="Ej: 8,6,6,4,2" required>
            </div>

            <button type="submit">Guardar</button>
        </form>

        <h2>Historial</h2>
        <ul>
            @foreach ($workouts as $workout)
                <li>{{ $workout->date }} - {{ $workout->exercise }} -
                    {{ $workout->weight ?? 'BW' }}kg - {{ implode(', ', $workout->reps) }} reps</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
