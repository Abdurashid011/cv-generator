<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SkillStudentController extends Controller
{
    public function attachSkill(Request $request, Student $student): JsonResponse
    {
        $skill = Skill::query()->findOrFail($request->get('skill_id'));
        $student->skills()->attach($skill);
        return response()->json([
            'message' => 'Skill attached',
            'status' => 'active',
            'skill' => $skill,
        ]);
    }

    public function detachSkill(Request $request, Student $student): JsonResponse
    {
        $skill = Skill::query()->findOrFail($request->get('skill_id'));
        $student->skills()->detach($skill);
        return response()->json([
            'message' => 'Skill detached',
            'status' => 'active',
            'skill' => $skill,
        ]);
    }
}
