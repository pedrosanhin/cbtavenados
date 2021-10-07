<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-blanco.png" alt="logo">
            </div>
            <div class="col-8">
                <nav class="d-flex justify-content-end">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',//Localizacion del menu
                            'menu_class' => 'menu-principal',//clases de los estilos
                            'container_class' => 'container-menu'//clases para el contenedor
                        )
                    ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>