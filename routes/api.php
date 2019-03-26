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

$router->get('Meds', 'Meds@index');
$router->get('/Meds/{med}', 'Meds@show');
$router->get('/Users/{user}', 'Users@show');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
