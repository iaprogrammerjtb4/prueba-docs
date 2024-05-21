@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} P R O P R O C E S O
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} P R O P R O C E S O</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('pro_proceso.update', $pROPROCESO->PRO_ID) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pro_proceso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
