<?php

namespace App\Http\Controllers\Api;

use App\Models\ProProceso;
use Illuminate\Http\Request;
use App\Http\Requests\ProProcesoRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProProcesoResource;

class ProProcesoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $proProcesos = ProProceso::paginate();

        return ProProcesoResource::collection($proProcesos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProProcesoRequest $request): ProProceso
    {
        return ProProceso::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ProProceso $proProceso): ProProceso
    {
        return $proProceso;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProProcesoRequest $request, ProProceso $proProceso): ProProceso
    {
        $proProceso->update($request->validated());

        return $proProceso;
    }

    public function destroy(ProProceso $proProceso): Response
    {
        $proProceso->delete();

        return response()->noContent();
    }
}
