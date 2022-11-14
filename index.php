<?php include"./conexion.php";
include"./header.php";
$conexion =conexion();
// crear el qery de select
$sql = "SELECT * FROM t_animales";
$respuesta = mysqli_query($conexion,$sql);
?>
<div class="container mt-2" >
<h2>Listado de Animales</h2>
<p>
    <a href="./agregar.php"><button class="btn-dark">Agregar nuevo animal</button></a>
</p>
    <div class="col">
        <div class="col">
        <table class="table table-success table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Animal</th>
        <th>Region</th>
        <th>Comida</th>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
    </thead>
    <tbody>
        <?php while( $ver=mysqli_fetch_array($respuesta)):?>
        <tr>
            <td> <?php echo $ver['id'];?></td>
            <td> <?php echo $ver ['animal' ];?></td>
            <td> <?php echo $ver ['region' ];?></td>
            <td> <?php echo $ver ['comida' ];?></td>
            <td> 
                <a href="./editar.php?idp=<?php echo $ver ['id']; ?>"><button class="btn btn-warning">Editar</button></a>
            </td>
            <td>
                <a href="./backend/eliminar.php?idp=<?php echo $ver ['id'];?>"><button class="btn btn-danger">Eliminar</button></a>
            </td>
        </tr>
        <?php endwhile;?>

    </tbody>
</table>

        </div>
    </div>
</div> 

<?php include"./footer.php";?>
    
