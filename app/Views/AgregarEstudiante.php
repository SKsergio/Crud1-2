<?= $this->extend('menu')?>

<?= $this->section('content')?>

    <div class="container">
            <br>
            <br>
            <div class="card">
                
                <div class="header_card">
                    <h1>Agregar Estudiantes</h1>
                </div>

                <div class="body_card">

                    <form action="<?php echo base_url();?>/060223/insertar" method="POST" class="frm">

                        <div class="input__section">
                            <label for="Carnet" >Carnet</label>
                            <input type="number" name="Carnet" id="Carnet" required>
                        </div>

                        <div class="input__section">
                            <label for="Nombre" >Nombre</label>
                            <input type="text" name="Nombre" id="Nombre" required>
                        </div>

                        <div class="input__section">
                            <label for="Apellido">Apellido</label>
                            <input type="text" name="Apellido" id="Apellido" required>
                        </div>

                        <div class="botones">
                            <input type="submit" class="btn_editar">
                            <a href="<?php echo base_url();?>/060223" class="btn_eliminar">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
    </div>
<?= $this->endSection()?>