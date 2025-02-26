<?php
// Hay que ejecutar 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "xxxxxxxxxxxxxxxxxxxx", // key
    "xxxxxxxxxxxxxxxxxxxx", // secret
    "xxxxxxx", // app_id
    array(
        'cluster' => 'eu'
    )
);

for($i = 0; $i < 15; $i++) {
    $pusher->trigger('chart-original', 'new-chart', array(
        rand(0, 5000),rand(0, 5000),rand(0, 5000),rand(0, 5000),rand(0, 5000)
    ));
    time_nanosleep(1,0); // Equivale a sleep
}
