<?php
/* Smarty version 4.2.1, created on 2023-10-13 01:04:04
  from 'C:\xampp\htdocs\web2\tp-web2_repository\Tp-webII-2daParte\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_65287b64f11471_37684943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1e044faf2ac1427bf924593ae2f6478b5ec04f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp-web2_repository\\Tp-webII-2daParte\\templates\\success.tpl',
      1 => 1697149365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65287b64f11471_37684943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert alert-success container text-center " role="alert">
        <h4 class="alert-heading">Acción exitosa</h4>
        <hr>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-light">Volver a la pagina principal</a>
    </div> 
<?php } else { ?>
    <div class="alert alert-danger container text-center " role="alert">
        <h4 class="alert-heading">Error</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
        <hr>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-light">Volver a la pagina principal</a>
    </div> 
<?php }?>
  
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
