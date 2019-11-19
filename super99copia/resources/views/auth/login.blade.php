@extends('loja.templates.template')

@section('content')
<section class="pg-form text-center">
    <div class="container">
        <h1 class="title">Entrar</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-form">
                        Entrar
                    </button>

                    <a class="btn btn-link" href="{{url('cadastrar')}}">
                        Cadastrar
                    </a>
                    <a class="btn btn-link" href="{{route('password.request')}}">
                        Esqueceu a senha ?
                    </a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection