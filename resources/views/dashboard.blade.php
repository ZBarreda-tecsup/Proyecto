<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .flight-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .title {
            font-weight: bold;
        }
        .details {
            float: right;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <h1>Detalles de Vuelos</h1>
                    @foreach($flights as $flight)
                        <div class="flight-container">
                            <div class="title">
                                <p>{{ $flight['origin'] }} - {{ $flight['destination'] }}</p>
                            </div>
                            <div class="details">
                                <p>Fecha de Salida: {{ $flight['departureDate'] }}</p>
                                <p>Precio: {{ $flight['price'] }} {{ $flight['currency'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
