@extends('layouts.app')

@section('template_title')
    T I P T I P O D O C S
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('TIPO DOCS') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tip_tipo_doc.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Tip Id</th>
									<th >Tip Nombre</th>
									<th >Tip Prefijo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tIPTIPODOCS as $tIPTIPODOC)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $tIPTIPODOC->TIP_ID }}</td>
										<td >{{ $tIPTIPODOC->TIP_NOMBRE }}</td>
										<td >{{ $tIPTIPODOC->TIP_PREFIJO }}</td>

                                            <td>
                                                <form action="{{ route('tip_tipo_doc.destroy', $tIPTIPODOC->TIP_ID) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tip_tipo_doc.show', $tIPTIPODOC->TIP_ID) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tip_tipo_doc.edit', $tIPTIPODOC->TIP_ID) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tIPTIPODOCS->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
