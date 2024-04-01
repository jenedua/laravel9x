@extends('site.layout')
@section('title', 'Detalhes')


@section('conteudo')

<div class="row container"><br>
    <div class="col s12 m6">
        <img src="{{ $produto->imagem }}" class="responsive-img">
    </div>
    <div class="col s12 m6">
        <h4>{{ $produto->nome }}</h4>
        <h4> R$ {{ number_format($produto->preco, 2, ',','.')  }}</h4>
        <p>{{ $produto->descricao }}</p>
        <p> Postado por: {{ $produto->user->firstName }} <br>
            Categoria: {{ $produto->categoria->nome}}
        </p>
        <form action="{{ route('site.addcarinho')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $produto->id }}" required>
                <input type="hidden" name="name" value="{{ $produto->nome }}" required>
                <input type="hidden" name="price" value="{{ $produto->preco }}" required>
                <input type="number" min="1" name="qnt" value="1" required>
                <input type="hidden" name="img" value="{{ $produto->imagem }}" required>

            <button class="btn orange large">Comprar</button>
        </form>
    </div>

</div>

@endsection