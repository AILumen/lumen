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

$router->post('/testing', 'Controller@testing');
$router->post('/get_data_by_user_id', ['as' => 'test_gaurav' , 'uses' => 'Controller@index']);

// Route Parameters

	# Required Parameters
	$router->get('user/{id}/{user_name}', [ 'as' => 'required_parameters' , function ($id ,$user_name ) {
	    return 'User_id: '.$id.' User_name: '.$user_name;
	}]);

	# Optional Parameters
	$router->get('user[/{user_name}]', function ($id ,$user_name = null) {
	    return 'User_id: '.$id.' User_name: '.$user_name;
	});



$router->group([ 'prefix' => 'group_route', 'middleware' => 'ApiAuthentication'],function() use ($router) {
	$router->post('testing_middleware','Controller@testing_middleware');
});


$router->group(['prefix' => 'accounts/{accountId}' , 'middleware' => 'ApiAuthentication'], function () use ($router) {
    $router->get('detail', function ($accountId)    {
        return 'accounts/accountId/detail';
    });
});



$router->post('auth/login',['uses' => 'AuthController@authenticate']);





$router->group(['middleware' => 'jwt.auth'], function() use ($router) {
    $router->get('users', function() {
        $users = \App\User::all();
        return response()->json($users);
    });
});