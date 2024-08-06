<?php

namespace App\Http\Controllers;

use App\Http\Requests\APILoginRequest;
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

    public function login(Request $request)
    {
        // Mengambil email dari permintaan
        $email = $request->input('email'); // atau $request->email
        $password = $request->input('password'); // atau $request->email

        // Memeriksa apakah email tidak terdefinisi
        if (!$email) {
            return response()->json([
                'success' => false,
                'message' => 'there is no email'
            ], 200);
        }
        if (!$password) {
            return response()->json([
                'success' => false,
                'message' => 'there is no password'
            ], 200);
        }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // get the user by email from database
        $user = User::where('email', $email)->first();

        if ($user) {
            // check the password
            if (Hash::check($request->password, $user->password)) {
                //if  the password are match then return response success is true
                return response()->json([
                    'success' => true,
                    'user' => $user,
                    'data' => ["message" => "Login Success"],
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'data' => ["message" => "Error: Login failed. password mismatch"],
                ], 200);
            }
        }

        return response()->json([
            'success' => false,
            'data' => ["message" => "Error: Login failed. Please check your credentials and try again."],
        ], 200);
    }

    public function register(Request $request)
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
            'RoleID' => $request->RoleID ?? 1, // Assuming role_id might be optional
            'email' => $request->email,
            // need to hash here
            'password' => Hash::make($request->password),
        ];

        Log::debug("Data to be created:", $data);

        $createdUser = User::create($data);

        if ($createdUser) {
            Log::debug("User created successfully", [$createdUser->toArray()]);

            return response()->json([
                'success' => true,
                'data' => ["message" => "Success: You have made a new account with POST method."],
                'password' => $data['password'],
            ], 200);
        }

        return response()->json([
            'success' => false,
            'data' => ["message" => "Error: Register failed. Please check your credentials and try again."],
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
