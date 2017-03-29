<?php
use Illuminate\Routing\Router;

Route::group(['middleware' => 'cors','namespace'=>'Api'], function(Router $router){
    $router->post('login','UserController@login');
    $router->get('check','UserController@checkMatricNumber');
    $router->post('register','UserController@register');
    $router->post('transaction','TransactionController@store');
    $router->get('transactions','TransactionController@view');
    $router->get('transactions/owner','TransactionController@viewRequest');
    $router->post('transaction/accept','TransactionController@acceptRequest');
    $router->get('dashboard','TransactionController@dashboard');
    $router->get('locations','LocationController@getLocations');
});
