
<!-- Modal Structure -->
<div id="delete-{{$produto->id}}" class="modal">
    <div class="modal-content">
    <h4><i class="material-icons">delete</i> Tem certeza?</h4>

        <p>Tem certeza que deseja excluir {{$produto->nome}} ?</p>

        <a href="#!" class="modal-close waves-effect waves-green btn blue right" style="margin-left: 3px">Cancelar</a>
        <form action="{{route('admin.produto.delete', $produto->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="waves-effect waves-green btn red right">Excluir</button><br>
        </form>
    </div>


</div>