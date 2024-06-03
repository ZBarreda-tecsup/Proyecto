<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class GeolocationController extends Controller
{
    $apiKey = 'AIzaSyCxLAptO9AsjHRFssbgwRA8AGh0nzx_h9w'; // Reemplaza con tu clave de API de Google Maps
    $client = new Client();

    $response = $client->post('https://www.googleapis.com/geolocation/v1/geolocate?key='.$apiKey, [
        'json' => [
            // Agrega aquí los datos de geolocalización que deseas enviar en la solicitud
        ]
    ]);

    $data = json_decode($response->getBody(), true);

    // Procesar la respuesta de la API y obtener los datos de geolocalización

    return $data;
}
