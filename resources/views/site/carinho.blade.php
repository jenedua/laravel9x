@extends('site.layout')
@section('title', 'Carrinho')


@section('conteudo')

  <div class="row container">
        <h5>Carrinho: </h5>

        
            
        <table class="striped">
            <thead>
              <tr>
                  <th></th>
                  <th>Nome</th>
                  <th>Preco</th>
                  <th>Quantidade</th>
                  <th>Açoes</th>
              </tr>
            </thead>
    
            <tbody>
                @foreach ($itens as $item)
                <tr>
                    <td> <img src="{{$item->attributes->image}}" width="70" class="responsive-img circle"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td></td>
                </tr>
              @endforeach
            </tbody>
          </table>

       
        
    </div>
   
@endsection