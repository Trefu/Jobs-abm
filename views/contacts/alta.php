<?php


?>

<!-- Content -->
<section id="container-fluid ">

    <form method="POST" name="alta_contacto" action="agregar-contacto.php" class="container ">
        <div class="form-group row mb-4">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input required name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input required name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="imagen-url" class="col-sm-2 col-form-label">imagen url avatar</label>
            <div class="col-sm-10">
                <input name="imagen" type="text" class="form-control" id="imagen-url" placeholder="url de avatar">
            </div>
        </div>

        <?php include('select-pais.php') ?>

        <div class="row mt-4">
            <legend class="col-form-label col-sm-2 pt-0">Genero</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" checked>
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="femenino" value="femenino">
                    <label class="form-check-label" for="femenino">
                        Femenino
                    </label>
                </div>


            </div>
        </div>
        </fieldset>

        <div class="form-group row">
            <div class="col-sm-10">
                <button name='enviar_btn' type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

</section>

<!-- Copyright -->


</div>