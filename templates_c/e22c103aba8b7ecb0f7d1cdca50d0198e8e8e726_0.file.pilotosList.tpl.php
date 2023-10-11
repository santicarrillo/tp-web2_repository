<?php
<<<<<<< HEAD
/* Smarty version 4.2.1, created on 2023-10-10 03:46:18
=======
/* Smarty version 4.2.1, created on 2023-10-08 04:32:30
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
  from 'C:\xampp1\htdocs\web2\Tp-webII-2daParte\templates\pilotosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
<<<<<<< HEAD
  'unifunc' => 'content_6524acea674498_19138225',
=======
  'unifunc' => 'content_652214be4bfca4_84555639',
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e22c103aba8b7ecb0f7d1cdca50d0198e8e8e726' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\web2\\Tp-webII-2daParte\\templates\\pilotosList.tpl',
<<<<<<< HEAD
      1 => 1696798170,
=======
      1 => 1696455793,
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6524acea674498_19138225 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_652214be4bfca4_84555639 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp1\\htdocs\\web2\\Tp-webII-2daParte\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<<<<<<< HEAD

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Nombre de los Pilotos</th>
        <th>Posicion en el Campeonato de Pilotos</th>
        <th>Puntos en el Campeonato de Pilotos</th>
        <th>Editar</th>
        <th>Borrar</th>
        
    </thead> 
    
=======
<ul class="list-group">
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formula1']->value, 'pilotos');
$_smarty_tpl->tpl_vars['pilotos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pilotos']->value) {
$_smarty_tpl->tpl_vars['pilotos']->do_else = false;
?>
<<<<<<< HEAD

        <tr>
        <td> 
            <span> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->nombre,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->campeonato,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->puntos,25);?>
</td>
                <td><a href='form/<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->id;?>
' type='button' class='btn btn-info'>Editar</a></td>
                <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>           
            </span> 
        </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
</table>

 
=======
        <li class='
                list-group-item d-flex justify-content-between align-items-center'>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['pilotos']->value->nombre;?>
</b> - <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->campeonato,25);?>
- <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pilotos']->value->puntos,25);?>
</span>
            <div class="ml-auto">
                <a href='form/<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->id;?>
' type='button' class='btn btn-info'>Editar</a>
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['pilotos']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 Pilotos</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
<<<<<<< HEAD
?>
   





<?php }
=======
}
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
}
