
<?php
require_once("../../templete/plantillaindex.PHP");
?>
<div class="formulario">
<form action="../controlador/login.php" method="POST" >
    <div class="mb-3">
    <label>Email</label>
        <input type="email" class="form-control" name="email"placeholder="email" aria-describedby="emailHelp">
        <label>Password</label>
        <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
       
        
    </div>
    
    <button type="submit" name= "btn_enviar" class="btn btn-primary">Ingresar</button>
</form>

<footer>
  <center>Copyright 2022 Version.1.1</center>

</footer>
</div>
