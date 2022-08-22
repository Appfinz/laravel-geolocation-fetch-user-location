<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1> Hii. This is my current location </h1>

    <div style="border:1px solid black; margin-left: 300px; margin-right: 300px;">
        <h3>IP: {{ $data->ip }}</h3>
        <h3>Country Name: {{ $data->countryName }}</h3>
        <h3>Country Code: {{ $data->countryCode }}</h3>
        <h3>Region Code: {{ $data->regionCode }}</h3>
        <h3>Region Name: {{ $data->regionName }}</h3>
        <h3>City Name: {{ $data->cityName }}</h3>
        <h3>Zipcode: {{ $data->zipCode }}</h3>
        <h3>Latitude: {{ $data->latitude }}</h3>
        <h3>Longitude: {{ $data->longitude }}</h3>
        </div>
</body>
</html>
