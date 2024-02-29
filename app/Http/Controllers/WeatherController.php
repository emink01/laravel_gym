<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function dashboard()
    {
        // Fetch weather data from the API
        $weatherData = $this->fetchWeatherData();

        // Pass the weather data to the view
        return view('dashboard', ['weatherData' => $weatherData]);
    }

    public function fetchWeatherData()
    {
        $apiKey = 'b630d4a1e9009cd211d1536a0fb369b0';
    
        $response = Http::get('http://api.openweathermap.org/data/2.5/weather', [
            'q' => 'Sarajevo', // replace 'your-location' with the desired location
            'appid' => $apiKey,
            'units' => 'metric', // specify units for temperature, etc.
        ]);
    
        // Check if the API request was successful
        if ($response->successful()) {
            return $response->json();
        } else {
            return []; // return an empty array if the request fails
        }
    }
    
}
