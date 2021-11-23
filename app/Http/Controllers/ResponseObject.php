<?php
namespace App\Http\Controllers;

class ResponseObject
{
    const status_ok = "OK";
    const status_failed = "FAIL";
    const code_ok = 200;
    const code_failed = 400;
    const code_unauthorized = 403;
    const code_not_found = 404;
    const code_error = 500;

    public $status;

    public $code;

    public $messages = array();

    public $result = array();
}

// $response = new ResponseObject;
        // $validator = Validator::make($req->json()->all(), [
        //     "user_name"=>"required",
        //     "email"=>"required|string|email|max:255|unique:users",
        //     "phone_no"=>"required|max:13|unique:users|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/",
        //     "password"=>"required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/",
        //     "street_address"=>"required",
        //     "city"=>"required",
        //     "state"=>"required",
        //     "country"=>"required",
        //     "zipcode"=>"required|max:6"
            
        // ]);

        //  if($validator->fails()){
        //         $response->status = $response::status_failed;
        //         $response->code = $response::code_failed;
        //         foreach ($validator->errors()->getMessages() as $item) {
        //         array_push($response->messages, $item);
        //     }
        // } 
        // else
        // {