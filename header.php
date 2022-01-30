<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Loisirs-Montagne, Lyon, l'association." />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="header-bg">
            <a title="Accueil" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo"></a>
        </div>
    </header>
    <nav>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'primary-menu',
            )
        ); ?>
    </nav>
    <div id="background">
        <div id="background-overlay"></div>

        <div class="container">