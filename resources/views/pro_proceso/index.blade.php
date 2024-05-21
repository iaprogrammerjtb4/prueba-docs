@extends('layouts.app')

@section('template_title')
    P R O P R O C E S O S
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('P R O P R O C E S O S') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pro_proceso.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Pro Id</th>
									<th >Pro Nombre</th>
									<th >Pro Prefijo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pROPROCESOS as $pROPROCESO)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $pROPROCESO->PRO_ID }}</td>
										<td >{{ $pROPROCESO->PRO_NOMBRE }}</td>
										<td >{{ $pROPROCESO->PRO_PREFIJO }}</td>

                                            <td>
                                                <form action="{{ route('pro_proceso.destroy', $pROPROCESO->PRO_ID) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pro_proceso.show', $pROPROCESO->PRO_ID) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pro_proceso.edit', $pROPROCESO->PRO_ID) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pROPROCESOS->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
