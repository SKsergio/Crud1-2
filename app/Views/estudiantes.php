<?=$this->extend('menu');?>

<?= $this->section('content')?>

    <?php
        use App\Models\EstudianteModel;

    ?>

    <div class="card">
            <h1>Estudiantes</h1>
            <div class="header_card">
                <a href="<?php echo base_url();?>/060223/agregar" class="btn">Agregar</a>
            </div> 

            <div class="body_card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Carnet</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $Key){?>
                            <tr>
                                <td><?php echo $Key->Carnet?></td>
                                <td><?php echo $Key->Nombre?></td>
                                <td><?php echo $Key->Apellido?></td>
                                <td>
                                    <a href="" class="btn_eliminar">Eliminar</a>
                                </td>   
                            </tr>
                        <?php }?>  
                    </tbody>
                </table>
            </div>
    </div>
<?= $this->endSection()?>


