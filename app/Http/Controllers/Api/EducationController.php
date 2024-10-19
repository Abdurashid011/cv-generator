<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $educations = Education::all();

        return response()->json($educations);
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
        $education = Education::query()->create([
            'student_id' => $request->get('student_id'),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
        ]);

        return response()->json([
            'message' => 'Education created successfully.',
            'status' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education): Education
    {
        return $education;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education): JsonResponse
    {
        $education->update([
            'student_id' => $request->get('student_id'),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
        ]);

        return response()->json([
            'message' => 'Education updated successfully.',
            'status' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education): JsonResponse
    {
        $education->delete();

        return response()->json([
            'message' => 'Education deleted successfully.',
            'status' => 'success',
        ]);
    }
}
