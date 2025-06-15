
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Page header -->
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $coin->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">coin <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('codigo_moneda') }}</label>
    <div>
        {{ Form::text('codigo_moneda', $coin->codigo_moneda, ['class' => 'form-control' .
        ($errors->has('codigo_moneda') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Moneda']) }}
        {!! $errors->first('codigo_moneda', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">coin <b>codigo_moneda</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('codigo_ups') }}</label>
    <div>
        {{ Form::text('codigo_ups', $coin->codigo_ups, ['class' => 'form-control' .
        ($errors->has('codigo_ups') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Ups']) }}
        {!! $errors->first('codigo_ups', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">coin <b>codigo_ups</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('pais') }}</label>
    <div>
        {{ Form::text('pais', $coin->pais, ['class' => 'form-control' .
        ($errors->has('pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
        {!! $errors->first('pais', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">coin <b>pais</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
