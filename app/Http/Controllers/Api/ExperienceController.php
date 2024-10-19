<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Experience::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validate = $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $experience = Experience::query()->create($validate);
        return response()->json([
            'message' => 'Experience Created Successfully',
            'status' => 'success',
            'experience' => $experience
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience): JsonResponse
    {
        return response()->json($experience);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience): JsonResponse
    {
        $validate = $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $experience->update($validate);
        return response()->json([
            'message' => 'Experience Updated Successfully',
            'status' => 'success',
            'experience' => $experience
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience): JsonResponse
    {
        $experience->delete();
        return response()->json([
            'message' => 'Experience Deleted Successfully',
            'status' => 'success',
            'experience' => $experience
        ]);
    }
}
