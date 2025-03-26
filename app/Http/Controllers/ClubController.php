<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Services\ApiResponse;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return all clubs
        return ApiResponse::success(Club::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate(
            [
                'name' => 'required|unique:clubs',
                'description' => 'required',
                'stadium_capacity' => 'required',
                'founded' => 'required',
                'image' => 'required',
                'nickname' => 'required'
            ]
        );

        //add a new club in the database
        $club = Club::create($request->all());

        return ApiResponse::success($club);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show club details
        $club = Club::find($id);
        if($club) {
            return ApiResponse::success($club);
        } else {
            return ApiResponse::error('Club not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate the request
        $request->validate(
            [
                'name' => 'required|unique:clubs,name,'.$id,
                'description' => 'required',
                'stadium_capacity' => 'required',
                'founded' => 'required',
                'image' => 'required',
                'nickname' => 'required'
            ]
        );

        //update club in the database
        $club = Club::find($id);
        if($club) {
            $club->update($request->all());
            return ApiResponse::success($club);
        } else {
            return ApiResponse::error('Club not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the club
        $club = Club::find($id);
        if($club) {
            $club->delete();
            return ApiResponse::success('Club deleted successfully');
        } else {
            return ApiResponse::error('Club not found');
        }
    }
}
