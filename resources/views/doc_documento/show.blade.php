@extends('layouts.app')

@section('template_title')
    {{ $dOCDOCUMENTO->name ?? __('Show') . " " . __('D O C D O C U M E N T O') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} D O C D O C U M E N T O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('doc_documento.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Doc Id:</strong>
                                    {{ $dOCDOCUMENTO->DOC_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Doc Nombre:</strong>
                                    {{ $dOCDOCUMENTO->DOC_NOMBRE }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Doc Codigo:</strong>
                                    {{ $dOCDOCUMENTO->DOC_CODIGO }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Doc Contenido:</strong>
                                    {{ $dOCDOCUMENTO->DOC_CONTENIDO }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Doc Id Tipo:</strong>
                                    {{ $dOCDOCUMENTO->DOC_ID_TIPO }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Doc Id Proceso:</strong>
                                    {{ $dOCDOCUMENTO->DOC_ID_PROCESO }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
