@extends('layouts.app')

@section('template_title')
    {{ $pregunta->name ?? 'Show Pregunta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pregunta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preguntas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Preguntas:</strong>
                            {{ $pregunta->preguntas }}
                        </div>
                        <div class="form-group">
                            <strong>Respuestas:</strong>
                            {{ $pregunta->respuestas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
