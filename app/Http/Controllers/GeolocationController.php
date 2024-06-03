<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   use GuzzleHttp\Client;
class GeolocationController extends Controller
{
    public function getGeolocationData()
    {
        $apiKey = 'AIzaSyAE2zfQTUyw-OYJuKNXtz3eloTenaM6so0'; // Reemplaza con tu clave de API de Google Maps
        $client = new Client();
    
        // Datos de geolocalización para enviar en la solicitud
        $geolocationData = [
            "homeMobileCountryCode" => 310,
            "homeMobileNetworkCode" => 410,
            "radioType" => "gsm",
            "carrier" => "Vodafone",
            "considerIp" => true
        ];
    
        // Realizar la solicitud POST a la Google Maps Geolocation API con Guzzle
        $response = $client->post('https://www.googleapis.com/geolocation/v1/geolocate?key='.$apiKey, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'json' => $geolocationData
        ]);
    
        $data = json_decode($response->getBody(), true);
    
        // Procesar la respuesta para obtener el nombre del país
        $country = '';
        if (isset($data['location'])) {
            $lat = $data['location']['lat'];
            $lng = $data['location']['lng'];
            
        $response = $client->get('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$lng.'&key='.$apiKey);

        $geocodingData = json_decode($response->getBody(), true);

        // Procesar la respuesta para obtener el nombre del país
        $country = '';
        if (isset($geocodingData['results'][0]['address_components'])) {
            foreach ($geocodingData['results'][0]['address_components'] as $component) {
                if (in_array('country', $component['types'])) {
                    $country = $component['long_name'];
                    break;
                }
            }
        }
        
        return view('dashboard',compact('country'));
        }
    }
}