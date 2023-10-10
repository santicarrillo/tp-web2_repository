<?php
/* Smarty version 4.2.1, created on 2023-10-09 05:27:38
  from 'C:\xampp\htdocs\Tp-webII-2daParte\templates\escuderiaList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6523732a63d226_72301121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25cb1010f336917e14baa7409de3f124c4de30a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tp-webII-2daParte\\templates\\escuderiaList.tpl',
      1 => 1696821939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_altaEscuderia.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6523732a63d226_72301121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Tp-webII-2daParte\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form_altaEscuderia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Equipos</th>
        <th>Pilotos</th>
        <th>Puntos Por Equipo</th>
        <th>Posicion del Equipo en el Campeonato</th>
        <th>Editar</th>
        <th>Borrar</th>
        
    </thead>     

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formula1']->value, 'escuderias');
$_smarty_tpl->tpl_vars['escuderias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['escuderias']->value) {
$_smarty_tpl->tpl_vars['escuderias']->do_else = false;
?>
    <tr>
        <td> 
            <span> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['escuderias']->value->equipos,35);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['escuderias']->value->pilotos,35);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['escuderias']->value->puntos_equipo,35);?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['escuderias']->value->pos_equipos,35);?>
</td>
                <td><a href='form/<?php echo $_smarty_tpl->tpl_vars['escuderias']->value->id;?>
' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['escuderias']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                
            </span> 
        </td>
                
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 escuderias</small></p>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
