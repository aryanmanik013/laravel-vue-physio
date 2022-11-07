<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserTable;
use Auth;
use Validator;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function registerUser(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email'=>'required|email',
            'role'=>'required',
            'password'=>'required',
            'c_password'=>'required|same:password'
            ]);

            if ($validator->fails()) {
                $response = [
                    'success'=>false,
                    'message'=>$validator->errors()
                ];
                return response()->json($response,400);
            }
            $input = $request->all();
            $input['password']= bcrypt($input['password']);
            $input['c_password']= bcrypt($input['c_password']);
            $userTable = UserTable::create($input);
            $success['token'] = $userTable->createToken('MyApp')->plainTextToken;
            $success['name']= $userTable->name;
            $response = [
                'success' =>true,
                'data' =>$success,
                'message'=>'User Register Successfully'
            ];
            return response()->json($response,200);

    }

    public function login(Request $request){

        $user= UserTable::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
            $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];

            return response($response, 201);
    }

    public function getUserByid($id){

        return UserTable::find($id);
    }
    public function getAllUser(){

        return UserTable::all();
    }


}
