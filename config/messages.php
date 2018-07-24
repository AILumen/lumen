<?php
return [
	
	'success' => [
		'success' => 'Success.',
	],

	'error' => [
		'mobile_already_taken' => 'Mobile number already exist.',
	],

	
	'statusCode' => [
		'ALREADY_EXIST' => '422',
		'PARAMETER_MISSING' => '422',
		'INVALID_ACCESS_TOKEN' => '401',
		'INVALID_CREDENTIAL' => '403',
		'ACTION_COMPLETE' => '200',
		'CREATE' => '201',
		'NO_DATA_FOUND' => '204',
		'IMAGE_FILE_MISSING' => '422',
		'SHOW_ERROR_MESSAGE' => '400',
		'NOT_FOUND' => '404',
		'BAD_REQUEST' => '500'
	],


	'required' => [
		'accessToken' => 'Access Token Required.',
	],


	'invalid' =>[
		'detail' => 'Invalid details.',
		'request' => 'Invalid request.',
		'credentials' => 'Invalid credentials.',
		'accessToken' => 'Invalid accessToken.',
		'OTP' => 'Invalid OTP.',
		'NOT_FOUND' => 'Not found',
	],

	

	"HTTP_SUCCESS_CODE" => 200,
	"HTTP_INTERNAL_SERVER_ERROR" => 500,
	"HTTP_USER_NOT_EXIST" => 421,
	"HTTP_PARAMETER_MISSING" => 420,
	"HTTP_LOGIN_ERROR" => 422,
	"HTTP_EMAIL_ALREADY_EXIST" => 425,
	"HTTP_USER_APPROVAL_REQUEST_PENDING" => 426,
	"HTTP_USER_APPROVAL_REQUEST_REJECTED" => 427,
	"HTTTP_USER_INACTIVE" => 429,
	"HTTTP_USER_DELETED" => 430,
	"HTTP_WRONG_REFRESH_TOKEN" => 431,
	"WRONG_JWT_TOKEN" => 423,
	"JWT_TOKEN_EXPIRE" => 424,
	"HTTP_USER_EMAIL_ALREADY_EXIST" => 428,
	"HTTP_TOKEN_NOT_PROVIDED" => 401,
	"HTTP_TOKEN_EXPIRED" => 402,
	"HTTP_WRONG_TOKEN" => 403,
	"HTTP_WRONG_PASSWORD" => 432,
	
];