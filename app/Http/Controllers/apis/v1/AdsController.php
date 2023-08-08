<?php

namespace App\Http\Controllers\apis\v1;

use App\Models\Ads;
use App\Repositories\AdsRepository;
use App\Http\Requests\AdsRequest;
use Illuminate\Routing\Controller;
use App\Http\Resources\AdsResource;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageSize = request()->input('pageSize') ?? 20;

        $ads = Ads::paginate($pageSize);

        return AdsResource::collection($ads);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdsRequest $request, AdsRepository $adsRepository)
    {
        $request->validated();

        $ads = $adsRepository->create($request->all());

        return new AdsResource($ads);

    }

    /**
     * Display the specified resource.
     */
    public function show(Ads $slug)
    {
        return new AdsResource($slug);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdsRequest $request, Ads $ads, AdsRepository $adsRepository)
    {
        $request->validated();

        $ads = $adsRepository->update($ads, $request->all());

        return new AdsResource($ads);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ads $ads, AdsRepository $adsRepository)
    {
        $adsRepository->forceDelete($ads);

        return response()->json([
            'message' => 'success',
        ]);
    }
}