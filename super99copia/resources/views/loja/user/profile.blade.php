@extends('loja.templates.template')

@section('content')
<section class="pg-form text-center">
    <div class="container">
        <h1 class="title">Meu Perfil / Editar</h1>
        {{Form::model(auth()->user(),['route' => 'profile.update', 'class' => 'form-horizontal', 'files' => true])}}

        @include('loja.user.form')

        {{Form::close()}}
    </div>
</section>

@endsection