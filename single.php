<?php
/*
  Template Name: Article
*/

get_header();

?>
<div style="position : relative; Z-index:4000; top : 40px; left: 30px; color: white; text-decoration: none;" id="back-home">

   <a href="<?php  bloginfo ( 'url' ); ?>"><i class="ico-home fa-solid fa-house fa-2x"></i></a>
    Revenir à l'accueil
    
</div>

<?php
    echo '<img class="img-fluid back-single" style="position: absolute;" src=" '.get_bloginfo('stylesheet_directory').'/img/Background.png"/>'
?>

<!-- SCRIPT ACCORDION -->


<header style="margin-bottom: 10vh;">

    <div class="container">

        <h1 class="animate__animated animate__fadeInDown" style="color: white; text-align : center;" id="title-single">
            <?php the_title(); ?>
        </h1>

        <div style="display: flex; flex-direction: column; justify-content : center; align-items: center; " class="col-md-8 offset-md-2 col-sm-12 col-12 animate__animated animate__backInRight">




            <?php the_content(); ?>



        </div>

        <h3 class="h3-single">Ils nous font confiance</h3>


        
        <div style="position:absolute; width: 100%; left: 0;" class="col-12">
            <?php echo do_shortcode('[sp_wpcarousel id="125"]'); ?>
        </div>



    </div>

    <?php get_footer(); ?>
    
</header>


