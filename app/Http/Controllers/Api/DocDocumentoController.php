<?php

namespace App\Http\Controllers\Api;

use App\Models\DocDocumento;
use Illuminate\Http\Request;
use App\Http\Requests\DocDocumentoRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\DocDocumentoResource;

class DocDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $docDocumentos = DocDocumento::paginate();

        return DocDocumentoResource::collection($docDocumentos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocDocumentoRequest $request): DocDocumento
    {
        $request->validate([
            'DOC_NOMBRE' => 'required|string|max:255',
            'DOC_CODIGO' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
            'DOC_ID_TIPO' => 'required|integer',
            'DOC_ID_PROCESO' => 'required|integer',
        ]);

        if ($request->file('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
            
            $documento = DocDocumento::create([
                'DOC_NOMBRE' => $request->DOC_NOMBRE,
                'DOC_CODIGO' => $request->DOC_ID_TIPO."-".$request->DOC_ID_PROCESO."-".$request->DOC_CODIGO,
                'DOC_CONTENIDO' => $filePath,
                'DOC_ID_TIPO' => $request->DOC_ID_TIPO,
                'DOC_ID_PROCESO' => $request->DOC_ID_PROCESO,
            ]);

            return $documento;
        }

        return response()->json(['error' => 'Error al subir el archivo.'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(DocDocumento $docDocumento): DocDocumento
    {
        return $docDocumento;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocDocumentoRequest $request, DocDocumento $docDocumento): DocDocumento
    {
        $docDocumento->update($request->validated());

        return $docDocumento;
    }

    public function destroy(DocDocumento $docDocumento): Response
    {
        $docDocumento->delete();

        return response()->noContent();
    }
}
