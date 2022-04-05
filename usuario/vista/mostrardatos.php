<?php
require_once("../modelo/usuario.php");
require_once("../../templete/perfil_usuario.php");

$modeloUsuario = new Usuario();

?>

<h3>Listado de Usuarios </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Email</th>
      <th scope="col">Acciones</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
    $verUsuario= $modeloUsuario->getUsuarios();
      foreach($verUsuario as $listarUsuario){

      
      ?>
    <tr>
      <th scope="row"><?= $listarUsuario['id'];?></th>
      <td><?= $listarUsuario['nombre'];?> </td>
      <td>Otto</td>
      <td>@mdo</td>
      

      <td>
        <a href="update.php?=id<?= $listarUsuario['id'];?>" class="btn btn-success">Editar</a>
        <a href="delete.php?=id<?= $listarUsuario['id'];?>" class="btn btn-danger">Eliminar</a>
      </td>

      </tr>
    <?php
    }

    ?>
    
    </tr>
  </tbody>
</table>