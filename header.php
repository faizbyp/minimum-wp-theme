<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?> <!-- Memanggil dependencies head dari wp -->
</head>

<body <?php body_class(); ?>> <!-- Memanggil dependencies body dari wp -->
    
<header class="sticky-top py-4">
    <?php the_title(); ?>

    <nav class="container">
        <?php wp_nav_menu(
            array(
                'theme-location' => 'top-menu',
                'menu_class' => 'navigation',
            )
        ); ?>
    </nav>
</header>