<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

use App\Models\ZiyaadahRecord;
use function PHPSTORM_META\type;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\Date;

class PTQController extends Controller
{
    public function GetAllZiyaadah()
    {
        return response()->json(ZiyaadahRecord::all(), 200);
    }

    public function GetAllReviewer()
    {
        // TODO
        $reviewers = User::where('RoleID', 9)->get();
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


    public function NewZiyaadah(Request $request)
    {


        $messages = [
            'UserID.required' => 'The user ID field is required.',
            'UserID.exists' => 'The selected user ID does not exist.',
            'ReviewerID.required' => 'The Reviewer ID field is required.',
            'ReviewerID.exists' => 'The selected reviewer ID does not exist.',
            'StartChapter.required_if' => 'The start chapter is required when type is VERSE.',
            'EndChapter.required_if' => 'The end chapter is required when type is VERSE.',
            'StartVerse.required_if' => 'The start verse is required when type is VERSE.',
            'EndVerse.required_if' => 'The end verse is required when type is VERSE.',
        ];

        $validator = Validator::make($request->all(), [
            'UserID' => 'required|exists:users,UserID',
            'ReviewerID' => 'required|exists:users,UserID',
            'Feedback' => 'nullable|string',
            'Score' => 'nullable|string',
            'StartChapter' => 'required|string',
            'EndChapter' => 'required|string',
            'StartVerse' => 'required|integer',
            'EndVerse' => 'required|integer',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation Failed',
                'errors' => $validator->errors(),
            ], 200);
        }

        // return response()->json($request->all(), 200);


        $validatedData = $validator->validated();

        $data = [
            'UserID' => $validatedData['UserID'],
            'ZiyaadahDate' => now(),
        ];

        if (!empty($validatedData['ReviewerID'])) {
            $data['ReviewerID'] = $validatedData['ReviewerID'];
        }
        if (!empty($validatedData['Feedback'])) {
            $data['Feedback'] = $validatedData['Feedback'];
        }
        if (!empty($validatedData['Score'])) {
            $data['Score'] = $validatedData['Score'];
        }

        $data['StartChapter'] = $validatedData['StartChapter'];
        $data['EndChapter'] = $validatedData['EndChapter'];
        $data['StartVerse'] = $validatedData['StartVerse'];
        $data['EndVerse'] = $validatedData['EndVerse'];

        $result = ZiyaadahRecord::create($data);

        return response()->json($result, 200);
    }


    public function NewTilawah()
    {
        return response()->json([
            "Hellow Tilawah"
        ], 200);
    }

    public function NewMurajaah()
    {
        return response()->json([
            'Hellow Murajaah'
        ], 200);
    }
}
