<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Skill::all());
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $skill = Skill::query()->create($validated);
        return response()->json([
            'message' => 'Skill created successfully.',
            'status' => 'active',
            'skill' => $skill
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $skill = Skill::query()->findOrFail($id);
        return response()->json([
            'message' => 'Skill retrieved successfully.',
            'status' => 'active',
            'skill' => $skill
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $skill->update($validated);
        return response()->json([
            'message' => 'Skill updated successfully.',
            'status' => 'active',
            'skill' => $skill
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $skill = Skill::query()->findOrFail($id)->delete();
        return response()->json([
            'message' => 'Skill deleted successfully.',
            'status' => 'active',
            'skill' => $skill
        ]);
    }
}
