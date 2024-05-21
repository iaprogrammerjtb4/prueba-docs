@extends('layouts.app')

@section('template_title')
    {{ $pROPROCESO->name ?? __('Show') . " " . __('P R O P R O C E S O') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} P R O P R O C E S O</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pro_proceso.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Pro Id:</strong>
                                    {{ $pROPROCESO->PRO_ID }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pro Nombre:</strong>
                                    {{ $pROPROCESO->PRO_NOMBRE }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pro Prefijo:</strong>
                                    {{ $pROPROCESO->PRO_PREFIJO }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
