<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api/v1'], function () use ($router) {

    //the route below is for creating a new agent
    $router->post('agents/add', 'AgentController@createAgent');
    //the route below is for viewing one agent
    $router->get('agents/view/{id}', 'AgentController@viewAgent');
    //the route below is for updating the information of a agent
    $router->put('agents/edit/{id}', 'AgentController@updateAgent');
    //the route below is for deleting a agent from the database
    $router->delete('agents/delete/{id}', 'AgentController@deleteAgent');
    //the route below is for viewing all agents
    $router->get('agents/index', 'AgentController@index');

    //the route below is for creating a new office
    $router->post('offices/add', 'OfficeController@createOffice');
    //the route below is for viewing one office
    $router->get('offices/view/{id}', 'OfficeController@viewOffice');
    //the route below is for updating the information of an office
    $router->put('offices/edit/{id}', 'OfficeController@updateOffice');
    //the route below is for deleting an office from the database
    $router->delete('offices/delete/{id}', 'OfficeController@deleteOffice');
    //the route below is for viewing all offices
    $router->get('offices/index', 'OfficeController@index');

    //the route below is for creating a new city
    $router->post('cities/add', 'CityController@createCity');
    //the route below is for viewing one city
    $router->get('cities/view/{id}', 'CityController@viewCity');
    //the route below is for updating the information of a city
    $router->put('cities/edit/{id}', 'CityController@updateCity');
    //the route below is for deleting a city from the database
    $router->delete('cities/delete/{id}', 'CityController@deleteCity');
    //the route below is for viewing all cities
    $router->get('cities/index', 'CityController@index');

    //the route below is for creating a new zip codes
    $router->post('zips/add', 'ZipController@createZip');
    //the route below is for viewing one zip code
    $router->get('zips/view/{id}', 'ZipController@viewZip');
    //the route below is for updating the information of a zip code
    $router->put('zips/edit/{id}', 'ZipController@updateZip');
    //the route below is for deleting a zip code from the database
    $router->delete('zips/delete/{id}', 'ZipController@deleteZip');
    //the route below is for viewing all zip codes
    $router->get('zips/index', 'ZipController@index');

    //the route below is for creating a new category
    $router->post('categories/add', 'CategoryController@createCategory');
    //the route below is for viewing one category
    $router->get('categories/view/{id}', 'CategoryController@viewCategory');
    //the route below is for updating the information of a category
    $router->put('categories/edit/{id}', 'CategoryController@updateCategory');
    //the route below is for deleting a category from the database
    $router->delete('categories/delete/{id}', 'CategoryController@deleteCategory');
    //the route below is for viewing all categories
    $router->get('categories/index', 'CategoryController@index');
});
