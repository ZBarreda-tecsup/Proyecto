<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flight-details">
                        <p><strong>Origen:</strong> {{ $flightDetails['origin'] }}</p>
                        <p><strong>Destino:</strong> {{ $flightDetails['destination'] }}</p>
                        <p><strong>Fecha de Salida:</strong> {{ $flightDetails['departureDate'] }}</p>
                        <p><strong>Precio:</strong> {{ $flightDetails['price'] }} {{ $flightDetails['currency'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>