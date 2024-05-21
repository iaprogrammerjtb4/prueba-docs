@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} P R O P R O C E S O
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} P R O P R O C E S O</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('pro_proceso.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pro_proceso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
