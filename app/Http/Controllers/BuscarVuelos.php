<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class BuscarVuelos extends Controller
{
    public function showFlightDetails()
    {
        $client = new Client();
        $response = $client->get('https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=PER&destinationLocationCode=BKK&departureDate=2024-07-02&adults=1&nonStop=false&max=250'); // URL y endpoint de la API de Amadeus
    
        $flightsData = json_decode($response->getBody(), true);

        $flights = [];
        foreach ($flightsData['data'] as $flight) {
            $flightDetails = [
                'origin' => $flight['itineraries'][0]['segments'][0]['departure']['iataCode'],
                'destination' => $flight['itineraries'][0]['segments'][count($flight['itineraries'][0]['segments']) - 1]['arrival']['iataCode'],
                'departureDate' => $flight['itineraries'][0]['segments'][0]['departure']['at'],
                'price' => $flight['price']['total'],
                'currency' => $flight['price']['currency'],
            ];
            $flights[] = $flightDetails;
        }
    
        return view('flights-container')->with('flights', $flights);
    }
    
}
