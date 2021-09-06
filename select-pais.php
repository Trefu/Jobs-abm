<?php
include('conexion.php');
$queryPaises = "SELECT pais from pais ORDER by pais";

$reqPaises = mysqli_query($conexion, $queryPaises);


mysqli_close($conexion);
?>

<div class="form-group">
    <label for="inputState">Pais</label>
    <select name="pais" id="inputState" class="form-control">
        <?php while ($row = mysqli_fetch_assoc($reqPaises)) {
            echo "<option>$row[pais]</option>";
        } ?>
    </select>
</div>