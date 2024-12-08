<?php

// Registrar el autoloader de Composer...
require __DIR__.'/../vendor/autoload.php';

// Inicializar Laravel y manejar la solicitud...
$app = require_once __DIR__.'/../bootstrap/app.php';

use Illuminate\Http\Request;

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);