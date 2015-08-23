<?php

$app->get('hello', function () {
    return 'hello world!';
});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('hi', function () {
        return response()->json([
            'check' => 'logs',
        ]);
    });
});
