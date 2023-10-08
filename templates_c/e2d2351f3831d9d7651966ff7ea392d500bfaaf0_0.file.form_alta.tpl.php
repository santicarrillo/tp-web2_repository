<?php
/* Smarty version 4.2.1, created on 2023-10-08 04:32:34
  from 'C:\xampp1\htdocs\web2\Tp-webII-2daParte\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652214c221db84_07645734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d2351f3831d9d7651966ff7ea392d500bfaaf0' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\web2\\Tp-webII-2daParte\\templates\\form_alta.tpl',
      1 => 1696356302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652214c221db84_07645734 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<main class="container mt-5">
     <div class="col">
            <div class="center" style="width: 80rem" style="height: 10rem">
                <img class="card-img-top" src="images/10.png">        
            </div>
        </div>
    </main>


<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombre</label>
                <input required name="nombre" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Posición en el Campeonato de Pilotos</label>
                <select required name="campeonato" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Puntos</label>
        <input required name="puntos" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
