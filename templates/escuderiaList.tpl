{include file="header.tpl"}


<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Equipos</th>
        <th>Pilotos</th>
        <th>Puntos Por Equipo</th>
        <th>Posicion del Equipo en el Campeonato</th>
        
    </thead>     

        {foreach from=$formula1 item=$escuderias}
    <tr>
        <td> 
            <span> 
                <td>{$escuderias->equipos|truncate:25}</td> 
                <td>{$escuderias->pilotos|truncate:25}</td> 
                <td>{$escuderias->puntos_equipo|truncate:25}</td>
                <td>{$escuderias->pos_equipos|truncate:25}</td>
                <td>{$libro->precio|truncate:25}</td>
                
            </span> 
        </td>
                
    </tr>
{/foreach}

</table>

<p class="mt-3"><small>Mostrando {$count} escuderias</small></p>
