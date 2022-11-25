<?php
/*
  Template Name: Article
*/

get_header();

?>
<!-- SCRIPT ACCORDION -->


<header style="margin-bottom: 50vh;">

    <div class="container-fluid">

        <h1 class="animate__animated animate__fadeInDown" style="color: white; text-align : center;">
            <?php the_title(); ?>
        </h1>

        <div style="display: flex; flex-direction: row; justify-content : space-around; align-items: flex-start; " class="row">

            <?php
                echo '<img class="img-fluid col-md-6 col-sm-12 col-12 animate__animated animate__fadeIn" src=" '.get_bloginfo('stylesheet_directory').'/img/audit-conseil.png"/>'
            ?>

            <div class="col-md-4 col-sm-12 col-12 animate__animated animate__backInRight">


                <p style="color: black; padding: 20px;">
                    <?php the_content(); ?>
                </p>

            </div>

        </div>

    </div>

</header>

    <div style="margin:50px;" class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-12">

                <?php
                    /* on fait de $post une variable globale */
                    global $post;

                    /* on stocke la variable dans un nom de variable inutilisé */
                    $sky_post_ID = $post->ID;

                    /* on affiche cette variable */
                    // echo $sky_post_ID;

                    // identifiant de la page


                    if ($sky_post_ID == 17) {

                        $post = get_post(270);

                        $content = apply_filters('the_content', $post->post_content);
                        $title = apply_filters('the_title', $post->post_title);
                        $post_thumbnails = apply_filters('the_post_thumbnails', $post->post_thumbnails);

                    }

                    

                    if ($sky_post_ID == 15) {

                        $post = get_post(292);

                        $content = apply_filters('the_content', $post->post_content);
                        $title = apply_filters('the_title', $post->post_title);
                        $post_thumbnails = apply_filters('the_post_thumbnails', $post->post_thumbnails);

                    }


                    if ($sky_post_ID == 19) {

                        $post = get_post(296);

                        $content = apply_filters('the_content', $post->post_content);
                        $title = apply_filters('the_title', $post->post_title);
                        $post_thumbnails = apply_filters('the_post_thumbnails', $post->post_thumbnails);

                    }

                    if ($sky_post_ID == 21) {

                        $post = get_post(306);

                        $content = apply_filters('the_content', $post->post_content);
                        $title = apply_filters('the_title', $post->post_title);
                        $post_thumbnails = apply_filters('the_post_thumbnails', $post->post_thumbnails);

                    }


                    if ($sky_post_ID == 28) {

                        get_template_part( 'parts/internetservice' );

                    }

                    if ($sky_post_ID == 26) {

                        get_template_part( 'parts/domaine' );

                    }

                ?>

                <h2>

                    <?php 
                    // echo $title; 
                    ?>

                </h2>

                <p>

                    <?php
                        // echo $content;
                    ?>

                </p>

            </div>

        </div>
    </div>

<div style="position: relative; display: flex; justify-content: center;
    align-content: center; margin:40px; ">

    <a href="<?php bloginfo('url') ; ?>/?page_id=10"><button> Contactez-nous </button></a>
    
</div>


<h3 style="position: relative; text-align: center; margin: 40px 40px 40px 10px;">Ils nous font confiance</h3>
<div style="position: relative;" class="col-12">
    <?php echo do_shortcode('[sp_wpcarousel id="125"]'); ?>
</div>


<?php

	get_footer();

?>