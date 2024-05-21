<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="p_r_o__i_d" class="form-label">{{ __('Pro Id') }}</label>
            <input type="text" name="PRO_ID" class="form-control @error('PRO_ID') is-invalid @enderror" value="{{ old('PRO_ID', $pROPROCESO?->PRO_ID) }}" id="p_r_o__i_d" placeholder="Pro Id">
            {!! $errors->first('PRO_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="p_r_o__n_o_m_b_r_e" class="form-label">{{ __('Pro Nombre') }}</label>
            <input type="text" name="PRO_NOMBRE" class="form-control @error('PRO_NOMBRE') is-invalid @enderror" value="{{ old('PRO_NOMBRE', $pROPROCESO?->PRO_NOMBRE) }}" id="p_r_o__n_o_m_b_r_e" placeholder="Pro Nombre">
            {!! $errors->first('PRO_NOMBRE', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="p_r_o__p_r_e_f_i_j_o" class="form-label">{{ __('Pro Prefijo') }}</label>
            <input type="text" name="PRO_PREFIJO" class="form-control @error('PRO_PREFIJO') is-invalid @enderror" value="{{ old('PRO_PREFIJO', $pROPROCESO?->PRO_PREFIJO) }}" id="p_r_o__p_r_e_f_i_j_o" placeholder="Pro Prefijo">
            {!! $errors->first('PRO_PREFIJO', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>