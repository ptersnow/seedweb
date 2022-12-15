<div class="modal fade" id="modal-{{ $semente->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen " role="document">
        <div class="modal-content">
                        <div class="modal-header">
                            <img src="{{ asset( $semente->imagem ) }}" height="150" width="150" class="d-flex align-items-center rounded rounded-circle" > 
                <h5 class="modal-title" style="align-content: center" id="exampleModalLongTitle-{{ $semente->id }}">{{ $semente->nome_popular }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>Nome Cientifico: </strong>{!! $semente->nome_cientifico !!}</p>
                <hr>
                <p><strong>Nome Popular: </strong>{!! $semente->nome_popular !!}</p>
                <hr>
                <p><strong>Especie: </strong>{!! $semente->especie !!}</p>
                <hr>
                <p><strong>Genero: </strong>{!! $semente->genero !!}</p>
                <hr>
                <p><strong>Causa da Dormência: </strong>{!! $semente->causa_da_dormencia !!}</p>
                <hr>
                <p><strong>Quebra De Dormencia: </strong>{!! $semente->quebra_de_dormencia !!}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                @can('edit', $semente)
                    <a href="{{ route('semente.edit', $semente->id) }}" type="button" class="btn btn-primary">Editar</a>
                @endcan
                @can('delete', $semente)
                    <form action="{{ route('semente.destroy', $semente->id) }}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Remover</button>
                    </form>
                @endcan
            </div>
        </div>
    </div>
</div>
