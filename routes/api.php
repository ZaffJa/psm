<?php
use Illuminate\Routing\Router;

Route::group(['middleware' => 'cors','namespace'=>'Api'], function(Router $router){
    $router->post('login','UserController@login');
    $router->get('check','UserController@checkMatricNumber');
    $router->post('register','UserController@register');
    $router->post('update','UserController@update');
    $router->post('transaction','TransactionController@store');
    $router->get('transactions','TransactionController@view');
    $router->get('transactions/upcoming','TransactionController@viewUpcomingRequest');
    $router->get('transactions/owner','TransactionController@viewRequest');
    $router->get('transaction/user/cancel','TransactionController@userCancelRequest');
    $router->get('transaction/owner/cancel','TransactionController@ownerCancelRequest');
    $router->post('transaction/accept','TransactionController@acceptRequest');
    $router->post('transaction/accept','TransactionController@acceptRequest');
    $router->get('transaction/done','TransactionController@doneRequest');
    $router->get('dashboard','TransactionController@dashboard');
    $router->get('locations','LocationController@getLocations');
});
