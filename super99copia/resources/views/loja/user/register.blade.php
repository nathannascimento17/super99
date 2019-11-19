@extends('loja.templates.template')

@section('content')
<section class="pg-form text-center">
    <div class="container">
        <h1 class="title">Registrar</h1>
        {{Form::open(['url' => 'new-user', 'class' => 'form-horizontal', 'files' => true])}}

        @include('loja.user.form')

        {{Form::close()}}
    </div>
</section>

@endsection