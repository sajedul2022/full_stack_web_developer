<?php

    $OpenWeather = ['api_key' => 'e65e36e90502b959324ccb63c08579ba'];
    $lat = 24.9268766;
    $lon = 89.9310349;
    $base_url = "https://api.openweathermap.org/data/2.5";
    $weather_url = "/weather?lat=" . $lat."&lon=".$lon;
    $api_key = "&appid={$OpenWeather['api_key']}";
    $api_url = $base_url . $weather_url . $api_key;
    $weather = json_decode(file_get_contents($api_url));

    echo "<pre>";
    print_r($weather);
 

    


?>