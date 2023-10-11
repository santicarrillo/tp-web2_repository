<?php
<<<<<<< HEAD
/* Smarty version 4.2.1, created on 2023-10-10 23:20:42
=======
/* Smarty version 4.2.1, created on 2023-10-08 04:35:32
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
  from 'C:\xampp1\htdocs\web2\Tp-webII-2daParte\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
<<<<<<< HEAD
  'unifunc' => 'content_6525c02a10f143_12221559',
=======
  'unifunc' => 'content_65221574149305_00399307',
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73f8fc91b5b668a0431d65a720ba222626eca65b' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\web2\\Tp-webII-2daParte\\templates\\about.tpl',
<<<<<<< HEAD
      1 => 1696965294,
=======
      1 => 1696356297,
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_6525c02a10f143_12221559 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65221574149305_00399307 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp1\\htdocs\\web2\\Tp-webII-2daParte\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container mt-5">
     <div class="col">
            <div class="center" style="width: 80rem">
                <img class="card-img-top" src="images/5.jpg">        
            </div>
        </div>
    </main>

<<<<<<< HEAD

<table class="table table-striped">
    <thead>
        <th></th>    
        <th>Fecha de la Carrera</th>
        <th>Nombre del Circuito y País</th>
        <th>Resultado final y Podio</th>
        
    </thead> 
    
    <?php
=======
   
    <table class="table table-striped">
        <thead>
            <th></th>    
            <th>Fecha</th>
            <th>Circiuto</th>
            <th>Podio</th>
            
        </thead>     
    
            <?php
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formula1']->value, 'calendario');
$_smarty_tpl->tpl_vars['calendario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['calendario']->value) {
$_smarty_tpl->tpl_vars['calendario']->do_else = false;
?>
<<<<<<< HEAD

        <tr>
        <td> 
            <span> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->fecha,25);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->circuito,40);?>
</td> 
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->podio,55);?>
</td>          
            </span> 
        </td>
=======
        <tr>
            <td> 
                <span> 
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->fecha,25);?>
</td> 
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->circuito,25);?>
</td> 
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['calendario']->value->podio,25);?>
</td>
                    
                </span> 
            </td>
                    
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<<<<<<< HEAD
        
</table>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
=======
    
    </table>
    
    <p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 libros</small></p>
    
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
>>>>>>> 3e405618f5bc3263da42149acf7058a8eeda54e8
}
}
