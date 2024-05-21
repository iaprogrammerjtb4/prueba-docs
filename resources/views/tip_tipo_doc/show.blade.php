@extends('layouts.app')

@section('template_title')
    {{ $tIPTIPODOC->name ?? __('Show') . " " . __('T I P T I P O D O C') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} T I P T I P O D O C</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tip_tipo_doc.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Tip Id:</strong>
                                    {{ $tIPTIPODOC->TIP_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tip Nombre:</strong>
                                    {{ $tIPTIPODOC->TIP_NOMBRE }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tip Prefijo:</strong>
                                    {{ $tIPTIPODOC->TIP_PREFIJO }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
