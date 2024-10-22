<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocialNetwork;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(SocialNetwork::all());
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
            'name' => 'required',
            'link' => 'nullable|required',
        ]);

        $socialNetwork = SocialNetwork::query()->create($validate);
        return response()->json([
            'message' => 'Social network created successfully.',
            'status' => 'active',
            'socialNetwork' => $socialNetwork
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialNetwork $socialNetwork)
    {
        return response()->json($socialNetwork);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialNetwork $socialNetwork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialNetwork $socialNetwork): JsonResponse
    {
        $validate = $request->validate([
            'name' => 'required',
            'link' => 'nullable|required',
        ]);

        $socialNetwork->update($validate);
        return response()->json([
            'message' => 'Social network updated successfully.',
            'status' => 'active',
            'socialNetwork' => $socialNetwork
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialNetwork $socialNetwork): JsonResponse
    {
        $socialNetwork->delete();
        return response()->json([
            'message' => 'Social network deleted successfully.',
            'status' => 'active',
            'socialNetwork' => $socialNetwork
        ]);
    }
}
