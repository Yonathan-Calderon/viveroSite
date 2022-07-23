@extends('layouts.template')

@section('content')

@foreach ($preguntas as $pregunta)

            <div class="questions__item">
                <header class="questions__header">
                    <i class="ri-add-line questions__icon"></i>
                    <h3 class="questions__item-title">
                        {{$pregunta->preguntas}}
                    </h3>
                </header>

                <div class="questions__content">
                    <p class="questions__description">
                        {{$pregunta->respuestas}}
                    </p>
                </div>
            </div>
        @endforeach                                    

@endsection 