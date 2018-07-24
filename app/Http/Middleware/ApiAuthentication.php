<?php
namespace App\Http\Middleware;
use Closure;
use \App\User;
use Illuminate\Http\Response;

class ApiAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if(!empty(($request->header('accessToken')))){
            $userDetail = User::where(['remember_token' => $request->header('accessToken')])->first();
            if(empty($userDetail)){
                $Response = [
                  'message'  => config('messages.invalid.detail'),
                ];
                return response()->json( $Response , config('messages.statusCode.INVALID_ACCESS_TOKEN'));
            }
            $request['userDetail'] = $userDetail;
            return $next($request);
        } else {
            $response['message'] = config('messages.required.accessToken');
            return response()->json($response,config('messages.statusCode.INVALID_ACCESS_TOKEN'));
        }
    }
}