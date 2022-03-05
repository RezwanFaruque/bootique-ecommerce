<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    // registration view load
    public function registerview(){
        return view('auth.registration');
    }


    // registration api for customer or tailor registration
    // on this systems

    public function userRegistration(Request $request){

            
        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'user_type' => [
                'required',
                Rule::in(['customer', 'tailor']),
            ],
        ]);

        if($validation->fails()){
            return response()->json($validation->errors(), 422);
        }else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
            ]);

            $data = [
                'status' => 'success',
                'message' => 'You registered successfully!',
                'data' => $user,
            ];
        }

           

        return response()->json($data, 200);
    }
}
