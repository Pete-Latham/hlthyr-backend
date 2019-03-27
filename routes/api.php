<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router->get('meds', 'Meds@index');
$router->get('/meds/{med}', 'Meds@show');
$router->get('/users/{user}', 'Users@show');
$router->get('/users/{user}/meds', 'Users@medsIndex');
$router->get('/users/{user}/doses', 'Users@dosesIndex');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Call to get info (desc, warning) for a given med
// Meds to return id, name, stock, colourcode for each med
// (Object of objects preferred but array of objects acceptable)