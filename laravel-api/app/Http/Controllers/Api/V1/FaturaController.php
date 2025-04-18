<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Fatura;
use App\Http\Requests\StoreFaturaRequest;
use App\Http\Requests\UpdateFaturaRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FaturaCollection;
use App\Http\Resources\V1\FaturaResource;

class FaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new FaturaCollection(Fatura::paginate());
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
    public function store(StoreFaturaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fatura $fatura)
    {
        return new FaturaResource($fatura);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fatura $fatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaturaRequest $request, Fatura $fatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fatura $fatura)
    {
        //
    }
}
