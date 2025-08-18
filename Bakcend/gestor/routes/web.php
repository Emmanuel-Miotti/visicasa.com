<?php

use Illuminate\Support\Facades\Route;
use App\Services\DatabaseSingleton;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-db', function () {
    $db = DatabaseSingleton::getInstance()->getConnection();
    $stmt = $db->query("SELECT NOW() as fecha");
    $result = $stmt->fetch();

    return "La conexión funciona. Fecha actual: " . $result['fecha'];
});