<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class APIController extends Controller
{
    //
    public function index()
    {
        $all_user = User::all();
        return compact('all_user');
    }

    public function test()
    {
        $all_user = User::all();
        return compact('all_user');
    }

    public function post(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $data = [
            'name' => $request->name,
            'username' => $request->name,
            'role_id' => $request->role_id ?? 1, // Assuming role_id might be optional
            'email' => $request->email,
            'password' => $request->password,
        ];

        Log::debug("Data to be created:", $data);

        $createdUser = User::create($data);

        if ($createdUser) {
            Log::debug("User created successfully", [$createdUser->toArray()]);

            return response()->json([
                'success' => true,
                'data' => ["message" => "Success: You have made a new account with POST method."],
            ], 200);
        }

        return response()->json([
            'success' => false,
            'data' => ["message" => "Error: Login failed. Please check your credentials and try again."],
        ], 401);
    }


    public function getUserById($id)
    {
        $user = User::find($id);

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }
    }

    public function getUserByEmail($email)
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User not found',
            ], 404);
        }
    }
}
