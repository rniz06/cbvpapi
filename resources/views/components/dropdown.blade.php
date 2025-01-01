<!-- Small button groups (default and split) -->
<div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-align-justify"></i>
    </button>
    <div class="dropdown-menu">

        <a class="dropdown-item" tabindex="-1" href="{{ $show }}"><i class="fas fa-eye pr-2"
                style="color: #6c757d"></i>Ver</a>
        <a class="dropdown-item" tabindex="-1" href="{{ $edit }}"><i class="fas fa-edit pr-2"
                style="color: #ffc107"></i>Editar</a>
        <form action="{{ $action }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="dropdown-item"><i class="fas fa-trash-alt pr-2"
                    style="color: #dc3545"></i>Eliminar</button>
        </form>

    </div>
</div>
