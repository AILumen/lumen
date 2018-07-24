<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;

class Controller extends BaseController
{

	public function testing(Request $request){
		return config('messages.statusCode.INVALID_ACCESS_TOKEN');
    	dd(app()->environment('local', 'production'));
	}


	public function testing_middleware(Request $request){
		$data = User::find(1);
		return $request->all();
	}

    public function index(Request $request){
    	$this->validate($request, [
	        'user_id' => 'required',
	    ]);
    	$data = User::find($request->user_id);
    	$response = [
    		'message' => 'Success',
    		'response' => $data
    	];
    	if($data)
    		return response()->json($response,200);
    	else
    		$response['response'] = [];
    		return response()->json($response,200);
    	return $request->method();
    } 
}
