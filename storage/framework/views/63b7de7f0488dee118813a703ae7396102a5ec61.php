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
        <h3>IP: <?php echo e($data->ip); ?></h3>
        <h3>Country Name: <?php echo e($data->countryName); ?></h3>
        <h3>Country Code: <?php echo e($data->countryCode); ?></h3>
        <h3>Region Code: <?php echo e($data->regionCode); ?></h3>
        <h3>Region Name: <?php echo e($data->regionName); ?></h3>
        <h3>City Name: <?php echo e($data->cityName); ?></h3>
        <h3>Zipcode: <?php echo e($data->zipCode); ?></h3>
        <h3>Latitude: <?php echo e($data->latitude); ?></h3>
        <h3>Longitude: <?php echo e($data->longitude); ?></h3>
        </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\location\resources\views/welcome.blade.php ENDPATH**/ ?>