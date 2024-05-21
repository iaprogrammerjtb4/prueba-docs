<?php

namespace App\Http\Controllers;

use App\Models\TIPTIPODOC;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TIPTIPODOCRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TIPTIPODOCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tIPTIPODOCS = TIPTIPODOC::paginate();

        return view('tip_tipo_doc.index', compact('tIPTIPODOCS'))
            ->with('i', ($request->input('page', 1) - 1) * $tIPTIPODOCS->perPage());
    }

    public function getTipo(){
        return TIPTIPODOC::all();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tIPTIPODOC = new TIPTIPODOC();

        return view('tip_tipo_doc.create', compact('tIPTIPODOC'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TIPTIPODOCRequest $request): RedirectResponse
    {
        TIPTIPODOC::create($request->validated());

        return Redirect::route('tip_tipo_doc.index')
            ->with('success', 'TIPTIPODOC created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tIPTIPODOC = TIPTIPODOC::where('TIP_ID',$id)->first();

        return view('tip_tipo_doc.show', compact('tIPTIPODOC'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tIPTIPODOC = TIPTIPODOC::WHERE('TIP_ID', $id)->first();

        return view('tip_tipo_doc.edit', compact('tIPTIPODOC'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TIPTIPODOCRequest $request, TIPTIPODOC $tIPTIPODOC): RedirectResponse
    {
        $tIPTIPODOC->update($request->validated());

        return Redirect::route('tip_tipo_doc.index')
            ->with('success', 'TIPTIPODOC updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TIPTIPODOC::where('TIP_ID',$id)->delete();

        return Redirect::route('tip_tipo_doc.index')
            ->with('success', 'TIPTIPODOC deleted successfully');
    }
}
