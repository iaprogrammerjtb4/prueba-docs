<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="d_o_c__i_d" class="form-label">{{ __('Doc Id') }}</label>
            <input type="text" name="DOC_ID" class="form-control @error('DOC_ID') is-invalid @enderror" value="{{ old('DOC_ID', $dOCDOCUMENTO?->DOC_ID) }}" id="d_o_c__i_d" placeholder="Doc Id">
            {!! $errors->first('DOC_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="d_o_c__n_o_m_b_r_e" class="form-label">{{ __('Doc Nombre') }}</label>
            <input type="text" name="DOC_NOMBRE" class="form-control @error('DOC_NOMBRE') is-invalid @enderror" value="{{ old('DOC_NOMBRE', $dOCDOCUMENTO?->DOC_NOMBRE) }}" id="d_o_c__n_o_m_b_r_e" placeholder="Doc Nombre">
            {!! $errors->first('DOC_NOMBRE', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="d_o_c__c_o_d_i_g_o" class="form-label">{{ __('Doc Codigo') }}</label>
            <input type="text" name="DOC_CODIGO" class="form-control @error('DOC_CODIGO') is-invalid @enderror" value="{{ old('DOC_CODIGO', $dOCDOCUMENTO?->DOC_CODIGO) }}" id="d_o_c__c_o_d_i_g_o" placeholder="Doc Codigo">
            {!! $errors->first('DOC_CODIGO', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="d_o_c__c_o_n_t_e_n_i_d_o" class="form-label">{{ __('Doc Contenido') }}</label>
            <input type="text" name="DOC_CONTENIDO" class="form-control @error('DOC_CONTENIDO') is-invalid @enderror" value="{{ old('DOC_CONTENIDO', $dOCDOCUMENTO?->DOC_CONTENIDO) }}" id="d_o_c__c_o_n_t_e_n_i_d_o" placeholder="Doc Contenido">
            {!! $errors->first('DOC_CONTENIDO', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="d_o_c__i_d__t_i_p_o" class="form-label">{{ __('Doc Id Tipo') }}</label>
            <input type="text" name="DOC_ID_TIPO" class="form-control @error('DOC_ID_TIPO') is-invalid @enderror" value="{{ old('DOC_ID_TIPO', $dOCDOCUMENTO?->DOC_ID_TIPO) }}" id="d_o_c__i_d__t_i_p_o" placeholder="Doc Id Tipo">
            {!! $errors->first('DOC_ID_TIPO', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="d_o_c__i_d__p_r_o_c_e_s_o" class="form-label">{{ __('Doc Id Proceso') }}</label>
            <input type="text" name="DOC_ID_PROCESO" class="form-control @error('DOC_ID_PROCESO') is-invalid @enderror" value="{{ old('DOC_ID_PROCESO', $dOCDOCUMENTO?->DOC_ID_PROCESO) }}" id="d_o_c__i_d__p_r_o_c_e_s_o" placeholder="Doc Id Proceso">
            {!! $errors->first('DOC_ID_PROCESO', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>