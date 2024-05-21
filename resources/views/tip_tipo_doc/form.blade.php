<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="t_i_p__i_d" class="form-label">{{ __('Tip Id') }}</label>
            <input type="text" name="TIP_ID" class="form-control @error('TIP_ID') is-invalid @enderror" value="{{ old('TIP_ID', $tIPTIPODOC?->TIP_ID) }}" id="t_i_p__i_d" placeholder="Tip Id">
            {!! $errors->first('TIP_ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="t_i_p__n_o_m_b_r_e" class="form-label">{{ __('Tip Nombre') }}</label>
            <input type="text" name="TIP_NOMBRE" class="form-control @error('TIP_NOMBRE') is-invalid @enderror" value="{{ old('TIP_NOMBRE', $tIPTIPODOC?->TIP_NOMBRE) }}" id="t_i_p__n_o_m_b_r_e" placeholder="Tip Nombre">
            {!! $errors->first('TIP_NOMBRE', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="t_i_p__p_r_e_f_i_j_o" class="form-label">{{ __('Tip Prefijo') }}</label>
            <input type="text" name="TIP_PREFIJO" class="form-control @error('TIP_PREFIJO') is-invalid @enderror" value="{{ old('TIP_PREFIJO', $tIPTIPODOC?->TIP_PREFIJO) }}" id="t_i_p__p_r_e_f_i_j_o" placeholder="Tip Prefijo">
            {!! $errors->first('TIP_PREFIJO', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>