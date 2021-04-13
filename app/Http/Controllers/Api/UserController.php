<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Check the fields and try again',
            ], Response::HTTP_BAD_REQUEST);
        } else {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => 'Successfully created!',
                ], Response::HTTP_CREATED);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'There is already a user with this email!',
                ], Response::HTTP_OK);
            }
        }
    }
}
