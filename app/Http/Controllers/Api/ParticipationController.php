<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ParticipationController extends Controller
{
    public function index()
    {
        $participations = Participation::all();
        return response()->json($participations, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'lastname' => 'required',
            'participation' => 'required|numeric|min:1',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Check the fields and try again',
            ], Response::HTTP_BAD_REQUEST);
        } else {
            Participation::create($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully created!',
            ], Response::HTTP_CREATED);
        }
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'name' => 'required',
            'lastname' => 'required',
            'participation' => 'required|numeric|min:1',
        );
        $validator = Validator::make($request->all(), $rules);
        $participation = Participation::find($id);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Check the fields and try again',
            ], Response::HTTP_BAD_REQUEST);
        } else {
            //save in database
            $participation->name = $request->name;
            $participation->lastname = $request->lastname;
            $participation->participation = $request->participation;
            $participation->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Updated successfully!',
            ], Response::HTTP_OK);
        }
    }

    public function destroy($id)
    {
        $participation = Participation::find($id);
        if(isset($participation)){
            $participation->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'successfully deleted!',
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Action rejected!',
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
