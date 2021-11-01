<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It is a breeze. Simply tell Lumen the URIs it should respond to
  | and give it the Closure to call when that URI is requested.
  |
 */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => "/api/v1/questions", 'namespace' => 'V1'], function () use ($router) {
    $router->get("", "questionsController@getAll");
    $router->get("/{id}", "questionsController@get");
    $router->post("", "questionsController@create");
    $router->put("/{id}", "questionsController@update");
    $router->delete("/{id}", "questionsController@delete");
});


$router->group(['prefix' => "/api/v1/dimensions", 'namespace' => 'V1'], function () use ($router) {
    $router->post("", "dimensionsController@create");
    $router->get("", "dimensionsController@getAll");
    $router->get("/{id}", "dimensionsController@get");
    $router->put("/{id}", "dimensionsController@update");
    $router->delete("/{id}", "dimensionsController@delete");
});


//$router->group(['prefix' => "/api/v1/transacticion", 'namespace' => 'V1'], function () use ($router) {
//    $router->post("", "TransactionsController@create");
////    $router->get("", "TransactionsController@getAll");
////    $router->get("/{id}", "TransactionsController@get");
////    $router->put("/{id}", "TransactionsController@update");
////    $router->delete("/{id}", "TransactionsController@delete");
//});
