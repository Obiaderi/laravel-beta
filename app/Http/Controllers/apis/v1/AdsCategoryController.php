<?php

namespace App\Http\Controllers\apis\v1;

use App\Models\AdsCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\AdsCategoryRequest;
use App\Http\Resources\AdsCategoryResource;
use App\Repositories\AdsCategoryRepository;

class AdsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adsCategories = AdsCategory::all();

        return AdsCategoryResource::collection($adsCategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdsCategoryRequest $request, AdsCategoryRepository $adsCategoryRepository)
    {
        $adsCategory = $request->validated();

        $adsCategory = $adsCategoryRepository->create($adsCategory);

        return new AdsCategoryResource($adsCategory);
    }

    /**
     * Display the specified resource.
     */
    public function show(AdsCategory $adsCategory)
    {
        return new AdsCategoryResource($adsCategory);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(AdsCategoryRequest $request, AdsCategory $adsCategory, AdsCategoryRepository $adsCategoryRepository)
    {

        $validatedData = $request->validated();

        $adsCategory = $adsCategoryRepository->update($adsCategory, $validatedData);

        return new AdsCategoryResource($adsCategory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdsCategory $adsCategory, AdsCategoryRepository $adsCategoryRepository)
    {
        $adsCategoryRepository->forceDelete($adsCategory);

        return response()->json([
            'message' => 'Ads category deleted successfully.',
        ]);
    }
}