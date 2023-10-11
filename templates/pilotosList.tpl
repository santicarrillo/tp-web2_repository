{include file="header.tpl"}
{include file="form_alta.tpl"}

<<<<<<< HEAD

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los Pilotos</th>
        <th>Posicion en el Campeonato de Pilotos</th>
        <th>Puntos en el Campeonato de Pilotos</th>
        
        
    </thead> 
    
    {foreach from=$formula1 item=$pilotos}

        <tr>
        <td> 
            <span> 
                <td>{$pilotos->nombre|truncate:25}</td> 
                <td>{$pilotos->campeonato|truncate:25}</td> 
                <td>{$pilotos->puntos|truncate:25}</td>
                <td><a href='form/{$pilotos->id}' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='delete/{$pilotos->id}' type='button' class='btn btn-danger'>Borrar</a></td>           
            </span> 
        </td>
        </tr>
    {/foreach}
        
</table>

 
<p class="mt-3"><small>Mostrando {$count} Pilotos</small></p>

{include file="footer.tpl"}
   





=======
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
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
