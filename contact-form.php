<?php
/*
Template Name: Contact Form
*/

get_header();


?>


<div id="hdr-apropos" class="container-fluid animate__animated animate__fadeInDown">

    <h1 style="text-align : center; padding-top: 80px; color: white;">

        <?php the_title(); ?>

    </h1>

    <div class="col-md-12 col-sm-12 col-12">

        <h2 style="color: white; text-align : center; padding-top: 40px; ">

            <?php the_content(); ?>

        </h2>   

    </div>


    <!-- Formulaire de contact / Envoi Mail  -->

    <div class="container">

        <form action="./?page_id=352" method="post">

            Prénom(s)       <input type="text" name="first_name"><br>
            Nom(s)          <input type="text" name="last_name"><br>
            Email           <input type="text" name="email"><br>
            Message        
                            <br>
                            <textarea rows="5" name="message" cols="30"></textarea>
                            <br>

                            <input class="button-submit" type="submit" name="submit" value="Submit">
        </form>

    </div>





</div>










            <!--<div style="">
	            <div style="" class="container"> -->
                    <?php // echo do_shortcode( '[contact-form-7 id="196" title="Formulaire de contact 1"]' ); ?>
                <!-- </div>
            </div>

        </h2>

    </div>

</div>









<section style="height : 50vh;">

</section>



<?php get_footer(); ?>