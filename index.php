<?php 

    get_header(); 

?>

<!-- DEBUT DE HEADER -->
<?php
    echo '<img class="img-fluid mobile-background" style="position: absolute;" src=" '.get_bloginfo('stylesheet_directory').'/img/Background-mobile.png"/>'
?>

<?php
    echo '<img class="img-fluid desktop-background" style="position: absolute;" src=" '.get_bloginfo('stylesheet_directory').'/img/Background.png"/>'
?>

<header  class="animate__animated animate__fadeInDown">

    <div class="container-fluid">

        <div style="padding: 4rem; " class="row">

            <div aria-labelledby="title-home" class="col-md-4 col-12" id="front-title">


                <h1 class="text-center" id="title-home" aria-label="Ecran Bleu XV">Ecran Bleu XV</h1>

                <h2 id="subtitle-home">L’agence pour l’innovation de toute votre système d’information</h2>

            </div>



            <div class="screenslider  col-md-4 col-12">

                <figure style="position: relative;" class="slider">
                    <?php
                        echo '<img class="img-fluid" src=" '.get_bloginfo('stylesheet_directory').'/img/website-templates.png"/>'
                    ?>
                </figure> 

                <!-- <figure class="screen">

                    <?php
                        // echo '<img class="img-fluid" src=" '.get_bloginfo('stylesheet_directory').'/assets/large-cinema-display.png"/>'
                    ?>
                </figure> -->

            </div>



            <div class="col-md-4 col-12 accordion accordion-flush" id="accordionFlushExample">

                <div class="col-12 accordion-item">

                    <h2 class="accordion-header" id="flush-headingTwo">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Conseils
                        </button>

                    </h2>

                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        
                        <ul class="accordion-body">

                            <li>
                                <a href="<?php  bloginfo ( 'url' ); ?>/?p=15">
                                    Audit /Conseil
                                </a>
                            </li>


                            <li>
                                <a href="<?php  bloginfo ( 'url' ); ?>/?p=19">
                                    Assistance
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php  bloginfo ( 'url' ); ?>/?p=21">
                                    Help Center / Help Desk
                                </a>
                            </li>
                                
                            <li>
                                <a href="<?php  bloginfo ( 'url' ); ?>/?p=17">
                                    Infogérance
                                </a>
                            </li>

                        </ul>
                                
                    </div>

                </div>


                <div class="col-12 accordion-item">

                    <h2 class="accordion-header" id="flush-headingThree">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Solutions
                        </button>

                    </h2>

                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        
                        <ul class="accordion-body">



                            <li>
                                <a href="<?php  bloginfo ( 'url' ); ?>/?p=28">
                                    Internet Services
                                </a>
                            </li>

                            <li>
                                <a href="<?php  bloginfo ( 'url' ); ?>/?p=26">
                                    Logiciels
                                </a>
                            </li>

                            <li>
                                <a href="<?php  bloginfo ( 'url' ); ?>/?p=24">
                                    Solution de gestion
                                </a>
                            </li>
                            
                        </ul>

                    </div>
                    
                </div>


            </div>

        </div>

    </div>


</header>


<!-- FIN DE HEADER -->


<!-- Présentation de l'entreprise -->

<div style="background-color : #FBF9F9 !important;">

    <div class="container">

        <h2 style ="color : #88A4E3 !important;" id="subtitle-home">Pourquoi créer un site internet ?</h2>
        
    </div>

    <div style ="margin-bottom : 8rem; background-color : #FBF9F9 !important;" class="container block-presentation">

        


        <div style="display: flex;" class="row" aria-labelledby="presentation-home">
            

            <?php
                echo '<img style=" border-radius : 1rem;" class="img-fluid col-md-6" id="presentation-home" src=" '.get_bloginfo('stylesheet_directory').'/img/website-templates.png"/>'
            ?>


            <div style="border-radius: 1rem; text-align: left;" aria-labelledby="text-presentation" class="col-md-6" >


                <p id="text-presentation" aria-label="texte de presentation">
                
                    Ecran Bleu est sans doute un bon choix pour la création de votre site internet.
                    Depuis l'arrivée du Très Haut Débit, l’avènement et la généralisation rapide 
                    de la vidéo à la demande via l’Internet, ont fait du début des années 
                    2000 une période riche en innovation et en accélération technologiques. <br><br>

                    Nous vous accompagnons et vous conseillons sur le sujet : comment créer votre site internet ?

                </p>

            </div>

        </div>

    </div>



    <div class="col-md-12 col-sm-6 col-12" id="img-block" style="display: flex; justify-content: center; align-items: center; margin-bottom : 8rem;">

        <a href="<?php bloginfo('url') ; ?>/?page_id=8">
            <button style ="width: 15rem; height: 100px; border-radius: 1rem; margin-bottom : 8rem;">Vers A propos <i class="fa-solid fa-chevron-right"></i></button>
        </a>

    </div>

</div>


<!-- NOS SERVICES -->

<section  class="container-fluid row" style=" margin-bottom: 5rem;" id="forResult">


<div aria-labelledby="subtitle-home">

    <h2 class="container" style="padding: 2rem ; color:#88A4E3; text-align : center;" aria-label="Nos services" role="subtitle">
        Nos Services
    </h2>

    <div class="row">

        <?php
            $args = array(
                'post_type' => 'post', // enter custom post type
                'orderby' => 'date',
                'order' => 'ASC',
            );

            $loop = new WP_Query( $args );

            if( $loop->have_posts() ):

                while( $loop->have_posts() ): $loop->the_post(); global $post;

                    echo '<div class="container animate__animated animate__backInUp col-md-4 col-sm-12 col-12 ">';
                        
                        echo '<div style="padding: 2rem;" class="row portfolio">';

                        

                            echo '<h3 style="color:#88A4E3; text-align: left;">' . get_the_title(). '</h3>';

                                echo '<div style="" class="portfolio-work">';

                                // echo '<div class="img-fluid">
                                //     <div style=" border-radius : 1rem;" class="img-fluid col-md-12 col-sm-12 col-12 mt-5 pb-5">
                                //         ' .get_the_post_thumbnail().'
                                //     </div>
                                // </div>';

                                echo '<div class="text">'

                                        . get_the_excerpt().'
                                        <br>
                                        <br>
                                        <a href='.get_the_permalink().'>
                                        <button>Voir plus +</button>
                                        </a>
                                    </div>
                        
                                
                        
                                </div>';


                        echo '</div>';  

                    echo '</div>';
                    
                endwhile;

            endif;
            
        ?>

    </div>

</div>



</section>

<!-- Domaines d'activités -->

<div style="background-color : #FBF9F9;" id="domainActivity">
    <?php get_template_part( 'parts/domaine' );?>
</div>


<?php get_template_part( 'parts/joinus' );?>


<h3 style="text-align: center; margin: 40px 40px 40px 1rem;">Ils nous font confiance</h3>



<?php echo do_shortcode('[sp_wpcarousel id="125"]'); ?>


<!-- FOOTER -->
<?php get_footer(); ?>