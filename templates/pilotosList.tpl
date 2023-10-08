{include file="header.tpl"}
{include file="form_alta.tpl"}

<ul class="list-group">
    {foreach from=$formula1 item=$pilotos}
        <li class='
                list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$pilotos->nombre}</b> - {$pilotos->campeonato|truncate:25}- {$pilotos->puntos|truncate:25}</span>
            <div class="ml-auto">
                <a href='form/{$pilotos->id}' type='button' class='btn btn-info'>Editar</a>
                <a href='delete/{$pilotos->id}' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    {/foreach}
</ul>


<p class="mt-3"><small>Mostrando {$count} Pilotos</small></p>

{include file="footer.tpl"}