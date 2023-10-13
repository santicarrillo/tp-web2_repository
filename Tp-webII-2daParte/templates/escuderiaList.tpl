{include file="header.tpl"}
{include file="form_altaEscuderia.tpl"}

<table class="table table-striped">
    <thead>
        <th></th> 
        <th></th>
        <th>Equipos</th>
        <th>Pilotos</th>
        <th>Descripcion</th>
        <th>Puntos Por Equipo</th>
        <th>Posicion en el Campeonato</th>
        <th></th>
        <th></th>
        
    </thead>     

        {foreach from=$formula1 item=$escuderias}
    <tr>
    <td><a class="btn btn-success" href="equipos/{$escuderias->id}">Ver mas<a></td>
         
        <td> 
            <span> 
                
                <td>{$escuderias->equipos|truncate:35}</td> 
                <td>{$escuderias->pilotos|truncate:35}</td>
                <td>{$escuderias->description|truncate:35}</td> 
                <td>{$escuderias->puntos_equipo|truncate:35}</td>
                <td>{$escuderias->pos_equipos|truncate:35}</td>
                <td><a href='editequipoform/{$escuderias->id}' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='eliminar/{$escuderias->id}' type='button' class='btn btn-danger'>Borrar</a></td>
                
            </span> 
        </td>
                
    </tr>
{/foreach}

</table>

<p class="mt-3"><small>Mostrando {$count} escuderias</small></p>
{include file="footer.tpl"}