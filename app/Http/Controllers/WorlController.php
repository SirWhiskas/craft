<?php

namespace App\Http\Controllers;

use App\World;

class WorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(World::active()->paginate(10));
    }

    /**
     * Display the specified resource.
     *
     * @param World $world
     * @param int  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(World $world, int $id): \Illuminate\Http\JsonResponse
    {
        return response()->json($world->findOrFail($id)->toArray());
    }
}
