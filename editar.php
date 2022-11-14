<?php
include"./conexion.php";
include"./header.php";
$conexion=conexion();
$id = $_GET ['idp'];
$sql = "SELECT*FROM t_animales WHERE id='$id' ";
$respuesta = mysqli_query($conexion,$sql);
//convierte u  arreglo asociativo
$item = mysqli_fetch_array($respuesta);
?>
<html>
    <h2>Actualizar</h2>
    <form action="./backend/editar.php" method="POST">
        <input type="text" name="id" value="<?php echo $id;?>" hidden>
        <label for="animal">Animal</label>
        <br>
        <input type="text" name="animal" id="animal" value="<?php echo $item['animal']?>">
        <br>
        <label for="region">Region</label>
        <br>
        <input type="text" name="region" id="region" value="<?php echo $item['region']?>">
        <br>
        <label for="comida">Comida</label>
        <br>
        <input type="text" name="comida" id="comida" value="<?php echo $item['comida']?>">
        <br>
        <button class="btn btn-success">Actualizar</button>
    </form>
</html>