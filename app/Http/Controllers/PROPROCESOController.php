<?php

namespace App\Http\Controllers;

use App\Models\PROPROCESO;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PROPROCESORequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PROPROCESOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pROPROCESOS = PROPROCESO::paginate();

        return view('pro_proceso.index', compact('pROPROCESOS'))
            ->with('i', ($request->input('page', 1) - 1) * $pROPROCESOS->perPage());
    }

    public function getProcesos(){
        return PROPROCESO::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pROPROCESO = new PROPROCESO();

        return view('pro_proceso.create', compact('pROPROCESO'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PROPROCESORequest $request): RedirectResponse
    {
        PROPROCESO::create($request->validated());

        return Redirect::route('pro_proceso.index')
            ->with('success', 'PROPROCESO created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pROPROCESO = PROPROCESO::WHERE('PRO_ID', $id)->first();;

        return view('pro_proceso.show', compact('pROPROCESO'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pROPROCESO = PROPROCESO::WHERE('PRO_ID', $id)->first();;

        return view('pro_proceso.edit', compact('pROPROCESO'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PROPROCESORequest $request, PROPROCESO $pROPROCESO): RedirectResponse
    {
        $pROPROCESO->update($request->validated());

        return Redirect::route('pro_proceso.index')
            ->with('success', 'PROPROCESO updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PROPROCESO::WHERE('PRO_ID', $id)->delete();

        return Redirect::route('pro_proceso.index')
            ->with('success', 'PROPROCESO deleted successfully');
    }
}
