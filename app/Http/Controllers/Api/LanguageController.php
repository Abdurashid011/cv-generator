<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Language::all());
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
        $language = Language::query()->create([
            'name'=> $request->get('name'),
            'level'=> $request->get('level'),
        ]);

        return response()->json([
            'message'=>'Language created successfully',
            'language' => $language,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language): JsonResponse
    {
        return response()->json($language);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language): JsonResponse
    {
        $language->update([
            'name'=> $request->get('name'),
            'level'=> $request->get('level'),
        ]);

        return response()->json([
            'message'=>'Language updated successfully',
            'language' => $language,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language): JsonResponse
    {
        $language->delete();

        return response()->json([
            'message'=>'Language deleted successfully',
            'language' => $language,
        ]);
    }
}
