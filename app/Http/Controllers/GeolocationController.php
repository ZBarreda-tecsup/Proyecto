<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GoogleMaps\GoogleMaps;

class GeolocationController extends Controller
{

    public function getUserCountry()
    {
        $apiKey = 'AIzaSyCxLAptO9AsjHRFssbgwRA8AGh0nzx_h9w'; // Reemplaza con tu clave de API de Google Maps
        $googleMaps = new GoogleMaps($apiKey);
    
        $location = $googleMaps->load('geocoding')
                              ->setParam(['address' => '1600 Amphitheatre Parkway, Mountain View, CA'])
                              ->get();
    
        // Extraer el nombre del país de la respuesta
        $country = '';
        foreach ($location['results'][0]['address_components'] as $component) {
            if (in_array('country', $component['types'])) {
                $country = $component['long_name'];
                break;
            }
        }
    
        return $country;
    }
}
