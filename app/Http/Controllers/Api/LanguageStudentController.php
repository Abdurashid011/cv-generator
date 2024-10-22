<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LanguageStudentController extends Controller
{
    public function attachLanguage(Request $request, Student $student): JsonResponse
    {
        $language = Language::query()->findOrFail($request->get('language_id'));
        $student->languages()->attach($language);
        return response()->json([
            'message' => 'Language attach successfully',
            'status' => 'success',
        ]);
    }

    public function detachLanguage(Request $request, Student $student): JsonResponse
    {
        $language = Language::query()->findOrFail($request->get('language_id'));
        $student->languages()->detach($language);
        return response()->json([
            'message' => 'Language detach successfully',
            'student' => $student,
        ]);
    }
}
