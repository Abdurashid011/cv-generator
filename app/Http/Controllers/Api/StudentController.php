<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Student::all());
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
        $student = Student::query()->create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'nt_id' => $request->get('nt_id'),
            'photo' => $request->get('photo'),
            'phone' => $request->get('phone'),
            'profession' => $request->get('profession'),
            'biography' => $request->get('biography'),
        ]);

        return response()->json([
            'message' => 'Student created successfully',
            'status' => 'success',
            'token' => $student->createToken($student->first_name)->plainTextToken,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): Student
    {
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student): JsonResponse
    {
        $student->update([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'nt_id' => $request->get('nt_id'),
            'photo' => $request->get('photo'),
            'phone' => $request->get('phone'),
            'profession' => $request->get('profession'),
            'biography' => $request->get('biography'),
        ]);

        return response()->json([
            'message' => 'Student updated successfully',
            'status' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): JsonResponse
    {
        $student->delete();

        return response()->json([
            'message' => 'Student deleted successfully',
            'status' => 'success',
        ]);
    }
}
