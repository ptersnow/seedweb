@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('semente.store') }}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">

            <div class="col">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="exampleInputEmail1">Nome Popular da Semente</label>
                    <input type="text" name="nome_popular" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ old('nome_popular') }}">
                </div>
            </div>

            <div class="col">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="exampleInputPassword1">Nome Científico</label>
                    <input type="text" name="nome_cientifico" class="form-control" id="exampleInputPassword1"
                        value="{{ old('nome_cientifico') }}">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="exampleInputPassword1">Especie</label>
                    <input type="text" name="especie"class="form-control" id="exampleInputPassword1"
                         value="{{ old('especie') }}">
                </div>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="exampleInputPassword1">Genêro</label>
                    <input type="text" name="genero" class="form-control" id="exampleInputPassword1"
                         value="{{ old('genero') }}">

                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Causa da Dormência</label>
            <textarea name="causa_da_dormencia" class="form-control" id="exampleInputPassword1" placeholder="causa da dormencia" value="{{ old('causa_da_dormencia') }}"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Quebra de Dormência</label>
            <textarea name="quebra_de_dormencia" class="form-control" id="exampleInputPassword1" placeholder="Quebra Dormência">{{ old('quebra_de_dormencia') }}</textarea>
        </div>
        <!-- ### IMAGE ### -->
        <div class="form-group">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="icon wb-image"></i> Imagem </h3>
                <div class="panel-actions">
                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                @if (isset($semente->imagem))
                    <img src="{{ asset($semente->imagem) }}" height="350" />
                    <input type="hidden" name="imagem" value="{{ $semente->imagem }}">
                @endif
                <input type="file" id="input-image" name="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>


@endsection
@section('head')
    <style>
        form {
            background-color: white;
            padding: 50px;
            margin-top: 50px;
            border-radius: 10px;

        }

        form .form-group {
            color: black;
            text-align: justify;
            font-size: 16px;

        }
    </style>
@endsection
