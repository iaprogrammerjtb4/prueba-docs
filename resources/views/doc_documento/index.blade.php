@extends('layouts.app')

@section('template_title')
    D O C D O C U M E N T O S
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('D O C D O C U M E N T O S') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('doc_documento.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Doc Id</th>
									<th >Doc Nombre</th>
									<th >Doc Codigo</th>
									<th >Doc Contenido</th>
									<th >Doc Id Tipo</th>
									<th >Doc Id Proceso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dOCDOCUMENTOS as $dOCDOCUMENTO)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $dOCDOCUMENTO->DOC_ID }}</td>
										<td >{{ $dOCDOCUMENTO->DOC_NOMBRE }}</td>
										<td >{{ $dOCDOCUMENTO->DOC_CODIGO }}</td>
										<td >
                                        <iframe src="{{ $dOCDOCUMENTO->DOC_CONTENIDO }}" width="100%" height="300"></iframe>
                                            <a href="/{{ $dOCDOCUMENTO->DOC_CONTENIDO }}" target="blank">Ver</a>
                                        </td>
										<td >{{ $dOCDOCUMENTO->DOC_ID_TIPO }}</td>
										<td >{{ $dOCDOCUMENTO->DOC_ID_PROCESO }}</td>

                                            <td>
                                                <form action="{{ route('doc_documento.destroy', $dOCDOCUMENTO->DOC_ID) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doc_documento.show', $dOCDOCUMENTO->DOC_ID) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doc_documento.edit', $dOCDOCUMENTO->DOC_ID) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $dOCDOCUMENTOS->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
