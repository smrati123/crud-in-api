<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey = 'user_id';

    public static function updateUser($id, $user_name, $email, $phone_no, $street_address, $city, $state, $country, $zipcode)
    {

        $update = DB::table('users')
            ->where('user_id', $id)
            ->update([
                'user_name' => $user_name,
                'email' => $email,
                'phone_no' => $phone_no,
                'street_address' => $street_address,
                'city' => $city,
                'state' => $state,
                'country' => $country,
                'zipcode' => $zipcode
            ]);
        if($update){
            return true;
        }else{
            return false;
        }

    }
   
    public static function saveuser($inputDataArray)
    {  

        $save = DB::table('users')
        ->insert($inputDataArray);


        if($save){
            return true;
        }
        else{
            return false;
        }
    }

    // public static function deleteuser($user_id,$inputDataArray)
    // {  

        // $delete = DB::table('users')
        // ->where('user_id', $id);
        // ->delete($inputDataArray)
        public function deleteUser(Request $request)
        {
            $userId = $request->input('user_id');
            DB::table('users')->where('id', $userId)->delete();
            return 1;
            
        
    

         if($delete){
            return true;
            }
            else{
            return false;
         }
    }

}
