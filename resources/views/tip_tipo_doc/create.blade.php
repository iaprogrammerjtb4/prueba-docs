@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} T I P T I P O D O C
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} T I P T I P O D O C</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tip_tipo_doc.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tip_tipo_doc.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
