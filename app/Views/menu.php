<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link href="<?php echo base_url();?>resources/css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/normalice.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/inputs.css">
    <script>
        // Función para mostrar alertas
        function showAlert(message, type) {
            if (type === 'error') {
                alert('Error: ' + message);
            } else if (type === 'success') {
                alert('Success: ' + message);
            } 
        }
    </script>
</head>
<body>
    <!-- mostar alertas -->
    <?php if (session()->has('error')): ?>
        <script>
            showAlert('<?= session('error') ?>', 'error');
        </script>
    <?php endif; ?>

    <?php if (session()->has('success')): ?>
        <script>
            showAlert('<?= session('success') ?>', 'success');
        </script>
    <?php endif; ?>

    <!-- header -->
    <header class="content__head">
            <!-- cabecera -->
            <nav class="nav container_nav">

                <!-- logo -->
                <img src="<?php echo base_url();?>resources/css/img/logo.svg" alt="logo" class="logo_nav">

                <!-- menu hamburguesa -->
                <div class="nav_hamburguer">
                </div>

                <!-- menu -->
                <div class="nav_overlay">
                    <!-- crud -->
                    <ul class="nav_menu">
                        <li class="nav_item">
                            <a href="<?php echo base_url();?>/" class="nav_link">Sitio Web</a>
                        </li> 
                        <li class="nav_item">
                            <a href="<?php echo base_url();?>/060223" class="nav_link">Estudiantes</a>
                        </li> 
                    </ul>
                </div>
            </nav>
    </header>
    <main>

        <?= $this ->renderSection('content')?>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

