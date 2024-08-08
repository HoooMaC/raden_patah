<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\QuranRecord;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\Date;

class PTQController extends Controller
{
    public function GetAllZiyaadah()
    {
        return response()->json(QuranRecord::all(), 200);
    }

    public function GetAllReviewer()
    {
        // TODO
        $reviewers = User::where('RoleID', 9)->get();
        return response()->json($reviewers, 200);


        // how to get the user with role id 3 in role table which is reviewer
        $reviewerRole = Role::where('name', 'reviewer')->first();

        if ($reviewerRole) {
            $reviewers = User::where('RoleID', $reviewerRole->RoleID);
            return response()->json($reviewers, 200);
        } else {
            return response()->json(['message' => 'Reviewer role not found'], 404);
        }
    }

    public function GetAllHafiz()
    {
        // TODO
        $reviewers = User::where('RoleID', 5)->get();
        return response()->json($reviewers, 200);


        // how to get the user with role id 3 in role table which is reviewer
        $reviewerRole = Role::where('name', 'takmir')->first();

        if ($reviewerRole) {
            $reviewers = User::where('RoleID', $reviewerRole->RoleID);
            return response()->json($reviewers, 200);
        } else {
            return response()->json(['message' => 'Reviewer role not found'], 404);
        }
    }

    public function UserRecord(Request $request)
    {
        $rules = [
            'HafizID' => 'required',
            'Category' => 'required',
        ];

        $messages = [
            'HafizID.required' => 'HafizID is required',
            'Category.required' => 'Category is required',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validatedData = $validator->validated();

        $hafizID = $validatedData['HafizID'];
        $category = $validatedData['Category'];

        // Jika user ditemukan
        $validCategory = [
            'ziyaadah',
            'tilawah',
            'murajaah',
            'all'
        ];

        // perlu cek apakah user memiliki role tertentu atau tidak
        if (!in_array($category, $validCategory)) {
            return response()->json([
                'success' => false,
                'message' => 'Unknown Category'
            ], 404);
        }
        
        // get quran record with User ID and Type
        if($category === 'all') {
            
            // Retrieve the Quran records with the specified User ID and Type
            $records = QuranRecord::where('HafizID', $hafizID)->get();
        }
        else {
            // Retrieve the Quran records with the specified User ID and Type
            $records = QuranRecord::where('HafizID', $hafizID)
                ->where('Category', $category)->get();

        }

        return response()->json([
            'success' => true,
            'data' => $records,
            'message' => "fetch succes",
        ], 200);
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        $messages = [
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'password.required' => 'Password is required',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validatedData = $validator->validated();

        $email = $validatedData['email'];
        $password = $validatedData['password'];

        // get the user by email from database
        $user = User::where('email', $email)->first();
        // Jika user tidak ditemukan
        if (!$user) {
            // Jika user tidak ditemukan
            return response()->json([
                'success' => false,
                'message' => 'Login Failed'
            ], 401);
        }

        // Jika user ditemukan
        $allowed_role_list = [
            'admin',
            'ptq',
            'reviewer',
            // others ....
        ];

        // perlu cek apakah user memiliki role tertentu atau tidak
        if (!in_array($user->role->name, $allowed_role_list)) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized: Your role does not have access to this resource.'
            ], 401);
        }

        // Memeriksa kecocokan password
        if (Hash::check($password, $user->password)) {
            // Jika password cocok, return response dengan success true
            return response()->json([
                'success' => true,
                'user' => $user,
                'message' => 'Login successful'
            ], 200);
        } else {
            // Jika password tidak cocok
            return response()->json([
                'success' => false,
                'message' => 'Login Failed'
            ], 401);
        }
    }

    public function RecordQuran(Request $request)
    {
        $rules = [
            'HafizID' => 'required|exists:users,UserID',
            'ReviewerID' => 'required|exists:users,UserID',
            'Category' => 'required|string',
            'StartChapter' => 'required|string',
            'EndChapter' => 'required|string',
            'StartVerse' => 'required|integer',
            'EndVerse' => 'required|integer',
            'ZiyaadahDate' => 'required',
            'Feedback' => 'nullable|string',
            'Score' => 'required|string'
        ];

        $messages = [
            'HafizID.required' => 'The Hafiz ID field is required.',
            'HafizID.exists' => 'The selected user ID does not exist.',
            'Category.required' => 'The Category field is required.',
            'ReviewerID.required' => 'The Reviewer ID field is required.',
            'ReviewerID.exists' => 'The selected reviewer ID does not exist.',
            'StartChapter.required' => 'The start chapter is required.',
            'EndChapter.required' => 'The end chapter is required.',
            'StartVerse.required' => 'The start verse is required.',
            'EndVerse.required' => 'The end verse is required.',
            'ZiyaadahDate.required' => 'The Date is required.',
            'Score.required' => 'The Score is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validatedData = $validator->validated();

        $data = [
            'HafizID' => $validatedData['HafizID'],
            'ReviewerID' => $validatedData['ReviewerID'],
            'Category' => $validatedData['Category'],
            'StartChapter' => $validatedData['StartChapter'],
            'EndChapter' => $validatedData['EndChapter'],
            'StartVerse' => $validatedData['StartVerse'],
            'EndVerse' => $validatedData['EndVerse'],
            'ZiyaadahDate' => $validatedData['ZiyaadahDate'],
            'Score' => $validatedData['Score']
        ];

        if (!empty($validatedData['Feedback'])) {
            $data['Feedback'] = $validatedData['Feedback'];
        }

        if (!empty($validatedData['IsVerified'])) {
            $data['IsVerified'] = $validatedData['IsVerified'];
        }

        $result = QuranRecord::create($data);

        return response()->json($result, 200);
    }
}
