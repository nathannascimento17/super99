
@csrf

<div class="form-group row">
    <div class="col-md-12">
        {{Form::text('name', null, ['class' => 'form-control','placeholder'=> 'Nome:', 'require', 'autofocus'])}}
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-12">
        {{Form::email('email', null, ['class' => 'form-control','placeholder'=> 'E-mail:', 'require'])}}
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-5">
        {{Form::password('password',['class' => 'form-control','placeholder'=> 'Senha:'])}}
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-5">
        {{Form::password('password_confirmation',['class' => 'form-control','placeholder'=> 'Confirmar Senha:'])}}
    </div>
</div>

<div class="form-group row">
    <div class="col-md-12">
        {{Form::text('cpf', null, ['class' => 'form-control','placeholder'=> 'CPF:', 'require', 'autofocus'])}}
        @error('cpf')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        {{Form::date('data_nascimento', null, ['class' => 'form-control','placeholder'=> 'Data Nascimento:', 'require', 'autofocus'])}}
        @error('data_nascimento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <div class="col-md-5">
        {{Form::text('cidade', null, ['class' => 'form-control','placeholder'=> 'Cidade:', 'require', 'autofocus'])}}
        @error('cidade')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-5">
        {{Form::text('bairro', null, ['class' => 'form-control','placeholder'=> 'Bairro:', 'require', 'autofocus'])}}
        @error('bairro')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-12">
        {{Form::text('endereco', null, ['class' => 'form-control','placeholder'=> 'Endereço:', 'require', 'autofocus'])}}
        @error('endereco')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<!--
<div class="form-group row">
    <div class="col-md-12">
        <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" placeholder="Telefone">
        @error('cidade')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div> -->

<div class="form-group row mb-0">
    <div class="col-md-12 ">
        <button type="submit" class="btn btn-form">
            Confirmar
        </button>
    </div>
</div>
<br>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors -> all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

@if(session('success'))

<div class="alert alert-succsess">
    {{session('success')}}
</div>

@endif