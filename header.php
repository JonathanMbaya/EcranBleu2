<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


    <!-- BALISES META DONNEES -->
    
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow"/>
    <meta name="author" content="Jonathan MBAYA" />
    <meta name="copyright" content="EcranBleu XV" />

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <!-- Link vers les polices du site -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Logo icon -->
    <link href="<?php echo get_template_directory_uri(); ?>" rel="icon">


    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/ddf42ed228.js" crossorigin="anonymous"></script>


    <!-- TITRE DE LA PAGE DANS L'ONGLET-->
    <title> <?php the_title(); ?> </title>

    <?php wp_head(); ?>
    
</head>

<body <?php body_class();?>>


<!-- SCROLL TOP -->

<div id="top"></div>

<!-- METTRE LE SCROLL TO ICI -->

<a href="#top"><i id="arrow-up" class="fa-solid fa-circle-arrow-up fa-2x"></i></a>

