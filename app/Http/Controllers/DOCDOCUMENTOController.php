<?php

namespace App\Http\Controllers;

use App\Models\DOCDOCUMENTO;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DOCDOCUMENTORequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DOCDOCUMENTOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $dOCDOCUMENTOS = DOCDOCUMENTO::paginate();

        return view('doc_documento.index', compact('dOCDOCUMENTOS'))
            ->with('i', ($request->input('page', 1) - 1) * $dOCDOCUMENTOS->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $dOCDOCUMENTO = new DOCDOCUMENTO();

        return view('doc_documento.create', compact('dOCDOCUMENTO'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DOCDOCUMENTORequest $request): RedirectResponse
    {
        DOCDOCUMENTO::create($request->validated());

        return Redirect::route('doc_documento.index')
            ->with('success', 'DOCDOCUMENTO created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $dOCDOCUMENTO = DOCDOCUMENTO::where('DOC_ID',$id)->first();

        return view('doc_documento.show', compact('dOCDOCUMENTO'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $dOCDOCUMENTO = DOCDOCUMENTO::where('DOC_ID',$id)->first();

        return view('doc_documento.edit', compact('dOCDOCUMENTO'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DOCDOCUMENTORequest $request, DOCDOCUMENTO $dOCDOCUMENTO): RedirectResponse
    {
        $dOCDOCUMENTO->update($request->validated());

        return Redirect::route('doc_documento.index')
            ->with('success', 'DOCDOCUMENTO updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DOCDOCUMENTO::where('DOC_ID',$id)->delete();

        return Redirect::route('doc_documento.index')
            ->with('success', 'DOCDOCUMENTO deleted successfully');
    }
}
