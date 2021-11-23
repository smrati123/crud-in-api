<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function store(Request $req)
    {
        
        $users=new User;
        $user_name = $req->user_name;
        $email = $req->email;
        $phone_no = $req->phone_no;
        $password = $req->password;
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $users->password= $hashPassword;
        $street_address = $req->street_address;
        $city = $req->city;
        $state = $req->state;
        $country = $req->country;
        $zipcode = $req->zipcode;
        $created_at = gmdate('Y-m-d h:i:s');
        //$users->save();
        $inputDataArray = [
            'user_name' => $user_name,
            'email' => $email,
            'phone_no' => $phone_no,
            'password' => $password,
            'street_address' => $street_address,
            'state' => $state,
            'city' => $city,
            'country' => $country,
            'zipcode' => $zipcode,
            'created_at' => $created_at,
        ];
        $save = User::saveuser($inputDataArray);
        if($save){
            //dd($inputDataArray);
            return response()->json(['message'=>'user add successully'],200);
        }
        else{
            return response()->json(['message'=>'something went wrong'],201);
        }
    
    }
    
     function userData()
    {
        return User::all();
    }  
    function update(Request $req)
    {
       
        $id = $req->user_id;
        $user_name = $req->user_name;
        $email = $req->email;
        $phone_no = $req->phone_no;
        $street_address = $req->street_address;
        $city = $req->city;
        $state = $req->state;
        $country = $req->country;
        $zipcode = $req->zipcode;
        
        $update = User::updateUser($id, $user_name, $email, $phone_no, $street_address, $city, $state, $country, $zipcode);
        if($update)
        return response()->json(['message'=>'user update successully'],200);
        else
        return response()->json(['message'=>'something went wrong'],201);

    }
    function delete($id)
    {
        $users=User::find($id);
        $users->delete();
        return response()->json(['message'=>'user delete successully'],200);
        
    }

    function search(Request $req)
    {
        $user_name=$req->user_name;
        $email=$req->email;

        $result = User::where('user_name', 'LIKE', '%'. $user_name. '%')
                ->orWhere('email', 'LIKE', '%'. $email. '%')
                ->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
    }

    function upload(Request $req)
    {
        $result=$req->file('filename')->store('img');
        if($result)
        return response()->json(['message'=>'image update successully'],200);
        else
        return response()->json(['message'=>'something went wrong'],201);
    }
}
