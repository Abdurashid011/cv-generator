<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Project::all());
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
        $validated = $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'source_link' => 'required',
            'demo_link' => 'required',
        ]);

        $project = Project::query()->create($validated);
        return response()->json([
            'message' => 'Project created successfully.',
            'status' => 'success',
            'project' => $project
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): JsonResponse
    {
        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project): JsonResponse
    {
        $validated = $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'source_link' => 'required',
            'demo_link' => 'required',
        ]);

        $project->update($validated);
        return response()->json([
            'message' => 'Project updated successfully.',
            'status' => 'success',
            'project' => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project): JsonResponse
    {
        $project->delete();

        return response()->json([
            'message' => 'Project deleted successfully.',
            'status' => 'success',
            'project' => $project
        ]);
    }
}
