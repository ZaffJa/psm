<?php
use Illuminate\Routing\Router;

Route::group(['middleware' => 'cors','namespace'=>'Api'], function(Router $router){
    $router->post('login','UserController@login');
    $router->post('register','UserController@register');
    $router->post('transaction','TransactionController@store');
    $router->get('locations','LocationController@getLocations');
});
