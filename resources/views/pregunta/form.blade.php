<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('preguntas') }}
            {{ Form::text('preguntas', $pregunta->preguntas, ['class' => 'form-control' . ($errors->has('preguntas') ? ' is-invalid' : ''), 'placeholder' => 'Preguntas']) }}
            {!! $errors->first('preguntas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('respuestas') }}
            {{ Form::text('respuestas', $pregunta->respuestas, ['class' => 'form-control' . ($errors->has('respuestas') ? ' is-invalid' : ''), 'placeholder' => 'Respuestas']) }}
            {!! $errors->first('respuestas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>