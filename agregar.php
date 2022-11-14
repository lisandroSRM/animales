<?php
include"./header.php";
?>
<html>
<div class="container">
    <div class="col">
        <div class="row">
        
            <form action="./backend/agregar.php" method="POST">
                <label for="animal">Animal</label>
                <input type="text" name="animal" id="animal">
                <br> <hr>
                <label for="region">Region</label>
                <input type="text" name="region" id="region">
                <br> <hr>
                <label for="comida">Alimento</label>
                <input type="text" name="comida" id="comida">
                <br> <hr>
                <button class="btn-primary">Agregar</button>
            </form>

        </div>
    </div>

</div>
<html>

<?php include"./footer.php";?>